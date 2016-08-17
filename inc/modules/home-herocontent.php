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
	    </div><!-- /headerwrap -->