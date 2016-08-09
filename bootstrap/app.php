<?php
if( file_exists(  __DIR__ .'/../vendor/Wudimei/autoload2.php' )){
	require_once  __DIR__ .'/../vendor/Wudimei/autoload2.php';
}
else{
	require_once 'D:/www/wudimei/library/Wudimei/autoload2.php';
}
require_once  __DIR__ .'/autoload.php';

 
use Wudimei\Router;


Session::loadConfig( __DIR__ . '/../config/session.php' );
Session::start();

DB::loadConfig(__DIR__ . "/../config/database.php");

View::loadConfig( __DIR__ . '/../config/view.php' );

Router::handle(  __DIR__ . '/../app/routes.php');