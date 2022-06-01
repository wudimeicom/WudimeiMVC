<?php

use Wudimei\XSS\XSS2;

define('BASE_PATH', dirname(__DIR__));

$autoload_files = [
    /* if you want to load wudimei.phar ,please uncomment the next line comment ,
      and change the path to yours in wudimei_phar_autoload.php */
    // __DIR__ .'/wudimei_phar_autoload.php',

   // '/www/open/WudimeiPHP/autoload.php',
    __DIR__ . '/../vendor/autoload.php',
        //__DIR__ .'/../vendor/Wudimei/autoload.php',
];
foreach ($autoload_files as $file) {
    if (file_exists($file)) {
        require_once $file;
        break;
    }
}


 
//$GLOBALS['db_debug'] =1;
require_once BASE_PATH . '/bootstrap/autoload.php'; //load static proxy,for example Session
require_once BASE_PATH . '/app/functions/helpers.php';
require_once BASE_PATH .'/vendor/wudimeicom/wudimeiphp/helpers.php';

Wudimei\StaticProxyLoader::loadConfig(BASE_PATH . "/config/static_proxy.php");

//$_POST = XSS2::cleanDeep($_POST);
//$_GET = XSS2::cleanDeep($_GET);

Session::start();

Router::handle();
