<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo lang('title'); ?></title>
	<!--remove meta viewport for non-responsive page-->
	<!--<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--CSS-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!--CSS for the font-awesome icons-->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	
	<!--JS-->
	<script src="assets/js/jquery.min.js" defer></script>
	<script src="assets/js/bootstrap.min.js" defer></script>
	<script src="assets/js/bootstrapCarouselSlider.js" defer></script>
	<script src="assets/js/main.js" defer></script>

	<!--JS for the clocks-->
	<!--[if IE]><script type="text/javascript" src="assets/js/excanvas.js" ></script><![endif]-->
	<script type="text/javascript" src="assets/js/coolclock.js" defer></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- HEADER of the Page -->
	<!--"col-lg" is replace by "col-xs" for non-rsponsive-->
	<header>
		<div class="headerContent">
			<div class="container">
				<div class="row  text-uppercase">
					<div class="col-xs-1 col-xs-offset-11" id="anchors">
						<a href="main/language_switch/bulgarian/" id="lang-bg">bg</a>
						<a href="main/language_switch/english/" id="lang-en">en</a>
					</div>
				</div>
				
				<div class="row" id="NAOHeader">
					<div class="col-xs-8 col-xs-offset-2 text-center text-uppercase" id="header-title">
						<p><?php echo lang('title_header_1'); ?></p>
						<p><?php echo lang('title_header_2'); ?></p>
					</div>
					<div id="clocks" class="col-xs-2">
						<div class="col-xs-6">
							<canvas class="CoolClock:classicOnBlack:30" ></canvas>
							<p>EET</p>
						</div>
						<div class="col-xs-6">
							<canvas class="CoolClock:classicOnBlack:30::0" ></canvas>
							<p>UT</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!--NAVIGATION-->
		<div id='nav-container'>
			<div class="nav-border-black"></div>
            <div class="nav-border-white"></div>
			<nav class="navbar text-uppercase" role="navigation" id="nav">
				<div class="container" >
					<div class="row">
						<div class="col-xs-10" id="navContainer">
							<div class="navbar-header">
								<!--button for responsive navigation 
								<button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#iconNavigation">BUTTON
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>-->
							</div>
							<!--collapse navbar-collapse-->
							<div class="" id="navigation">
								<ul class="nav navbar-nav nav-pills">
									<li><a href="#"><?php echo lang('home'); ?></a></li>
									<li><a href="#"><?php echo lang('news'); ?></a></li>
									<li><a href="#"><?php echo lang('observatory'); ?></a></li>
									<li><a href="#"><?php echo lang('institute'); ?></a></li>
									<li><a href="#"><?php echo lang('astro_calendar'); ?></a></li>
									<li><a href="#"><?php echo lang('gallery'); ?></a></li>
									<li><a href="#"><?php echo lang('contacts'); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="nav-border-black"></div>
            <div class="nav-border-white"></div>
		</div>
		<!--END OF NAVIGATION-->
	</header>