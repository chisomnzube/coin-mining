<?php

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

Route::get('/', 'LandingpageController@index')->name('landingpage');

Route::get('/about-us', function() {
    return view('about');
})->name('about');

Route::get('/investment', function() {
    return view('investment');
})->name('investment');

Route::get('/contact-us', function() {
    return view('contact');
})->name('contact');

Route::get('/licence', function() {
    return view('licence');
})->name('licence');

Route::get('/terms-and-condition', function() {
    return view('tandc');
})->name('tandc');

Route::get('/FAQ', function() {
    return view('faq');
})->name('faq');

Route::post('/store-contact', 'LandingpageController@store')->name('store.contact');

//route for blog
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/{post}/single', 'BlogController@show')->name('blog.show');
Route::get('/search', 'BlogController@searchBlog')->name('blog.search');



//route for authenticted functions
Route::middleware('auth')->group(function () { 

//routes for payments
Route::post('/payment', 'PaymentController@index')->name('payment.index');
Route::post('/payment-process', 'PaymentController@create')->name('payment.process');
Route::post('/payment-store', 'PaymentController@store')->name('payment.store');
Route::get('/payment-confirmation', 'PaymentController@confirmation')->name('payment.confirmation');   

//route for users
Route::get('/account', 'UsersController@index')->name('user.index'); 
Route::post('/user-update', 'UsersController@update')->name('user.update');  

//route for payout
Route::get('/my-payout', 'UsersController@create')->name('user.payout');  
Route::post('/user-payout-store', 'UsersController@payoutStore')->name('user.payout.store');   
Route::post('/user-payout-update', 'UsersController@payoutUpdate')->name('user.payout.update'); 

//route for referral
Route::get('/my-referral', 'UsersController@referral')->name('user.referral');  
Route::get('/cashout', 'UsersController@cashout')->name('user.cashout');

//route for wallet
Route::get('/my-wallet-addresses', 'UsersController@walletindex')->name('user.wallet');
Route::post('/store-my-wallet', 'UsersController@walletStore')->name('user.wallet.store');
Route::post('/update-my-wallet', 'UsersController@walletUpdate')->name('user.wallet.update');

//my transactions
Route::get('/my-transactions', 'UsersController@transaction')->name('user.transaction');
Route::get('/transactions-admin', 'LandingpageController@transaction')->name('admin.transaction');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
