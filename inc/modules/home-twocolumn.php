<?php
/**
 * File used for homepage two column content module
 *
 * @package WordPress
 */
?>

		<!-- ==== ABOUT ==== -->
		<div class="container wrap-section">
			<div class="row">
                
                <?php if (roman_cavalry_option('two-column-title') != '') {
                    echo '<h1 class="centered">', roman_cavalry_option('two-column-title'), '</h1><hr>';
                } ?>
				
				<div class="col-lg-6 col-xs-12">
					<?php if (roman_cavalry_option('two-column-left') != '') {
                        echo roman_cavalry_option('two-column-left');
                    }?>
				</div><!-- col-lg-6 col-xs-12 -->
                
				<div class="col-lg-6 col-xs-12">
					<?php if (roman_cavalry_option('two-column-right') != '') {
                        echo roman_cavalry_option('two-column-right');
                    }?>
				</div><!-- col-lg-6 col-xs-12 -->
			</div><!-- row -->
		</div><!-- container -->