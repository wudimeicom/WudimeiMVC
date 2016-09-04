<?php
namespace App\Backend\Controllers;
use App\Backend\Models\Setting;

use View;

class SettingController{
	public function index(){
		
		$settings = Setting::all();
		//print_r( $settings );
		$vars = ['settings' => $settings ];
		echo View::make("backend.setting.index",$vars);
	}
}