<?php 
  global $sujon;
?>


<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
                            <?php
                             $slider_query = new WP_Query(array(
                                 'post_type' => 'coffe_slider',
                                 ''
                             ));
                             while($slider_query->have_posts()):$slider_query->the_post();
                            
                            ?>
				<li>
					<a href="#">
						<div class="banner-1">
						<?php the_post_thumbnail();?>	
						</div>
					</a>
				</li>
				<?php endwhile; ?>	
			</ul>
							
								
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p><?php echo $sujon['ft']?> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
       <?php wp_footer(); ?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</body>
</html>