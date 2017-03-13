<?php
/**
 * @author yangqingrong@wudimei.com
 * @copyright yangqingrong@wudimei.com
 * @link http://www.wudimei.com
 * @license The MIT license(MIT)
 */

//please change to you path
require_once 'D:/www/wudimei/library/wudimei.phar';

spl_autoload_register(function ($class) {
	//echo $class . '<br />';
	if( strpos($class,"Wudimei\\") !== false ){
		
	    $class2 = str_replace("Wudimei\\","", $class);
	    $class2 = str_replace("\\","/", $class2 );
	    
		$file =   "phar://wudimei.phar/" . $class2 . ".php";
		if( file_exists( $file ) ){
			 //echo $file . "<br />";
			require_once $file;
		}
	}
	elseif( strpos($class,"\\") === false ){
		
			Wudimei\StaticProxyLoader::load( $class );
		
	}
	
	
});
	
require_once 'phar://wudimei.phar/helpers.php';