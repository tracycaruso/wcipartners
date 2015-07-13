<?php get_header();?>

 <div class="band">
  
           <div><?php putRevSlider("news") ?> </div>
 
    </div><!--endBand-->
    
      <div class="band main article">
    	<div class="container">
        	<div class="sixteen columns">
            	<h2>News and Updates</h2>
            </div>
            <div class="eleven columns">
            
            
            
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

         <figure class="border hidelg">
           			<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail('full'); 
					} 
					?>
         	</figure>
            
             <figure class="border hide showlg hidemd">
           			<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail(array(450,179)); 
					} 
					?>
         	</figure>
            
            <figure class="border hide showmd">
          		<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail('medium'); 
					} 
					?>
            </figure>

            
            

			<h2 class="post"><?php the_time('F jS, Y') ?> | <?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>

	

		</div>

	<?php endwhile; ?>
    
    
    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
            
        
        
            </div>
             <?php get_sidebar();?>
         </div><!--endContainer-->
    </div><!--endBand-->
   
   
   <?php get_footer();?>