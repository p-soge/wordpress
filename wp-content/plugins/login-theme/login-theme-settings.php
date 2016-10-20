<?php

	if(empty($_POST['login_theme_hidden']))
		{
			$login_theme_themes = get_option( 'login_theme_themes' );	
			$login_theme_logo_url = get_option( 'login_theme_logo_url' );				
			$login_theme_bg_img = get_option( 'login_theme_bg_img' );
			$login_theme_box_bg_color = get_option( 'login_theme_box_bg_color' );			
			$login_theme_box_text_color = get_option( 'login_theme_box_text_color' );			
			$login_theme_button_bg_color = get_option( 'login_theme_button_bg_color' );
			
			// default
			$login_theme_customer_type = get_option( 'login_theme_customer_type' );
			$login_theme_version = get_option( 'login_theme_version' );			
			
			
		}

	else
		{
		
		if($_POST['login_theme_hidden'] == 'Y')
			{
			//Form data sent
			
			
			$login_theme_themes = $_POST['login_theme_themes'];
			update_option('login_theme_themes', $login_theme_themes);
			
			$login_theme_logo_url = $_POST['login_theme_logo_url'];
			update_option('login_theme_logo_url', $login_theme_logo_url);			
			
			$login_theme_bg_img = $_POST['login_theme_bg_img'];
			update_option('login_theme_bg_img', $login_theme_bg_img);						

			$login_theme_box_bg_color = $_POST['login_theme_box_bg_color'];
			update_option('login_theme_box_bg_color', $login_theme_box_bg_color);	

			$login_theme_box_text_color = $_POST['login_theme_box_text_color'];
			update_option('login_theme_box_text_color', $login_theme_box_text_color);	

			$login_theme_button_bg_color = $_POST['login_theme_button_bg_color'];
			update_option('login_theme_button_bg_color', $login_theme_button_bg_color);	
			
			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p>
            </div>
            
            
            
            
<?php
			}
		} 
?>







<div class="wrap">
	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".__(login_theme_plugin_name.' Settings')."</h2>";?>
