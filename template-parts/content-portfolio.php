<?php
/**
 * Template part for displaying portfolio items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Roman_Cavalry
 */

?>
<!-- PORTFOLIO ITEM -->
<div class="col-xs-12 col-md-6">
    <div class="grid mask portfolio">
        <figure>
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
        <figcaption>
        <h5><?php the_title(); ?></h5>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg">Take a Look</a>
        </figcaption><!-- /figcaption -->
        </figure><!-- /figure -->
    </div>
</div>


