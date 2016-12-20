<?php
namespace App\Backend;
use App\Models\User;

use Menu;
use View;
use App\Models\UserGroupModel;
use Redirect;
use Validator;
use Session;
use Request;
use Security;


use Wudimei\ArrayHelper;
use App\Models\PermissionModel;
use App\Models\UserGroupPermissionModel;

class UserGroupController{
    public function __construct(){
        
    }
    public function index(){
        $vars = [];
        $keywords =  get('keywords');
        Security::check('user_group.read');
        
        $userGroup = new UserGroupModel();
        if( trim( $keywords) != "" ){
            $kw = '%' . $keywords . '%';
            $userGroup = $userGroup->whereRaw(' (  id like ? or group_name like ? ) ' , [$kw, $kw] );
        }
        $vars['groups'] = UserGroupModel::get();
        	
        Menu::active('user,userGroup');
       return  View::make("backend.user_group.index",$vars);
    }
    
    public function _new(){
        Security::check('user_group.create');
        $vars = ['method' => 'add'];
        
        if( Request::isPost()){
            $group_name = post('group_name');
            $gid = UserGroupModel::insert( ['group_name' => $group_name ] );
           // echo $gid;
            return Redirect::to(url_b('/user-groups'))->withSuccess(trans("user_group.create_successfully"));
        }
        Menu::active('user,userGroup');
        return  View::make("backend.user_group.form",$vars);
    }
    
    public function edit(){
        Security::check('user_group.update');
        $vars['method'] = 'edit';
        if( Request::isPost( ) ){
            $group_name = post('group_name');
            $id = intval(post('id'));
            UserGroupModel::where('id',$id)->update(['group_name'=> $group_name]);
           return Redirect::to(url_b('/user-groups'))->withSuccess(trans("user_group.group_name_was_updated_successfully"));
        }
        $id = getInt("id");
        $group = UserGroupModel::find($id);
        $vars['group'] = $group;
        Menu::active('user,userGroup');
        return  View::make("backend.user_group.form",$vars);
    }
    
    public function delete(){
        Security::check('user_group.delete');
        $id = getInt("id");
        UserGroupModel::where('id',$id)->delete();
       return  Redirect::back()->withSuccess(trans("user.delete_successfully"));
    }
    
    public function permission(){
        Security::check('user_group.permission');
        $vars = [];
        $vars['group_id'] = $group_id = getInt("group_id");
        
        if( Request::isPost()){
            //print_r( $_POST);
            $group_id = intval(post("group_id"));
            $perms = @$_POST['perms'];
            //echo $group_id; print_r( $perms);
            UserGroupPermissionModel::setPermissions($group_id, $perms);
           return  Redirect::back()->withSuccess( trans( 'user_group.this_group_permission_was_updated' ));
        }
        $perms = PermissionModel::all();
       
        $perms2 = array();
        for( $i=0;$i< count( $perms);$i++){
            $r = $perms[$i];
            $code = $r->code;
            list( $group,$item) = explode(".", $code);
            $perms2[$group][] = $r;
        }
       // print_r( $perms2 );
        $vars['perms'] = $perms2;
        $vars['group_perms'] = UserGroupPermissionModel::getPermissions($group_id);
        Menu::active('user,userGroup');
        return  View::make("backend.user_group.permission",$vars);
    }
}