<?php 
/*
Template Name: Gallery Page
 */

get_header(); ?>
	<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>OUR GALLERY</h3>
			</div>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
                                    
                                    <?php
                                    $gallery_query = new WP_Query(array(
                                         'post_type' => 'our_gallery',
                                    ));
                                    while($gallery_query->have_posts()):$gallery_query->the_post(); ?>
					<li>
						<a href="<?php echo get_the_post_thumbnail_url(); ?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<?php the_post_thumbnail(); ?>
							<div>
								<h5><?php the_title();?></h5>
								<span><?php the_content(); ?></span>
							</div>
						</a>
					</li>
		                       <?php endwhile; ?>
					<div class="clearfix"> </div>
				</ul>
			</section>

        </div>
	</div>
	<!--gallery-end-->
	<?php get_footer(); ?>	