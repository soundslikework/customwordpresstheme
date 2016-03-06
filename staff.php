<?php

/*
	Template Name: Staff Page
*/

get_header();  ?>
<?php get_template_part(hero)?>
<div class="main">
<?php get_template_part(nav)?>
  <div class="container">
	<h2 class="sectionTitle">Our Staff</h2>
	<section id="staffMembers">
		<article class="article1">
			<div class="staffMembers__text">
				<h3>Lupe Velez</h3>
				<p>Vélez began her career as a performer in Mexican vaudeville in the early 1920s. After moving to the United States, she made her first film appearance in a short film in 1927. By the end of the decade, in the last years of the American Silent cinema, she had progressed to leading roles in numerous films like El Gaucho (1927), Lady of the Pavements (1928) and Wolf Song (1929), among others. She was one of the first successful Latin American actresses in the United States. During the 1930s, her well known explosive screen persona was exploited in a series of successful films like Hot Pepper (1933), Strictly Dynamite (1934) and Hollywood Party (1934). In the 1940s, Vélez's popularity peaked after appearing in the Mexican Spitfire films, a series created to capitalize on Vélez well documented fiery personality.</p>
			</div>
			<div class="staffMembers__pic">
				<img src="<?php bloginfo('template_url'); ?>/assets/staff-3.jpg" alt="Staff Profile Image">
			</div>
		</article>
		<article class="article2">
			<div class="staffMembers__text">
				<h3>Sessue Hayakawa</h3>
				<p>Hayakawa was active at the outset of the American film industry. He was the first Asian actor to find stardom in the United States and Europe. He is the first Asian American as well as the first Japanese American movie star and the first Asian American leading man. His "broodingly handsome"[2] good looks and typecasting as a sinister villain with sexual dominance made him a heartthrob among American women, and the first male sex symbol of Hollywood, several years in advance of Rudolph Valentino.</p>
			</div>
			<div class="staffMembers__pic">
				<img src="<?php bloginfo('template_url'); ?>/assets/staff-1.jpg" alt="Staff Profile Image">
			</div>
		</article>
		<article class="article1">
			<div class="staffMembers__text">
				<h3>Viola Dana</h3>
				<p>Virginia appeared on the stage at the age of three. She read Shakespeare and particularly identified with the teenage Juliet. She enjoyed a long run at the Hudson Theater in New York City. Between 1910 and 1912, she made four small appearances in the emergent film industry in New York, using the name "Viola Flugrath". A particular favorite of audiences was her performance in David Belasco's Poor Little Rich Girl, when she was 16.</p>
			</div>
			<div class="staffMembers__pic">
				<img src="<?php bloginfo('template_url'); ?>/assets/staff-2.jpg" alt="Staff Profile Image">
			</div>			
		</article>
	</section>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>