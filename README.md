http://wudimei.com


# requirement
1. php 7/8

# installation 1
1. composer install
```cmd
 php composer.phar install
```


2. please import `/wudimei_mvc.sql` to mariadb/mysql

3. please edit files in `/config` folder 
4. nginx rewrite sample
```nginx
server {
    listen       80;
    server_name  127.0.10.2;
    root   /www/open/WudimeiMVC/public;
    location / {
        index  index.php index.html index.htm;
        try_files $uri $uri/ /index.php?$query_string;
    }
    location ~ \.php$ {
        fastcgi_pass   127.0.0.1:9090;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params;
     }
}
```

# backend
http://Your_ip_or_domain/backend_2016

user: yqr2 

password:123456

# links
1. wudimei template engine
https://github.com/wudimei/template
2. wudimei php
https://github.com/wudimeicom/wudimeiphp
3. IDE Content Assist for WudimeiPHP
https://github.com/yangqingrong/WudimeiPHP_IDE_Content_Assist



