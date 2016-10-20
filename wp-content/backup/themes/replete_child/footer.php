</div> <!-- close #main .container_wrap element -->		
		
			<?php 
			
			
			global $avia_config;
						
			//reset wordpress query in case we modified it
			wp_reset_query();
			
	
			
			
			?>

			
			<!-- ####### FOOTER CONTAINER ####### -->
			<div class='container_wrap footer_color' id='footer'>
				<div class='container'>
                <div id="footer-image"><img src="http://misskate.com.au/wp-content/uploads/2013/05/bottomflower.png" /></div>
                
                <ul class="kate-footer-nav">
                <li class="kate-footer-list"><a href="http://misskate.com.au/delivery-returns/" title="Delivery and Returns Policy">Delivery and Returns</a></li>
                <li class="kate-footer-list"><a href="http://misskate.com.au/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
                <li class="kate-footer-list"><a href="http://misskate.com.au/security/" title="Security">Security</a></li>
				<li><a href="http://misskate.com.au/site-map/" title="Sitemap">Sitemap</a></li>
				</ul>
                		
				</div>
				
			</div>
		<!-- ####### END FOOTER CONTAINER ####### -->
		
		
		
		<?php 
		
		// you can filter and remove the backlink with an add_filter function 
		// from your themes (or child themes) functions.php file if you dont want to edit this file
		// you can also just keep that link. I really do appreciate it ;)
		
		$kriesi_at_backlink =	apply_filters("kriesi_backlink", " - <a href='http://www.kriesi.at'>Replete e-Commerce Theme by Kriesi</a>");
		?>
		
		<!-- ####### SOCKET CONTAINER ####### -->
			<div class='container_wrap socket_color' id='socket'>
				<div class='container'>
                
					<span class='copyright'>&copy; 2015 Copyright - Miss Kate     I     Brand Design and Website Development by <a href="http://boutiquebydesign.com" target="_blank" rel="nofollow" title="Boutique By Design">Boutique By Design</a></span>
					<div id="socket-image"><img src="http://misskate.com.au/wp-content/uploads/2013/05/bottomflower2.png" /></div>
					<?php
					
						echo "<div class='sub_menu_socket'>";
						$args = array('theme_location'=>'avia3', 'fallback_cb' => '', 'depth'=>1);
						wp_nav_menu($args); 
						echo "</div>";
					
					?>
					
				</div>
			</div>
			<!-- ####### END SOCKET CONTAINER ####### -->
		
		
		</div>
	<!-- ####### END MAIN CONTAINER ####### -->
		
</div><!-- end wrap_all -->

		
<?php
		if(isset($avia_config['fullscreen_image'])) 
		{ ?>
			<!--[if lte IE 8]>
			<style type="text/css">
			.bg_container {
			-ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $avia_config['fullscreen_image']; ?>', sizingMethod='scale')";
			filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $avia_config['fullscreen_image']; ?>', sizingMethod='scale');
			}
			</style>
			<![endif]-->
		<?php
			echo "<div class='bg_container' style='background-image:url(".$avia_config['fullscreen_image'].");'></div>"; 
		}
	?>	
		

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	 
	
	wp_footer();
	
	
?>
<div id="fb-root"></div>
</body>
</html>