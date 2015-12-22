<?php

/**
 * @author Tran Hoang Hiep
 * @copyright 2015
 */
 
 class HomeController 
 {
    function IndexAction() {
        global $smarty, $router, $db, $_SITE_DOMAIN; 
        $smarty->assign('route', $router);
        $smarty->assign('name', $_SESSION['user']);
        $smarty->display('index.tpl'); 
    }
 }