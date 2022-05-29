<?php
 
spl_autoload_register(function ($class) {
        
	if( strpos($class,"App\\") === 0 || strpos($class,"Wudimei\\") === 0 ){
              
	}
         
        else{
             
            Wudimei\StaticProxyLoader::load( $class );
        }

});
 