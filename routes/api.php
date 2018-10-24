<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/users',function(){
//     $faker = Faker\Factory::create();

//     $limit = 10;

//     for ($i = 0; $i < $limit; $i++) {
//        echo  $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
//     }
// });

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


Route::group([
    'middleware' => 'auth:api'
  ], function() {
      Route::post('logout', 'API\UserController@logout');
      Route::post('details', 'API\UserController@details');
  });

