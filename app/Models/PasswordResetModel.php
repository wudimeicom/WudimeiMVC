<?php
namespace App\Models;

class PasswordResetModel extends \Wudimei\DB\Model{
	public $table = "password_resets";
	public $connection = "default";
}