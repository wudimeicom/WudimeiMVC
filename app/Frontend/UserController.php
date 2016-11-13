<?php
namespace App\Frontend;
use View;
use Request;
use Auth;
use Redirect;
use Session;
use Lang;
use Validator;
use App\Models\User;
use Mail;

class UserController{
	
	public function __construct(){
		Validator::prepareFieldLabels('user'); //prepareFieldLabels from lang group name
	}
	
	public function login(){
		
		// Mail::to("yaqy@qq.com")->subject("h是你")->content("a张三")->send();
		
		$vars = [];
		$vars['message'] = Session::get('message'); 
		$vars['validator_errors'] =Session::get('validator_errors') ;
		 
		echo View::make("frontend.login",$vars);
	}
	
	public function loginSubmit(){
		$vars = [];
	 
		$login = Request::post('login');
		$password = Request::post('password');
		$remember_me = Request::post('remember_me',false );
		if( isset( $remember_me)){
			$remember_me = true;
		}
		
		$rules = [
			'login' => 'required; minlength:3;',
			'password' => 'required; minlength:6'
		];
		
		if( Validator::validate($_POST,$rules) == false ){
			Session::flash( 'validator_errors' ,Validator::getErrors() );
			Redirect::to("/login");
			exit();
		}
		
		if(   \Auth::attempt(['username'=> $login,'password'=> $password], $remember_me ) ){
	
		}
		else{
			 \Auth::attempt(['email'=> $login,'password'=> $password], $remember_me );
		}
		if( Auth::check() ){
			Redirect::to("/");
		}
		else{
			Session::flash('message', Lang::get('user.wrong_username_or_password') );
			Redirect::to("/login");
		}
		
	}
	
	public function logout(){
		Auth::logout();
		Redirect::to("/");
	}
	
	public function register(){
		$vars = ['message'=>'','validator_errors'=>[]];
		
		if( Request::isPost()){
			if( Validator::validate( Request::all(),[
				'username' => 'required;alpha_num_dash;minlength:3;maxlength:30;unique:users,username',
				'email' => 'required;email;unique:users,email;maxlength:50;',
				'password' => 'required;minlength:6',
				'password_confirmation' => 'required;equalTo:password',
				'accept_aggrement' => 'required',
			])){
				
				$userModel = new User();
				$row = [
						'username' => Request::item('username'),
						'email' => Request::item('email'),
						'password' => $userModel->encryptPassword( Request::item('password') ),
				        'created_at' => date("Y-m-d H:i:s")
				];
				$userId = $userModel->insert( $row );
				//echo $userId;
				echo View::make("frontend.success",['message' => Lang::get('user.register_success')]);
				exit();
			}
			else{
				$vars['validator_errors'] = Validator::getErrors();
			}
		}
		echo View::make("frontend.register",$vars);
	}
	
	public function changePassword(){
		$vars  = ['message' => ''];
		if( Request::isPost()){
			if( Validator::validate( Request::all(),[
					'old_password' => 'required;minlength:6',
					'new_password' => 'required;minlength:6',
					'password_confirmation' => 'required;equalTo:new_password',
			])){
				$old_password = post("old_password");
				$new_password = post("new_password");
				
				$user = Auth::user();
				
				$id = $user->id;
				$tmpUser = User::find( $id );
				
				if(  $tmpUser->password == (new User())->encryptPassword( $old_password) ){
					$new_pass = (new User())->encryptPassword(  $new_password );
					//echo $new_pass;
					User::where('id', $id)->update(['password'=> $new_pass ] );
					$vars['message'] = Lang::get('user.password_changed');
					echo View::make('frontend.success', $vars);
					exit();
				}
				else{
				    Validator::setError(  "old_password",	Lang::get("user.wrong_old_password") );
					
				}
			}
			 
		}
		$vars['validator_errors'] = Validator::getErrors();
	
		echo View::make('frontend.user.changePassword', $vars );
	}
	
}