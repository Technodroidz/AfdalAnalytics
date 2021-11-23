<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

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
        return view('tenant/help');
    }

    public function settings(Request $request){
        return view('tenant/settings');
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
