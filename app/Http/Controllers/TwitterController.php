<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Twitter;
use Symfony\Component\HttpFoundation\File\File;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
    */
    protected $redirectTo = '/home';

    /**
     * Call the view
    */
    public function index()
    {
        return view('tenant/login');
    }

    public function userTwitterDetails(Request $request){
        $access_token = Session::get('token');
        $access_token_secret = Session::get('tokensecret');
        $apikey = 'ZcBsNRYjXQskH5RR735rSELJG';
        $apisecret = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
        $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
        $content = $connection->get("account/verify_credentials");
        //print_r($content);die;
        return view('tenant/twitter_user_details', compact('content'));
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
    */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        //print_r($user);die;
        session()->put('token',$user->token);
        session()->put('tokensecret',$user->tokenSecret);
        session()->put('twitter_id',$user->id);
        session()->put('name',$user->name);
        session()->put('nickname',$user->nickname);
        session()->put('avatar',$user->avatar);
        return redirect($this->redirectTo);
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
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }


    public function userTweets(Request $request,$id)
{
    //print_r($id);die;
    //print_r(Session::get('nickname'));die;
    $access_token = Session::get('token');
    $access_token_secret = Session::get('tokensecret');
    $apikey = 'ZcBsNRYjXQskH5RR735rSELJG';
    $apisecret = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
    $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
    $content = $connection->get("account/verify_credentials");
    $statuses = $connection->get("statuses/user_timeline", ["count" => 25, "exclude_replies" => false]);
    print_r($statuses);die;
    $data = Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
    print_r($data);die;

}

  public function following(Request $request){
    $twitter_id = Session::get('twitter_id');
    print_r($twitter_id);die;
  }
}
