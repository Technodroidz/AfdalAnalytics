<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Socialite;
use Twitter;
use Abraham\TwitterOAuth\TwitterOAuth;
use Symfony\Component\HttpFoundation\File\File;
use Validator;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\knowledgeBase;
use App\Models\Support;
use App\Models\UserSubscription;
use App\Models\TenantUser;

class TenantController extends Controller
{
    //
    public function userhome(Request $request){
        return view('tenant/userhome');
    }

    public function upgradeplan(Request $request){
        $getUserData = User::where('id',Auth::user()->id)->first();
        $trial_subscription = UserSubscription::getTrialSubscription(Auth::User()->id);
        $paid_subscription = UserSubscription::getPaidSubscription(Auth::User()->id);
        $data       = ['getUserData' => $getUserData,'trial_subscription' => $trial_subscription,'paid_subscription' => $paid_subscription];
        return view('tenant/upgradeplan',$data);
    }

    public function userreview(Request $request){
        return view('tenant/userreview');
    }

    public function dashboard(Request $request){
        return view('tenant/dashboard');
    }

    public function dashboard2(Request $request){
        return view('tenant/dashboard2');
    }

    public function connections(Request $request){
        return view('tenant/connections');
    }

    public function help(Request $request){
        $email = session()->get('email');
        $details = knowledgeBase::orderBy('id','desc')->get();
        $ticketdetails = Support::where('user_id',$email)->orderBy('id','desc')->get()->toArray();
        //dd($ticketdetails);die;
        return view('tenant/help', compact('details','ticketdetails'));
    }

    public function settings(Request $request){

        $email = session()->get('email');
        $database = session()->get('database');
        $conn = makeDBConnection($database);
        $userdetails = TenantUser::where('email', $email)->first();
       // print_r($userdetails);die;
        return view('tenant/settings', compact('userdetails'));
    }

    public function template(Request $request){
        return view('tenant/template');
    }

    public function resource(Request $request){
        return view('tenant/resource');
    }

    public function resource2(Request $request){
        return view('tenant/resource2');
    }

    public function contactus(Request $request){
        return view('tenant/contactus');
    }

    public function pricing(Request $request){
        return view('tenant/pricing');
    }

    public function twitterperformance(Request $request){
        return view('tenant/twitterperformance');
    }

    public function googleplaystore(Request $request){
        return view('tenant/googleplaystore');
    }
    

    public function instagraminsight(Request $request){
        return view('tenant/instagraminsight');
    }
}
