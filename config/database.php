<?php

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'PDO_MYSQL', // 'PDO_MYSQL' 'Wudimei\\DB\\Query\\PDO_MYSQL' 'your\\driver\\className'
            'host' => 'localhost',
            'database' => 'wudimei_mvc',
            'username' => 'admin',
            'password' => '123456',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => 'w_',
            'sql_error_display_method' => 'output',
        ]
    ]
];
