</div>
<!--Content-->
<footer class="footer">
	<div class="container">
		<div id="footer">
			<div class="col-md-12">
				<div class="footer-partners">
					<p class="head">Partners:</p>
					<ul class="list-inline">
						<li class="footer-partner--item"><a class="partner text-hide eric" href="www.earlyrecognitioniscritical.org/" target="_blank">Early Recognition Is Critical</a></li>
						<li class="footer-partner--item"><a class="partner text-hide clubjr" href="http://www.clubjr.com/english.html" target="_blank">Club Jr</a></li>
						<li class="footer-partner--item"><a class="partner text-hide audl" href="http://www.clubjr.com/english.html" target="_blank">AUDL</a></li>
						<li class="footer-partner--item"><a class="partner text-hide blacktie" href="http://www.clubjr.com/english.html" target="_blank">Blacktie Project</a></li>
					</ul>
				</div>
			</div>
			
		
			<div class="footer-copyright">
				<div class="col-md-4">
					<div class="copyright">
						<span class="block-it"><strong>&copy; <span id="dateYear"></span> Boon Technical Clothing</strong></span>
						<p><a class="footer-brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/boon-footer-logo.png" alt="<?php bloginfo('name'); ?>"></a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-social">
						<ul class="list-unstyled">
							<li><a href="http://facebook.com/BoonTechnicalClothing" target="_blank" class="social-link"><i class="fa fa-facebook-square"></i> BoonTechnicalClothing</a>	</li>
							<li><a href="http://instagram.com/BoonTechnicalClothing" target="_blank" class="social-link"><i class="fa fa-instagram"></i> BoonTechnicalClothing</a></li>
							<li><a href="http://twitter.com/boontc" target="_blank" class="social-link">
							<i class="fa fa-twitter-square"></i> BoonTC</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="footer-address">
						<address>
							<ul class="list-unstyled">
								<li><i class="fa fa-home"></i> 133 E Santos St. San Joaquin Pasig City Philippines 1601</li>
								<li><i class="fa fa-mobile"></i> +63 916 2802663</li>
								<li><i class="fa fa-phone"></i> +63 2 9414117</li>
								<li><i class="fa fa-envelope"></i> info@boontechnicalclothing.com</li>
							</ul>
						</address>
					</div>
				</div>
			</div>
			<!--end copyright-->
		</div>
	</div>
</footer>




<script>
d = new Date();
document.getElementById("dateYear").innerHTML = d.getFullYear();
</script>
<?php wp_footer(); ?>

</body>
</html>