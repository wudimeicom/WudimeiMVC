<?php
return [ 
        'Alert' => [
                'class' => "Wudimei\\StaticProxies\\Alert"
        ],
        'Auth' => [
                'class' => "Wudimei\\StaticProxies\\Auth",
                'init_method' => 'loadConfig',
                'args' => [
                        __DIR__ . '/auth.php'
                ]
        ],
		'Config' => [ 
				'class' => "Wudimei\\StaticProxies\\Config",
				'init_method' => 'setDir',
				'args' => [ 
						__DIR__ 
				] 
		],
		'Cache' => [ 
				'class' => "Wudimei\\StaticProxies\\Cache",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__.'/cache.php'
				] 
		],
		'DB' => [ 
				'class' => "Wudimei\\StaticProxies\\DB",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . "/database.php"
				] 
		],
        'Event' => [
                'class' => "Wudimei\\StaticProxies\\Event",
        ],
        'Lang' => [ 
				'class' => "Wudimei\\StaticProxies\\Lang",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . "/lang.php"
				] 
		],
		'Mail' => [ 
				'class' => "Wudimei\\StaticProxies\\Mail",
				'init_method' => 'loadConfig',
				'args' => [
						__DIR__ . '/mail.php'
				]
		],
        'Menu' => [
                'class' => "Wudimei\\StaticProxies\\Menu",
                'init_method' => 'initConfig',
                'args' => [
                        [
                                'backend_menu' => __DIR__ . '/backend_menu.php'
                        ]
        
                ]
        ],
		'Redirect' => [ 
				'class' => "Wudimei\\StaticProxies\\Redirect",
		],
		'Request' => [ 
				'class' => "Wudimei\\StaticProxies\\Request",
		],
        'Route' => [
                'class' => "Wudimei\\StaticProxies\\Route"
        ],
        'Router' => [
                'class' => "Wudimei\\StaticProxies\\Router",
                'init_method' => 'loadConfig',
                'args' => [
                        __DIR__ . '/../app/routes.php'
                ]
        ],
        'Security' => [ 
				'class' => "Wudimei\\StaticProxies\\Security",
		],
		'Session' => [ 
				'class' => "Wudimei\\StaticProxies\\Session",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/session.php'
				] 
		],
		'Setting' => [ 
				'class' => "Wudimei\\StaticProxies\\Setting",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/setting.php'
				] 
		],
		'Validator' => [ 
				'class' => "Wudimei\\StaticProxies\\Validator",
		],
		'View' => [ 
				'class' => "Wudimei\\StaticProxies\\View",
				'init_method' => 'loadConfig',
				'args' => [ 
						__DIR__ . '/view.php'
				] 
		],
		'XSS' => [ 
				'class' => "Wudimei\\StaticProxies\\XSS",
		],
];