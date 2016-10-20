 <?php /* Template Name: why vital */  
 get_header();

 ?>
<body>
<!--wrapper-starts-->
<div id="wrapper"> 
  


  <div class="section banner_section ">
  	<div> <h4>Why Vital</h4></div>
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
        

		?>
		<div class="content_section_left left">

			<?php the_content(); ?>
		</div>
		<?php   endwhile;
			else :
			    _e( 'Sorry, no posts were found.', 'textdomain' );
			endif;
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

<div class="section  clearfix section-colored3"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<h1>How Vital Works</h1>
		
		<h2>Step, Hop Or Skip Your Way To Happiness</h2>		
		
		<div class="divRow">
			<!--First tooltip-->

			<a href="#" class="tooltip">
			    step<div class="number">1</div><br/>
			    <span>			 
			        <strong>Pop into our office and meet us face to face..</strong><br />
			    </span>
			</a>

			<a href="#" class="tooltip">
			    step<div class="number">2</div><br/>
			    <span>		        
			        <strong>Pop into our office and meet us face to face..p</strong><br />
			    </span>
			</a>

			<a href="#" class="tooltip">
			    step<div class="number">3</div><br/>
			    <span>
			        <strong>Pop into our office and meet us face to face..</strong><br />
			    </span>
			</a>

			<a href="#" class="tooltip">
			    Hop<div class="number">4</div><br/>
			    <span>
			        <strong>Pop into our office and meet us face to face..</strong><br />
			    </span>
			</a>

			<a href="#" class="tooltip">
			    Hop<div class="number">5</div><br/>
			    <span>
			        <strong>Pop into our office and meet us face to face..</strong><br />
			    </span>
			</a>

			<a href="#" class="tooltip">
			    Skip<div class="number">6</div><br/>
			    <span>
			        <strong>Pop into our office and meet us face to face..</strong><br />
			    </span>
			</a>
		</div>


	</div><!--container End-->

</div><!--section End--> 

<div class="section clearfix section_what_client_say">
	<div class="container">
		<h5>What Our Clients Say</h5>
		<ul>
			<li>
				<div class="image_block">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/client_img.png" alt=""  />
					<span> CH Woolwich</span>
				</div>
				<div class="comment">It was 3 years ago that I was introduced to my partner. We clicked straight away and are now living together. I went to Vital because I was also sick of internet dating. It’s reassuring to know all guys are screened and I only met the ones I wanted to meet.  I support them wholeheartedly!</div>
			</li>
		</ul>
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
					 
				  <span>Canberra City Act 2600</span>
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
<!--wrapper-starts-->
</body>
</html>