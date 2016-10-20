 <?php /* Template Name: contact us */  
get_header();
$args = array(
    'post_type'      => 'team',
    'posts_per_page' => 4,
    'order'          => 'ASC',);
$loop = new WP_Query($args);
?>
<div class="section contact_section_1">
	<div class="container">
		<div class="section_left left">

			<?php 
			if ( have_posts() ) :
	    	while ( have_posts() ) : the_post();
	        
			the_content(); 
			
		   	endwhile;
			else :
			    _e( 'Sorry, no posts were found.', 'textdomain' );
			endif;
		    ?>
			<form>
				
			</form>
		</div>
		<div class="section_right right">
			
			<?php dynamic_sidebar( 'contacts' ); ?>
			<div class="contact_social">
			<?php dynamic_sidebar( 'social-2' ); ?>	
			</div>

		</div>
	</div>		
  </div>

  <div class="section contact_section_2">
  	<div class="container">
	  	<div class="our_team_wrapper">
	  		<h4>Meet Our Friendly Staff</h4>

	  		<ul class="our_team">
	  			<?php 
	  			while ($loop->have_posts()) {
    					$loop->the_post();
    					// echo "<pre>";
    					// print_r($loop);
    					// die();
    					$name = get_field('contact-name');
				    	//echo  $name;
				    	$position = get_field('contact-position');
				    	//echo  $position;
				    	$email = get_field('contact-email');
				   		//echo  $email;
				        $image = get_field('contact-image');
				       
	  			?>
	  			<li>
	  				<div class="image_block"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/></div>
	  				<h6><?php echo  $name ?></h6>
	  				<div class="details">
	  					<p><strong>Position:</strong> <?php echo $position ?></p>
	  					<p><strong>Email:</strong> <?php echo $email ?></p>
	  				</div>
	  			</li>
	  			<?php } ?>
	  			

	  			
	  		</ul>
	  	</div>
   </div>
  </div>



<div class="section clearfix section-colored7"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->	
		
	</div><!--container End-->

</div><!--section End-->




 <!--footer-starts-->
  <footer class="footer_wrapper">

    <div class="container"><!--container Start-->
		
		<div class="Footer_Cont_Top clearfix"><!--Footer_Cont_Top Start-->

			<span class="left"><img src="<?php echo get_stylesheet_directory_uri();?>/images/foot_logo.png" alt=""></span>
			<p class="right">Shortcut your search to happiness right now. 
