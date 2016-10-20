<?php /* Template Name: Thankyou page */  

get_header();

?>
<body>
<!--wrapper-starts-->
<div id="wrapper"> 
  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Your Vital Profile</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <div class="section content_section">
	<div class="container">
		<div class="thank_you_bock">
			<div class="tahnk_you_msg">
				Thanks for submitting your enquiry with Vital Partners. You’ve taken the ﬁrst step towards having a love life you deserve.
			</div>
			<p>One of our consultants will be in touch soon to talk you through the next steps.</p>

			<div class="timing_details">
				<p>If you have any questions we'd be happy to help - you can call us on </p>
				<p><span>02 9017 8413</span>  between <span>9:30am</span> and  <span>6pm</span> (AEDT)</p>
				<p>Tuesday to Friday, or <span>9:30am</span> to <span>2pm</span> (AEDT) Saturday</p>
			</div>

			<h4>What Our Clients Say</h4>

			<div class="clients_comments">It was 3 years ago that I was introduced to my partner. We clicked straight away and are now living together. I went to Vital because I was also sick of internet dating. It's reassuring to know all guys are screened and I only met the ones I wanted to meet. I support them wholeheartedly!</div>

			<div class="cliets_name">
				<span><img src="images/review_customer_icon.png"/></span>CH Woolwich
			</div>
		</div>
	</div>		
  </div>
  <!-- Content Section End-->




<div class="section clearfix section-colored7"><!--section start--> 
    	
	<div class="container"><!--container Start-->
		
		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->	
		
	</div><!--container End-->

</div><!--section End-->

<?php 

get_footer();

?>

 
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

<!--wrapper-starts-->

<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript">
	$(document).ready(function(){
		$('.select').each(function(){
		  var title = $(this).attr('title');
		  if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
		  $(this).css({'z-index':10,'opacity':0,'-khtml-appearance':'none'}).after('<span class="select">' + title + '</span>').change(function(){
			val = $('option:selected',this).text();
			$(this).next().text(val);
		  })
		});
	});
</script>
</body>
</html>