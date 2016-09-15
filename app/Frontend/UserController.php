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
		
		//Mail::to("yaqy@qq.com")->subject("h是你")->content("a张三")->send();
		
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
			'login' => 'required; minlength:3;alpha_num_dash;',
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
				];
				$userId = $userModel->insert( $row );
				echo $userId;
			}
			else{
				$vars['validator_errors'] = Validator::getErrors();
			}
		}
		echo View::make("frontend.register",$vars);
	}
	
	
}