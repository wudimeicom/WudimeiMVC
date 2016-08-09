<?php 
namespace App\Controllers;
use Wudimei\View;
class IndexController{
	
	public function index()
	{
		echo "hello,world";
	}
	
	public function articleDetail($id){
		echo "articleDetail,id: " . $id;
		print_r( $_GET);
	}
	
	public function articleList($name,$ctgid){
		echo "article list,ctgid: " . $ctgid . " name:" . $name;
		print_r( $_GET);
	}
	
	
	public function welcome(){
		$vars = ["name" =>'杨庆荣'];
		echo View::make("default.welcome",$vars);
	}
}
?>