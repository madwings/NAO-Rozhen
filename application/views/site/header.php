<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo lang('title'); ?></title>
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--CSS-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<!--JS-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrapCarouselSlider.js"></script>
	<script src="assets/js/main.js"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- HEADER of the Page -->
	<header>
		<div class="headerContent">
			<div class="container">
				<div class="row  text-uppercase">
					<div class="col-lg-1 col-lg-offset-11" id="anchors">
						<a href="main/language_switch/bulgarian/" id="lang-bg">bg</a>
						<a href="main/language_switch/english/" id="lang-en">en</a>
					</div>
				</div>
				
				<div class="row" id="NAOHeader">
					<div class="col-lg-8 col-lg-offset-2">
						<p class="text-uppercase text-center" id="NAOHeaderTitle">
						<?php echo lang('title_header'); ?></p>
					</div>
					<div id="clocks" class="col-lg-2">
						<div class="col-lg-6">
							<img src="assets/images/icons/clock.png" alt="">
							<p>EET</p>
						</div>
						<div class="col-lg-6">
							<img src="assets/images/icons/clock.png" alt="">
							<p>UT</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!--NAVIGATION-->
		<div id='nav-container'>
			<div  class="navBorderTop"></div>
			<nav class="navbar text-uppercase" role="navigation" id="nav">
				<div class="container" id="navContainer">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<div class="navbar-header">
								<!--button for responsive navigation -->
								<button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#iconNavigation">BUTTON
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="navigation">
								<ul class="nav navbar-nav ">
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
			<div  class="navBorderTop"></div>
		</div>
		<!--END OF NAVIGATION-->
	</header>