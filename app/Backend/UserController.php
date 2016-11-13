<?php
namespace App\Backend;
use App\Models\User;
 
use Menu;
use View; 
use App\Models\UserGroupModel;
use Redirect;
use Validator;
use Session;
use Wudimei\ArrayHelper;

class UserController{
    public function __construct(){
        Validator::prepareFieldLabels('user'); //prepareFieldLabels from lang group name
    }
    
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
		$vars['groups'] =UserGroupModel::all() ;
		
		Menu::active('user,userList');
		echo View::make("backend.user.form",$vars);
	}
	
	public function edit(){
		$vars = ['method' => 'edit'];
		$id = getInt("id");
		
		if(  isPost() ){
		    $rules = [
		            'id' => 'required;digits;',
		            'username' => 'required; minlength:4;alpha_num_dash;unique:users,username,'. $id . ",id",
		            'email' => 'required; minlength:4;unique:users,email,'. $id . ",id"
		    ];
		    
		    if( Validator::validate($_POST,$rules) == false ){
		        Session::flash( 'validator_errors' ,Validator::getErrors() );
		        Redirect::back();
		        exit();
		    }
		    $id = intval( $_POST['id'] );
		    $row = ArrayHelper::only( $_POST, 'username,email,user_group_id');
		    User::where('id' , $id )->update(  $row );
		    Redirect::back()->withSuccess( trans("user.edit_successfully"));
		    exit();
		}
		$vars['user'] = User::find($id);
		$vars['groups'] = UserGroupModel::all()  ;
		
		 
		Menu::active('user,userList');
		echo View::make("backend.user.form",$vars);
	}
	
	public function delete(){
		$id = getInt("id");
		User::where('id', $id)->delete();
		Redirect::back()->withSuccess(trans("user.delete_successfully"));
	}
	
	public function modifyPassword(){
	    
	    
	}
}