<?php 
namespace App\Controllers;
use View;

class IndexController{
	
	public function index()
	{
		//echo "hello,world";
		$vars = [];
		
		echo View::make("default.index",$vars);
	}
	
}
?>