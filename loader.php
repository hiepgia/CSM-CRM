<?php

/**
 * @author Tran Hoang Hiep
 * @copyright 2015
 */
include_once 'session.php';
include_once 'config.php';
require_once 'vendor/Smarty/Autoloader.php';
require_once 'vendor/Database/MysqliDb.php';


//theme engine
Smarty_Autoloader::register();

$smarty = new Smarty();

$smarty->setTemplateDir('../view/');
$smarty->setCompileDir('../stograge/view_c');
$smarty->setCacheDir('../stograge/cache');
$smarty->setConfigDir('../stograge/configs');

$smarty->cache_lifetime = 10; //60 mins

//Database Engine
global $server;

$db = new MysqliDb (Array (
                'host' => $server['host'],
                'username' => $server['user'], 
                'password' => $server['pass'],
                'db'=> $server['dbname'],
                'port' => $server['port'],
                'prefix' => $server['prefix'],
                'charset' => 'utf8'));


//route all request
include 'route.php';