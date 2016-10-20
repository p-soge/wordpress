
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>


<title>Vital Partners Leading Dating and Introduction Agency in Sydney &amp; Canberra</title>
<link href="<?php echo get_stylesheet_directory_uri();?>/css/default.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo get_stylesheet_directory_uri();?>/css/stylesheet.css"  rel="stylesheet" type="text/css" media="all">
<link href="<?php bloginfo('stylesheet_url'); ?>"  rel="stylesheet" type="text/css" media="all">
<!--<link href="css/small-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/medium-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/high-resolution.css" rel="stylesheet" type="text/css" media="all">-->

<!-- jQuery library (served from Google) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.bxslider.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js" type="text/javascript"></script>

<!-- bxSlider CSS file -->
<link href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.bxslider.css" rel="stylesheet" />
<!-- Responsive -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" />



</head>

<body <?php body_class(); ?>>
<!--wrapper-starts-->
<div id="wrapper"> 
  
 <!--header-starts-->
  <header class="clearfix">

    <div class="container"><!--container Start-->

    <div class="Logo_Cont left"><!--Logo_Cont Start-->
                      
           <!-- <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""  /></a>
         -->
         <?php  child_theme_custom_logo() ?>
        </div><!--Logo_Cont End-->
    
    <div class="Home_Cont_Right right"><!--Home_Cont_Right Start-->
                      
            <div class="Home_Cont_Right_Top left"><!--Home_Cont_Right_Top Start-->
                 
         <div class="Top_Search1 left"><?php dynamic_sidebar( 'top-1' ); ?></div>
         <div class="Top_Search2 right"><!-- <input  id="tags1" name="" type="text" onclick="this.value='';" onblur="validate_field('phone');"  value="Type desired Job Location" /> -->


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
     <input type="search" class="search-field" placeholder="Type desired job location" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
</form>

         </div>
           
          </div><!--Home_Cont_Right_Top End-->

      <div class="Home_Cont_Right_Bottom left"><!--Home_Cont_Right_Bottom Start-->
      <div class="toggle_menu"><a href="javascript:void(0)">Menu</a></div>        
                 <div id= "topMenu">
                  
                  <?php 
                  // add_filter( 'wp_nav_menu_objects', 'reverse_menu' );

                  //       function reverse_menu( $menu ) 
                  //       {
                  //       remove_filter( current_filter(), __FUNCTION__ );
                  //       return array_reverse( $menu );
                  //       }

                  wp_nav_menu(array( 'menu' => 'main-menu', 'menu_class' => '', 'theme_location' => 'primary' ) ) ; ?>

                
                 </div>




           
          </div><!--Home_Cont_Right_Bottom End-->
        
        </div><!--Home_Cont_Right End-->

  </div><!--container End-->

  </header>

  <!--header-ends--> 