Live a life without regrets and take action today!</p>
		</div><!--Footer_Cont_Top End-->
		
		<div class="Footer_Cont_Top2 clearfix"><!--Footer_Cont_Top2 Start-->

			<h1>Call Us Today! (02) 9017 8413</h1>
			 <a href="#">Book an Appointment <img src="<?php echo get_stylesheet_directory_uri();?>/images/icon7.png" alt=""></a>
 			 <a href="#">Contact a Consultant <img src="<?php echo get_stylesheet_directory_uri();?>/images/icon6.png" alt=""></a>
		</div><!--Footer_Cont_Top2 End-->
		
		<div class="Footer_Cont_Top3 clearfix"><!--Footer_Cont_Top3 Start-->
			
			<div class="Foot_Link1"><!--Foot_Link1 Start-->

				<h1>CONTACT INFO</h1>

				<div class="Foot_Link2"><!--Foot_Link2 Start-->
					 
				  <span>4/220 George St, Sydney NSW 2000</span>
				  <p>Phone: (02) 9017 8413</p>
				  <p>Email: <a href="mailto:info@syd.vitalpartners.com.au" target="_blank">info@syd.vitalpartners.com.au</a></p>

				</div><!--Foot_Link2 End-->

				<div class="Foot_Link2"><!--Foot_Link2 Start-->
					 
				  <span>Canberra City Act 2600 </span>
				  <p>Phone: (02) 9017 8426</p>
				  <p>Email: <a href="mailto:can@syd.vitalpartners.com.au" target="_blank">can@syd.vitalpartners.com.au</a></p>

				</div><!--Foot_Link2 End-->

			</div><!--Foot_Link1 End-->

			<div class="Foot_Link1"><!--Foot_Link2 Start-->
				<h1>RECENT POSTS</h1>

				<div class="Foot_Link3"><!--Foot_Link3 Start-->
					<ul>
						<li><a href="#">How to Recover After a Bad Date</a></li>
                        <li><a href="#">Review | Vital Partners Review</a></li>
                        <li><a href="#">Review | Vital Partners Review</a></li>
                        <li><a href="#">Review | Vital Partners Derek and Julie</a></li>
                        <li><a href="#">7 Rules for a Happy Relationship | Vital Partners Dating Sydney</a></li>
					</ul>
				</div><!--Foot_Link3 End-->

			</div><!--Foot_Link1 End-->

			<div class="Foot_Link1"><!--Foot_Link2 Start-->
				<h1>RECENT TWEETS</h1>

				<div class="Foot_Link4"><!--Foot_Link4 Start-->
					<ul>
						<li class="left">
							<p>Are you being vulnerable to find love? via offline dating agency Sydney Canberra Vital Partners </p> 
			             <div class="Page_Link left"><a  href="#">http://t.co/hGCgHEU6If</a></div>
						 <div class="Page_Link right"> 1 week ago</div>
					    </li>
                      <li class="left">
							<p>Are you being vulnerable to find love? via offline dating agency Sydney Canberra Vital Partners </p> 
			             <div class="Page_Link left"><a  href="#">http://t.co/hGCgHEU6If</a></div>
						 <div class="Page_Link right"> 2 week ago</div>
					    </li>
					</ul>
				</div><!--Foot_Link4 End-->

			</div><!--Foot_Link2 End-->

		
		</div><!--Footer_Cont_Top3 End-->
	
	</div><!--container End-->

    <div class="section clearfix section-colored9"><!--section section-colored9 start--> 
            
        <div class="container"><!--container Start-->
            
          <div class="Foot_Link5 left"><!--Foot_Link5 Start-->
				&copy; VitalPartners.com.au
		  </div><!--Foot_Link5 End-->

			<div class="Foot_Link6 left"><!--Foot_Link5 Start-->
				<a href="#">Contact</a> |  <a href="#">Terms of Use</a> |   <a href="#">Privacy Policy</a> |  <a href="#">Disclaimer</a>
            </div><!--Foot_Link6 End-->


			<div class="Foot_Link7 right"><!--Foot_Link7 Start-->
				<span>FOLLOW US:</span>

				<ul class="social_media">
					<li><a href="#" class="fb">facebook</a></li>
					<li><a href="#" class="twitter">Twitter</a></li>
					<li><a href="#" class="linkedin">LinkedIn</a></li>
					<li><a href="#" class="you_tube">You Tube</a></li>
					<li><a href="#" class="gplus">googl plus</a></li>
				</ul>


				<!-- <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon10.png" alt=""></a></p>
                <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon11.png" alt=""></a></p>
                <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon12.png" alt=""></a></p>
                <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon13.png" alt=""></a></p>
                <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon14.png" alt=""></a></p> -->
			</div><!--Foot_Link7 End-->
            
      </div><!--container End-->
    
    </div><!--section section-colored9 End--> 
	 
    <div class="section section-colored10"><!--section section-colored9 start--> 
            
        <div class="container"><!--container Start-->
			<div class="Foot_Link8 "><!--Foot_Link8 Start-->
			<a href="#">Who Designed This Site?</a> <a href="#">Who  Built This Site?</a>
			</div><!--Foot_Link8 End-->
		</div><!--container End-->
    
    </div><!--section section-colored9 End--> 
  </footer>
  <!--footer-ends--> 
  
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
</body>
</html>