<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="login_theme_hidden" value="Y">
        <?php settings_fields( 'login_theme_options' );
				do_settings_sections( 'login_theme_options' );
		?>



    <div class="para-settings">
        <ul class="tab-nav"> 
            <li nav="1" class="nav1 active">Options</li>
            <li nav="2" class="nav2 ">Help & Upgrade</li>           
        </ul> <!-- tab-nav end -->  
        
		<ul class="box">
        
            <li style="display: block;" class="box1 tab-box active">

				<div class="option-box">
                    <p class="option-title">Themes</p>
                    <p class="option-info"></p>
                    <select class="login_theme_themes" name="login_theme_themes"  >
                        <option  value="none" <?php if($login_theme_themes=="none")echo "selected"; ?>>None</option>
                        <option  value="flat" <?php if($login_theme_themes=="flat")echo "selected"; ?>>Flat</option>
                        <option  value="rounded" <?php if($login_theme_themes=="rounded")echo "selected"; ?>>Rounded</option>
                        <option  value="flat-icons" <?php if($login_theme_themes=="flat-icons")echo "selected"; ?>>Flat Icons</option>                       
                    </select>
                </div>
                
                
                
                
				<div class="option-box">
                    <p class="option-title">Logo</p>
                    <p class="option-info"></p>
					<input type="text" size="30" placeholder="Logo URL"   name="login_theme_logo_url" value="<?php if(!empty($login_theme_logo_url)) echo $login_theme_logo_url; ?>" />
                </div>     
                
                 
				<div class="option-box">
                    <p class="option-title">Login box background color</p>
                    <p class="option-info"></p>
					<input class="login_theme_box_bg_color" type="text" placeholder="background color"   name="login_theme_box_bg_color" value="<?php if(!empty($login_theme_box_bg_color)) echo $login_theme_box_bg_color; ?>" />
                </div>
                
				<div class="option-box">
                    <p class="option-title">Login box text color</p>
                    <p class="option-info"></p>
					<input class="login_theme_box_text_color" type="text" placeholder="Text color"   name="login_theme_box_text_color" value="<?php if(!empty($login_theme_box_text_color)) echo $login_theme_box_text_color; ?>" />
                </div>
                
				<div class="option-box">
                    <p class="option-title">Button background color</p>
                    <p class="option-info"></p>
					<input class="login_theme_button_bg_color" type="text" placeholder="Text color"   name="login_theme_button_bg_color" value="<?php if(!empty($login_theme_button_bg_color)) echo $login_theme_button_bg_color; ?>" />
                </div>                
                
                
                
				<div class="option-box">
                    <p class="option-title">Background Image.</p>
                    <p class="option-info">Background image for login area.</p>
                                           
            <script>
            jQuery(document).ready(function(jQuery)
                {
                        jQuery(".login_theme_bg_img_list li").click(function()
                            { 	
                                jQuery('.login_theme_bg_img_list li.bg-selected').removeClass('bg-selected');
                                jQuery(this).addClass('bg-selected');
                                
                                var login_theme_bg_img = jQuery(this).attr('data-url');
            
                                jQuery('#login_theme_bg_img').val(login_theme_bg_img);
                                
                            })	
            
                                
                })
            
            </script> 
                    
            
            <?php
            

            
                $dir_path = login_theme_plugin_dir."css/bg/";
                $filenames=glob($dir_path."*.png*");
            
                            
                if(empty($login_theme_bg_img))
                    {
                    $login_theme_bg_img = "";
                    }
            
            
                $count=count($filenames);
                
            
                $i=0;
                echo "<ul class='login_theme_bg_img_list' >";
            
                while($i<$count)
                    {
                        $filelink= str_replace($dir_path,"",$filenames[$i]);
                        
                        $filelink= login_theme_plugin_url."css/bg/".$filelink;
                        
                        
                        if($login_theme_bg_img==$filelink)
                            {
                                echo '<li  class="bg-selected" data-url="'.$filelink.'">';
                            }
                        else
                            {
                                echo '<li   data-url="'.$filelink.'">';
                            }
                        
                        
                        echo "<img  width='70px' height='50px' src='".$filelink."' />";
                        echo "</li>";
                        $i++;
                    }
                    
                echo "</ul>";
                
                echo "<input style='width:100%;' value='".$login_theme_bg_img."'    placeholder='Please select image or left blank' id='login_theme_bg_img' name='login_theme_bg_img'  type='text' />";
            
            
            
            ?>
				</div>
                
                
                
                
                
                
                
                
                
            </li>        
            <li style="display: none;" class="box2 tab-box">

				<div class="option-box">
                    <p class="option-title">Need Help ?</p>
                    <p class="option-info">Feel free to contact with any issue for this plugin, Ask any question via forum <a href="<?php echo login_theme_qa_url; ?>"><?php echo login_theme_qa_url; ?></a> <strong style="color:#139b50;">(free)</strong><br />
                    
                    
                    

    <?php


    if($login_theme_customer_type=="free")
        {
    
            echo 'You are using <strong> '.$login_theme_customer_type.' version  '.$login_theme_version.'</strong> of <strong>'.login_theme_plugin_name.'</strong>, To get more feature you could try our premium version. ';
            
            echo '<br /><a href="'.login_theme_pro_url.'">'.login_theme_pro_url.'</a>';
            
        }
    else
        {
            echo 'Thanks for using <strong> premium version  '.$login_theme_version.'</strong> of <strong>'.login_theme_plugin_name.'</strong> ';	
            
            
        }
    
     ?>       

                    
                    </p>

                </div>
                
                
                
				<div class="option-box">
                    <p class="option-title">Submit Reviews...</p>
                    <p class="option-info">We are working hard to build some awesome plugins for you and spend thousand hour for plugins. we wish your three(3) minute by submitting five star reviews at wordpress.org. if you have any issue please submit at forum.</p>
                	<img src="<?php echo login_theme_plugin_url."css/five-star.png";?>" /><br />
                    <a target="_blank" href="<?php echo login_theme_wp_reviews_url; ?>">
                		<?php echo login_theme_wp_reviews_url; ?>
               		</a>
                    
                    
                    
                </div>
                
                
				<div class="option-box">
                    <p class="option-title">Please Share</p>
                    <p class="option-info">If you like this plugin please share with your social share network.</p>
                    <?php
                    
						echo login_theme_share_plugin();
					?>
                </div>     
                
                
                
                
                
                
                
            </li>   
        
    
    </div>
    <p class="submit">
    	<input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
	</p>


</form>        
</div> <!-- wrap end -->