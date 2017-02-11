<?php
namespace App\Middlewares;
use Security;
use Redirect;

class BackendAuth extends \Wudimei\Middleware{
    //private $age=10;
    public function startUp(){
        //echo "auth start";
        //print_r( $this );
     //   $this->age =11;
    // return \Redirect::to("http://baidu.com");
        
        if( $redirect = Security::check('backend.access') ){
            return Redirect::to("/error");
        }
    }
    
    public function terminate(){
       // echo "auth terminate";
        //echo $this->age;
    }
}