<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Roman_Cavalry
 */

get_header(); ?>

<?php $bg_img = roman_cavalry_option('portfolio-banner-img', false, 'url');

$bg_url = '';
if ($bg_img != '') {
$bg_url = "background-image: url('" . $bg_img . "');";
}
?>

    <div class="pagewrap" style="<?php echo $bg_url; ?>">
        <header>
            <?php if (roman_cavalry_option('portfolio-banner-title', 'Header Text') != '') {
                echo '<h1>', (roman_cavalry_option('portfolio-banner-title')), '</h1>';
} ?> 
        </header>	    
    </div><!-- /headerwrap -->

<div class="container">
    <div class="row">

	<div id="primary" class="col-lg-12">
		<main id="main" class="site-main" role="main">
            <?php
            // the query
			$the_query = new WP_Query( array('post_type' => 'portfolio') ); ?>
 
			<?php if ( $the_query->have_posts() ) : ?>
 
				<div class="row">
                    <div class="portfolio-item">
 
					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
                    <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
 

					<?php endwhile; ?>
					<!-- end of the loop -->
                        
                    </div><!-- #portfolio-item -->
 
				</div> <!-- .row -->
				
 
				<?php wp_reset_postdata(); ?>
 
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
