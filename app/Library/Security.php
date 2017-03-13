<?php
/**
 * @author yangqingrong@wudimei.com
 * @copyright yangqingrong@wudimei.com
 * @link http://www.wudimei.com
 * @license The MIT license(MIT)
 */
namespace App\Library;
use App\Models\UsersGroupModel;
use App\Models\UserGroupPermissionModel;
use App\Models\PermissionModel;
use Session;
use Wudimei\ArrayHelper;

class Security
{

    public static function check ($perm, $url = "")
    {
        // echo $perm;
        if ($url == "") {
            $url = url_b();
        }
        $perms = Session::get("myPermissions");
        // print_r( $perms );
        $permItem = ArrayHelper::find($perms, $perm, "code");
        // print_r( $permItem );
        if (is_null($permItem)) {
            $p = PermissionModel::where('code', $perm)->first();
            if (is_null($p)) {
                $p = new \stdClass();
                $p->code = $perm;
                $p->name = $perm;
                PermissionModel::insert($p);
            }
            return \Redirect::to($url)->withWarning(
                    trans("global.permission_required", 
                            [
                                    'permission_name' => trans($p->name)
                            ]));
            // Router::sendResponse( $res );
            // exit();
        }
        return false;
    }

    public static function loadMyPermissions ()
    {
        $myPermissions = array();
        
        $user = \Auth::user();
        if (is_null($user)) {
            return array();
        }
        $uid = $user->id;
        $gids = UsersGroupModel::getGroupIds($uid);
        $permissionIds = array();
        foreach ($gids as $gid) {
            $permissions = UserGroupPermissionModel::getPermissions($gid);
            $permissionIds = array_merge($permissionIds, $permissions);
        }
        $permissionIds = array_unique($permissionIds);
        $permissionArray = PermissionModel::all();
        
        foreach ($permissionIds as $pid) {
            $myPermissions[] = ArrayHelper::find($permissionArray, $pid);
        }
        \Session::set("myPermissions", $myPermissions);
        
        $myPermissions = \Session::get("myPermissions");
        
        return $myPermissions;
    }
}