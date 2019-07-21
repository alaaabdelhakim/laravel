<?php

Route::post('/admin/login','Manage\MainController@login')->name('admin.login');


Route::group(['middleware' => 'roles' , 'roles' => 'Admin'], function () {

Route::get('/logout/logout','Manage\MainController@logout')->name('user.logout');


	Route::get('/home', 'Manage\MainController@index')->name('admin.dashboard');


       // Profile Route
      Route::prefix('profile')->group(function(){

  Route::get('/index', 'Manage\profileController@index')->name('profile.index');
  Route::get('/getInfo/{user_id}', 'Manage\profileController@getInfo')->name('profile.getInfo');
  Route::post('/index', 'Manage\profileController@update')->name('profile.update');


        });




              // slider Route

            Route::prefix('slider')->group(function(){



            Route::get('/index', 'Manage\sliderController@index')->name('slider.index');

            Route::get('/allData', 'Manage\sliderController@allData')->name('slider.allData');

            Route::post('/store', 'Manage\sliderController@store')->name('slider.store');

            Route::get('/edit/{id}', 'Manage\sliderController@edit')->name('slider.edit');

            Route::post('/update', 'Manage\sliderController@update')->name('slider.update');

            Route::get('/destroy/{id}', 'Manage\sliderController@destroy')->name('slider.destroy');

        

          });

              // contact Route

            Route::prefix('contact')->group(function(){


            Route::get('/index', 'Manage\contactController@index')->name('contact.index');

            Route::post('/store', 'Manage\contactController@store')->name('contact.store');

            Route::get('/allData', 'Manage\contactController@allData')->name('contact.allData');

            Route::get('/show/{id}', 'Manage\contactController@show')->name('contact.show');

            Route::delete('/destroy/{id}', 'Manage\contactController@destroy')->name('contact.destroy');

        

          });

                      // products Route

            Route::prefix('products')->group(function(){


            Route::get('/index', 'Manage\productsController@index')->name('products.index');

            Route::post('/store', 'Manage\productsController@store')->name('products.store');

            Route::post('/update', 'Manage\productsController@update')->name('products.update');

            Route::get('/allData', 'Manage\productsController@allData')->name('products.allData');

            Route::get('/edit/{id}', 'Manage\productsController@edit')->name('products.edit');

            Route::get('/destroy/{id}', 'Manage\productsController@destroy')->name('products.destroy');

          });


                      // about Route

            Route::prefix('about')->group(function(){


            Route::get('/index', 'Manage\aboutController@index')->name('about.index');

            Route::post('/store', 'Manage\aboutController@store')->name('about.store');

            Route::post('/update', 'Manage\aboutController@update')->name('about.update');

            Route::get('/edit/{id}', 'Manage\aboutController@edit')->name('about.edit');

            Route::get('/destroy/{id}', 'Manage\aboutController@destroy')->name('about.destroy');

          });

            // social Route

            Route::prefix('social')->group(function(){


            Route::get('/index', 'Manage\socialController@index')->name('social.index');

            Route::post('/store', 'Manage\socialController@store')->name('social.store');

            Route::post('/update', 'Manage\socialController@update')->name('social.update');

            Route::get('/edit/{id}', 'Manage\socialController@edit')->name('social.edit');

            Route::get('/destroy/{id}', 'Manage\socialController@destroy')->name('social.destroy');

          });


});