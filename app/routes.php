<?php

/*
$route['/welcome.html'] = '\\App\\Controllers\\IndexController@welcome';
$route['/article/(:num).html'] = 'IndexController@articleDetail';
$route['/article/(:any)/(:num).html'] = 'IndexController@articleList';
$route['/article/([a-z]+)/([0-9]+).html'] = 'IndexController@articleList';
*/
$route['/login'] = '\\App\\Frontend\\Controllers\\UserController@login';

$route['/login'] = ['GET' => '\\App\\Frontend\\Controllers\\UserController@login',
					'POST' => '\\App\\Frontend\\Controllers\\UserController@loginSubmit'];

$route['/logout'] = '\\App\\Frontend\\Controllers\\UserController@logout';
$route['/register'] = '\\App\\Frontend\\Controllers\\UserController@register';

$route['404_override'] = '';
$route['default'] = 'App\\Frontend\\Controllers\\IndexController'; // 'IndexController@welcome';

return $route;
