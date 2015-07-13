<?php
/*
Template Name: Residential
*/
?>
<?php get_header();?>
    
	<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        
        <div class="band title article">
    	<div class="container">
            <div class="six columns">
            		<h1 class="entry-title"><span><?php the_title(); ?></span></h1>
            </div>
            <div class="ten columns">
            	<?php the_content(); ?>
            </div>
          </div><!--endContainer-->
    </div><!--endBand-->
    
    
        <div class="band quote">
        <div class="container">
            <div class="sixteen columns">
    	
          <?php echo testimonialswidget_widget( $args2 );?>
          </div>
          </div>
    </div><!--endBand-->
    
    <div class="band gallery">
    	<div class="container">
            <div class="sixteen columns">
            
            <div class="hidelg hidemd">
            	<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail( 'page-xtralg' ); 
					} 
				?>
            </div>
             <div class="hide showlg hidemd">
            	<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail( 'page-lg' ); 
					} 
				?>
            </div>
            
            <div class="hide showmd hidesm">
				<?php
                if( class_exists( 'kdMultipleFeaturedImages' ) ) {
                    kd_mfi_the_featured_image( 'featured-image-2', 'page' );
                }?>
            </div>
            
            
             <div class="hide showsm">
				<?php
                if( class_exists( 'kdMultipleFeaturedImages' ) ) {
                    kd_mfi_the_featured_image( 'featured-image-2', 'page', 'page-sm' );
                }?>
            </div>
            
            
            
            
          </div><!--endContainer-->
    </div><!--endBand-->
        
        
        
        
        <?php endwhile; ?>
        
        
		 <?php get_footer();?>
   
   