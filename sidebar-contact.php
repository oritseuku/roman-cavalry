<?php
/**
 * The sidebar containing the contact sidebar widget area.
 *
 * @package Roman_Cavalry
 */
 
if ( ! is_active_sidebar( 'contact' ) ) {
	return;
}
?>
 
<div id="secondary" class="widget-area col-md-5 col-md-offset-1 col-lg-3 col-lg-offset-2 col-xs-12" role="complementary">

		<?php dynamic_sidebar( 'contact' ); ?>

</div><!-- #secondary -->
 
</div> <!-- .row -->
</div> <!-- .container -->