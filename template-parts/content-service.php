<?php
/**
 * Template part for displaying service items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Roman_Cavalry
 */

?>
<!-- SERVICE ITEM -->
<div class="col-sm-6 col-md-4 callout">
    
<?php
    $icon = '';
if (rwmb_meta('roman_cavalry_service_icon') != '') {
    $icon = rwmb_meta('roman_cavalry_service_icon');
} ?>
    
    <i class="fa fa-<?php echo $icon; ?>"></i>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

</div>
