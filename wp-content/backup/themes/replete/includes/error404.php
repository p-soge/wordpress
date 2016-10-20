

<p><strong><?php _e('Nothing Found', 'avia_framework'); ?></strong><br/>

<?php _e('Sorry, the product you are looking for is not available. Maybe you want to perform a search?', 'avia_framework'); ?>
</p>
<?php 
		
		if(isset($_GET['post_type']) && $_GET['post_type'] == 'product' && function_exists('get_product_search_form'))
		{
			get_product_search_form();
		}
		else
		{
			get_search_form(); 
		}

?>



<div class='hr_invisible'></div>  

<p><?php _e('For best search results, mind the following suggestions:', 'avia_framework'); ?></p>
<ul class='borderlist-not'>
	<li><?php _e('Always double check your spelling.', 'avia_framework'); ?></li>
	<li><?php _e('Try similar keywords, for example: tablet instead of laptop.', 'avia_framework'); ?></li>
	<li><?php _e('Try using more than one keyword.', 'avia_framework'); ?></li>
</ul>

<div class='hr_invisible'></div>
