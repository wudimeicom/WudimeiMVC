<?php

namespace App\Backend;

use App\Models\SettingModel;
use Config;
use View;
use Request;
use Setting;
use App\Models\SettingGroupModel;
use Menu;
use App\Library\Security;

class SettingController {

    public function index() {
        if ($redirect = Security::check('setting.read'))
            return $redirect;
        $vars = [];
        if (Request::isPost()) {
            Security::check('setting.update');
            $data = Request::post("data");
            //print_r( $data );

            foreach ($data as $id => $value) {
                if (is_array($value)) {
                    $value = implode(",", $value);
                }
                $value = strip_tags($value);
                SettingModel::where("id", $id)->update(['value' => $value]);
            }
            Setting::storeToFile();
        }
        $settings = SettingModel::all();
        $setting_groups = SettingGroupModel::all();
        $group_id = Request::getInt("group_id", 1);
        $grouped_settings = array_groupBy($settings, "setting_group_id");

        Menu::active('setting');
        $vars = ['settings' => $settings, 'setting_groups' => $setting_groups, 'grouped_settings' => $grouped_settings, 'group_id' => $group_id];
        return View::make("backend.setting.index", $vars);
    }

}
