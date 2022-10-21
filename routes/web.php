<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Request;

$router->get('/', ['middleware' => 'oauth'], function () use ($router) {
    return $router->app->version();
});

// ODBC ROUTE group
$router->group(
    ['prefix' => 'api/v1/', 'middleware' => 'oauth', 'cors'],
    function () use ($router) {
        $router->post('get-data', 'Controller@getData');
    }
);
