<?php
$autoload_files = [
		'D:/www/wudimei/library/Wudimei/autoload.php',
		__DIR__ .'/../vendor/autoload.php',
		__DIR__ .'/../vendor/Wudimei/autoload.php',
		
];
foreach ( $autoload_files as $file ){
	if( file_exists( $file)){
		require_once $file;
		break;
	}
}

require_once  __DIR__ .'/autoload.php';
 

Wudimei\StaticProxyLoader::loadConfig( __DIR__."/../config/static_proxy.php" );


Session::start();
 


Router::run();