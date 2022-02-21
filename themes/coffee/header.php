<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
  global $sujon;
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<<link rel="shortcut icon" type="image/x-icon" href="<?php echo $sujon['tumi']['url'] ?>" >




<style>
    .head-main a img{
        width:<?php echo $sujon['logowidth']?>;
    }
    
    .header ul li a{
        color:<?php echo $sujon['menu_color']?> !important;
    }
    .footer-text p{
        color:<?php echo $sujon['ftc']?> !important
          
    }
    .footer{
       background-color:<?php echo $sujon['ftbg']?>   
    }   
</style>




<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
                            <a href="<?php echo site_url(); ?>"><img src="<?php echo $sujon['ami']['url']?>" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 

                                 <?php 
                                   wp_nav_menu(array(
                                       'theme_location' => 'primary_menu',
                                       'container'      =>  '',
                                       'menu_class'     =>  'navig',
                                   ));
                                 ?>


			</div>
			<div class="header-right">
				<div class="search-bar">
                                       <form method="GET">
					<input type="text" value="Search" name="s" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
                                       </form>
				</div>
				<ul>
                                    <li><a target="_blank" href=" <?php echo esc_url($sujon['fb']);?>"><span class="fb"> </span></a></li>
					<li><a target="_blank" href="<?php echo esc_url($sujon['tw']);?>"><span class="twit"> </span></a></li>
					<li><a target="_blank" href="<?php echo esc_url($sujon['pin']);?>"><span class="pin"> </span></a></li>
					<li><a target="_blank" href="<?php echo esc_url($sujon['rss']);?>"><span class="rss"> </span></a></li>
					<li><a target="_blank" href="<?php echo esc_url($sujon['dri']);?>"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h1>Suspendisse potenti</h1>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->