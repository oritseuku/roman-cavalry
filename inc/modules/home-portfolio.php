<?php
/**
 * File used for homepage portfolio module
 *
 * @package WordPress
 */
?>

		<!-- ==== PORTFOLIO ==== -->
<div class="container wrap-section">
	
    <div class="row">
        <?php if (roman_cavalry_option('portfolio-title') != '') {
                echo '<h1 class="centered">', roman_cavalry_option('portfolio-title'), '</h1><hr>';
            } ?>
    </div><!-- /row -->

    <div class="container">
        <div class="row">
                
            <?php
            // the query
			$the_query = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => 4) ); ?>
 
			<?php if ( $the_query->have_posts() ) : ?>
 
                    <div class="home-portfolio">
                        
 
					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
                    <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
 

					<?php endwhile; ?>
					<!-- end of the loop -->
                        
                    </div><!-- #service-item -->
				
 
				<?php wp_reset_postdata(); ?>
 
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

            
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /container -->
