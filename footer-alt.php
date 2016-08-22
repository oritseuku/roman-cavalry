<?php
/**
 * The template for displaying the alt footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Roman_Cavalry
 */

?>

	   </div><!-- row -->
    </div><!-- container -->


	<footer id="colophon" class="site-footer footer-columns" role="contentinfo">
        <div class="container footer-section">
            <!-- COPYRIGHT-->
          <div class='col-md-6 col-sm-6 col-xs-12 footerLeft'>
              <p>
              &#169; <?php echo date('Y'); ?> Officium Consulting. All rights reserved.
              </p>
          </div>
           <!-- SOCIAL ICONS -->
          <div class='col-md-6 col-sm-6 col-xs-12 footerRight'>

              <?php $social_options = roman_cavalry_option( 'footer-social' ); ?>
	                    <?php foreach ( $social_options as $key => $value ) {
	                        if ( $value ) { ?>
	                            <a href="<?php echo $value; ?>" title="<?php echo $key; ?>" target="_blank">
	                                <i class="fa fa-<?php echo $key; ?>"></i>
	                            </a>
	                        <?php }
	                    } ?>
          </div> <!-- .site-info -->
        </div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
