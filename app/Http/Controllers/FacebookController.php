<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Socialite;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;
use Session;


class FacebookController extends Controller
{
    //
    public function facebookLogin(Request $request)
    {
        $parameters = ['access_type' => 'offline'];
        return Socialite::driver('facebook')->with($parameters)->redirect();
    }

    public function facebookCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();
        
        $user_object = $user->user;
        $insert_array = [
            'user_id'          => Auth::User()->id,
            'token'            => $user->token,
            'refresh_token'    => $user->refreshToken,
            'expires_in'       => $user->expiresIn,
            'facebook_id'      => $user->id,
            'name'             => $user->name,
            'email'            => $user->email,
            'avatar'           => $user->avatar,
            // 'gender'           => $user_object['gender']
        ];
        print_r($insert_array);die;
       
    }
}
