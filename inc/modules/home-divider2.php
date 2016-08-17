<?php
/**
 * File used for homepage divider 2 module
 *
 * @package WordPress
 */
?>

		<!-- ==== HEADERWRAP ==== -->
<?php $bg_img = roman_cavalry_option('divider2-img', false, 'url');

$bg_url = '';
if ($bg_img != '') {
$bg_url = "background-image: url('" . $bg_img . "');";
}
?>



		<section class="section-divider textdivider divider2" style="<?php echo $bg_url; ?>">
			<div class="container">
					<?php if (roman_cavalry_option('divider2-content') != '') {
                        echo roman_cavalry_option('divider2-content');
                    }?>
			</div><!-- container -->
		</section><!-- section -->