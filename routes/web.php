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

Route::group(['prefix' => LaravelLocalization::setLocale(),

'middleware' => ['localeSessionRedirect','localizationRedirect','localeViewPath']] ,  function()

{

Auth::routes();
Route::get('/' , function(){
	$active=1;
  return view('home',compact('active'));
});



			     // page Route
          Route::prefix('page')->group(function(){

            Route::get('/home', 'Manage\pageController@home')->name('page.home');
            Route::get('/contactus', 'Manage\pageController@contact')->name('page.contact');
            Route::get('/products', 'Manage\pageController@products')->name('page.products');
            Route::get('/aboutus', 'Manage\pageController@aboutus')->name('page.about');


          });


});
Route::get('/admin' , function(){
  return view('loginform');
});

Route::post('/contactform', 'Manage\contactController@contact')->name('contact.contact');

