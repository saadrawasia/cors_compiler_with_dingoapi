<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
	$api->post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
	$api->post('auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');
	$api->post('auth/reset', 'App\Api\V1\Controllers\AuthController@reset');

	// example of protected route
	$api->get('protected', ['middleware' => ['api.auth'], function () {		
		return \App\User::all();
    }]);

	// example of free route
	$api->get('free', function() {
		return \App\User::all();
	});
	/*Route::group(['middleware' => 'cors'], function ($api) {
		$api->get('questions','App\Api\V1\Controllers\QuestionsController@index');
		$api->get('question/{id}','App\Api\V1\Controllers\QuestionsController@show');
	});*/
	/*$api->get('questions', ['middleware' => ['cors'], function () {
		return \App\Questions::all();;
	}]);*/
	$api->get('questions', ['middleware' => ['cors'], 'uses'=>'App\Api\V1\Controllers\QuestionsController@index']);
	$api->get('question/{id}', ['middleware' => ['cors'], 'uses'=>'App\Api\V1\Controllers\QuestionsController@show']);
	$api->post('store', ['middleware' => ['cors'], 'uses'=>'App\Api\V1\Controllers\SolutionController@store']);



});
