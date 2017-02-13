<?php 
namespace App\Frontend;
use View;

class IndexController{
	
	public function index()
	{
		//echo "hello,world";
		$vars = [];
		//\Session::set("__language","en");
		//setcookie('__language','zh-cn',time()+3600*24*365);
		
		return  View::make("frontend.index",$vars);
	}
	
}
?>