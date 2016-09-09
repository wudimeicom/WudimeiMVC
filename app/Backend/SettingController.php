<?php
namespace App\Backend;
use App\Models\SettingModel;

use View;
use Request;
use Setting;

class SettingController{
	public function index(){
		
		$vars = [];
		if( Request::isPost() ){
			$data = Request::post("data");
			//print_r( $data );
			
			foreach ( $data as $id => $value ){
				if( is_array( $value)){
					$value = implode(",", $value);
				}
				SettingModel::where("id", $id)->update(['value'=> $value]);
			}
			Setting::storeToFile();
		}
		$settings = SettingModel::all();
		//print_r( $settings );
		//echo Setting::item('SITE.NAME');
		/*
		$item = [
			'name' => 'admin.email' ,
			'value' => '****@wudimei.com',
			'label' => 'Administrator\'s email',
			'tip' => 'please enter an email address',
			'type' => 'text',
			'properties' => '{"default":"","size":50}',
			'setting_group_id' => 3
		];
		SettingModel::insert( $item ); */
		 
		$vars = ['settings' => $settings ];
		echo View::make("backend.setting.index",$vars);
	}
}