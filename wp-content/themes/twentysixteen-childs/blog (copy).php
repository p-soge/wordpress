 <?php /* Template Name: Blog Template */  

 get_header();

$posts = get_posts('numberposts=2&order=ASC&orderby=post_title');

?>
<!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<!-- Content Section Left-->
		<div class="content_section_left left">
			<h1 class="page_title">Dating Blog</h1>
			<?Php foreach ($posts as $post) : setup_postdata( $post );

			 ?>


			<div class="blog_post">
				<div class="blog_header">
						<div class="date">
							
						<p><?php the_date('Y-m-d'); ?></p>
						</div>
						<div class="blog_title">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
							<span>POSTED BY: <?php the_author(); ?></span>

						</div>
						<div class="comments">COMMENTS <span class="comment_count">0</span></div>
					</div>
					<div class="blog_image"><?php  the_post_thumbnail(); ?></div>
					<div class="blog_content">
						<p><?php the_excerpt(); ?> </p>
						
					</div>
			</div>
			

			

			<?php endforeach; ?>
			<?php if (function_exists('wp_pagenavi')) {
			wp_pagenavi();
			}
			?>
			<div class="blog_sharing">
				<div class="blog_sharing_title">Share this post</div>
				<ul>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/blog_share_fb.jpg" alt="facebook" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/blog_share_twitter.jpg" alt="twitter" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/blog_share_gplus.jpg" alt="google plus" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/blog_share_linkedin.jpg" alt="linkedin" /></a></li>					
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/blog_share_stumble.jpg" alt="stumble" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/blog_share_pintrest.jpg" alt="pintrest" /></a></li>
				</ul>
			</div>

			<div class="blog_comment">
				<h5>Leave a Comment Below...</h5>

				<div class="coment_header">
					<div class="comment_count"><span>0</span> Comments</div>
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
					<div class="user_image">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/comment_box_user_image.jpg" alt="Comment Box User" />
					</div>
					<div class="user_comment_box">
						<input  id="tags3" name="" type="text" placeholder="Start the discussion..." />
					</div>
				</div>

				<div class="be_the_first_to_comment">Be the first to comment.</div>


			</div>
		</div>
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
					<li><?php dynamic_sidebar( 'cat-1' ); ?></li>
					
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




 <?php get_footer(); ?>
