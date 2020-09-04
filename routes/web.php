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
Route::get('/payment-webhook', 'PaymentController@webhook')->name('payment.webhook');

//for payment through blockchain
Route::get('/payment-blockchain', 'PaymentController@block')->name('payment.blockchain');    

//route for users
Route::get('/account', 'UsersController@index')->name('user.index'); 
Route::post('/user-update', 'UsersController@update')->name('user.update');  

//route for payout
Route::get('/my-payout', 'UsersController@create')->name('user.payout');  
Route::post('/user-payout-store', 'UsersController@payoutStore')->name('user.payout.store');   
Route::post('/user-payout-update', 'UsersController@payoutUpdate')->name('user.payout.update');   

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
