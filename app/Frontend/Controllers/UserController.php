<?php
namespace App\Frontend\Controllers;
use View;
use Request;
use Auth;
use Redirect;
use Session;
use Lang;
use Validator;

class UserController{
	
	public function __construct(){
		Lang::load("user");
	}
	public function login(){
		
		$vars = [];
		$vars['message'] = Session::get('message'); 
		$vars['validator_errors'] =Session::get('validator_errors') ;
		 
		echo View::make("frontend.login",$vars);
	}
	
	public function loginSubmit(){
		$vars = [];
		 
		if( Request::isPost() ){
			$login = Request::post('login');
			$password = Request::post('password');
			$remember_me = Request::post('remember_me',false );
			if( isset( $remember_me)){
				$remember_me = true;
			}
			$rules = [
				'login' => 'required',
				'password' => 'required'
			];
			if( Validator::validate($_POST,$rules) == false ){
				Session::flash( 'validator_errors' ,Validator::getErrors() );
				Redirect::to("/login");
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
	}
	
	public function logout(){
		Auth::logout();
		Redirect::to("/");
		
	}
	
	public function register(){
		
	}
}