<?php
namespace App\Models;

use Wudimei\DB\Model;
use Wudimei\ArrayHelper;

class UsersGroupModel extends Model{
    public $table = "users_groups";
    public $connection = "default";
    
    public static function getGroupIds( $user_id ){
        $users_groups = UsersGroupModel::where("user_id",$user_id)->get();
        return ArrayHelper::getColumn($users_groups, "user_group_id");
    }
    
    public static function setGroupIds( $user_id, $newGroupIds ){
        $oldGroupIds = self::getGroupIds($user_id);
        $ids_insert = array_diff( $newGroupIds, $oldGroupIds);
        
        foreach(   $ids_insert as   $gid ){
            UsersGroupModel::insert( ['user_id' => $user_id,'user_group_id'=> $gid]);
        }
        $ids_del = array_diff( $oldGroupIds,$newGroupIds);
        foreach( $ids_del as  $gid ){
            UsersGroupModel::where("user_group_id",$gid)->where("user_id",$user_id)->delete();
        }
        
    }
}