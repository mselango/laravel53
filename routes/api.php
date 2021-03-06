<?php

use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
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

$api->version('v1', function ($api) {
   
    $api->get('users', 'App\Http\Controllers\Api\ApiController@showUsers');
    $api->post('user/register', 'App\Http\Controllers\Api\ApiController@registerUser');
});

