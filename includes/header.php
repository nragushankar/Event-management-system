<?php
	session_start();
	include_once("db_connect.php");
	include_once("functions.php");
	ini_set("display_errors",1);
	error_reporting(E_ERROR);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Management System</title>
<!-- // Stylesheets // -->
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<link rel="stylesheet" type="text/css" href="./css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="./css/contentslider.css" />
<link rel="stylesheet" type="text/css" href="./css/jquery.fancybox-1.3.1.css" />
<link rel="stylesheet" type="text/css" href="./css/slider.css" />
<link rel="stylesheet" type="text/css" href="./css/jquery-ui.css">

<!-- // Javascripts // -->
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="./js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="./js/jquery.anythingslider.js"></script>
<script type="text/javascript" src="./js/anythingslider.js"></script>
<script type="text/javascript" src="./js/animatedcollapse.js"></script>
<script type="text/javascript" src="./js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="./js/menu.js"></script>
<script type="text/javascript" src="./js/contentslider.js"></script>
<script type="text/javascript" src="./js/ddaccordion.js"></script>
<script type="text/javascript" src="./js/acrodin.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="./js/lightbox.js"></script>
<script type="text/javascript" src="./js/menu-collapsed.js"></script>
<script type="text/javascript" src="./js/cufon-yui.js"></script>
<script type="text/javascript" src="./js/trebuchet_ms_400-trebuchet_ms_700-trebuchet_ms_italic_700-trebuchet_ms_italic_400.font.js"></script>
<script type="text/javascript" src="./js/cufon.js"></script>
<script type="text/javascript" src="./js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>

<body>
<div id="wrapper_sec">
	<div id="masthead">
    	<div class="logo">
        	<a href="./index.php" class="logo-header">Event Management System</a>
        </div>
        <div class="slogan"></div>
        <div class="clear"></div>
            <div class="navigation">
            	<div id="smoothmenu1" class="ddsmoothmenu">
                    <ul>
						<li><a href="./index.php">Home</a></li>
						<li><a href="./about.php">About Project</a></li>
					<?php if($_SESSION['user_details']['user_level_id'] != 1) { ?>
                 
					<?php } if($_SESSION['login'] == 1) {
							if($_SESSION['user_details']['user_level_id'] == 1) {
					?>
					<li><a href="./login-home.php">Dashboard</a></li>
					<li><a href="#">Administration</a>
						<ul>
						  <li><a href="event.php">Add New Event</a></li>
						  <li><a href="theme.php">Add New Theme</a></li>
						  <li><a href="user.php">Add User</a></li>
						</ul>
					</li>
					<li><a href="#">Reports</a>
						<ul>
						  <li><a href="event-report.php">Event Report</a></li>
						  <li><a href="theme-report.php">Theme Reports</a></li>
						  <li><a href="user-report.php">Users Report</a></li>
						</ul>
					</li>
					<?php } ?>
					<?php if($_SESSION['user_details']['user_level_id'] != 1) { ?>
					<li><a href="./quote-report.php">My Quotation</a></li>
					<?php } ?>
					<li><a href="./lib/login.php?act=logout">Logout</a></li>
					<?php } else { ?>
					<li><a href="./login.php">Login</a></li>
					<li><a href="./contact.php">Contact Us</a></li>
                   
					<?php }?>
                    </ul>
                    <br style="clear: left" />
                    </div>
            </div>
    </div>
