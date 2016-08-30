<?php
$autoload_files = [
		__DIR__ .'/../vendor/autoload.php',
		__DIR__ .'/../vendor/Wudimei/autoload.php',
		'D:/www/wudimei/library/Wudimei/autoload.php'
];
foreach ( $autoload_files as $file ){
	if( file_exists( $file)){
		require_once $file;
		break;
	}
}

require_once  __DIR__ .'/autoload.php';

\Wudimei\ClassAlias::loadConfig(__DIR__."/../config/class_alias.php");

Session::loadConfig( __DIR__ . '/../config/session.php' );
Session::start();

DB::loadConfig(__DIR__ . "/../config/database.php");

Lang::loadConfig( __DIR__ . "/../config/lang.php");

Auth::loadConfig( __DIR__ . '/../config/auth.php' );

View::loadConfig( __DIR__ . '/../config/view.php' );

Router::handle(  __DIR__ . '/../app/routes.php');
