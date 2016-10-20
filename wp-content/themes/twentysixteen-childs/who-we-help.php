 <?php /* Template Name: who we help */  
 get_header();

// if ( have_posts() ) :
//     while ( have_posts() ) : the_post();
//         the_content();
//     endwhile;
// else :
//     _e( 'Sorry, no posts were found.', 'textdomain' );
// endif;

?>

<body>
<!--wrapper-starts-->
<div id="wrapper"> 
  
 

  <div class="section banner_section ">
  	<div> <h4>Who We Help</h4></div>
  	<!-- code to display custom banners starts -->
  	<?php 

		$image = get_field('banner_page');

		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%"/>

	<?php endif; ?>
<!-- code to display custom banners ends -->
  	
  </div>



  <div class="section content_section">
	<div class="container">
		
		<?php 
		if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
        the_content();

		?>
		<div class="sidebar_section right">
			<ul class="banner">
				<li><a href="#">
					<!-- code to display custom banners starts -->
  				<?php 

					$image = get_field('sidebar_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%"/>

				<?php endif; ?>
<!-- code to display custom banners ends -->

				</a></li>
				<li><a href="#">

					<!-- code to display custom banners starts -->
  				<?php 

					$image = get_field('sidebar_image_2');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%"/>

				<?php endif; ?>
<!-- code to display custom banners ends -->

				</a></li>
			</ul>
		</div>
	</div>		
  </div>
  <?php  endwhile;
else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
endif;
 ?>



<div class="section clearfix section-colored7"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->	
		
	</div><!--container End-->

</div><!--section End-->




 <?php get_footer(); ?>
  <!-- Sticky Contact Number Start-->
  <div class="fixed_contact_number">
  	<div class="container">
  		<div class="contact_number">
  			<span>Call Us Today! (02) 9017 8413</span>
  			<a href="contact_us.html">Conatct Us</a>
  		</div>  		
  	</div>
  </div>
  <!-- Sticky Contact Number End-->
</div>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>
<!--wrapper-starts-->
<style>
.section.banner_section h4 {
     color: #fff;
  display: block;
  font-family: "robotoslab-bold";
  font-size: 35px;
  margin-top: 5%;
  font-weight: bold; 
  text-align: center;
  width: 100%;
  position: absolute;
}
</style>
</body>
</html>

