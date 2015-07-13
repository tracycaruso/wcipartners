<?php get_header();?>

 <div class="band">
  
          <img class="hidemd" src="<?php echo get_template_directory_uri();?>/images/news/banner.jpg"/>
          
 
    </div><!--endBand-->
    
      <div class="band main article">
    	<div class="container">
        	<div class="sixteen columns">
            	<h2>Arch</h2>
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

			<h5><?php the_time('F jS, Y') ?> | <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>

			<div class="entry">
				<?php the_content(); ?>
			</div>

	

		</div>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
            
        
        
            </div>
            <div class="aside hidemd">
                <div class="five columns">
                    <img src="<?php echo get_template_directory_uri();?>/images/residential-home.png"/>
                    <h3 class="sideline"><span>Residential</span></h3>
                </div>
                <div class="five columns">
                    <img src="<?php echo get_template_directory_uri();?>/images/commercial-home.png"/>
                    <h3 class="sideline"><span>Commercial</span></h3>
                </div>
            </div>
         </div><!--endContainer-->
    </div><!--endBand-->
   
   
   <?php get_footer();?>