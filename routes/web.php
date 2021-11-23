<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend routes
Route::get('/home',[WebsiteController::class, 'index'])->name('home');
Route::get('/signin',[WebsiteController::class, 'signin'])->name('signin');
Route::get('/signup',[WebsiteController::class, 'signup'])->name('signup');
Route::get('/forgotpass',[WebsiteController::class, 'forgotpass'])->name('forgotpass');
Route::get('/product',[WebsiteController::class, 'product'])->name('product');
Route::get('/term-condition',[WebsiteController::class, 'termcondition'])->name('termcondition');
Route::get('/privacypolicy',[WebsiteController::class, 'privacypolicy'])->name('privacypolicy');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/signup-2',[LoginController::class, 'signup3'])->name('signup-2');
Route::get('/signup-3',[LoginController::class, 'signup4'])->name('signup-3');
Route::get('/signup-4',[LoginController::class, 'signup5'])->name('signup-4');
Route::get('/tenantredirect',[LoginController::class, 'tenantRedirect']);

//admin routes
Route::get('/admin',[SuperAdminController::class, 'signIn']);
Route::get('/sign-in',[SuperAdminController::class, 'signIn'])->name('sign-in');
Route::post('/loging-in',[SuperAdminController::class, 'login'])->name('loging-in');
Route::get('/dashboard',[SuperAdminController::class, 'index'])->name('dashboard');
Route::get('/forgot-password',[SuperAdminController::class, 'forgotpassword'])->name('forgotpassword');
Route::get('/user-management',[SuperAdminController::class, 'usermanagement'])->name('usermanagement');
Route::get('/billing',[SuperAdminController::class, 'billing'])->name('billing');
Route::get('/customer-support',[SuperAdminController::class, 'customersupport'])->name('customersupport');
Route::get('/customer-message/{id}',[SuperAdminController::class, 'customermessage'])->name('customermessage');
Route::get('/subscription',[SuperAdminController::class, 'subscription'])->name('subscription');
Route::get('/create-subscription',[SuperAdminController::class, 'createsubscription'])->name('createsubscription');
Route::get('/edit-subscription/{id}',[SuperAdminController::class, 'editsubscription']);
Route::get('/newsfeed',[SuperAdminController::class, 'newsfeed'])->name('newsfeed');
Route::get('/create-newsfeed',[SuperAdminController::class, 'createnewsfeed'])->name('createnewsfeed');
Route::get('/edit-newsfeed/{id}',[SuperAdminController::class, 'editnewsfeed'])->name('editnewsfeed');
Route::get('/profile',[SuperAdminController::class, 'profile'])->name('profile');
Route::get('/payment-gateway',[SuperAdminController::class, 'payment'])->name('payment');
Route::get('/smtp-setting',[SuperAdminController::class, 'smtpsetting'])->name('smtpsetting');
Route::get('/website-setting',[SuperAdminController::class, 'websitesetting'])->name('websitesetting');
Route::get('/email-template',[SuperAdminController::class, 'emailtemplate'])->name('emailtemplate');
Route::get('/edit-email-template',[SuperAdminController::class, 'editemailtemplate'])->name('editemailtemplate');
Route::get('/pages',[SuperAdminController::class, 'pages'])->name('pages');
Route::get('/edit-pages',[SuperAdminController::class, 'editpages'])->name('editpages');
Route::post('/add-subscription-plan',[SuperAdminController::class, 'addSubscriptionPlan'])->name('add-subscription-plan');
Route::post('/update-subscription-plan',[SuperAdminController::class, 'updateSubscriptionPlan'])->name('update-subscription-plan');
Route::post('/change-password',[SuperAdminController::class, 'changePassword'])->name('change-password');
Route::post('/update-profile',[SuperAdminController::class, 'updateProfile'])->name('update-profile');
Route::post('/save-smtp-setting',[SuperAdminController::class, 'saveSmtpSetting'])->name('save-smtp-setting');
Route::post('/save-payment-gateway-setting',[SuperAdminController::class, 'savePaymentGatewaySetting'])->name('save-payment-gateway-setting');
Route::post('/add-website-settings',[SuperAdminController::class, 'addWebsiteSettings'])->name('add-website-settings');
Route::get('/otp-verification/{id}',[SuperAdminController::class, 'otpVerification']);
Route::get('/delete-subscription/{id}',[SuperAdminController::class, 'deleteSubscription']);
Route::post('/verify-otp',[SuperAdminController::class, 'verifyOtp']);
Route::get('/currency-converter',[SuperAdminController::class, 'currencyConverter'])->name('currency-converter');
Route::post('/currency-rate',[SuperAdminController::class, 'currencyRate']);
Route::post('/add-newsfeeds',[SuperAdminController::class, 'addNewsFeeds']);
Route::post('/update-newsfeeds',[SuperAdminController::class, 'updateNewsFeeds']);
Route::post('/customer-support-reply',[SuperAdminController::class, 'customerSupportReply']);
Route::post('/customer-support-resolved',[SuperAdminController::class, 'customerSupportResolved']);
Route::get('/knowledge_base',[SuperAdminController::class, 'knowledgebase']);
Route::get('/add-knowledge_base',[SuperAdminController::class, 'addknowledgebase']);
Route::post('/submit-knowlegebase',[SuperAdminController::class, 'submitknowledgebase']);
Route::get('/edit-knowledge_base/{id}',[SuperAdminController::class, 'editknowledgebase']);
Route::get('/delete-knowledge_base/{id}',[SuperAdminController::class, 'deleteknowledgebase']);
Route::get('logout-admin', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/sign-in');
})->name('logout-admin');

