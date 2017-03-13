<?php
namespace App\Backend;


use Config;
use View;
use Menu;
use App\Library\Security;

class IndexController{
	public function index(){
	    $vars = [];
	    Menu::active("dashboard");
	    return  View::make("backend.index.index",$vars);
	}
	
	 
}