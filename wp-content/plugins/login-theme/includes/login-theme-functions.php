<?php




function login_theme_logo() { 

	$login_theme_logo_url = get_option( 'login_theme_logo_url' );
	
	if(!empty($login_theme_logo_url))
		{
		?>
			<style type="text/css">
				body.login div#login h1 a {
					background-image: url(<?php echo $login_theme_logo_url; ?>);
					padding-bottom: 30px;
					width: 300px;
					background-size: 100% auto;
				}
			</style>
		<?php
		
		}
 }
add_action( 'login_enqueue_scripts', 'login_theme_logo' );








function login_theme_stylesheet() {
	
	$login_theme_themes = get_option('login_theme_themes');
	$login_theme_bg_img = get_option('login_theme_bg_img');
	$login_theme_box_bg_color = get_option('login_theme_box_bg_color');	
	$login_theme_box_text_color = get_option('login_theme_box_text_color');
	$login_theme_button_bg_color = get_option('login_theme_button_bg_color');	
	
		?>
			<style type="text/css">
				body.login{
					background-image: url(<?php echo $login_theme_bg_img; ?>);
				}
				
				.login form {
				  background: <?php echo $login_theme_box_bg_color; ?>;
				}
				
				.login .button-primary {
				  background: <?php echo $login_theme_button_bg_color; ?>;
				  border-color: <?php echo login_theme_dark_color($login_theme_button_bg_color); ?>;
				}
				
				.login .button-primary:hover {
				  background: <?php echo login_theme_dark_color($login_theme_button_bg_color); ?>;
				}				
							
				.login label{
				 
					color: <?php echo $login_theme_box_text_color; ?>;
				}				
				
			</style>
		<?php
	

	
	
	if($login_theme_themes == 'flat')
		{
			wp_enqueue_style('login-theme-style-flat', login_theme_plugin_url.'themes/flat/style.css');
		}
	elseif($login_theme_themes == 'rounded')
		{
			wp_enqueue_style('login-theme-style-rounded', login_theme_plugin_url.'themes/rounded/style.css');
		}	
	elseif($login_theme_themes == 'flat-icons')
		{
			wp_enqueue_style('login-theme-style-flat-icons', login_theme_plugin_url.'themes/flat-icons/style.css');
		}		
		
		
	
	
}
add_action( 'login_enqueue_scripts', 'login_theme_stylesheet' );











function login_theme_dark_color($input_color)
	{
		if(empty($input_color))
			{
				return "";
			}
		else
			{
				$input = $input_color;
			  
				$col = Array(
					hexdec(substr($input,1,2)),
					hexdec(substr($input,3,2)),
					hexdec(substr($input,5,2))
				);
				$darker = Array(
					$col[0]/2,
					$col[1]/2,
					$col[2]/2
				);
		
				return "#".sprintf("%02X%02X%02X", $darker[0], $darker[1], $darker[2]);
			}

		
		
	}
	
	
	
	
	
	
	function login_theme_share_plugin()
		{
			
			?>
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwordpress.org%2Fplugins%2Flogin-theme%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=652982311485932" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
            
            <br />
            <!-- Place this tag in your head or just before your close body tag. -->
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            
            <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300" data-href="<?php echo login_theme_share_url; ?>"></div>
            
            <br />
            <br />
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo login_theme_share_url; ?>" data-text="<?php echo login_theme_plugin_name; ?>" data-via="ParaTheme" data-hashtags="WordPress">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



            <?php
			
			
			
		
		
		}
	
	