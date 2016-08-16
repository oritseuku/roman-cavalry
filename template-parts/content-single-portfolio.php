<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Roman_Cavalry
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>

    <div class="portfolio-featured">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
                
                <?php $bg_img = rwmb_meta('roman_cavalry_sliders_image', 'type=image'); ?>
                <?php if (count($bg_img) > '0') {
                    $number = 0;
                foreach ($bg_img as $img) {

                    echo '<li data-target="#carousel-example-generic" data-slide-to="'.$number.'"</li>';

                    $number++;
                    }
                }
            ?>
            </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        
        <?php $bg_img = rwmb_meta('roman_cavalry_sliders_image', 'type=image'); ?>
        <?php if (count($bg_img) > '0') {
                foreach ($bg_img as $img) {
                    $slider_img = "{$img['full_url']}";
                    
                    echo '<div class="item">', '<img src="'. $slider_img .'">' , '</div>';
                }
            }
        ?>
        </div>
        </div><! --/Carousel -->-->
    </div><!-- /portfolio-featured -->


	<div class="row">
        <div class="col-lg-8">
		  <?php the_content(); ?>
        </div>
        <div class="col-lg-4">
            <?php if (rwmb_meta('roman_cavalry_side_details') != '') {
                echo rwmb_meta('roman_cavalry_side_details');
                }
            ?>
        </div>
    </div>
             
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'roman_cavalry' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
