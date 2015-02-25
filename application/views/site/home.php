	<!-- CONTENT of the Page starts from here-->
	<div id="content">
		<div class="container" id="container">
			<div class="row" id="firstRowContent">
			<?php $this->load->view('site/aside_left'); ?>
			<div class="col-lg-8" id="iconContainer" >
				<!--Icon Navigation-->
					<nav class="navbar text-uppercase" role="navigation">
							<div class="navbar-header">
								<!--Button for responsive navigation -->
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
											<img class="astro-icon" src="assets/images/icons/events.png" alt="events">
											<span class="astroMenuText"><?php echo lang('upcoming_events'); ?></span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="astro-icon" src="assets/images/icons/comets.png" alt="comets">
											<span class="astroMenuText"><?php echo lang('comets'); ?></span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="astro-icon" src="assets/images/icons/phenomenon.png" alt="phenomenon">
											<span class="astroMenuText"><?php echo lang('sun_moon_phenomenon'); ?></span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="astro-icon" src="assets/images/icons/planets.png" alt="planets">
											<span class="astroMenuText"><?php echo lang('planets_ascension'); ?></span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="astro-icon" src="assets/images/icons/meteors.png" alt="meteors">
											<span class="astroMenuText"><?php echo lang('meteor_streams'); ?></span>
										</a>
									</li>
									<li>
										<a href="#">
											<img class="astro-icon" src="assets/images/icons/eclipses.png" alt="eclipses">
											<span class="astroMenuText"><?php echo lang('sun_moon_eclipses'); ?></span>
										</a>
									</li>
								</ul>
							</div>
						
					</nav><!--End of navigation-->	

					<!--Panel with important message-->
					<div id="impMssg">
						<div class="panel panel-default" id="panel">
							<div class="panel-body" id="panelBody">ВАЖНО! Следващият наблюдателен сезон 2015B e от 1.08.2015 до 31.01.2016 г. Крайният срок за подаване на заявки е 20 март 2015 до 23:59:59 UTC. Новата форма за заявки може да бъде изтеглена от тук (DOC 53 KB). Моля изпращайте попълнените заявки в срок на електронна поща observations@astro.bas.bg като един PDF файл за всеки телескоп и фокус, съдържащ в името си: PI на заявителя, сезона, телескопа и фокуса, за които се отнася заявката! (Пример: GBorisov-2014B-2mFR.pdf</div>
						</div>
					</div><!-- end of panel with important message-->

					<!--Section Articles-->
					<section  id="sectionArticles">
						<div class="col-lg-6"><!-- left aricles-->
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
						</div>
						<!--End of Left Articles-->
						<!-- Right aricles-->
						<div class="col-lg-6"> 
							<article class="rightArticles">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="rightItemText">
											<h6 class="rightArticleHeader text-uppercase"><?php echo lang('current_astro_photo'); ?></h6>
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
											<h6 class="rightArticleHeader text-uppercase"><?php echo lang('weather_phenomena'); ?></h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. exercitation ullamco
											</p>
										</div>
										<img class="readMoreArrowRight" src="assets/images/icons/readMoreArrowLeft.png" alt="readMoreArrow">
										<img class="rightPics boxShadow" src="assets/images/icons/pic5.png" alt="pic5">
									</a>
								</div>
							</article>
						</div>
						<!--End of Right Articles-->
					</section>
					<!--End of Section with articles-->					
					<!--Carousel Slider-->
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
					<!--End of Carousel Slider-->	
				</div>
				<?php $this->load->view('site/aside_right'); ?>
			</div>		
		</div>
		<!--End of container-->
	</div>
	<!--End of content-->
