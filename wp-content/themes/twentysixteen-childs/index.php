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
// wp_head();
// get_header();
// //get_sidebar();
// get_footer();



if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		// Your loop code
			the_title();
			the_content();
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;
die();

?>



