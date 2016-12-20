<?php
return array(
		'model' => 'App\\Models\\User',
		'table' => 'w_users',
		/**
		 * token name in cookie
		 */
		'token_name' => 'wudimei_tk',
		/**
		 * token lifetime,in seconds.
		 * 0：till this session
		 * 
		 */
		'lifetime' =>  0,
		/**
		 * token's cookie path
		 */
		'path' => '/',
		/**
		 * token's cookie domain
		 */
		'domain' => null,
		 /**
		  * token's cookie secure
		  */
		'secure' => false,
		'httponly' => false,
);