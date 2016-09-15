<?php
return [ 
		'Config' => [ 
				'class' => "Wudimei\\StaticProxies\\Config",
				'init_method' => 'setDir',
				'args' => [ 
						__DIR__ 
				] 
		],
		'DB' => [ 
				'class' => "Wudimei\\StaticProxies\\DB",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . "/../config/database.php"
				] 
		],
		'Cache' => [ 
				'class' => "Wudimei\\StaticProxies\\Cache",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__.'/../config/cache.php'
				] 
		],
		'Session' => [ 
				'class' => "Wudimei\\StaticProxies\\Session",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/../config/session.php'
				] 
		],
		'View' => [ 
				'class' => "Wudimei\\StaticProxies\\View",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/../config/view.php'
				] 
		],
		
		'Lang' => [ 
				'class' => "Wudimei\\StaticProxies\\Lang",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . "/../config/lang.php"
				] 
		],
		'Auth' => [ 
				'class' => "Wudimei\\StaticProxies\\Auth",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/../config/auth.php'
				] 
		],
		'Request' => [ 
				'class' => "Wudimei\\StaticProxies\\Request",
		],
		'Redirect' => [ 
				'class' => "Wudimei\\StaticProxies\\Redirect",
		],
		'Validator' => [ 
				'class' => "Wudimei\\StaticProxies\\Validator",
		],
		'XSS' => [ 
				'class' => "Wudimei\\StaticProxies\\XSS",
		],
		'Mail' => [ 
				'class' => "Wudimei\\StaticProxies\\Mail",
				'init_method' => 'loadConfig',
				'args' => [
						__DIR__ . '/../config/mail.php'
				]
		],
		'Setting' => [ 
				'class' => "Wudimei\\StaticProxies\\Setting",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/../config/setting.php'
				] 
		],
		'Router' => [ 
				'class' => "Wudimei\\StaticProxies\\Router",
				'init_method' => 'handle',
				'args' => [ 
						__DIR__ . '/../app/routes.php'
				] 
		],
];