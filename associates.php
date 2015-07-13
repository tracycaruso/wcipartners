<?php
/*
Template Name: Associates
*/
?>



<?php get_header();?>
    <div class="band">
    	<div class="aboutHead container">
        	<div class="sixteen columns">
            	<p class="emphasis"> WCI Partners is a real estate development company focused on urban revitalization. We create residential and commercial projects that are both economically and socially valuable for their surrounding communities. Every day we are dedicated to delivering immediate results with lone-term impacts.</p>
           </div>
            <div class="one-third column">
            		<img class="circle" src="<?php echo get_template_directory_uri();?>/images/about/vision.png"/>
                    <h3 class="underline"><span>VISION</span></h3>
                    <p>We imagine great places<br/> to live, work and play.</p>
            </div>
            <div class="one-third column">
            		<img class="circle" src="<?php echo get_template_directory_uri();?>/images/about/execution.png"/>
                    <h3 class="underline"><span>EXECUTION</span></h3>
                    <p>We perform every task with competence, urgency, and determination.</p>
            </div>
            <div class="one-third column">
            		<img class="circle" src="<?php echo get_template_directory_uri();?>/images/about/value.png"/>
                    <h3 class="underline"><span>VALUE</span></h3>
                    <p>We create lasting value for our clients,<br/> partners, and our community.</p>
            </div>
         </div><!--endContainer-->
    </div><!--endBand-->
    
     <?php is_post_type_archive( $post_types ); ?> 

   <?php get_footer();?>
   
  