<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Socialite;
use Twitter;
use Abraham\TwitterOAuth\TwitterOAuth;
use Symfony\Component\HttpFoundation\File\File;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\knowledgeBase;
use App\Models\Support;
use App\Models\UserSubscription;
use App\Models\TenantUser;

class UserProfileController extends Controller
{
    //

    public function updateUserProfile(Request $request){
        $data = [];
        if($request->isMethod('post')){
            $validation_array = [
                'first_name'     => 'required',
                'last_name'      => 'required',
            ];

            $validation_attributes = [
                'first_name'     => 'First name',
                'last_name'      => 'Last name',
            ];

            $validator = Validator::make($request->all(), $validation_array,[],$validation_attributes);
            $validation_message   = get_message_from_validator_object($validator->errors());

            if($validator->fails()){
                return back()->with('error', $validation_message);       
            }else{
                $data = [
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'country' => $request->country,
                    'city' => $request->city,
                    'street_address' => $request->street_address,
                    'postal_code' => $request->postal_code,
                    'phone_number' => $request->phone_number,
                    'timezone' => $request->timezone,
                    'website_url' => $request->website_url
                ];
                $email = $request->email;
                $database = session()->get('database');
                $company = session()->get('company');
                $conn = makeDBConnection($database);
                $userdetails = TenantUser::where('email', $email)->update($data);
                return redirect()->route('tenant.settings', ['subdomain' => $company]);
            } 
        }       
    }

    public function submitTicket(Request $request){
        $data = [];
        if($request->isMethod('post')){
            $validation_array = [
                'title'     => 'required',
                'department'      => 'required',
                'description'      => 'required',
               // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];

            $validation_attributes = [
                'title'     => 'Subject',
                'department'      => 'Department',
                'description'      => 'Message',
               // 'image' => 'Attachment',
            ];

            $validator = Validator::make($request->all(), $validation_array,[],$validation_attributes);
            $validation_message   = get_message_from_validator_object($validator->errors());

            if($validator->fails()){
                return back()->with('error', $validation_message);       
            }else{
                if ($request->hasFile('image')) {
                    $imageDe = public_path('images/knowlage-images');
                    $image = time().'.'.$request->image->getClientOriginalExtension();
                    $request->image->move($imageDe, $image); 
                    $imageName=$image;
                  }else{
                      $imageName = 'No Image';
                  }
                  $email = session()->get('email');
                $data = [
                    'user_id' => $email,
                    'title' => $request->title,
                    'file' => $imageName,
                    'department' => $request->department,
                    'desciption' => $request->description,
                    'status' => '1'
                ];

                $res = Support::create($data);
                $company = session()->get('company');
                return redirect()->route('tenant.help', ['subdomain' => $company])->with('success', 'Ticket created successfully.');
            }
        }        
       
    }

    public function ticketDetail(Request $request,$id){
        $r = $_SERVER['REQUEST_URI']; 
        $r = explode('/', $r);
        //print_r($r[2]);die;
        $ticketdetails = Support::where('id',$r[2])->first();
        return view('tenant.ticketdetails',compact('ticketdetails'));
    }


}
