<?php

use App\Models\User;

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/test', function ()  {
    return User::all();
 });





















// $router->get('/test', function ()  {
//     return User::all();
//  });
 
 
//  $router->group(['prefix' => 'api/v1'], function () use ($router) {
 
     
 
//  }); // END ROUTE NEEDS TOKEN