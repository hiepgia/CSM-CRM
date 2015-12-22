<?php

/**
 * @author Tran Hoang Hiep
 * @copyright 2015
 */
 
 class LoginController 
 {
    function IndexAction() {
        
    }
    
    function LoginAction() {
        global $smarty, $router, $db, $_SITE_DOMAIN; 
        if(isset($_SESSION['user']))
            header('Location: ' . $_SITE_DOMAIN . '/');         
              
        if(isset($_POST['user']) && isset($_POST['password'])){           
            $user = addslashes($_POST['user']);
            $password = md5(addslashes($_POST['password']));
            $params = Array($user, $password);
            $result_user = $db->rawQueryOne("SELECT * FROM User WHERE username=? AND password=?", $params);
            if($db->count > 0)
            {
                $_SESSION['LAST_ACTIVITY'] = time();                
                $_SESSION['user'] = $user;
                $_SESSION['idUser'] = $result_user['idUser'];
                
                if(isset($_POST['remember-me']))
                {
                    $_SESSION['remember'] = 1;
                }
                header('Location: ' . $_SITE_DOMAIN . '/');  
                exit;
            }
        }        
        
        $smarty->assign('route', $router);
        $smarty->display('login.tpl');
    }
    
    function LostPasswordAction()
    {
        //Being implement!
    }
    
    function LogoutAction() {
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        echo "Logged out";
    }
 }