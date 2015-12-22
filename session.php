<?php

/**
 * @author Tran Hoang Hiep
 * @copyright 2015
 */

session_start();

if(isset($_SESSION['LAST_ACTIVITY']))
{
    if(isset($_SESSION['remember'])) {
        if($_SESSION['remember'] && (time() - $_SESSION['LAST_ACTIVITY'] > 60*60*7))
        {
            //last request was more than 7 days
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }
    }
    elseif (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
    } else {
        $_SESSION['LAST_ACTIVITY'] = time();
    }
}
