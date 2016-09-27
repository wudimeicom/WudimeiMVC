<?php
 

Route::get('/','App\\Frontend\\IndexController');

Route::group(['prefix' => Config::get('app.backend_url' ) ,'namespace' => '\\App\\Backend'],function(){
	
	Route::get('/setting','SettingController@index');
	Route::get('/users','UserController@index');
	/*
	Route::group(['prefix' => '/articles','domain'=>'www.a.com'],function(){
		Route::get('/add','IndexController@add');
	});*/
});

Route::group(['prefix' => '/','namespace' => 'App\\Frontend'],function(){
	Route::get('login','UserController@login');
	Route::post('login','UserController@loginSubmit');
	Route::any('register','UserController@register');
	Route::get('logout','UserController@logout');
});

Route::get('/article/(:num).html','App\Frontend\ArticleController@show');
Route::get('/article/(:any)/(:num).html','App\Frontend\ArticleController@category');
Route::get('/regex/([a-z]+)/([0-9]+).html','App\Frontend\ArticleController@regex');


$r = Route::getRoutes();
return $r;

