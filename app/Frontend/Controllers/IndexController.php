<?php 
namespace App\Frontend\Controllers;
use View;

class IndexController{
	
	public function index()
	{
		//echo "hello,world";
		$vars = [];
		
		echo View::make("frontend.index",$vars);
	}
	
}
?>