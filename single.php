<?php get_header();?>

 <div class="band">
  
          <img class="hidemd" src="<?php echo get_template_directory_uri();?>/images/news/banner.jpg"/>
          
 
    </div><!--endBand-->
    
      <div class="band main article">
    	<div class="container">
        	<div class="sixteen columns">
            	<h2>News and Updates</h2>
            </div>
            <div class="eleven columns">
            
            
            
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			
           <figure class="border">
           <?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail( '' ); 
					} 
				?>
         </figure>
         <h2 class="post"><?php the_time('F jS, Y') ?> | <?php the_title(); ?></h2>
			
			

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>


	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
            
        
        
            </div>
            <?php get_sidebar();?>
         </div><!--endContainer-->
    </div><!--endBand-->
   
   
   <?php get_footer();?>