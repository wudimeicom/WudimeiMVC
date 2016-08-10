<?php
if( file_exists( 'D:/www/wudimei/library/Wudimei/autoload.php' )){
	
	require_once 'D:/www/wudimei/library/Wudimei/autoload.php';
}
else{
	require_once  __DIR__ .'/../vendor/Wudimei/autoload.php';
}
require_once  __DIR__ .'/autoload.php';

 

use Wudimei\ClassAlias;
 

ClassAlias::withStaticProxies(); //create StaticProxies alias,eg Session,DB,and so on

Session::loadConfig( __DIR__ . '/../config/session.php' );
Session::start();

DB::loadConfig(__DIR__ . "/../config/database.php");

View::loadConfig( __DIR__ . '/../config/view.php' );

Router::handle(  __DIR__ . '/../app/routes.php');