<?php
namespace App\Backend;
use App\Models\User;
 
use Request;
use View; 
use App\Models\UserGroupModel;

class UserController{
	public function index(){
		 $vars = [];
		 $page = Request::get("page",1);
		 $keywords = Request::get('keywords',"");
		 $group_id = Request::getInt('group_id');
		 
		 $user = new User();
		 if( trim( $keywords) != "" ){
		 	$kw = '%' . $keywords . '%';
		 	$user = $user->where('id','like' , $kw )->orWhere('username', 'like', $kw )->orWhere('email', 'like', $kw )
		 	->orWhere('created_at', 'like', $kw );
		 }
		 if( $group_id >0 ){
		 	$user = $user->where("user_group_id", $group_id );
		 }
		 $u = clone $user;
		 //echo $u->toSql();
		 
		 $vars['pgUser'] = $pgUser = $user->paginate(10,$page );
		 $vars['groups'] = UserGroupModel::all();
		 
		echo View::make("backend.user.index",$vars);
	}
}