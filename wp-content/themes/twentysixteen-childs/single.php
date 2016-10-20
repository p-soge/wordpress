<?php
//echo "hi";
//die();
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
// ;
 wp_head();
 get_header();
// //get_sidebar();
// get_footer();

		// Your loop code
			//the_title();
			//the_content();



//die();
$count = count( get_comments( array(
    'post_id' => get_the_ID(),
    'type' => 'blog'
) ) );
?>


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie" lang="en" dir="ltr"><![endif]-->
<!--[if gt IE 8]> <html class="no-js gt-ie8 ie" lang="en" dir="ltr"><![endif]-->



<body>
<!--wrapper-starts-->
<div id="wrapper"> 
  
 
  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<!-- Content Section Left-->
		<div class="content_section_left left">
			<h1 class="page_title">Dating Blog</h1>
			<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
	$postid = get_the_ID();

		$comments_count = wp_count_comments($postid);
	?>
			<div class="blog_post">
				<div class="blog_header">
						<div class="date">
							
							<p><?php the_date() ?></p>
						</div>
						<div class="blog_title">
							<h4><?php the_title(); ?></h4>
							<span>POSTED BY: <?php the_author(); ?></span>
						</div>
						<div class="comments">COMMENTS <span class="comment_count"><?php echo $comments_count->approved ; ?></span></div>
					</div>
					<div class="blog_image"><?php  the_post_thumbnail(); ?></div>
					<div class="blog_content">
						
					<?php the_content(); ?>	
					

					</div>
					
			</div>

			
			

			<div class="blog_comment">
				<h5>Leave a Comment Below...</h5>

				<div class="coment_header">
					<div class="comment_count"><span><?php echo $comments_count->approved ; ?></span> Comments</div>
					<div class="name">Diana Levy Says</div>
				</div>

				<div class="actions">
					<div class="sort"><a href="#">Sort by Best</a></div>
					<div class="share_action">
						<ul>
							<li class="share"><a href="#">Share</a></li>
							<li class="fav"><a href="#">Favorite</a></li>
						</ul>
					</div>
				</div>

				<div class="comments_section">
					<?php comments_template();?>
				</div>

				<div class="be_the_first_to_comment">Be the first to comment.</div>


			</div>
		</div>
		<?php  		endwhile;
						else :
							echo wpautop( 'Sorry, no posts were found' );
						endif; 
			?>
		<!-- Content Section Left-->

		<!-- Sidebar Section Start-->
		<div class="sidebar_section right">
			<ul class="banner">
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/sidebanner_image_1.png" alt="Sidebar Image 1" /></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/sidebanner_image_2.png" alt="Sidebar Image 2" /></a></li>
			</ul>


			<div class="category_list">
				<h5 class="box_title">Categories</h5>
				<ul>
					<li><a href="#">Category One <span>(4)</span></a></li>
					<li><a href="#">Category Two <span>(2)</span></a></li>
					<li><a href="#">Category Three <span>(3)</span></a></li>
					<li><a href="#">Category Four <span>(4)</span></a></li>
					<li><a href="#">Category Five <span>(2)</span></a></li>
					<li><a href="#">Category Six <span>(4)</span></a></li>
					<li><a href="#">Category Seven <span>(3)</span></a></li>
				</ul>
			</div>


			<div class="most_popuplar_post">
				<h5 class="box_title">Most Popular Posts</h5>
				<ul>
					<li>
						<div class="image_container"><img src="<?php echo get_stylesheet_directory_uri();?>/images/most_popular_post_1.jpg" alt="Most Popular Post 1" /></div>
						<div class="post_desc">
							<div class="block_title"><a href="#">Headline Goes Here...</a></div>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
						</div>
					</li>

					<li>
						<div class="image_container"><img src="<?php echo get_stylesheet_directory_uri();?>/images/most_popular_post_2.jpg" alt="Most Popular Post 2" /></div>
						<div class="post_desc">
							<div class="block_title"><a href="#">Headline Goes Here...</a></div>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
						</div>
					</li>

					<li>
						<div class="image_container"><img src="<?php echo get_stylesheet_directory_uri();?>/images/most_popular_post_3.jpg" alt="Most Popular Post 3" /></div>
						<div class="post_desc">
							<div class="block_title"><a href="#">Headline Goes Here...</a></div>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
						</div>
					</li>

					<li>
						<div class="image_container"><img src="<?php echo get_stylesheet_directory_uri();?>/images/most_popular_post_4.jpg" alt="Most Popular Post 4" /></div>
						<div class="post_desc">
							<div class="block_title"><a href="#">Headline Goes Here...</a></div>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
						</div>
					</li>

					<li>
						<div class="image_container"><img src="<?php echo get_stylesheet_directory_uri();?>/images/most_popular_post_5.jpg" alt="Most Popular Post 5" /></div>
						<div class="post_desc">
							<div class="block_title"><a href="#">Headline Goes Here...</a></div>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
						</div>
					</li>					
				</ul>
			</div>



		</div>
		<!-- Sidebar Section End-->
	</div>		
  </div>
  <!-- Content Section End-->




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
<?php  get_footer ?>
</body>
</html>
