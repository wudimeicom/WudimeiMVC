<?php
namespace App\Backend\Library;
use Lang;
class Menu{
	
	public $menus=[];
	
	//public $indexes = [];
	public $parent  = null;
	public $prefix = "";
	public $activeIdArray = [];
	
	public function __construct(){
		
	}
	public function active( $ids ){
		if( is_array( $ids )){
			$this->activeIdArray = $ids;
		}
		else{
			$this->activeIdArray = preg_split("/[,;\s]+/i", $ids);
		}
	}
	
	public function item($menuId ,  $url, $label , $icon = "", $closure = null ){
		$item = new MenuItem();
		$item->id = $menuId;
		$item->url = $this->prefix . $url;
		$item->label = Lang::get($label);
		$item->icon = $icon;
		$item->parent = &$this->parent;
		if( in_array( $menuId, $this->activeIdArray )){
			$item->active = true;
		}
		
		if(  is_callable( $closure )){
			$tmpP = &$this->parent;
			
			$this->parent = & $item;
			call_user_func( $closure );
			$this->parent = &$tmpP;
		}
		if( $this->parent == null ){
			$this->menus[] = $item;
		}
		else{
			$this->parent->submenus[] = $item;
		}
	}
	
	public function prefix( $prefix ){
		$this->prefix = $prefix;
	}
	public function getMenus(){
		return $this->menus;
	}
}
