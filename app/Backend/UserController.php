<?php
namespace App\Backend;
use App\Models\User;
 
use Menu;
use View; 
use App\Models\UserGroupModel;
use Redirect;

class UserController{
	public function index(){
		 $vars = [];
		 $page =  getInt("page",1);
		 $keywords =  get('keywords');
		 $group_id =  getInt('group_id');
		 
		 $user = new User();
		 if( trim( $keywords) != "" ){
		 		$kw = '%' . $keywords . '%';
		 		$user = $user->whereRaw(' ( id like ? or username like ? or  email like ? or  created_at like ? ) ' , [$kw, $kw, $kw, $kw ] );
		 }
		 if( $group_id >0 ){
		 		$user = $user->where("user_group_id", $group_id );
		 }
		// $u = clone $user;
		 //echo $u->toSql();
		 
		 $vars['pgUser'] = $pgUser = $user->paginate(10,$page );
		 $vars['groups'] = UserGroupModel::all();
		 
		 Menu::active('user,userList');
		echo View::make("backend.user.index",$vars);
	}
	
	public function add(){
		$vars = ['method' => 'add'];
		 
		$vars['user'] = new \stdClass();
		$vars['groups'] = UserGroupModel::all();
		echo View::make("backend.user.form",$vars);
	}
	
	public function edit(){
		$vars = ['method' => 'edit'];
		$id = getInt("id");
		
		
		$vars['user'] = User::find($id);
		$vars['groups'] = UserGroupModel::all();
		echo View::make("backend.user.form",$vars);
	}
	
	public function delete(){
		$id = getInt("id");
		User::where('id', $id)->delete();
		Redirect::back();
	}
}