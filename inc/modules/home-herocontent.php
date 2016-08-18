<?php
/**
 * File used for homepage hero content module
 *
 * @package WordPress
 */
?>

		<!-- ==== HEADERWRAP ==== -->
<?php $bg_img = roman_cavalry_option('hero-banner-img', false, 'url');

$bg_url = '';
if ($bg_img != '') {
$bg_url = "background-image: url('" . $bg_img . "');";
}
?>

    <div class="headerwrap" style="<?php echo $bg_url; ?>">
			<header class="clearfix">
                
                <?php if (roman_cavalry_option('hero-banner-title') != '') {
                    echo roman_cavalry_option('hero-banner-title');
                } ?>

	  		</header>
        
          <section class='connect'>
            <div class='box connect-box'>
				<!-- Social Links Section -->
                <ul class='connect-icons'>
                  <?php $social_options = roman_cavalry_option( 'hero-banner-social' ); ?>
            <?php foreach ( $social_options as $key => $value ) {
                if ( $value ) { ?>
                    <li><a class="<?php echo $key; ?>" href="<?php echo $value; ?>" title="<?php echo $key; ?>" target="_blank">
                        <i class="fa fa-<?php echo $key; ?>"></i></li>
                    </a>
                <?php }
            } ?>


            </ul>
				<!-- Social Links Section End-->
          </div>
        </section>
        
        
	    </div><!-- /headerwrap -->