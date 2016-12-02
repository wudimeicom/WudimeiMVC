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


use Wudimei\ArrayHelper;

class UserGroupController{
    public function index(){
        $vars = [];
      
        $vars['groups'] = UserGroupModel::all();
        	
        Menu::active('user,userGroup');
        echo View::make("backend.user_group.index",$vars);
    }
    
    public function _new(){
        $vars = ['method' => 'add'];
        
        if( Request::isPost()){
            $group_name = post('group_name');
            $gid = UserGroupModel::insert( ['group_name' => $group_name ] );
           // echo $gid;
            \Redirect::to(url_b('/user-groups'))->withSuccess(trans("user_group.create_successfully"));
            exit();
        }
        Menu::active('user,userGroup');
        echo View::make("backend.user_group.form",$vars);
    }
    
    public function edit(){
        $vars['method'] = 'edit';
        if( Request::isPost( ) ){
            $group_name = post('group_name');
            $id = intval(post('id'));
            UserGroupModel::where('id',$id)->update(['group_name'=> $group_name]);
            \Redirect::to(url_b('/user-groups'))->withSuccess(trans("user_group.group_name_was_updated_successfully"));
            exit();
        }
        $id = getInt("id");
        $group = UserGroupModel::find($id);
        $vars['group'] = $group;
        Menu::active('user,userGroup');
        echo View::make("backend.user_group.form",$vars);
    }
    
    public function delete(){
        $id = getInt("id");
        UserGroupModel::where('id',$id)->delete();
        \Redirect::back()->withSuccess(trans("user.delete_successfully"));
    }
    
}