<?php //home.php is the blog home template ?>
<?php get_header(); ?>

<div class="main">
<?php get_template_part(nav)?>

  <div class="container">
<!--Post date is left, with day above month and year. If featured image is set, it needs to pull through to home -->
    <div class="content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article class="blogPost">
            <div class="blogPost__date">
              <div class="blogPost__date--day"><?php the_time('j');?></div>
              <span class="blogPost__underline"></span>
              <div class="blogPost__date--year"><?php the_time('M Y')?></div>
            </div>
            <div class="blogPost__rest">
              <div class="blogPost__image">  
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('large');
                }?>
              </div>
              <div class="text">
              <h2>
                <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
              </h2>
              <?php the_excerpt(); ?>
              <?php hackeryou_continue_reading_link(); ?> 
              </div>
            </div>
          </article>
                  <?php endwhile; // end the loop?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>
	<!--sidebar order is: Search, Categories, Instagram, Recent Posts, Text Widget, Tags Cloud -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>