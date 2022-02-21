<?php
/*
 Template Name: About Page
*/

get_header(); ?>

	<!--team-starts-->
	<div class="team">
		<div class="container">
		<div class="team-top heading">
			<h3>OUR TEAM</h3>
		</div>
			<div class="team-bottom">
                            <?php 
                              $team_query = new WP_Query([
                                  'post_type'  => 'our_team',
                                  'posts_per_page' =>4,
                              ]);
                              while($team_query->have_posts()): $team_query->the_post()
                            ?>
				<div class="col-md-3 team-left alal-thumb">
					<?php the_post_thumbnail(); ?>
					<h4><?php the_title(); ?></h4>
					<p><?php the_content(); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<!--team-end-->
	<?php get_footer(); ?>