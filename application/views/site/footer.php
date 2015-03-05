	<!-- FOOTER of the Page -->
	<footer>
	<div class="divider"></div>
		<div class="footerContent">
		
			<div class="container">
				<div class="row" id="fourthRow">
					<div class="col-lg-1">
						<a href="#NAOHeader"><img  class="up" src="assets/images/icons/up.png" alt="up"></a>
					</div>
					<div class="col-lg-2 col-lg-offset-1">
						<h5 class="title"><?php echo lang('site_map'); ?></h5>
						<ul class="links">
							<li><a href="#"><?php echo lang('home'); ?></a></li>
							<li><a href="#"><?php echo lang('news'); ?></a></li>
							<li><a href="#"><?php echo lang('observatory'); ?></a></li>
							<li><a href="#"><?php echo lang('institute'); ?></a></li>
							<li><a href="#"><?php echo lang('astro_calendar'); ?></a></li>
							<li><a href="#"><?php echo lang('gallery'); ?></a></li>
							<li><a href="#"><?php echo lang('contacts'); ?></a></li>
						</ul>
					</div>
					<div class="col-lg-2">
						<h5 class="title"><?php echo lang('follow_us'); ?></h5>
						<ul class="links" id="follow">
							<li>
								<a href="#">
									<span class="IconBoot"><i class="fa fa-rss"></i></span>
									<span class="socialSpan"><span class="text-uppercase">rss</span> Feed</span>
								</a>								
							</li>
							<li>
								<a href="#">
									<span class="IconBoot"><i class="fa fa-facebook" id="fb-icon"></i></span>
									<span class="socialSpan">Facebook</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="IconBoot"><i class="fa fa-google-plus"></i></span>
									<span class="socialSpan">Google &#43;</span>
								</a>								
							</li>
							<!--<li>
								<a href="#">
									<span class="IconBoot"><i class="fa fa-pinterest"></i></span>
									<span class="socialSpan">Pinterest</span>
								</a>								
							</li>-->
						</ul>
					</div>
					<div class="col-lg-1">
						<h5 class="title"><?php echo lang('links'); ?></h5>
						<div class="links">
							<ul id="footerLinks">
								<li><a href="#"><span class="IconBoot"><i class="fa fa-chevron-right"></i></span><span class="socialSpan"><?php echo lang('astro'); ?></span></a></li>
								<li><a href="#"><span class="IconBoot"><i class="fa fa-chevron-right"></i></span><span class="socialSpan"><?php echo lang('meteo'); ?></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-lg-offset-1">
						<h5 class="title"><?php echo lang('subscribe'); ?></h5>
						<div class="links">
						<form>
							<div class="form-group">
							  <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo lang('email_text'); ?>">
							</div>
							<button type="submit" id="mail-submit" class="btn btn-default text-right"><?php echo lang('submit'); ?></button>
						</form>
						</div>
					</div>
					<div class="col-lg-1 col-lg-offset-1 text-right">
						<a href="#NAOHeader"><img class="up" src="assets/images/icons/up.png" alt="up"></a>
					</div>
				</div>
				<div class="row">
					<div class="text-center" id="rights">
						<p><?php echo lang('last_modified'); ?></p>
						<p><?php echo lang('copyright'); ?></p>
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