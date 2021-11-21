<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;

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
Route::get('/signup-2',[LoginController::class, 'signup3'])->name('signup-2');
Route::get('/signup-3',[LoginController::class, 'signup4'])->name('signup-3');
Route::get('/signup-4',[LoginController::class, 'signup5'])->name('signup-4');


//admin routes
Route::get('/admin',[SuperAdminController::class, 'signin']);
Route::get('/signin',[SuperAdminController::class, 'signin'])->name('signin');
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
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/signin');
})->name('logout');