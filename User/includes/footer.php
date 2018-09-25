<footer id="contact">
		<div class="container">
			<div class="columns wow fadeInDown">
				<div class="column has-text-centered">
					<a href="">
						<h2 class="title has-text-grey">MetroFocus</h2>
					</a>
				</div>
				<div class="column is-offset-one-quarter">
					<div class="footer-item-header">Products</div>
					<ul class="list-unstyled">
						<li><a href="" class="footer-item">Brands</a></li>
						<li><a href="" class="footer-item">Camera Parts</a></li>
						<li><a href="" class="footer-item">Accessories</a></li>
						<li><a href="" class="footer-item">Account</a></li>
						<li><a href="" class="footer-item">Pricing</a></li>
						<li><a href="" class="footer-item">FAQs</a></li>
					</ul>
				</div>
				<div class="column">
					<div class="footer-item-header">Connect</div>
					<ul class="list-unstyled">
						<li><a href="" class="footer-item">About</a></li>
						<li><a href="" class="footer-item">Contact Us</a></li>
						<li><a href="" class="footer-item">Facebook</a></li>
						<li><a href="" class="footer-item">Instagram</a></li>
					</ul>
				</div>
				<div class="column">
					<div class="footer-item-header">Legal</div>
					<ul>
						<li><a href="" class="footer-item">Terms of Use</a></li>
						<li><a href="" class="footer-item">Privacy Policy</a></li>
					</ul>
				</div>
				
			</div>
			<div class="has-text-centered copyright has-text-grey">
				<i class="fas fa-code"></i> with <i class="fas fa-heart"></i>
				<span>Copyright©2018 www.metrofocus.com All rights reserved</span>
			</div>
			
		</div>
		<a id="elm" title="Back to top" href="#" class="to-top"><i id="jumpicon" class="fal fa-chevron-circle-up"></i></a>
		<!-- <a title="Back to top" href="#top" class="to-top"><i class="fas fa-chevron-circle-up"></i></a> -->
</footer>
	<!-- footer end -->

	<script src="./js/jquery.min.js"></script>
	<script src="./js/navbar-burger.js"></script>
	<script src="./js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script>
	<?php
		if(isset($_COOKIE['username'])){
			if($badge[0] < 1){
			    ?>
			        $('#badge').removeClass('badge is-badge-warning is-badge-left');
			    <?php
			}
		}
	 
	 ?>
	$(document).ready(function(){
		var offset = 800;
		var duration = 600;

		$(window).scroll(function(){
			if($(this).scrollTop() > offset){
				$('.to-top').fadeIn(duration);
			}else{
				$('.to-top').fadeOut(duration);
			}
		});

		$('.to-top').click(function(){
			jQuery('html,body').animate({scrollTop:0},duration);
		});
		$('#bknow').click(function(){
			window.location = 'pages/appointmentform.php';
		});
	});
	</script>
	</body>
</html>