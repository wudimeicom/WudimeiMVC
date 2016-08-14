<?php
namespace App\Frontend\Models;

class User extends \Wudimei\Auth\User{
	public $table = "users";
	public $connection = "default";

}
