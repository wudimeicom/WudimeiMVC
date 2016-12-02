<?php
namespace App\Backend;
use App\Models\User;
use App\Models\UsersGroupModel;
use Menu;
use View; 
use App\Models\UserGroupModel;
use Redirect;
use Validator;
use Session;
use Request;

use Wudimei\ArrayHelper;

class UserController{
    public function __construct(){
      //  Validator::prepareFieldLabels('user'); //prepareFieldLabels from lang group name
    }
    
	public function index(){
		 $vars = [];
		 $page =  getInt("page",1);
		 $keywords =  get('keywords');
		 $group_id =  getInt('group_id');
		 
		 $user = new User();
		 $user->select("u.*")->from("users as u");
		 if( $group_id>0){
		     $user->leftJoin("users_groups as ug" ,"ug.user_id=u.id");
		 }
		 if( trim( $keywords) != "" ){
		 		$kw = '%' . $keywords . '%';
		 		$user = $user->whereRaw(' ( u.id like ? or username like ? or  email like ? or  created_at like ? ) ' , [$kw, $kw, $kw, $kw ] );
		 }
		 if( $group_id >0 ){
		 		$user = $user->where("ug.user_group_id", $group_id );
		 }
		
		 //echo $user->sql();
	 
		 
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
		            'email' => 'required; minlength:4;unique:users,email,'. $id . ",id",
		    ];
		    
		    if( Validator::validate($_POST,$rules,null) == false ){
		          Redirect::back()->withErrors();
		        exit();
		    }
		
		    $id = intval( $_POST['id'] );
		    $users_groups = @$_POST['users_group'];
		    
		    $row = ArrayHelper::only( $_POST, 'username,email');
		    User::where('id' , $id )->update(  $row );

		    UsersGroupModel::setGroupIds( $id, $users_groups );
		    
		    Redirect::back()->withSuccess( trans("user.edit_successfully"));
		    exit();
		}
		$vars['user'] = User::find($id);
		$vars['groups'] = UserGroupModel::all()  ;
		$vars['users_groups'] = UsersGroupModel::getGroupIds( $id );
		
		Menu::active('user,userList');
		echo View::make("backend.user.form",$vars);
	}
	
	public function delete(){
		$id = getInt("id");
		User::where('id', $id)->delete();
		Redirect::back()->withSuccess(trans("user.delete_successfully"));
	}
	
	public function modifyPassword(){
	    $vars  = ['message' => ''];
	    if( Request::isPost()){
	        if( Validator::validate( Request::all(),[
	                'user_id' => 'required;min:1',
	                'password' => 'required;minlength:6',
	                'password2' => 'required;minlength:6;equalTo:password'
	        ])){
	            $password = post("password");
	    
	    
	            $id = intval( @$_POST['user_id']);
	            
	             
	            $new_pass = (new User())->encryptPassword(  $password );
	         
	            User::where('id', $id)->update(['password'=> $new_pass ] );
	           
	            Redirect::back()->withSuccess(trans("user.password_changed"));
	        }
	        else{
	            Session::flash( 'validator_errors' ,Validator::getErrors() );
	            Redirect::back();
	            exit();
	        }
	    }
	   
	   
	}
}