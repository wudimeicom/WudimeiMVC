<?php


$route['/welcome.html'] = '\\App\\Controllers\\IndexController@welcome';
$route['/article/(:num).html'] = 'IndexController@articleDetail';
$route['/article/(:any)/(:num).html'] = 'IndexController@articleList';
$route['/article/([a-z]+)/([0-9]+).html'] = 'IndexController@articleList';
$route['404_override'] = '';
$route['default'] = 'IndexController'; // 'IndexController@welcome';

return $route;
