<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php get_template_part(hero)?>
<div class="main">
<?php get_template_part(nav)?>

  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>