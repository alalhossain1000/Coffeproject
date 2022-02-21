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
							<div class="col-md-6 abt-left">
                                                             <h3>You Searched For:<?php echo get_search_query() ?></h3>
								<a href="<?php the_permalink(); ?>" class="thumb-img"><?php the_post_thumbnail(); ?></a>
								<h6><?php the_field('add_sub_title');?></h6>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
                                                                
							        <p><?php echo wp_trim_words(get_the_content(),40,'........'); ?></p>
                                                                <a href="<?php the_permalink(); ?>"> <button>Read More</button></a>
								<label><?php the_time('D/m/Y');?></label>
							</div>
							<?php endwhile; ?>
                                                    <?php
                                                    if( ! have_posts() ){
                                                        echo "<h3 style='color:red;margin:30px 0px'>Nothing Found</h3>";
                                                    }
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