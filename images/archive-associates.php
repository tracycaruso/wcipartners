<?php get_header();?>

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
    
 <div class="band main associates article">
     	<div class="container">
        	<div class="sixteen columns">
            	<h2>Meet Our Team</h2>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<div class="eight columns">
			<figure class="border hidesm">
           			<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail('full'); 
					} 
					?>
         	</figure>
            
            <figure class="border hide showsm">
          		<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail('medium'); 
					} 
					?>
            </figure>
            
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2 class="associate"><?php the_title(); ?></h2>
            
        

			

			<div class="entry bio">
				<?php the_content(); ?>
			</div>
		<?php
			if ( 0 == $count%2 ) {
        echo '<div class="clear"></div>';
    }
	?>
		</div>
        
         </div><!--end8-->

	<?php endwhile; ?>
    
    	<?php
		if ( 0 != $count%2 ) {
   echo '<div class="clear"></div>';
}
?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
            
        
         
    	</div><!--endContainer-->
            
     	</div><!--endContainer-->
   </div><!--endBand-->
   <?php get_footer();?>