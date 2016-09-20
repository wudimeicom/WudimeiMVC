<?php

/*
$route['/welcome.html'] = '\\App\\IndexController@welcome';
$route['/article/(:num).html'] = 'IndexController@articleDetail';
$route['/article/(:any)/(:num).html'] = 'IndexController@articleList';
$route['/article/([a-z]+)/([0-9]+).html'] = 'IndexController@articleList';
*/
/*
$route['/login'] = '\\App\\Frontend\\UserController@login';

$route['/login'] = ['GET' => '\\App\\Frontend\\UserController@login',
					'POST' => '\\App\\Frontend\\UserController@loginSubmit'];

$route['/logout'] = '\\App\\Frontend\\UserController@logout';
$route['/register'] = '\\App\\Frontend\\UserController@register';


$backendPrefix = '/backend_2016';
$route[$backendPrefix.'/setting'] = '\\App\\Backend\\SettingController@index';

$route['404_override'] = '';
$route['default'] = 'App\\Frontend\\IndexController'; // 'IndexController@welcome';

return $route; */


Route::get('/','App\\Frontend\\IndexController');

Route::group(['prefix' => '/backend_2016/','namespace' => '\\App\\Backend'],function(){
	
	Route::get('setting','SettingController@index');
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

	
	
$r = Route::getRoutes();
return $r;

