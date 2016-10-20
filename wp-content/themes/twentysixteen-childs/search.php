<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title" style="color: #999;
    font-weight: 600;
    line-height: 1em;
    margin: 3px;
    text-indent: 10%;"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			//echo "hi";
			//die();?>
			<div style="border: 1px solid #dfdfdf;
    margin: 2% 10%;
    padding: 20px;
    width: 80%;">
			<div class="blog_post">
				<div class="blog_header">
						<div class="date">
							
						<p><?php echo get_the_date(); ?></p>
						</div>
						<div class="blog_title">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
							<span>POSTED BY: <?php the_author(); ?></span>

						</div>
						
					</div>
					<div class="blog_image"><?php  the_post_thumbnail('thumbnail'); ?></div>
					<div class="blog_content">
						<p><?php the_excerpt(); ?> </p>
						
					</div>
			</div>
			</div>
			<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				//( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			echo "<div style='text-align:center;padding:10px;'>Sorry no post to show.</div>";

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->


<?php get_footer(); ?>
