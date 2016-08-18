<?php
/**
 * Template Name: Full Width
 *
 * The template for displaying full width pages.
 *
 * @package Roman_Cavalry
 */

get_header(); ?>

<?php $bg_img = rwmb_meta('roman_cavalry_banner_image', 'type=image');

$bg_url = '';

if (count($bg_img) > '0') {
    foreach ($bg_img as $img) {
        $bg = "{$img['full_url']}";
        $bg_url = "background-image: url('" . $bg . "');";
    }
}
?>

    <div class="pagewrap" style="<?php echo $bg_url; ?>">
        <header>
            <?php if (rwmb_meta('roman_cavalry_banner_text') != '') {
                echo '<h1>', rwmb_meta('roman_cavalry_banner_text'), '</h1>';
            } else {
                the_title( '<h1 class="entry-title">', '</h1>' );
            } ?>    
        </header>	    
    </div><!-- /headerwrap -->

<div class="container">
    <div class="row">

	<div id="primary" class="col-lg-12">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
