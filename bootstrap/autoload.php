<?php
spl_autoload_register(function ($class) {

	if( strpos($class,"App\\") == 0 ){
		$class = str_replace("\\","/", $class);
		$class2 = preg_replace("/^App\//s","app/", $class);
		$file = __DIR__ . "/../" . $class2 . ".php";
		if( file_exists( $file ) ){
			require_once $file;
		}
	}

});
