<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo lang('title'); ?></title>
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--CSS-->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<!--JS-->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrapCarouselSlider.js"></script>
	
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
							<a href="#">bg</a>
							<a href="#">en</a>
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
					<!--NAVIGATION-->
					<div  class="navBorderTop"></div>
					<nav class="navbar text-uppercase" role="navigation" id="nav">
						<div class="container" id="navContainer">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<div class="navbar-header">
									<!--button for responsive navigation -->
										<button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navigation">BUTTON
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
					</nav><!--END OF NAVIGATION-->
				<div  class="navBorderTop"></div>
			</div><!--END OF HEDERCONTENT-->
		</header>
	<!-- CONTENT of the Page starts from here-->
		<div id="content">
			<div class="container">
				<div class="row" id="firstRowContent">
					<div class="col-lg-2">
						<a href=""><img id="banIcon" src="assets/images/icons/banIcon.png" alt="banIcon" class="img-responsive"></a>
					</div>
					<div class="col-lg-8" id="iconContainer" >
					<!--ICON NAVIGATION-->
						<nav class="navbar text-uppercase" role="navigation">
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
								<div class="collapse navbar-collapse " id="iconNavigation">
									<ul class="nav navbar-nav">
										<li>
											<a href="#">
												<img class="astroIcon" src="assets/images/icons/events.png" alt="events">
												<span class="astroMenuText">предстоящи събития</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img class="astroIcon" src="assets/images/icons/comets.png" alt="comets">
												<span class="astroMenuText">забележителни комети</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img class="astroIcon" src="assets/images/icons/phenomenon.png" alt="phenomenon">
												<span class="astroMenuText">слънчеви и лунни явления</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img class="astroIcon" src="assets/images/icons/planets.png" alt="planets">
												<span class="astroMenuText">съединения на планети</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img class="astroIcon" src="assets/images/icons/meteors.png" alt="meteors">
												<span class="astroMenuText">метеорни потоци</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img class="astroIcon" src="assets/images/icons/eclipses.png" alt="eclipses">
												<span class="astroMenuText">слънчеви и лунни затъмнения</span>
											</a>
										</li>
									</ul>
								</div>
							
						</nav><!--END OF NAVIGATION-->			
					</div>
					<div class="col-lg-2" id="weatherBar">
						
							<span class="text-uppercase">времето в района на нао</span>
							<a href="#"><img src="assets/images/icons/weather.png" alt="weather"></a>
						
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row" id="secondRow">
					<div class="col-lg-8 col-lg-offset-2" id="impMssg">
						<div class="panel panel-default" id="panel">
							<div class="panel-body" id="panelBody">ВАЖНО! Следващият наблюдателен сезон 2015B e от 1.08.2015 до 31.01.2016 г. Крайният срок за подаване на заявки е 20 март 2015 до 23:59:59 UTC. Новата форма за заявки може да бъде изтеглена от тук (DOC 53 KB). Моля изпращайте попълнените заявки в срок на електронна поща observations@astro.bas.bg като един PDF файл за всеки телескоп и фокус, съдържащ в името си: PI на заявителя, сезона, телескопа и фокуса, за които се отнася заявката! (Пример: GBorisov-2014B-2mFR.pdf</div>
						</div>
					</div>
					<div class="col-lg-2">
						<a href="#"><img src="assets/images/icons/weather2.png" alt="weather"></a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<aside class="col-lg-2" id="partners">
						<span class="text-uppercase text-center" id="partnersHeader">наши партньори</span>
						<a href="#"><div class="leftIcons"><img src="assets/images/icons/iconSmolyan.png" alt="iconSmolyan"><p class="text-uppercase text-center">община смолян</p></div></a>
						<a href="#"><div class="leftIcons"><img src="assets/images/icons/iconChepelare.png" alt="iconChepelare"><p class="text-uppercase text-center">община чепеларе</p></div></a>
						<a href="#"><div class="leftIcons"><img src="assets/images/icons/sab.png" alt="sab"><p class="text-uppercase text-center">саб</p></div></a>
						<a href="#"><div class="leftIcons"><img src="assets/images/icons/niggg.png" alt="niggg"><p class="text-uppercase text-center">нигг</p></div></a>
						<a href="#"><div class="leftIcons"><img src="assets/images/icons/nimh.png" alt="nimh"><p class="text-uppercase text-center">нимх</p></div></a>
						<a href="#"><div class="leftIcons"><img src="assets/images/icons/mosb.png" alt="mosb"><p class="text-uppercase text-center">мосб</p></div></a>
					</aside><!--End of our partners-->
					<section class="col-lg-8" id="sectionArticles">
						<div class="col-lg-6">
							<article class="leftArticles">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<img class="leftPics  boxShadow" src="assets/images/icons/pic1.png" alt="pic1">
										<div class="leftItemText">
											<p class="leftArticleHeader">Lorem ipsum</p>
											<p>Duis aute irure dolor
											 in reprehenderit in voluptate 
											 velit esse cillum dolore eu fugiat 
											 nulla pariatur. Sed ut perspiciatis 
											 unde omnis iste
											</p>
											<span class="time"><time datetime="2014-12-12 07:00">12.12.2014</time></span>
										</div>
										<img class="readMoreArrow" src="assets/images/icons/readMoreArrow.png" alt="readMoreArrow">
									</a>
								</div>
							</article>
							<article class="leftArticles">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<img class="leftPics boxShadow" src="assets/images/icons/pic2.png" alt="pic2">
										<div class="leftItemText">
											<p class="leftArticleHeader">Lorem ipsum</p>
											<p>Duis aute irure dolor
											 in reprehenderit in voluptate 
											 velit esse cillum dolore eu fugiat 
											 nulla pariatur. Sed ut perspiciatis 
											 unde omnis iste
											</p>
											<span class="time"><time datetime="2014-12-12 07:00">12.12.2014</time></span>
										</div>
										<img class="readMoreArrow" src="assets/images/icons/readMoreArrow.png" alt="readMoreArrow">
									</a>
								</div>
							</article>
							<article class="leftArticles">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<img class="leftPics boxShadow" src="assets/images/icons/pic3.png" alt="pic3">
										<div class="leftItemText">
											<p class="leftArticleHeader">Lorem ipsum</p>
											<p>Duis aute irure dolor
											 in reprehenderit in voluptate 
											 velit esse cillum dolore eu fugiat 
											 nulla pariatur. Sed ut perspiciatis 
											 unde omnis iste
											</p>
											<span class="time"><time datetime="2014-12-12 07:00">12.12.2014</time></span>
										</div>
										<img class="readMoreArrow" src="assets/images/icons/readMoreArrow.png" alt="readMoreArrow">
									</a>
								</div>
							</article>
						</div><!--End of Left Articles-->
						<div class="col-lg-6">
							<article class="rightArticles">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="rightItemText">
											<h6 class="rightArticleHeader text-uppercase">актуална астроснимка</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. exercitation ullamco
											</p>
										</div>
										<img class="readMoreArrowRight" src="assets/images/icons/readMoreArrowLeft.png" alt="readMoreArrow">
										<img class="rightPics boxShadow" src="assets/images/icons/pic4.png" alt="pic4">
									</a>
								</div>
							</article>
							<article class="rightArticles">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="rightItemText">
											<h6 class="rightArticleHeader text-uppercase">атмосферни явления</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. exercitation ullamco
											</p>
										</div>
										<img class="readMoreArrowRight" src="assets/images/icons/readMoreArrowLeft.png" alt="readMoreArrow">
										<img class="rightPics boxShadow" src="assets/images/icons/pic5.png" alt="pic5">
									</a>
								</div>
							</article>
						</div><!--End of Right Articles-->
					</section><!--End of Section with articles-->
					<div class="col-lg-2">
						<img src="assets/images/icons/calendar.png" alt="calendar">
						<div id="cam">
							<a href="#">
								<h6 class="text-uppercase" >уеб-камера от кулата на 2м ркк-телескоп</h6>
								<img src="assets/images/icons/cam.png" alt="cam">
							</a>
						</div>
					</div>
				</div><!--End of row-->
				<div class="row" id="thirdRow">
					<div class="col-lg-2" id="astrJournal">
						<a href="#">
							<img class="boxShadow" src="assets/images/icons/astrJournal.png" alt="astrJournal" >
						</a>
					</div>
					<div class="col-md-8"><!--Carousel Slider-->
						<div class="carousel slide" id="myCarousel">
						    <div class="carousel-inner" id="carouselInner">
						    	<div class="item active con">
							      	<div class="col-md-4 pad">
							      		
							      			<div class="imgContainer boxShadow">
							      				<img class="pics img-responsive" src="assets/images/icons/pic20.png"  alt="pic20">
							      				<div class="hoverImg">
							      					<a href="">
							      						<img src="assets/images/icons/hoverImgSlide.png" class="img-responsive" alt="hoverImgSlide">
							      					</a>
							      				</div>
							      			</div>
							      		
							      	</div>
							    </div>
							    <div class="item con">
							      	<div class="col-md-4 pad">
							      		
							      			<div class="imgContainer boxShadow">
							      				<img class="pics img-responsive" src="assets/images/icons/pic14.png"  alt="pic14">
							      				<div class="hoverImg">
							      					<a href="">
							      						<img src="assets/images/icons/hoverImgSlide.png" class="img-responsive" alt="hoverImgSlide">
							      					</a>
							      				</div>
							      			</div>
							      		
							      	</div>
							    </div>
							    <div class="item con">
							      	<div class="col-md-4 pad">
							      		
							      			<div class="imgContainer boxShadow">
							      				<img class="pics img-responsive" src="assets/images/icons/pic15.png"  alt="pic15">
							      				<div class="hoverImg">
							      					<a href="">
							      						<img src="assets/images/icons/hoverImgSlide.png" class="img-responsive" alt="hoverImgSlide">
							      					</a>
							      				</div>
							      			</div>
							      		
							      	</div>
							    </div>
							    <div class="item con">
							      	<div class="col-md-4 pad">
							      		
							      			<div class="imgContainer boxShadow">
							      				<img class="pics img-responsive" src="assets/images/icons/pic20.png" alt="pic20">
							      				<div class="hoverImg">
							      					<a href="">
							      						<img src="assets/images/icons/hoverImgSlide.png" class="img-responsive" alt="hoverImgSlide">
							      					</a>
							      				</div>
							      			</div>
							      		
							      	</div>
							    </div>
							    <div class="item con">
							      	<div class="col-md-4 pad">
							      		
							      			<div class="imgContainer boxShadow">
							      				<img class="pics img-responsive" src="assets/images/icons/pic14.png" alt="pic14">
							      				<div class="hoverImg">
							      					<a href="">
							      						<img src="assets/images/icons/hoverImgSlide.png" class="img-responsive" alt="hoverImgSlide">
							      					</a>
							      				</div>
							      			</div>
							      		
							      	</div>
							    </div>
							    <div class="item con">
							      	<div class="col-md-4 pad">
							      		
							      			<div class="imgContainer boxShadow">
							      				<img class="pics img-responsive" src="assets/images/icons/pic15.png" alt="pic15">
							      				<div class="hoverImg">
							      					<a href="">
							      						<img src="assets/images/icons/hoverImgSlide.png" class="img-responsive" alt="hoverImgSlide">
							      					</a>
							      				</div>
							      			</div>
							      		
							      	</div>
							    </div>
						  	</div>
						    <a class="left carousel-control" id="leftArrowSlide" href="#myCarousel" data-slide="prev"></a>
						    <a class="right carousel-control" id="rightArrowSlide" href="#myCarousel" data-slide="next"></a>
						    <img  id="leftArrowShadow" src="assets/images/icons/leftShadowArrowSlide.png" alt="">
						    <img class="" id="rightArrowShadow" src="assets/images/icons/rightShadowArrowSlide.png" alt="">
						</div>
					</div><!--End of Carousel Slider-->
					<div class="col-lg-2">
						<a href="#">
							<img src="assets/images/icons/fb.png" alt="fb" >
						</a>
					</div>
				</div><!--End of row with slider-->
			</div><!--End of container-->
		</div><!--End of content-->
		
	<!-- FOOTER of the Page -->
		<footer>
			<div class="footerContent">
			<div class="divider"></div>
				<div class="container">
					<div class="row" id="fourthRow">
						<div class="col-lg-1">
							<a href="#NAOHeader"><img  class="up" src="assets/images/icons/up.png" alt="up"></a>
						</div>
						<div class="col-lg-2 col-lg-offset-1">
							<span class="title">Карта на сайта</span>
							<div class="links" id="follow">
								<a href="#"><span>Начало</span></a>
								<a href="#"><span>Новини</span></a>
								<a href="#"><span>Обсерваторията</span></a>
								<a href="#"><span>Институт</span></a>
								<a href="#"><span>Астро-календар</span></a>
								<a href="#"><span>Галерии</span></a>
								<a href="#"><span>Контакти</span></a>
							</div>
						</div>
						<div class="col-lg-2">
							<span class="title">Следвайте ни</span>
							<div class="links">
								<a href="#">
									<img src="assets/images/icons/rss.png" alt="rss">
									<span>
										<span class="text-uppercase">rss</span> Feed
									</span>
								</a>
								<a href="#">
									<img src="assets/images/icons/fBook.png" alt="fBook">
									<span>
										Facebook
									</span>
								</a>
								<a href="#">
									<img src="assets/images/icons/gPlus.png" alt="gPlus">
									<span>
										Google &#43;
									</span>
								</a>
								<a href="#">
									<img src="assets/images/icons/pint.png" alt="pint">
									<span>
										Pinterest
									</span>
								</a>
							</div>
						</div>
						<div class="col-lg-1">
							<span class="title">Връзки</span>
							<div class="links">
								<div id="footerLinks">
									<a href="#">
										<img src="assets/images/icons/arrowLink.png" alt="arrowLink"><span>Астро</span>
									</a>
									<a href="#">
										<img src="assets/images/icons/arrowLink.png" alt="arrowLink"><span>Метео</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-lg-offset-1">
							<span class="title">Абонирай се за нас</span>
							<div class="links">
							<form>
								<div class="form-group">
								  <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
								</div>
								<button type="submit" id="submitButton" class="btn btn-default text-right">Submit</button>
							</form>
							</div>
						</div>
						<div class="col-lg-1 col-lg-offset-1 text-right">
							<a href="#NAOHeader"><img class="up" src="assets/images/icons/up.png" alt="up"></a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-lg-offset-5" id="rights">
							<p>Последна Актуализация: 09 януари 2015</p>
							<p>©2008-2015 НАО-Рожен. Всички права запазени.</p>
						</div>
					</div>
				</div>
			</div>	
		</footer>
		
		<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!--<script src="assets/js/jquery.min.js"></script>-->
	<!--<script src="assets/js/bootstrap.min.js"></script>-->

	
</body>
</html>