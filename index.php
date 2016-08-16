<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Roman_Cavalry
 */

get_header(); ?>

<?php $bg_img = roman_cavalry_option('hp-banner-img', false, 'url');

$bg_url = '';
if ($bg_img != '') {
$bg_url = "background-image: url('" . $bg_img . "');";
}
?>

    <div class="pagewrap" style="<?php echo $bg_url; ?>">
        <header>
            <?php if (roman_cavalry_option('hp-banner-title', 'Header Text') != '') {
                echo '<h1>', (roman_cavalry_option('hp-banner-title')), '</h1>';
} ?> 
        </header>	    
    </div><!-- /headerwrap -->

<div class="container">
    <div class="row">

	<div id="primary" class="col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
