<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Socialite;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;
use Session;
use Twitter;
use Cookie;
use Symfony\Component\HttpFoundation\File\File;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
    */
   // protected $redirectTo = '/home';

    /**
     * Call the view
    */
    public function index()
    {
        return view('tenant/login');
    }
    
    public function twitterperformance(Request $request){
        
       
        $connection = $this->getToken(); 
        $content = $connection->get("account/verify_credentials");
        $twitter_user_id = session()->get('twitter_id');
       // print_r($content);die;
        $webhook_id = $this->accountActivity();
        $contents = $this->subscriptionList();
        
         $followerdetails = $this->userTwitterFollowerDetails($twitter_user_id);
         $followerslist = json_decode($followerdetails);
       
         $totalfollowers = $followerslist->meta->result_count;
      // print_r($followerslist);die;
        
        $tweetsdetails = $this->fetchUserTotalTweets($twitter_user_id);
        $tweetslist = json_decode($tweetsdetails);
        $totaltweets = $tweetslist->meta->result_count;
       // print_r($tweetslist->data);die;
    //   foreach($tweetslist->data as $val){
    //       $tweet_id = $val->id;
    //       $data = $this->fetchTweetLikes($tweet_id);
    //       $datas = json_decode($data);
    //       print_r($datas);
    //   }die;
      
      $fetchfavourites = $this->fetchUserLikedTweets($twitter_user_id);
      $favouriteslist = json_decode($fetchfavourites);
      $favourites = $favouriteslist->meta->result_count;
      $engagementdata = $this->getTwitterEngagementData();
     // print_r($favourites);die;
        $details = [
              'totalfollowers' => $totalfollowers,
              'totaltweets' => $totaltweets,
              'favourites' => $favourites
              
              
            ];
          //  print_r($details);die;
        return view('tenant/twitterperformance', compact('details'));
    }
    
    
    private function getToken(){
       // $access_token = '1437634956319248387-sYJywAjIcR9YZwkkiKgJOyCIGauSYZ';
         $access_token = session()->get('token');
         //$access_token_secret = 'HPIH1c0ykSGEYb3tcbgMVXtqBworl7wLCj9QNHyaGxfDs';
         $access_token_secret = session()->get('tokensecret');
         // print_r($access_token_secret);die;
         $apikey = 'ZcBsNRYjXQskH5RR735rSELJG';
         $apisecret = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
         $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
         return $connection;
    }
    
    private function getTwitterEngagementData(){
         $headers = [
            'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAGEPTwEAAAAAS5I8ra7dySg%2BHw18WEd0ioWR7Ag%3DCH0yRcezKF4CruWJXv0BQx4YlS5LF5DCFIHS9uJYnnc0BJ9pW6',
            'accept-encoding: gzip',
            'content-type: application/json',
           ];
           $url = 'https://data-api.twitter.com/insights/engagement/totals';
          // print_r($url);die;
          
            $arrayToSend = [
                "tweet_ids" => [
                    "1308294977814814720"
                ],
                "engagement_types" => [
                    "favorites","retweets","replies","quote_tweets","video_views"
                ],
            ];
         $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_HTTPHEADER => $headers,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_POSTFIELDS => json_encode($arrayToSend),
         // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }
    
    private function subscriptionList(){
        
         $apikey = 'ZcBsNRYjXQskH5RR735rSELJG';
         $apisecret = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
        $connection = new TwitterOAuth($apikey, $apisecret);

        $request_token = $connection->oauth2('oauth2/token', ['grant_type' => 'client_credentials']);
        $connection = new TwitterOAuth($apikey, $apisecret, $request_token->access_token);
        $content = $connection->get("account_activity/all/development/subscriptions/list");

       return $content;
    }

    public function userTwitterDetails(Request $request){
       
        $connection = $this->getToken(); 
      //  $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
        $content = $connection->get("account/verify_credentials");
       // print_r($content);die;
        return view('tenant/twitter_user_details', compact('content'));
    }
    
    private function userTwitterFollowerDetails($twitter_user_id){
         $headers = [
            'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAGEPTwEAAAAAS5I8ra7dySg%2BHw18WEd0ioWR7Ag%3DCH0yRcezKF4CruWJXv0BQx4YlS5LF5DCFIHS9uJYnnc0BJ9pW6',
           ];
           $url = 'https://api.twitter.com/2/users/'.$twitter_user_id.'/followers';
          // print_r($url);die;
         $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_HTTPHEADER => $headers,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
         // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
        
    }
    
    
     private function fetchUserTotalTweets($twitter_user_id){
          $headers = [
            'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAGEPTwEAAAAAS5I8ra7dySg%2BHw18WEd0ioWR7Ag%3DCH0yRcezKF4CruWJXv0BQx4YlS5LF5DCFIHS9uJYnnc0BJ9pW6',
           ];
           $url = 'https://api.twitter.com/2/users/'.$twitter_user_id.'/tweets';
        $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_HTTPHEADER => $headers,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
             // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            return $response;
    }
    
    private function fetchTweetLikes($tweet_id){
       $headers = [
            'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAGEPTwEAAAAAS5I8ra7dySg%2BHw18WEd0ioWR7Ag%3DCH0yRcezKF4CruWJXv0BQx4YlS5LF5DCFIHS9uJYnnc0BJ9pW6',
           ];
           $url = 'https://api.twitter.com/2/tweets/'.$tweet_id.'/liking_users';  
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_HTTPHEADER => $headers,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
             // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            return $response;
    }
    
    private function fetchUserLikedTweets($twitter_user_id){
       $headers = [
            'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAGEPTwEAAAAAS5I8ra7dySg%2BHw18WEd0ioWR7Ag%3DCH0yRcezKF4CruWJXv0BQx4YlS5LF5DCFIHS9uJYnnc0BJ9pW6',
           ];
           $url = 'https://api.twitter.com/2/users/'.$twitter_user_id.'/liked_tweets';  
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_HTTPHEADER => $headers,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
             // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            return $response;  
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
    */
    public function redirectToProvider(Request $request,$provider)
    {
       // return Socialite::driver($provider)->redirect();
        return Socialite::driver('twitter')->redirect();
            
    //      $apikey = 'ZcBsNRYjXQskH5RR735rSELJG';
    //     $apisecret = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
    //     $twitteroauth = new TwitterOAuth($apikey, $apisecret);
        
    //     // request token of application
    //     $request_token = $twitteroauth->oauth(
    //         'oauth/request_token', [
    //             'oauth_callback' => 'https://afdalanalytics.com/AfdalAnalytics/twitter/callback'
    //         ]
    //     );
        
        
        
    //   //  print_r($twitteroauth->getLastHttpCode());die; 
    //     $oauth_token_secret = $request_token['oauth_token_secret'];
    //     $oauth_token = $request_token['oauth_token'];
    //     // throw exception if something gone wrong
    //     if($twitteroauth->getLastHttpCode() != 200) {
    //       print_r("Redirect screen to connector for connecting twiiter handler");die;
    //     }
         
    //     // save token of application to session
    //       $request->session()->put('tokensecret', $oauth_token_secret);
    //       $request->session()->put('token', $oauth_token);
          
         
    //     // generate the URL to make request to authorize our application
    //     $url = $twitteroauth->url(
    //         'oauth/authorize', [
    //             'oauth_token' => $oauth_token
    //         ]
    //     );
        
    //   // print_r($url);die;
         
    //      return redirect()->to($url);
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        //$provider = 'twitter';
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
       // print_r($user);die;
        session()->put('token',$user->token);
        session()->put('tokensecret',$user->tokenSecret);
        session()->put('twitter_id',$user->id);
        session()->put('name',$user->name);
        session()->put('nickname',$user->nickname);
        session()->put('avatar',$user->avatar);
        //return redirect($this->redirectTo);
        $company = session()->get('company');
        return redirect()->route('tenant.home', ['subdomain' => $company]);
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
    $connection = $this->getToken(); 
   // $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
    $content = $connection->get("account/verify_credentials");
    $statuses = $connection->get("statuses/user_timeline", ["count" => 25, "exclude_replies" => false]);
    print_r($statuses);die;
    $data = Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
    print_r($data);die;

}

  public function accountActivity(){
    $twitter_id = Session::get('twitter_id');
     $access_token = '1437634956319248387-sYJywAjIcR9YZwkkiKgJOyCIGauSYZ';
    $access_token_secret = 'HPIH1c0ykSGEYb3tcbgMVXtqBworl7wLCj9QNHyaGxfDs';
    $apikey = 'ZcBsNRYjXQskH5RR735rSELJG';
    $apisecret = 'BZnhpxPikQMUqoEJmZGeXPrEcYbpUgYbCa1PfONXEnmWfacnuH';
    $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
    $res = $this->getWebhookStatus($apikey,$apisecret);
   // print_r($res->subscriptions[0]->user_id); echo '<pre>';
    if(!empty($res->subscriptions[0]->user_id)){
        return $twitter_user_id = $res->subscriptions[0]->user_id;
    }else{
      $result = $this->RegisterWebhook($apikey, $apisecret, $access_token, $access_token_secret);
    $content = $connection->post("account_activity/all/development/subscriptions");   //Subscribe User to Webhook
    // return $twitter_user_id = $content->subscriptions[0]->user_id;
    return $content;
    }
  }
  
   private function RegisterWebhook($apikey, $apisecret, $access_token, $access_token_secret){
    
    $connection = new TwitterOAuth($apikey, $apisecret, $access_token, $access_token_secret);
    $url = "https://afdalanalytics.local/twitterwebhook";
    $content = $connection->post("account_activity/all/development/webhooks", ["url" => $url]);
    return $content;
   }
   
   private function getWebhookStatus($apikey,$apisecret){
       
        $connection = new TwitterOAuth($apikey, $apisecret);

        $request_token = $connection->oauth2('oauth2/token', ['grant_type' => 'client_credentials']);
        $connection = new TwitterOAuth($apikey, $apisecret, $request_token->access_token);
        $content = $connection->get("account_activity/all/development/subscriptions/list");
       return $content;
   }
  
     
  
}
