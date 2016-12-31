<?php
namespace App\Middlewares;

class BackendAuth extends \Wudimei\Middleware{
    //private $age=10;
    public function startUp(){
        //echo "auth start";
        //print_r( $this );
     //   $this->age =11;
    // return \Redirect::to("http://baidu.com");
    }
    
    public function terminate(){
       // echo "auth terminate";
        //echo $this->age;
    }
}