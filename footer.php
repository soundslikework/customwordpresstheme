<footer class="footer">
  <div class="container">
 	<!-- our studio div -->
 	<div class="footer__our">
 		<h2>Our Studio</h2>
 		<p>Placeholder text is a thing we have here</p>
 			<ul>
 				<li>
 					<i class="fa fa-envelope-o fa-2x"></i>
 					<p>soundslikework@gmail.com</p>
 				</li>
 				<li>
 					<i class="fa fa-map-marker fa-2x"></i>
 					<p>483 Queen St West, Toronto ON</p>
 				</li> 				
 				<li>
 					<i class="fa fa-phone fa-2x"></i>
 					<p>(416) 967-1111</p>
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
 <!-- 		<fieldset>
 			<input type="text" placeholder="Full Name" name="name">
 			<input type="text" placeholder="Email" name="email">
 			<input type="number" placeholder="Phone" name="phone">
 			<input type="text" placeholder="Website" name="website">
 			<textarea name="message" id="" cols="30" rows="10"></textarea>
 			</fieldset>
			<input type="submit" value="Submit"> -->
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