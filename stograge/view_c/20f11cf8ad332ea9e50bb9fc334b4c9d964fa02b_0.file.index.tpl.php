<?php
/* Smarty version 3.1.28, created on 2015-12-18 09:57:56
  from "C:\inetpub\wwwroot\amd\view\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56737634cb1799_32118939',
  'file_dependency' => 
  array (
    '20f11cf8ad332ea9e50bb9fc334b4c9d964fa02b' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\amd\\view\\index.tpl',
      1 => 1450407383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56737634cb1799_32118939 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AMD: Sale Management System</title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">      
          
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
        
    </head>
    <body class="toggled sw-toggled">
        <header id="header" class="clearfix" data-current-skin="red">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="logo hidden-xs">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['route']->value->generate('HomePage');?>
"><img style="width: 100px;" src="img/logo-w.png" /></a>
                </li>

                <li class="pull-right">
                    <ul class="top-menu">
                        

                        <li id="top-search">
                            <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                        </li>

                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-email"></i>
                                <i class="tmn-counts">6</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview">
                                    <div class="lv-header">
                                        Messages
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-notifications"></i>
                                <i class="tmn-counts">9</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification

                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class="lv-footer" href="">View Previous</a>
                                </div>

                            </div>
                        </li>
                       
                        <li class="dropdown">
                            <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu dm-icon pull-right">                               
                                <li class="hidden-xs">
                                    <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Vào chế độ toàn màn hình</a>
                                </li>
                                <li class="divider hidden-xs"></li>
                                <li>
                                    <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Xóa dữ liệu cục bộ</a>
                                </li>
                                
                            </ul>
                        </li>                        
                    </ul>
                </li>
            </ul>


            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <div class="tsw-inner">
                    <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
                    <input type="text">
                </div>
            </div>
        </header>
        
        <section id="main" data-layout="layout-1">
            <aside id="sidebar" class="sidebar c-overflow">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            <img src="img/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="profile-info">
                            Malinda Hollaway

                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-view-compact"></i> Headers</a>

                        <ul>
                            <li><a href="textual-menu.html">Textual menu</a></li>
                            <li><a href="image-logo.html">Image logo</a></li>
                            <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                        </ul>
                    </li>
                    <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-widgets"></i> Widgets</a>

                        <ul>
                            <li><a href="widget-templates.html">Templates</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

                        <ul>
                            <li><a href="tables.html">Normal Tables</a></li>
                            <li><a href="data-tables.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                        <ul>
                            <li><a href="form-elements.html">Basic Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validations.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                        <ul>
                            <li><a href="colors.html">Colors</a></li>
                            <li><a href="animations.html">Animations</a></li>
                            <li><a href="box-shadow.html">Box Shadow</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="preloaders.html">Preloaders</a></li>
                            <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="other-components.html">Others</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-trending-up"></i>Charts</a>
                        <ul>
                            <li><a href="flot-charts.html">Flot Charts</a></li>
                            <li><a href="other-charts.html">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                        <ul>
                            <li><a href="photos.html">Default</a></li>
                            <li><a href="photo-timeline.html">Timeline</a></li>
                        </ul>
                    </li>

                    <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                        <ul>
                            <li><a href="profile-about.html">Profile</a></li>
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="wall.html">Wall</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login and Sign Up</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="form-examples.html"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                        <ul>
                            <li><a href="form-elements.html">Level 2 link</a></li>
                            <li><a href="form-components.html">Another level 2 Link</a></li>
                            <li class="sub-menu">
                                <a href="form-examples.html">I have children too</a>

                                <ul>
                                    <li><a href="">Level 3 link</a></li>
                                    <li><a href="">Another Level 3 link</a></li>
                                    <li><a href="">Third one</a></li>
                                </ul>
                            </li>
                            <li><a href="form-validations.html">One more 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://wrapbootstrap.com/theme/material-admin-responsive-angularjs-WB011H985"><i class="zmdi zmdi-money"></i> Buy this template</a>
                    </li>
                </ul>
            </aside>
            
            <section id="content">
                <div class="container">
                    <div class="block-header">                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    <div class="dash-widgets">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div id="site-visits" class="dash-widget-item bgm-teal">
                                    <div class="dash-widget-header">
                                        <div class="p-20">
                                            <div class="dash-widget-visits"></div>
                                        </div>
                                        
                                        <div class="dash-widget-title">Bán trong quý</div>
                                        
                                        <ul class="actions actions-alt">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>
                                                
                                                
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="p-20">
                                        
                                        <div class="table-responsive">
                                        <table class="table" style="background: transparent;">
                                            <thead>
                                                <tr>
                                                    <th>Khu vực</th>
                                                    <th>Danh số dự kiến</th>
                                                    <th>Số hiện tại</th>
                                                    <th>Còn</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Hồ Chí Minh</td>
                                                    <td>1100</td>
                                                    <td>510</td>
                                                    <td>590</td>
                                                </tr>
                                                <tr>
                                                    <td>Miền Bắc</td>
                                                    <td>1100</td>
                                                    <td>510</td>
                                                    <td>590</td>
                                                </tr>
                                                <tr>
                                                    <td>Miền Tây</td>
                                                    <td>1100</td>
                                                    <td>510</td>
                                                    <td>590</td>
                                                </tr>
                                                <tr>
                                                    <td>Miền Trung</td>
                                                    <td>1100</td>
                                                    <td>510</td>
                                                    <td>590</td>
                                                </tr> 
                                                <tr>
                                                    <td>Tổng</td>
                                                    <td>4400</td>
                                                    <td>510</td>
                                                    <td>590</td>
                                                </tr>                                   
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6">
                                <div id="pie-charts" class="dash-widget-item">
                                    <div class="bgm-pink">
                                        <div class="dash-widget-header">
                                            <div class="dash-widget-title"><b>Bán hàng tuần qua</b></div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div class="text-center p-20 m-t-25">
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="p-t-20 p-b-20 text-center">
                                        ABC Cái này là statics sale
                                    </div>
    
                                </div>
                            </div>
                            
                            
    
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Recent Items -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Recent Items <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="">Other Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="card-body m-t-0">
                                    <table class="table table-inner table-vmiddle">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th style="width: 60px">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="f-500 c-cyan">2569</td>
                                                <td>Samsung Galaxy Mega</td>
                                                <td class="f-500 c-cyan">$521</td>
                                            </tr>
                                            <tr>
                                                <td class="f-500 c-cyan">9658</td>
                                                <td>Huawei Ascend P6</td>
                                                <td class="f-500 c-cyan">$440</td>
                                            </tr>
                                            <tr>
                                                <td class="f-500 c-cyan">1101</td>
                                                <td>HTC One M8</td>
                                                <td class="f-500 c-cyan">$680</td>
                                            </tr>
                                            <tr>
                                                <td class="f-500 c-cyan">6598</td>
                                                <td>Samsung Galaxy Alpha</td>
                                                <td class="f-500 c-cyan">$870</td>
                                            </tr>
                                            <tr>
                                                <td class="f-500 c-cyan">4562</td>
                                                <td>LG G3</td>
                                                <td class="f-500 c-cyan">$690</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="recent-items-chart" class="flot-chart"></div>
                            </div>
                            
                            <!-- Todo Lists -->
                            <div id="todo-lists">
                                <div class="tl-header">
                                    <h2>Todo Lists</h2>
                                    <small>Add, edit and manage your Todo Lists</small>
                                    
                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                    
                                <div class="clearfix"></div>
                                    
                                <div class="tl-body">
                                    <div id="add-tl-item">
                                        <i class="add-new-item zmdi zmdi-plus"></i>
                                        
                                        <div class="add-tl-body">
                                            <textarea placeholder="What you want to do..."></textarea>
                                            
                                            <div class="add-tl-actions">
                                                <a href="" data-tl-action="dismiss"><i class="zmdi zmdi-close"></i></a>
                                                <a href="" data-tl-action="save"><i class="zmdi zmdi-check"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox media">
                                        <div class="pull-right">
                                            <ul class="actions actions-alt">
                                                <li class="dropdown">
                                                    <a href="" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Delete</a></li>
                                                        <li><a href="">Archive</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                <span>Thu thập thông tin về đối thủ</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox media">
                                        <div class="pull-right">
                                            <ul class="actions actions-alt">
                                                <li class="dropdown">
                                                    <a href="" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Delete</a></li>
                                                        <li><a href="">Archive</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                <span>In vel imperdiet leoorbi mollis leo sit amet quam fringilla varius mauris orci turpis</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox media">
                                        <div class="pull-right">
                                            <ul class="actions actions-alt">
                                                <li class="dropdown">
                                                    <a href="" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Delete</a></li>
                                                        <li><a href="">Archive</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                <span>Suspendisse quis sollicitudin erosvel dictum nunc</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox media">
                                        <div class="pull-right">
                                            <ul class="actions actions-alt">
                                                <li class="dropdown">
                                                    <a href="" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Delete</a></li>
                                                        <li><a href="">Archive</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                <span>Curabitur egestas finibus sapien quis faucibusras bibendum ut justo at sagittis. In hac habitasse platea dictumst</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox media">
                                        <div class="pull-right">
                                            <ul class="actions actions-alt">
                                                <li class="dropdown">
                                                    <a href="" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Delete</a></li>
                                                        <li><a href="">Archive</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                <span>Suspendisse potenti. Cras dolor augue, tincidunt sit amet lorem id, blandit rutrum libero</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox media">
                                        <div class="pull-right">
                                            <ul class="actions actions-alt">
                                                <li class="dropdown">
                                                    <a href="" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert"></i>
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Delete</a></li>
                                                        <li><a href="">Archive</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                <span>Proin luctus dictum nisl id auctor. Nullam lobortis condimentum arcu sit amet gravida</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <!-- Calendar -->
                            <div id="calendar-widget"></div>

                            <!-- Recent Posts -->
                            <div class="card">
                                <div class="card-header ch-alt m-b-20">
                                    <h2>Recent Posts <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
                                    <ul class="actions">
                                        <li>
                                            <a href="">
                                                <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="zmdi zmdi-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Change Date Range</a>
                                                </li>
                                                <li>
                                                    <a href="">Change Graph Type</a>
                                                </li>
                                                <li>
                                                    <a href="">Other Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    
                                    <button class="btn bgm-cyan btn-float"><i class="zmdi zmdi-plus"></i></button>
                                </div>
                                
                                <div class="card-body">
                                    <div class="listview">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-footer" href="">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2015 Material Admin
            
            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
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
 src="vendors/bower_components/flot/jquery.flot.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/flot/jquery.flot.stack.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/flot.curvedlines/curvedLines.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/sparklines/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="vendors/bower_components/moment/min/moment.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/Waves/dist/waves.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bootstrap-growl/bootstrap-growl.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <?php echo '<script'; ?>
 src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <?php echo '<script'; ?>
 src="js/flot-charts/bar-chart.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/flot-charts/curved-line-chart.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/flot-charts/line-chart.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/charts.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="js/functions.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(window).load(function(){
            //Welcome Message (not for login page)
            function notify(message, type){
                $.growl({
                    message: message
                },{
                    type: type,
                    allow_dismiss: false,
                    label: 'Cancel',
                    className: 'btn-xs btn-inverse',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2500,
                    animate: {
                            enter: 'animated fadeIn',
                            exit: 'animated fadeOut'
                    },
                    offset: {
                        x: 20,
                        y: 85
                    }
                });
            };
            
            if (!$('.login-content')[0]) {
                notify('Chào mừng <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
', 'inverse');
            } 
        });
        
        <?php echo '</script'; ?>
>
        
        
    </body>
  </html><?php }
}
