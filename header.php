<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header style="background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)), url(<?php echo header_image()?>);">
  <div class="container">
    <img src="<?php bloginfo('template_url'); ?>/assets/logo-white.png" alt="Business Logo">
    <h4 class="header__career">Recording Studio - Indie Video Game Developer - Record Store</h4>
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <h4 class="header__social"><a href="">twitter</a> / <a href="">linkedin</a> / <a href="">pinterest</a> / <a href="">vimeo</a></h4>
  </div> <!-- /.container -->
</header><!--/.header-->

