 <?php /* Template Name: Blog Template */  

 get_header();

//echo "$postid";




//$posts = get_posts('numberposts=2&order=ASC&orderby=post_title');

if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}


$count = count( get_comments( array(
    'post_id' => get_the_ID(),
    'type' => 'blog'
) ) );



$custom_query_args = array(
    'post_type' => 'post', 
    'posts_per_page' => 1,
    'paged' => $paged,
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    //'category_name' => 'custom-cat',
    'order' => 'DESC', // 'ASC'
    'orderby' => 'date' // modified | title | name | ID | rand
);
$custom_query = new WP_Query( $custom_query_args );

?>
<!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<!-- Content Section Left-->
		<div class="content_section_left left">
			<h1 class="page_title">Dating Blog</h1>
			<?php if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post();
    	//echo "<pre>";
    	//print_r($custom_query);
    	//die();
		$postid = get_the_ID();
		$comments_count = wp_count_comments($postid);
     ?>


			<div class="blog_post">
				<div class="blog_header">
						<div class="date">
							
						<p><?php echo get_the_date(); ?></p>
						</div>
						<div class="blog_title">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
							<span>POSTED BY: <?php the_author(); ?></span>

						</div>
						<div class="comments">COMMENTS <span class="comment_count"><a href="<?php the_permalink(); ?>"><?php echo $comments_count->approved ;
 ?></a></span></div>
					</div>
					<div class="blog_image"><?php  the_post_thumbnail(); ?></div>
					<div class="blog_content">
						<p><?php the_excerpt(); ?> </p>
						
					</div>
			</div>
			

			

			<?php  endwhile; ?>

			   <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
        <?php
		        $orig_query = $wp_query; // fix for pagination to work
		        $wp_query = $custom_query;
		        ?>
		        <nav class="prev-next-posts">
		            <!--<div class="prev-posts-link">
		                <?php echo get_next_posts_link( 'Older Entries', $custom_query->max_num_pages ); ?>
		            </div>
		            <div class="next-posts-link">
		                <?php echo get_previous_posts_link( 'Newer Entries' ); ?>
		            </div>-->
		            <?php wp_pagenavi(); ?>
		        </nav>
		        <?php
		        $wp_query = $orig_query; // fix for pagination to work
		        ?>
		    <?php endif; ?>

		<?php
		    wp_reset_postdata(); // reset the query 
		else:
		    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
		endif;
		?>
			<div class="blog_comment">
				<h5>Leave a Comment Below...</h5>

				<div class="coment_header">
					<div class="comment_count"><span> <?php wp_count_comments(); ?> </span> Comments</div>
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
						<?php dynamic_sidebar( 'popular-1' ); ?>
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
 <style>

.tptn_title {
    color: #e54c4c;
    font-size: 19px;
    line-height: 16px;
    padding-left: 46px;
    
}
.tptn_after_thumb{
    margin:0;
}
.tptn_excerpt{
    display: inline-block;
    float: none;
    padding-top: 10px;
    position: relative;
    font-size:15px;
    color: #666;
}
 </style>
