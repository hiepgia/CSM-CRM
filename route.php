<?php

/**
 * @author Tran Hoang Hiep
 * @copyright 2015
 */
require 'vendor/AltoRouter.php';
global $db;
$router = new AltoRouter();

//Home Page Routes
//method, URI, Target, Param, Name
$router->map('GET','/', array('c' => 'HomeController', 'a' => 'IndexAction'), 'HomePage');

//Login Routes
$router->map('GET|POST','/login', array('c' => 'LoginController', 'a' => 'LoginAction'), 'LoginPage');
$router->map('GET','/logout', array('c' => 'LoginController', 'a' => 'LogoutAction'), 'LogoutPage');
$router->map('POST','/lost-password', array('c' => 'LoginController', 'a' => 'LostPasswordAction'), 'LostPasswordPage');
//CRM - Customer Relation Management Routes

//RMA - Return Material Assistant Routes

//CSM - Customer Saller Management Routes

//Hiển thị thông tin người dùng
$router->map('GET','/users/[i:id]', array('c' => 'UserController', 'a' => 'ListAction'), 'users_show');

// match current request url
$match = $router->match();
//enforce all user must login!

if(!isset($_SESSION['user']) && !($match['name'] == "LoginPage" || $match['name'] == "LogoutPage"))
    header('Location: ' . $_SITE_DOMAIN . '/login');  
      
if(!isset($match['target']['c']))
{
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Server Error', true, 404);
}


switch($match['target']['c']) {
    case "HomeController": 
        include 'controller/HomeController.php';
        if( $match && is_callable("HomeController::" . $match['target']['a']) ) {
        	call_user_func_array("HomeController::" . $match['target']['a'], $match['params'] ); 
        } else {
        	// no route was matched
        	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Server Error', true, 404);
            exit;
        }
        break;
    case "LoginController": 
        include 'controller/LoginController.php';
        if( $match && is_callable("LoginController::" . $match['target']['a']) ) {
        	call_user_func_array("LoginController::" . $match['target']['a'], $match['params'] ); 
        } else {
        	// no route was matched
        	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Server Error', true, 404);
            exit;
        }
        break;
    default:
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Server Error', true, 404);
        break;
}


//Processing Routes
?>


