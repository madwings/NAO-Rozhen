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
					<!-- ДА НАМАЛЯ КОЛОНАТА НА 1НА И ОТДОЛУ СЪЩО И
					 ДА ПРОБВАМ ДАЛИ МНОГО ЩЕ СЕ РАЗБУТАТ. АКО НЕ СТАВА ДА ГИ 
					 ОСТАВЯ НА ДВЕ-->
						<span class="title"><?php echo lang('site_map'); ?></span>
						<ul class="links">
							<a href="#"><li><?php echo lang('home'); ?></li></a>
							<a href="#"><li><?php echo lang('news'); ?></li></a>
							<a href="#"><li><?php echo lang('observatory'); ?></li></a>
							<a href="#"><li><?php echo lang('institute'); ?></li></a>
							<a href="#"><li><?php echo lang('astro_calendar'); ?></li></a>
							<a href="#"><li><?php echo lang('gallery'); ?></li></a>
							<a href="#"><li><?php echo lang('contacts'); ?></li></a>
						</ul>
					</div>
					<div class="col-lg-2">
						<span class="title"><?php echo lang('follow_us'); ?></span>
						<ul class="links" id="follow">
							<a href="#">
								
								<li>
									<img src="assets/images/icons/rss.png" alt="rss">
									<span class="socialSpan"><span class="text-uppercase">rss</span> Feed</span>
								</li>
							</a>
							<a href="#">
								<li>
									<img src="assets/images/icons/fBook.png" alt="fBook">
									<span class="socialSpan">Facebook</span>
								</li>
							</a>
							<a href="#">
								<li>
									<img src="assets/images/icons/gPlus.png" alt="gPlus">
									<span class="socialSpan">Google &#43;</span>
								</li>
							</a>
							<a href="#">
								<li>
									<img src="assets/images/icons/pint.png" alt="pint">
									<span class="socialSpan">Pinterest</span>
								
								</li>
							</a>
						</ul>
					</div>
					<div class="col-lg-1">
						<span class="title"><?php echo lang('links'); ?></span>
						<div class="links">
							<ul id="footerLinks">
								<a href="#">
									<li><img src="assets/images/icons/arrowLink.png" alt="arrowLink"><span class="socialSpan"><?php echo lang('astro'); ?></span></li>
								</a>
								<a href="#">
									<li><img src="assets/images/icons/arrowLink.png" alt="arrowLink"><span class="socialSpan"><?php echo lang('meteo'); ?></span></li>
								</a>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-lg-offset-1">
						<span class="title"><?php echo lang('subscribe'); ?></span>
						<div class="links">
						<form>
							<div class="form-group">
							  <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo lang('email_text'); ?>">
							</div>
							<button type="submit" id="submitButton" class="btn btn-default text-right"><?php echo lang('submit'); ?></button>
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