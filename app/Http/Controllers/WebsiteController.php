<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function index(Request $request){
        return view('frontend/home');
    }

    public function signin(Request $request){
        return view('frontend/signin');
    }

    public function signup(Request $request){
        return view('frontend/signup');
    }

    public function forgotpass(Request $request){
        return view('frontend/forgotpass');
    }

    public function product(Request $request){
        return view('frontend/product');
    }

    public function privacypolicy(Request $request){
        return view('frontend/privacypolicy');
    }

    public function termcondition(Request $request){
        return view('frontend/termcondition');
    }
}
