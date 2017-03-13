<?php
require_once 'D:/www/wudimei/library/wudimei.phar';
require_once 'phar://wudimei.phar/Lang.php';
require_once 'phar://wudimei.phar/Menu.php';

require_once 'phar://wudimei.phar/Menu/Item.php';
require_once 'phar://wudimei.phar/StaticProxyLoader.php';
require_once 'phar://wudimei.phar/StaticProxy.php';
require_once 'phar://wudimei.phar/StaticProxies/Menu.php';
require_once 'phar://wudimei.phar/StaticProxies/Lang.php';
use Wudimei\StaticProxies\Menu;
use Wudimei\StaticProxies\Lang;
class_alias('Wudimei\StaticProxies\Lang', 'Lang');

Menu::item ('id1', 'http://wudimei.com', 'wudimei',   "fa-user", $closure = null);
echo Menu::getHtml();
