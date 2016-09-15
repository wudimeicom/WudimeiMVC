<?php
namespace App\Backend;
use App\Models\SettingModel;

use Config;
use View;
use Request;
use Setting;
use App\Models\SettingGroupModel;
use Wudimei\ArrayHelper;

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
				$value = strip_tags( $value );
				SettingModel::where("id", $id)->update(['value'=> $value]);
			}
			Setting::storeToFile();
		}
		$settings = SettingModel::all();
		$setting_groups = SettingGroupModel::all();
		$group_id = Request::getInt("group_id",1);
		$grouped_settings = ArrayHelper::groupBy( $settings, "setting_group_id");
		 //print_r( $grouped_settings );
		//Config::set("app.backend_url",'123');
		//echo Config::get("app.backend_url");
		//exit();
		//print_r( $settings );
		//echo Setting::get('SITE.NAME');
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
		 
		$vars = ['settings' => $settings , 'setting_groups' => $setting_groups ,'grouped_settings' => $grouped_settings ,'group_id' => $group_id ];
		echo View::make("backend.setting.index",$vars);
	}
}