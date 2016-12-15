<?php
namespace App\Frontend;
use View;
use Request;
use Validator;
use Session;
use Redirect;
use App\Models\User;
use Lang;
use App\Models\PasswordResetModel;
use Mail;

class PasswordController{
	
	public function __construct(){
		Validator::prepareFieldLabels('user'); //prepareFieldLabels from lang group name
	}
	
	public function postEmail(){
		$vars = [];
		
		$vars['message'] = '';
		if( Request::isPost() ){
			$rules = [
					'login' => 'required; minlength:3;',
			];
			if( Validator::validate($_POST,$rules) == false ){
				Redirect::to("/password/postEmail")->withErrors();
				exit();
			}
			$login = Request::post("login");
			$user = User::where('username', $login)->first();
			if( $user == null ){
				$user = User::where('email', $login)->first();
			}
			if( $user == null ){
				\Validator::setError('login', trans('user.username_or_email_you_entered_does_no_exists') );
				Redirect::to("/password/postEmail")->withErrors();
				exit();
			}
			else{
				$email = $user->email;
				//echo $email;
			    $token = md5( uniqid(). rand(1,10000));
				PasswordResetModel::insert(['user_id' => $user->id,'token' => $token , 'created_at' => date("Y-m-d H:i:s") ] );
			    
				$url = "http://" . $_SERVER['HTTP_HOST'] . ":" . $_SERVER['SERVER_PORT'] . '/password/reset?token=' . $token;
				$title = Lang::get('user.reset_password_email_title');
				$content =  Lang::get('user.reset_password_email_content',['username'=> $user->username,'url'=> $url ]);
				//echo $title;
				//echo $content;
				Mail::to( $email)->subject( $title)->content( $content)->send();
				Redirect::to("/password/emailSent");
				exit();
			}
		}

		echo View::make("frontend.password.postEmail",$vars);
	}
	
	public function emailSent(){
		$vars['message'] = Lang::get("user.the_password_resetting_email_was_sent_to_you");
		echo View::make("frontend.success",$vars);
	}
	
	public function reset(){
		$vars = [ 'message' => '' ];
		
		if( Request::isPost() ){
			$rules = [
					'new_password' => 'required; minlength:6;',
					'new_password2' => 'required; minlength:6;equalTo:new_password;',
			];
			if( Validator::validate($_POST,$rules) == false ){
				Redirect::back()->withErrors();
				exit();
			}
			$token = Request::post('token');
			$row = PasswordResetModel::where('token',$token)->first();
			if( !isset( $row->user_id )){
				$vars['message'] = Lang::get('user.invalid_token');
				echo View::make("frontend.error",$vars);
				exit();
			}
			$password = Request::post('new_password');
			User::where('id', $row->user_id)->update(['password' => (new User())->encryptPassword( $password) ]);
			//PasswordResetModel::where('token',$token)->delete();
			$vars['message'] = Lang::get('user.reset_password_success');
			echo View::make("frontend.success",$vars);
			exit();
		}
		$token = Request::get('token');
		$row = PasswordResetModel::where('token',$token)->first();
		
		if( !isset( $row->user_id )){
			$vars['message'] = Lang::get('user.invalid_token');
			echo View::make("frontend.error",$vars);
			exit();
		}
		
		$vars['token'] = $token;
		
		echo View::make("frontend.password.reset",$vars);
	}
}