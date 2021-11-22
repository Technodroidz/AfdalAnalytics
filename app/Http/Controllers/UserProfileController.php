<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //

    public function updateUserProfile(Request $request){
        $input = $request->all();
        print_r($input);die;
    }

    public function createNewTicket(Request $request){
        $input = $request->all();
        print_r($input);
    }
}
