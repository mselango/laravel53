<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/updaterole',function(){
$role = \App\Role::where('name', '=', 'admin')->first();
$createPost = \App\Permission::where('name', 'create-post')->first();
$role->attachPermission($createPost);

});

Route::group(['prefix' => 'admin', 'middleware' => ['checkadmin:admin']], function() {
    Route::get('/', 'Admin\AdminController@welcome');
    Route::get('/users', 'Admin\UserController@index');
});

Route::get('/posts','UserController@showPosts');

Route::get('send-emails','EmailController@SendEmail');


Route::get('/subscribe', ['as'=>'subscribe','uses'=>'SubscriptionController@index']);
Route::post('subscribe-process', ['as'=>'subscribe-process','uses'=>'SubscriptionController@process']);
Route::get('/cancel', ['as'=>'cancel','uses'=>'SubscriptionController@cancel']);
Route::get('/subscribe/send-email', ['as'=>'sub-send-email','uses'=>'SubscriptionController@send']);
Route::get('/customer', 'CustomerController@getCustomer');