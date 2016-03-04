<div class="main">
	<nav>
		<div class="container">
		<div class="navLeft">
			<img src="<?php bloginfo('template_url'); ?>/assets/logo-black.png"	alt="business logo">
		</div>
		<div class="navRight">
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => false 
				));
			?>
		</div>
		</div>
	</nav>