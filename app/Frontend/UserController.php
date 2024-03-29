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
use App\Library\Security;

class UserController {

    public function __construct() {
        Validator::prepareFieldLabels('user'); //prepareFieldLabels from lang group name
    }

    public function login() {

        // Mail::to("yaqy@qq.com")->subject("h是你")->content("a张三")->send();

        $vars = [];
        $vars['message'] = Session::get('message');

        return View::make("frontend.login", $vars);
    }

    public function loginSubmit() {
        $vars = [];

        $login = Request::post('login');
        $password = Request::post('password');
        $remember_me = Request::post('remember_me', false);
        // print_r( $_POST ); echo $login; exit();
        if ($remember_me != false) {
            $remember_me = true;
        }

        $rules = [
            'login' => 'required; minlength:3;',
            'password' => 'required; minlength:6'
        ];

        if (Validator::validate($_POST, $rules) == false) {
            return Redirect::to("/login")->withErrors();
        }

        if ($remember_me == true) {
            Auth::setTokenLifeTime(3600 * 24 * 7); //7 days
        }

        if (Auth::attempt(['username' => $login, 'password' => $password], $remember_me)) {
            
        } else {
            Auth::attempt(['email' => $login, 'password' => $password], $remember_me);
        }
        if (Auth::check()) {
            Security::loadMyPermissions();
            return Redirect::to("/");
        } else {
            return Redirect::to("/login")->with('message', trans('user.wrong_username_or_password'));
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::to("/");
    }

    public function register() {
        $vars = ['message' => ''];

        if (Request::isPost()) {
            if (Validator::validate(Request::all(), [
                        'username' => 'required;alpha_num_dash;minlength:3;maxlength:30;unique:users,username',
                        'email' => 'required;email;unique:users,email;maxlength:50;',
                        'password' => 'required;minlength:6',
                        'password_confirmation' => 'required;equalTo:password',
                        'accept_aggrement' => 'required',
                    ])) {

                $userModel = new User();
                $row = [
                    'username' => Request::item('username'),
                    'email' => Request::item('email'),
                    'password' => $userModel->encryptPassword(Request::item('password')),
                    'created_at' => date("Y-m-d H:i:s")
                ];
                $userId = $userModel->insert($row);
                return View::make("frontend.success", ['message' => Lang::get('user.register_success')]);
            } else {
                return Redirect::back()->withErrors();
            }
        }
        return View::make("frontend.register", $vars);
    }

    public function changePassword() {
        $vars = ['message' => ''];
        if (Request::isPost()) {
            if (Validator::validate(Request::all(), [
                        'old_password' => 'required;minlength:6',
                        'new_password' => 'required;minlength:6',
                        'password_confirmation' => 'required;equalTo:new_password',
                    ])) {
                $old_password = post("old_password");
                $new_password = post("new_password");

                $user = Auth::user();

                $id = $user->id;
                $tmpUser = User::find($id);

                if ($tmpUser->password == (new User())->encryptPassword($old_password)) {
                    $new_pass = (new User())->encryptPassword($new_password);
                    //echo $new_pass;
                    User::where('id', $id)->update(['password' => $new_pass]);
                    $vars['message'] = Lang::get('user.password_changed');
                    return View::make('frontend.success', $vars);
                } else {
                    Validator::setError("old_password", Lang::get("user.wrong_old_password"));
                }
            }


            return Redirect::back()->withErrors();
        }
        return View::make('frontend.user.changePassword', $vars);
    }

}
