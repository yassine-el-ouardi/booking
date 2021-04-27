<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/007.ico" /> 
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-custom custom-sidebar-color logo-custom">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <img id="logo" alt="" src="assets/img/favicon-apple.png">
                   <span class="logo-default" >EasyBooking</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user8.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user5.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> John </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">settings</i>
	                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> John Deo </div>
                                            <div class="profile-usertitle-job"> Manager </div>
                                        </div>
                                        <div class="sidebar-userpic-btn">
									        <a class="tooltips" href="user_profile.html" data-placement="top" data-original-title="Profile">
									        	<i class="material-icons">person_outline</i>
									        </a>
									        <a class="tooltips" href="email_inbox.html" data-placement="top" data-original-title="Mail">
									        	<i class="material-icons">mail_outline</i>
									        </a>
									        <a class="tooltips" href="chat.html" data-placement="top" data-original-title="Chat">
									        	<i class="material-icons">chat</i>
									        </a>
									        <a class="tooltips" href="login.html" data-placement="top" data-original-title="Logout">
									        	<i class="material-icons">input</i>
									        </a>
									    </div>
	                            </div>
	                        </li>
	                        <li class="menu-heading">
			                	<span>-- Main</span>
			                </li>
	                        <li class="nav-item start active">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item active">
	                                    <a href="index.html" class="nav-link ">
	                                        <span class="title">Dashboard 1</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="dashboard2.html" class="nav-link ">
	                                        <span class="title">Dashboard 2</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Email</span>
	                                <span class="arrow"></span>
	                                <span class="label label-rouded label-menu label-danger">new</span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="email_inbox.html" class="nav-link ">
	                                        <span class="title">Inbox</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="email_view.html" class="nav-link ">
	                                        <span class="title">View Mail</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="email_compose.html" class="nav-link ">
	                                        <span class="title">Compose Mail</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">business_center</i>
	                                <span class="title">Booking</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="new_booking.html" class="nav-link ">
	                                        <span class="title">New Booking</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="view_booking.html" class="nav-link ">
	                                        <span class="title">View Booking</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="edit_booking.html" class="nav-link ">
	                                        <span class="title">Edit Booking</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">vpn_key</i>
	                                <span class="title">Rooms</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="add_room.html" class="nav-link ">
	                                        <span class="title">Add Room Details</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="all_rooms.html" class="nav-link ">
	                                        <span class="title">View All Rooms</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="edit_room.html" class="nav-link ">
	                                        <span class="title">Edit Room Details</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">group</i>
	                                <span class="title">Staff</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="add_staff.html" class="nav-link ">
	                                        <span class="title">Add Staff Details</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="all_staffs.html" class="nav-link ">
	                                        <span class="title">View All Staffs</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="edit_staff.html" class="nav-link ">
	                                        <span class="title">Edit Staff Details</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">local_taxi</i>
	                                <span class="title">Transportation</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="add_vehicle.html" class="nav-link ">
	                                        <span class="title">Add Vehicle Details</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="all_vehicles.html" class="nav-link ">
	                                        <span class="title">View All Vehicle</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="edit_vehicle.html" class="nav-link ">
	                                        <span class="title">Edit Vehicle Details</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="menu-heading m-t-20">
			                	<span>-- Layout, Apps &amp; Widget</span>
			                </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
	                                <span class="title">Layout</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="layout_boxed.html" class="nav-link "> <span class="title">Boxed</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_full_width.html" class="nav-link "> <span class="title">Full Width</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_collapse.html" class="nav-link "> <span class="title">Collapse Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_right_sidebar.html" class="nav-link "> <span class="title">Right Sidebar</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_sidebar_hover_menu.html" class="nav-link "> <span class="title">Hover Sidebar Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="layout_mega_menu.html" class="nav-link "> <span class="title">Mega Menu</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">grain</i>
	                                <span class="title">Apps</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="chat.html" class="nav-link "> <span class="title">Chat</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contact_list.html" class="nav-link "> <span class="title">Contact List</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contact_grid.html" class="nav-link "> <span class="title">Contact Grid</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="gallery.html" class="nav-link "> <span class="title">Gallery</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="support.html" class="nav-link "> <span class="title">Support</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="calendar.html" class="nav-link "> <span class="title">Calendar</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="widget.html" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
	                                <span class="title">Widget</span> 
	                            </a>
	                        </li>
	                        <li class="menu-heading m-t-20">
			                	<span>-- Elements, Forms &amp; Tables</span>
			                </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dvr</i>
	                                <span class="title">UI Elements</span> 
	                                <span class="label label-rouded label-menu label-warning">new</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="buttons.html" class="nav-link ">
	                                        <span class="title">Buttons</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="alert.html" class="nav-link ">
	                                        <span class="title">Alert</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="tabs_accordions_navs.html" class="nav-link ">
	                                        <span class="title">Tabs &amp; Accordions</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="typography.html" class="nav-link ">
	                                        <span class="title">Typography</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="notification.html" class="nav-link ">
	                                        <span class="title">Notifications</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="sweet_alert.html" class="nav-link ">
	                                        <span class="title">Sweet Alert</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="panels.html" class="nav-link ">
	                                        <span class="title">Panels</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="grid.html" class="nav-link ">
	                                        <span class="title">Grids</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="tree.html" class="nav-link ">
	                                        <span class="title">Tree View</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="carousel.html" class="nav-link ">
	                                        <span class="title">Carousel</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="animation.html" class="nav-link ">
	                                        <span class="title">Animations</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">store</i>
	                                <span class="title">Material Elements</span> 
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="material_button.html" class="nav-link ">
	                                        <span class="title">Buttons</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_tab.html" class="nav-link ">
	                                        <span class="title">Tabs</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_chips.html" class="nav-link ">
	                                        <span class="title">Chips</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_grid.html" class="nav-link ">
	                                        <span class="title">Grid</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_form.html" class="nav-link ">
	                                        <span class="title">Form</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_datepicker.html" class="nav-link ">
	                                        <span class="title">DatePicker</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_select.html" class="nav-link ">
	                                        <span class="title">Select Item</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_loading.html" class="nav-link ">
	                                        <span class="title">Loading</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_menu.html" class="nav-link ">
	                                        <span class="title">Menu</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_slider.html" class="nav-link ">
	                                        <span class="title">Slider</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_tables.html" class="nav-link ">
	                                        <span class="title">Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_toggle.html" class="nav-link ">
	                                        <span class="title">Toggle</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_badges.html" class="nav-link ">
	                                        <span class="title">Badges</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">subtitles</i>
	                                <span class="title">Forms </span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="layouts_form.html" class="nav-link ">
	                                        <span class="title">Form Layout</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="advance_form.html" class="nav-link ">
	                                        <span class="title">Advance Component</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="validation_form.html" class="nav-link ">
	                                        <span class="title">Form Validation</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="steps.html" class="nav-link ">
	                                        <span class="title">Wizard</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="file_upload.html" class="nav-link ">
	                                        <span class="title">File Upload</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="editable_form.html" class="nav-link ">
	                                        <span class="title">Editor</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">list</i>
	                                <span class="title">Data Tables</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="basic_table.html" class="nav-link ">
	                                        <span class="title">Basic Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="advanced_table.html" class="nav-link ">
	                                        <span class="title">Advance Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="editable_table.html" class="nav-link ">
	                                        <span class="title">Editable Tables</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="group_table.html" class="nav-link ">
	                                        <span class="title">Grouping</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="table_data.html" class="nav-link ">
	                                        <span class="title">Tables With Sourced Data</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="menu-heading m-t-20">
			                	<span>-- Extra Components</span>
			                </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">timeline</i>
	                                <span class="title">Charts</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="charts_echarts.html" class="nav-link ">
	                                        <span class="title">eCharts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="charts_morris.html" class="nav-link ">
	                                        <span class="title">Morris Charts</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="charts_chartjs.html" class="nav-link ">
	                                        <span class="title">Chartjs</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">map</i>
	                                <span class="title">Maps</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="google_maps.html" class="nav-link ">
	                                        <span class="title">Google Maps</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="vector_maps.html" class="nav-link ">
	                                        <span class="title">Vector Maps</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">album</i>
	                                <span class="title">Icons</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="fontawesome_icons.html" class="nav-link "> <span class="title">Font Awesome</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="simpleline_icons.html" class="nav-link "> <span class="title">Simple Line Icon</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="material_icons.html" class="nav-link "> <span class="title">Material Icon</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">description</i>
	                            <span class="title">Extra pages</span> 
	                            <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                            	<li class="nav-item">
	                                    <a href="timeline.html" class="nav-link "> <span class="title">Timeline</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="login.html" class="nav-link "> <span class="title">Login</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="sign_up.html" class="nav-link "> <span class="title">Registration</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="user_profile.html" class="nav-link "><span class="title">Profile</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="pricing.html" class="nav-link "><span class="title">Pricing</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="contactus.html" class="nav-link "> <span class="title">Contact Us</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="invoice.html" class="nav-link "><span class="title">Invoice</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                	<a href="faq.html" class="nav-link "><span class="title">Faq</span>
										</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="lock_screen.html" class="nav-link "> <span class="title">Lock Screen</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="blank_page.html" class="nav-link "> <span class="title">Blank Page</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="javascript:;" class="nav-link nav-toggle">
	                                <i class="material-icons">slideshow</i>
	                                <span class="title">Multi Level Menu</span>
	                                <span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-university"></i> Item 1
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="javascript:;" class="nav-link nav-toggle">
	                                                <i class="fa fa-bell-o"></i> Arrow Toggle
	                                                <span class="arrow "></span>
	                                            </a>
	                                            <ul class="sub-menu">
	                                                <li class="nav-item">
	                                                    <a href="javascript:;" class="nav-link">
	                                                        <i class="fa fa-calculator"></i> Sample Link 1</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-clone"></i> Sample Link 2</a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a href="#" class="nav-link">
	                                                        <i class="fa fa-cogs"></i> Sample Link 3</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-rss"></i> Sample Link 2</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-hdd-o"></i> Sample Link 3</a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="javascript:;" class="nav-link nav-toggle">
	                                        <i class="fa fa-gavel"></i> Arrow Toggle
	                                        <span class="arrow"></span>
	                                    </a>
	                                    <ul class="sub-menu">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-paper-plane"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-power-off"></i> Sample Link 1</a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link">
	                                                <i class="fa fa-recycle"></i> Sample Link 1
	                                             </a>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="#" class="nav-link">
	                                        <i class="fa fa-volume-up"></i> Item 3 </a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>

                    <div>
                        @yield('content')
                    </div>

                            <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Spice Hotel Template By
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RedStar Theme</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
    <script src="assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js" ></script>
    <!-- morris chart -->
    <script src="assets/plugins/morris/morris.min.js" ></script>
    <script src="assets/plugins/morris/raphael-min.js" ></script>
    <script src="assets/js/pages/chart/morris/morris_home_data.js" ></script>
    <!-- end js include path -->

                </body>
                </html>