<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function index(Request $request){
        return view('home');
    }

    public function signin(Request $request){
        return view('signin');
    }

    public function signup(Request $request){
        return view('signup');
    }

    public function forgotpass(Request $request){
        return view('forgotpass');
    }

    public function product(Request $request){
        return view('product');
    }

    public function privacypolicy(Request $request){
        return view('privacypolicy');
    }

    public function termcondition(Request $request){
        return view('termcondition');
    }
}
