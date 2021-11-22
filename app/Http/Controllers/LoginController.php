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
                        'created_at'    => date('Y-m-d H:i:s'),
                    ];
                    $request->session()->put('company',$request->company);
                    $request->session()->put('long_token',$request->long_token);
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
    

}
