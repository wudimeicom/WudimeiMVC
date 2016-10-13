<?php
namespace App\Backend\Library\StaticProxies;

class Menu{
	use \Wudimei\StaticProxy;
	public static function createObject(){
		return new \App\Backend\Library\Menu();
	}
}