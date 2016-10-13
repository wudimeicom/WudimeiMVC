<?php
namespace App\Backend\Library;



class BackendMenu{
	public function getMenus(){
		return config("backend_menu");
		
	}
	
	public function getHtmlMenus(){
		$menus = $this->getMenus();
		$html = "";
		for( $i=0;$i<count( $menus); $i++ ){
			$html .= $menus[$i];
		}
		return $html;
	}
	
}