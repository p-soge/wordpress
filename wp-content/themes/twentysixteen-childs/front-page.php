<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>
<?php
 //echo do_shortcode('[rev_slider alias="slider"]');
 ?>

<div class="section section-colored1"><!--section start--> 

	<div class="divBannerTxt">

		<div class="container">
			<h1>FREE: 27 Points Checklist to The Relationship You Want</h1>
			<a href="#">Download Now</a>
		</div>
			
	</div>
    	
	<div class="container"><!--container Start-->

		<div class="divBanner">
			<div class="videoPlayBtn"></div>
			<div class="bannerSlider">
				<p><?php dynamic_sidebar( 'banner-1' ); ?></p>
<a href="#">Contact Us Now! <span><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon1.png" alt="" /></span></a>
			</div>
		</div>
	
	</div><!--container End-->

</div><!--section End--> 



<div class="section clearfix section-colored2"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
  <!--About_Cont_Left Start-->
  <?php dynamic_sidebar( 'about-1' ); ?>
		<!--About_Cont_Left End-->

		<div class="About_Cont_Right right"><!--About_Cont_right Start-->
			<p><img src="<?php echo get_stylesheet_directory_uri();?>/images/ab1.png" alt=""  /></p>
		</div><!--About_Cont_right End-->
	
	</div><!--container End-->

</div><!--section End--> 


<div class="section  clearfix section-colored3"><!--section start--> 
    	
	
	<?php dynamic_sidebar( 'vital-1' ); ?>

</div><!--section End--> 


<div class="section  clearfix section-colored4"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Process_Cont_Top"><!--Process_Cont_Top Start-->			
				<h1>The people we have on our books are genuinely unattached seeking a long lasting 
relationship. They're not in it for a fling or a one night-stand they're looking for something more substantial when it comes to having a relationship.</h1>		
		</div><!--Process_Cont_End-->

		<div class="process_wrapper">
			<!--Process_Woman Start-->
			<?php dynamic_sidebar( 'women-1' ); ?>
			<!--Process_Woman End-->

			
	        <!--Process_Woman Start-->
	        <?php dynamic_sidebar( 'men-1' ); ?>
				<!--Process_Woman End-->
		</div>
	</div><!--container End-->

</div><!--section End--> 

<div class="section  clearfix section-colored5"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<h1>What Our Clients Say</h1>

		<div class="slider">
			<ul class="bxslider">
				<?php 
				$args = array(
			    'post_type'      => 'testimonials',
			    'posts_per_page' => 5);
				$counter = 0;
				$loop = new WP_Query($args);
				while ($loop->have_posts()) 
				{
	   			 $loop->the_post();
	   			 $author = get_field('authorname');
        		$image = get_field('testimonial-image');
				?>
			  <li>
			  		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
			  		<div class="clients_comment_wrapper">
			  			<div class="clients_comment"><?php the_content(); ?></div>
			  			<div class="clients_name">- <?php  echo  $author; ?></div>
			  		</div>
			  </li>

			  <?php } ?>
			</ul>
		</div>


	</div><!--container End-->

</div><!--section End-->



<div class="section  clearfix section-colored6"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Blog_Cont_Top"><!--Blog_Cont_Top Start-->
			
				<h1>Our Latest Blog Posts</h1>

		
		</div><!--Blog_Cont_Top End-->


		<?php
		 global $post;
		 $myposts = get_posts('numberposts=3');
		// echo "<pre>";
		// print_r($myposts);
		// exit;

		 foreach($myposts as $post) :?>

		<div class="Blog_Box1 left"><!--Blog_Box1 Start-->
    		
			<!-- <span><img src="<?php echo get_stylesheet_directory_uri();?>/images/user1.png" alt=""  /></span> -->
			<h1><?php echo $post->post_name; ?></h1>
			<p><?php echo $post->post_excerpt; ?></p>
			<div class="blog_bt1"><a href="#">Read More</a></div>

		</div><!--Blog_Box1 End-->

		 <?php endforeach; ?>

		<!-- <div class="Blog_Box1 left"><!--Blog_Box1 Start-->
    		
			<!--<span><img src="<?php echo get_stylesheet_directory_uri();?>/images/user2.png" alt=""  /></span>
			<h1>Duis eget leo sit amet orci suscipit lacinia neque</h1>
			<p>Suspendisse sollicitudin, nisi sed convallis feugiat, dolor sem adipiscing erat, eget tristique nisl velit eu neque. Donec auctor augue quis urna auctor euismod Duis</p>
			<div class="blog_bt1"><a href="#">Read More</a></div>

		</div>--><!--Blog_Box1 End-->


		<!-- <div class="Blog_Box1 right"><!--Blog_Box1 Start-->
    		
			<!--<span><img src="<?php echo get_stylesheet_directory_uri();?>/images/user3.png" alt=""  /></span>
			<h1>Duis eget leo sit amet orci suscipit lacinia neque</h1>
			<p>Suspendisse sollicitudin, nisi sed convallis feugiat, dolor sem adipiscing erat, eget tristique nisl velit eu neque. Donec auctor augue quis urna auctor euismod Duis</p>
			<div class="blog_bt1"><a href="#">Read More</a></div>

		</div> --><!--Blog_Box1 End-->

	</div><!--container End-->

</div><!--section End-->



<div class="section clearfix section-colored7"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->	
		
	</div><!--container End-->

</div><!--section End-->

<?php get_footer(); ?>
