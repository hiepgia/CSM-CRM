<?php
/* Smarty version 3.1.28, created on 2015-12-17 13:17:43
  from "C:\inetpub\wwwroot\amd\view\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567253874afe18_23682494',
  'file_dependency' => 
  array (
    'e955c9aaea3af6e74f31a7454c6c970be6da40e3' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\amd\\view\\login.tpl',
      1 => 1450333060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567253874afe18_23682494 ($_smarty_tpl) {
?>
<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>AMD: Sale Management</title>
        
        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet"/>
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet"/>
            
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet"/>
        <link href="css/app.min.2.css" rel="stylesheet"/>
    </head>
    
    <body class="login-content">
    
        <!-- Login -->   
        
        <div class="lc-block toggled" id="l-login">
        <form class="form-login  form-horizontal form-horizontal-simple" action="<?php echo $_smarty_tpl->tpl_vars['route']->value->generate('LoginPage');?>
" enctype="application/x-www-form-urlencoded" method="post">
            <p class="text-center"><img style="width:150px" src="img/logo.png" /></p>
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" name="user" placeholder="Username"/>
                </div>
            </div>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                <div class="fg-line">
                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                </div>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember-me" "value=""/>
                    <i class="input-helper"></i>
                    Keep me signed in
                </label>
            </div>
            
            <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
            </form>
            <ul class="login-navigation">                
                <li data-block="#l-forget-password" class="btn  bgm-orange">Forgot Password?</li> 
            </ul>
            
               
                    
          
        </div>
        
        
        
        <!-- Forgot Password -->
        <div class="lc-block" id="l-forget-password">
        <form class="form-login  form-horizontal form-horizontal-simple" action="<?php echo $_smarty_tpl->tpl_vars['route']->value->generate('LostPasswordPage');?>
" enctype="application/x-www-form-urlencoded" method="post">
            <p class="text-left">Nhập email lúc đăng ký để tiếp tục. Kiểm tra email để lấy đường dẫn khởi tạo lại password</p>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" name="email" placeholder="Email Address" />
                </div>
            </div>
            
            <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
            
            <ul class="login-navigation">
                <li data-block="#l-login" class="btn bgm-green">Login</li>
                
            </ul>
        </form>
        </div>
        
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        <?php echo '<script'; ?>
 src="vendors/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="vendors/bower_components/Waves/dist/waves.min.js"><?php echo '</script'; ?>
>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <?php echo '<script'; ?>
 src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        
        <?php echo '<script'; ?>
 src="js/functions.js"><?php echo '</script'; ?>
>
        
    </body>
</html><?php }
}
