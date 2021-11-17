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
                'terms'         => 'required'
            ];

            $validation_attributes = [
                'first_name'    => 'First Name',
                //'last_name'     => 'Last Name',
                'email'         => 'Email',
                'password'      => 'Password',
                'company'       => 'Company',
                'terms'         => 'Afdal Analytics Terms'
            ];

            $validator = Validator::make($request->all(), $validation_array,[],$validation_attributes);
            $validation_message   = $this->get_message_from_validator_object($validator->errors());
            
            if($validator->fails()){
                return back()->with('error', $validation_message);
            }else{

                $long_token     = $this->generateStringLogToken();
                $short_token    = $this->generateStringSortToken();

                $data = [
                    'first_name'      => $request->first_name,
                    'last_name'   => $request->last_name,
                    'email'       => $request->email,
                    'password'    => bcrypt($request->password),
                    'company'     => $request->company,
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
                        'created_at'    => date('Y-m-d H:i:s'),
                    ];

                    UserSubscription::insert($insert_array);
                    return Redirect::to('http://localhost/AfdalAnalyticsCRM/userhome');
                    // code for routing to tenant dashboard here

                }else{
                    return back()->with('error', 'Invalid Login Credentials.');       
                }
            }    
        }    
    }

    public function get_message_from_validator_object($validator_object)
    {
        $array = json_decode(json_encode($validator_object),1);
        $message = '';
        $message_array = [];
        $i = 0;
        foreach ($array as $key => $value) {
            foreach ($value as $k => $val) {
                if(!in_array($val,$message_array)){
                    $message_array[] = $val;
                    $tilde    = $i == 0 ? '':" ";
                    $message .= $tilde.$val;
                    $i++;
                }
            }
        }
        return $message;
    }

    public function generateStringLogToken()
    {
        $number =(Str::random(15));
        return $number.mt_rand(10000, 99999);
    }

    public function generateStringSortToken()
    {
        $var = Str::random(5);
        return $var;
    }
    

}
