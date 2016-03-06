<footer class="footer">
  <div class="container">
 	<!-- our studio div -->
 	<div class="footer__our">
 		<h2>Our Studio</h2>
 		<p>Placeholder text is a thing we have here</p>
 			<ul>
 				<li><a href="mailto:soundslikework@gmail.com">
 					<i class="fa fa-envelope-o fa-2x"></i>
 					<p>soundslikework@gmail.com</p>
 					</a>
 				</li>
 				<li>
 					<a href="https://goo.gl/maps/wGAjf1nVYvP2">
 					<i class="fa fa-map-marker fa-2x"></i>
 					<p>483 Queen St West, Toronto ON</p>
 					</a>
 				</li> 				
 				<li>
 					<a href="tel:416-967-1111">
 					<i class="fa fa-phone fa-2x"></i>
 					<p>(416) 967-1111</p>
 					</a>
 				</li>
 			</ul>
 	</div>
 	<div class="footer__contact">
 		<h2>Start A Project</h2>
 		<p>Yet more placeholder text. One day I will generate my own with a program</p>
 		<form class="conForm" action="">
 		<fieldset>
 		<?php echo do_shortcode( '[contact-form-7 id="14" title="Footer Contact"]' ); ?>
 		</fieldset> 		
 		</form>
 	</div>
  	<div class="footer__credits">
  		<div class="footerLeft">
    		<p>Created with <i class="fa fa-heart-o"></i> by Adam Brady. All rights reserved <?php echo date('Y'); ?></p>
    	</div>
		<div class="footerRight">
			<?php wp_nav_menu( array( 
			'theme_location' => 'social_bar'
			));
			?>
		</div>
	</div> <!--end footer credits -->
  </div> <!--End container -->
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>