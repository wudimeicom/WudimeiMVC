<?php

/*
$route['/welcome.html'] = '\\App\\IndexController@welcome';
$route['/article/(:num).html'] = 'IndexController@articleDetail';
$route['/article/(:any)/(:num).html'] = 'IndexController@articleList';
$route['/article/([a-z]+)/([0-9]+).html'] = 'IndexController@articleList';
*/
$route['/login'] = '\\App\\Frontend\\UserController@login';

$route['/login'] = ['GET' => '\\App\\Frontend\\UserController@login',
					'POST' => '\\App\\Frontend\\UserController@loginSubmit'];

$route['/logout'] = '\\App\\Frontend\\UserController@logout';
$route['/register'] = '\\App\\Frontend\\UserController@register';


$backendPrefix = '/backend_2016';
$route[$backendPrefix.'/setting'] = '\\App\\Backend\\SettingController@index';

$route['404_override'] = '';
$route['default'] = 'App\\Frontend\\IndexController'; // 'IndexController@welcome';

return $route;
