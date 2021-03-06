<?php
$autoload_files = [
        /* if you want to load wudimei.phar ,please uncomment the next line comment ,
        and change the path to yours in wudimei_phar_autoload.php */
         // __DIR__ .'/wudimei_phar_autoload.php',
       
		'/www/wudimei/library/Wudimei/autoload.php',
		__DIR__ .'/../vendor/autoload.php',
		__DIR__ .'/../vendor/Wudimei/autoload.php',
		
];
foreach ( $autoload_files as $file ){
	if( file_exists( $file)){
		require_once $file;
		break;
	}
}



//$GLOBALS['db_debug'] =1;
require_once  __DIR__ .'/autoload.php';
require_once  __DIR__ .'/../app/functions/helpers.php'; 



Wudimei\StaticProxyLoader::loadConfig( __DIR__."/../config/static_proxy.php" );

$_POST = XSS::cleanDeep($_POST);
$_GET = XSS::cleanDeep($_GET);

Session::start();
 



Router::handle();
