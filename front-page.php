<?php //front paaaage ?>
<?php get_header(); ?>
<?php get_template_part(hero)?>
<div class="main">
<?php get_template_part(nav)?>
	<div class="container">
	    <section id="aboutUs">
	    	<h2 class="sectionTitle">About Us</h2>
	    	<ul class="aboutUs__list">
				<li class="aboutUs__listItem">
					<h3>Recording</h3>
					<i class="fa fa-2x fa-microphone"></i>
					<p>World-class recording facilities are brought to bear on every one of our projects</p>
				</li>
				<li>
					<h3>eCommerce</h3>
					<i class="fa fa-2x fa-shopping-bag"></i>
					<p>Cutting-edge eCommerce solutions and eBusiness</p>
				</li>
				<li>
					<h3>Digital Audio</h3>
					<i class="fa fa-2x fa-soundcloud"></i>
					<p>Tech solutions variable MacBook power supply</p>
				</li>
				<li>
					<h3>Accounts</h3>
					<i class="fa fa-2x fa-table"></i>
					<p>Disruptive technologies emergent landscape fostering innovation</p>
				</li>
	    	</ul>
	    </section><!--end About us -->
	    <section id="prevWork">
	    	<h2 class="sectionTitle">Recent Projects</h2>
	    	<ul class="prevWork__list1">
	    		<li class="prevWork__1">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>
	    		</li>
	    		<li class="prevWork__2">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>    		
	    		</li>
	    		<li class="prevWork__3">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>	    		
	    		</li>
	    		<li class="prevWork__4">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>	    		
	    		</li>
	    	</ul>
	    	<ul class="prevWork__list2">
	    		<li class="prevWork__5">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>	    		
	    		</li>
	    		<li class="prevWork__6">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>	    		
	    		</li>
	    		<li class="prevWork__7">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>	    		
	    		</li>
	    		<li class="prevWork__8">
	    			<span class="prevWork__caption">
	    			<p>Robust Ego by Lazer Eyez</p>
	    			</span>	    		
	    		</li>
	    	</ul>
	    </section><!-- end Work -->
	    <section id="pricing">
	   		<h2 class="sectionTitle">Pricing</h2>
	    	<ul class="pricing__list">
	    		<li class="pricing__listItem">
	    			<h3>Basic</h3>
					<p>Starting at $2600</p>
					<span class="pricing__border"></span>
	    			<ul class="pricing__listItem--features">
	    				<li>10 Hours Recording Time</li>
	    				<li>Mastering</li>
	    				<li>Mixing</li>
	    				<li>Unlimited access to studio for 7 days</li>
	    			</ul>
	    			<button>Start Your Project!</button>
	    		</li>
	    		<li class="pricing__listItem">
	    			<h3>Extended</h3>
	    			<p>Starting at $3500</p>
					<span class="pricing__border"></span>
	    			<ul class="pricing__listItem--features">
	    				<li>20 Hours Recording Time</li>
	    				<li>Mastering by In-House Mastering Master Viola Dana</li>
	    				<li>Mixing By In-House MixMaster Sessue Hayakawa</li>
	    				<li>Unlimited access to studio for 7 days</li>
	    			</ul>
	    			<button>Start Your Project!</button>
	    		</li>
	    		<li class="pricing__listItem">
	    			<h3>Gold</h3>
	    			<p>Starting at $5000</p>
					<span class="pricing__border"></span>
	    			<ul class="pricing__listItem--features">
	    				<li>25+ Hours Recording Time</li>
	    				<li>Arrangements by In-House Multi-Instrumentalist Lupe Velez</li>
	    				<li>Mastering by In-House Mastering Master Viola Dana</li>
	    				<li>Mixing By In-House MixMaster Sessue Hayakawa</li>
	    				<li>Unlimited access to studio for 14 days</li>
	    			</ul>
	    			<button>Start Your Project!</button>
	    		</li>
	    	</ul>
	    </section><!--end Pricing -->
		<section id="latestPost">
			<h2 class="sectionTitle">From The Blog</h2>
    		<?php $postslist = get_posts('numberposts=1');
 					foreach ($postslist as $post) :
    				setup_postdata($post); ?>
	    	<article class="FPblogPost">
            	<div class="blogPost__date">
              		<div class="blogPost__date--day"><?php the_time('j');?></div>
              		<span class="blogPost__underline"></span>
              		<div class="blogPost__date--year"><?php the_time('M Y')?></div>
            	</div>
            	<div class="blogPost__rest">
            		<div class="blogPost__image">  
                	<?php if ( has_post_thumbnail() ) {
                  			the_post_thumbnail('large');}?>
              		</div>
              		<div class="text">
              			<h2>
                			<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a>
		              </h2>
              			<p><?php the_excerpt(); ?></p>
              			<p><?php hackeryou_continue_reading_link(); ?></p>
              		</div>
            	</div>
          </article>
			<?php endforeach ?>
		</section><!--end Latest post -->
		</div> <!-- /.container -->
		<section id="newsletterSignup">
			<h2>Want To Hear More?</h2>
			<div class="newsletterSignup__Input">
				<input type="text" placeholder="Enter your email!">
				<button><i class="fa fa-paper-plane"></i>Sign me up!</button>
			</div>
		</section><!--end Newsletter signup -->
</div> <!-- /.main -->

<?php get_footer(); ?>