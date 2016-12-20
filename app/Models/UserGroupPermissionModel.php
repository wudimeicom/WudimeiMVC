<?php
namespace App\Models;

use Wudimei\DB\Model;


class UserGroupPermissionModel  extends Model{
    public $table = "user_group_permissions";
    public $connection = "default";
    
    public static function getPermissions($group_id){
        $data = UserGroupPermissionModel::where("group_id", $group_id)->get();
        return array_column($data, 'permission_id');
    }
    
    public static function getPermissionData($group_id){
        $data = UserGroupPermissionModel::where("group_id", $group_id)->get();
        return $data;
    }
    
    public static function setPermissions($group_id,$permissins ){
         $old_perms = static::getPermissions($group_id);
         
         $arr_del = array_diff( $old_perms, $permissins);
         foreach ( $arr_del as $id ){
             UserGroupPermissionModel::where("group_id",$group_id)->where("permission_id",$id)->delete();
         }
         $arr_add = array_diff( $permissins, $old_perms);
         foreach ( $arr_add as $id ){
             UserGroupPermissionModel::insert( ['group_id' => $group_id,'permission_id' => $id ]);
         }
    }
}