//tenant routes
Route::group(
    [
        'domain' => '{subdomain}.' . 'afdalanalytics.local',
        'middleware' => 'tenant.domain',
        'as' => 'tenant.'
    ], function () {
Route::get('login', [TwitterController::class,'index']);
Route::get('login/{provider}', [TwitterController::class,'redirectToProvider']);
Route::get('{provider}/callback', [TwitterController::class,'handleProviderCallback']);
Route::get('/home', [TwitterController::class,'userTwitterDetails']);
Route::get('/usertweets/{id}', [TwitterController::class,'userTweets']);
Route::get('/following', [TwitterController::class,'following']);
Route::get('/userhome',[TenantController::class, 'userhome'])->name('userhome');
Route::get('/upgradeplan',[TenantController::class, 'upgradeplan'])->name('upgradeplan');
Route::get('/userreview',[TenantController::class, 'userreview'])->name('userreview');
Route::get('/user-dashboard',[TenantController::class, 'dashboard'])->name('user-dashboard');
Route::get('/dashboard2',[TenantController::class, 'dashboard2'])->name('dashboard2');
Route::get('/connections',[TenantController::class, 'connections'])->name('connections');
Route::get('/help',[TenantController::class, 'help'])->name('help');
Route::get('/settings',[TenantController::class, 'settings'])->name('settings');
Route::get('/template',[TenantController::class, 'template'])->name('template');
Route::get('/resource',[TenantController::class, 'resource'])->name('resource');
Route::get('/resource2',[TenantController::class, 'resource2'])->name('resource2');
Route::get('/contactus',[TenantController::class, 'contactus'])->name('contactus');
Route::get('/pricing',[TenantController::class, 'pricing'])->name('pricing');
Route::get('/twitterperformance',[TenantController::class, 'twitterperformance'])->name('twitterperformance');
Route::get('/googleplaystore',[TenantController::class, 'googleplaystore'])->name('googleplaystore');
Route::get('/instagraminsight',[TenantController::class, 'instagraminsight'])->name('instagraminsight');
Route::post('/updateprofile', [UserProfileController::class, 'updateUserProfile']);
// Route::post('/createnewticket', [UserProfileController::class, 'createNewTicket']);

}
);