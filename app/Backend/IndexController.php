<?php
namespace App\Backend;


use Config;
use View;
use Menu;
 

class IndexController{
	public function index(){
	    $vars = [];
	    Menu::active("dashboard");
	    echo View::make("backend.index.index",$vars);
	}
}