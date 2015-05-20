<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return "Lumen RESTful API By CoderExample (http://coderexample.com)";
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('book','BookController@index');
 
	$app->get('book/{id}','BookController@getbook');
	 
	$app->post('book','BookController@createBook');
	 
	$app->put('book/{id}','BookController@updateBook');
	 
	$app->delete('book/{id}','BookController@deleteBook');
});

