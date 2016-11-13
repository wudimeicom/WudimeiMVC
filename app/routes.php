<?php
 

Route::get('/','App\\Frontend\\IndexController');

Route::group(['prefix' => Config::get('app.backend_url' ) ,'namespace' => '\\App\\Backend'],function(){
	
	Route::get('/setting','SettingController@index');
	Route::get('/users','UserController@index');
	Route::get('/users/delete','UserController@delete');
	Route::get('/users/edit','UserController@edit');
	Route::get('/users/add','UserController@add');
	Route::get('/users/modifyPassword','UserController@modifyPassword');
	
	Route::get('','IndexController@index');
	Route::get('/','IndexController@index');
	
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
	Route::any('user/changePassword','UserController@changePassword');
	
	Route::any('password/postEmail','PasswordController@postEmail');
	Route::any('password/reset','PasswordController@reset');
	Route::any('password/emailSent','PasswordController@emailSent');
});

Route::get('/article/(:num).html','App\Frontend\ArticleController@show');
Route::get('/article/(:any)/(:num).html','App\Frontend\ArticleController@category');
Route::get('/regex/([a-z]+)/([0-9]+).html','App\Frontend\ArticleController@regex');


$r = Route::getRoutes();
return $r;

