<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

$api = app('Dingo\Api\Routing\Router');

$api->version(['v1'], function ($api) {
    $api->any('/', function () {
        throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException('Forbidden.');
    });

    $api->post('auth/login', [
        'as'   => 'auth.login',
        'uses' => 'App\Http\Controllers\AuthController@login',
    ]);

    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->group(['prefix' => 'auth'], function ($api) {
            $api->post('logout', [
                'as'   => 'auth.logout',
                'uses' => 'App\Http\Controllers\AuthController@logout',
            ]);

            $api->post('refresh', [
                'as'   => 'auth.refresh',
                'uses' => 'App\Http\Controllers\AuthController@refresh',
            ]);

            $api->get('me', [
                'as'   => 'auth.me',
                'uses' => 'App\Http\Controllers\AuthController@getUser',
            ]);

        });

    });
});


