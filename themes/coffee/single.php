
<?php get_header(); ?>
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">
						 <?php 
                                                  while( have_posts() ):
                                                      the_post();
                                                 ?>
							<div class="col-md-12 abt-left">
								<a href="<?php the_permalink(); ?>" class="single-thumb-img"><?php the_post_thumbnail(); ?></a>
								<h6><?php the_field('add_sub_title');?></h6>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
                                                                
							        <p><?php the_content(); ?></p>
								<label><?php the_time('D/m/Y');?></label>
							</div>
							<?php
                                                        endwhile;
                                                        ?>
                                            
                                            <?php 
                                              comments_template(); 
                                            ?>
						
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
                                 <?php get_sidebar(); ?>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php get_footer(); ?>