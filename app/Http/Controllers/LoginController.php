<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\MultiTenantModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\TenantsMigrateCommand;
use App\Models\User;
use App\Models\Tenant;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use Illuminate\Support\Facades\DB;
use Redirect;
use Socialite;
use Twitter;
use Cookie;
use Abraham\TwitterOAuth\TwitterOAuth;
use Symfony\Component\HttpFoundation\File\File;

class LoginController extends Controller
{
    //

    public function register(Request $request){
        
        $data = [];
        if($request->isMethod('post')){
            $validation_array = [
                'first_name'    => 'required',
                //'last_name'     => 'required',
                'email'         => 'required|email|unique:users',
                'password'      => 'required|min:6',
                'company'       => 'required',
                'working_as'    => 'required',
                'terms'         => 'required'
            ];

            $validation_attributes = [
                'first_name'    => 'First Name',
                //'last_name'     => 'Last Name',
                'email'         => 'Email',
                'password'      => 'Password',
                'company'       => 'Company',
                'working_as'    => 'Working As',
                'terms'         => 'Afdal Analytics Terms'
            ];

            $validator = Validator::make($request->all(), $validation_array,[],$validation_attributes);
            $validation_message   = get_message_from_validator_object($validator->errors());
            
            if($validator->fails()){
                return back()->with('error', $validation_message);
            }else{

                $long_token     = generateStringLogToken();
                $short_token    = generateStringSortToken();

                $data = [
                    'first_name'      => $request->first_name,
                    'last_name'   => $request->last_name,
                    'email'       => $request->email,
                    'password'    => bcrypt($request->password),
                    'company'     => $request->company,
                    'role'        => $request->working_as,
                    'short_token' => $short_token,
                    'long_token'  => $long_token,
                ];
            
                $user_id        = User::insertGetId($data);
                $credentials    = $request->only('email', 'password');
              
                $userName = 'tenant_user_database_'.$user_id;  // Your Database name to be created

                DB::statement("CREATE DATABASE $userName");

                $conn = mysqli_connect('127.0.0.1', 'root', '' , $userName);
                $query = '';
                // print_r($conn);die;
                $sqlScript = public_path('db/dummy.sql');
    
                $sqlScript = file($sqlScript);
               
                foreach ($sqlScript as $line){
                    
                    $startWith = substr(trim($line), 0 ,2);
                    $endWith = substr(trim($line), -1 ,1);
                    
                    if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                        continue;
                    }

                    $query = $query . $line;
                    if ($endWith == ';') {
                        mysqli_query($conn,$query);
                        $query= '';
                    }
                }

                User::where('id',$user_id)->update(['database_name' => $userName]);

                $tenant = Tenant::find($user_id);
                if(!empty($tenant->database_name)){
                    $tenant->configure();
                    $tenant->use();
                    // print_r($tenant);die;
                    $options = ['--force' => true,'--path'=>'/database/migrations/tenant_migrations','--database'=> 'tenant'];

                    Artisan::call(
                        'migrate',
                        $options
                    );
                  
                }
                if(Auth::attempt($credentials)){
                    $where = ['package_name' => 'Trial'];
                    $trial_plan = SubscriptionPlan::where($where)->first();
                   // dd($trial_plan);die;
                    $insert_array = [
                        'user_id'       => $user_id,
                        'plan_name'     => $trial_plan->package_name,
                        'plan_amount'   => $trial_plan->package_amount,
                        'plan_duration' => $trial_plan->package_duration,
                        'expiry_date'   => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). ' + '.$trial_plan->package_duration.' days')),
                        'is_trial'      => 1,
                        'subscription_status' => 'trial',
                        'created_at'    => date('Y-m-d H:i:s'),
                    ];
                    $request->session()->put('company',$request->company);
                    $request->session()->put('long_token',$long_token);
                    $request->session()->put('short_token',$short_token);
                    UserSubscription::insert($insert_array);
                    return redirect()->route('signup-2');

                }else{
                    return back()->with('error', 'Invalid Login Credentials.');       
                }
            }    
        }    
    }


    public function signup3(Request $request){
        return view('frontend/signup3');
    }
    
     public function signup4(Request $request){
        return view('frontend/signup4');
    }
    
     public function signup5(Request $request){
        return view('frontend/signup5');
    }

    public function tenantRedirect(Request $request){
        $company = session()->get('company');
        return redirect()->route('tenant.userhome', ['subdomain' => $company]);
    }

    public function login(Request $request){
        $data = [];
        if($request->isMethod('post')){
            $validation_array = [
                'email'         => 'required|email',
                'password'      => 'required',
                'terms'         => 'required'
            ];

            $validation_attributes = [
                'email'         => 'Email',
                'password'      => 'Password',
                'terms'         => 'Afdal Analytics Terms'
            ];

            $validator = Validator::make($request->all(), $validation_array,[],$validation_attributes);
            $validation_message   = get_message_from_validator_object($validator->errors());

            if($validator->fails()){
                return back()->with('error', $validation_message);       
            }else{
                $credentials = $request->only('email', 'password');
                if(Auth::attempt($credentials)){
                    $trial_subscription = UserSubscription::getTrialSubscription(Auth::User()->id);
                    $paid_subscription  = UserSubscription::getPaidSubscription(Auth::User()->id);
                    $user_subscribed    = true;
                    $userdetails = User::where('id', Auth::User()->id)->first();

                    if(empty($paid_subscription) && empty($trial_subscription)){
                        $user_subscribed    = false;
                    }else{
                        if(empty($paid_subscription) && !empty($trial_subscription)){
                            
                            $expire = strtotime($trial_subscription->expiry_date);
                            $today  = strtotime("today midnight");

                            if($today >= $expire){
                                $user_subscribed  = false;
                            }
                        }
                    }

                    if($user_subscribed == true){
                        session()->put('user_subscribed',true);
                        $request->session()->put('company',$userdetails->company);
                        $request->session()->put('long_token',$userdetails->long_token);
                        $request->session()->put('short_token',$userdetails->short_token);
                        return redirect()->route('tenant.userhome', ['subdomain' => $userdetails->company]);
                    }else{
                        session()->put('user_subscribed',false);
                        $request->session()->put('company',$userdetails->company);
                        $request->session()->put('long_token',$userdetails->long_token);
                        $request->session()->put('short_token',$userdetails->short_token);
                        session()->put('error', '<p>You plan has been expired.<a style="color: blue" href ="'.route('business_setting_upgrade_plan').'" >Subscribe</a> to use our services</p>');
                        return redirect()->route('tenant.upgradeplan', ['subdomain' => $userdetails->company]);
                    }
                }else{
                    return back()->with('error', 'Invalid Login Credentials.');
                }
            }
       } 
    }
    
     /**
     * Obtain the user information from Twitter.
     * Vikash Rai
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {   $provider = "twitter";
        $oauth_token = $_GET['oauth_token'];
         $oauth_verifier = $_GET['oauth_verifier'];
         $tokens = $this->access_token($oauth_token, $oauth_verifier);
        $user = Socialite::driver('twitter')->userFromTokenAndSecret($tokens->oauth_token, $tokens->oauth_token_secret);
        //$user = Socialite::driver($provider)->user();
       //$authUser = $this->findOrCreateUser($user, $provider);
        $authUser = $this->updateUser($user, $provider);
       // Auth::login($authUser, true);
       // print_r($user);die;
           
           $request->session()->put('token', $user->token);
           $request->session()->put('tokensecret', $user->tokenSecret);
           $request->session()->put('twitter_id', $user->id);
           $request->session()->put('twittername', $user->name);
           $request->session()->put('nickname', $user->nickname);
           $request->session()->put('avatar', $user->avatar);
         
        $company = session()->get('company');
        return redirect()->route('tenant.demo', ['subdomain' => $company]);
    }
    
     /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'first_name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }
    
    private function updateUser($user, $provider){
       $company = session()->get('company');
       $email = session()->get('email');
        $authUser = User::where('email', $email)->first(); 
        $data = ['provider' => $provider,'provider_id' => $user->id];
        $where = ['email' => $email];
       $res = User::where($where)->update($data);
       $authUsers = User::where('email', $email)->first(); 
       return $res;
    }
    
    private function access_token($oauth_token, $oauth_verifier)
        {
    
            $config = config('services')['twitter'];
    
            $connection = new TwitterOAuth($config['client_id'], $config['client_secret']); 
    
            $tokens = $connection->oauth("oauth/access_token", ["oauth_verifier" => $oauth_verifier, "oauth_token" => $oauth_token]);
    
            return (object) $tokens;
        }
     
      /**
       * Twitter webhook for account activity api.
       * Vikash Rai
       * @return Response
      */   
         public function twitterWebhook(Request $request){
             // print_r("hello");die;
                $token = $_GET['crc_token'];
                echo $this->get_challenge_response($token);
          }
  
    /**
     * Creates a HMAC SHA-256 hash created from the app TOKEN and
     * your app Consumer Secret.
     * @param  token  the token provided by the incoming GET request
     * @return string
     */
        
       private function get_challenge_response($token) {
           $APP_CONSUMER_SECRET = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
          $hash = hash_hmac('sha256', $token, $APP_CONSUMER_SECRET, true);
          $response = array(
            'response_token' => 'sha256=' . base64_encode($hash)
          );
          return json_encode($response);
        }    


}
