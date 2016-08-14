<?php
namespace App\Frontend\Controllers;
use View;
use Request;
use Auth;
use Redirect;
class UserController{
	
	public function login(){
		
		$vars = [];
		if( Request::isPost() ){
			$login = Request::post('login');
			$password = Request::post('password');
			$remember_me = Request::post('remember_me',false );
			if( isset( $remember_me)){
				$remember_me = true;
			}
			
			//Auth::logout();
			if( \Auth::attempt(['username'=> $login,'password'=> $password], $remember_me ) ){
				
			}
			else{
				\Auth::attempt(['email'=> $login,'password'=> $password], $remember_me );
			}
			if( Auth::check() ){
				Redirect::to("/");
			}
			else{
				
			}
		}
		echo View::make("frontend.login",$vars);
	}
	
	public function logout(){
		Auth::logout();
		Redirect::to("/");
		
	}
	
	public function register(){
		
	}
}