<?php 
namespace App\Frontend;
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