<?php
/**
 * File used for homepage three column content module
 *
 * @package WordPress
 */
?>

<div class="three-column">
    <div class="container wrap-section">
        <div class="row">

            <?php if (roman_cavalry_option('three-column-title') != '') {
                echo '<h1 class="centered">', roman_cavalry_option('three-column-title'), '</h1><hr>';
            } ?>

            <div class="col-md-4 col-xs-12">
                <?php if (roman_cavalry_option('three-column-left') != '') {
                    echo roman_cavalry_option('three-column-left');
                }?>
            </div><!-- col-md-4 col-xs-12 -->

            <div class="col-md-4 col-xs-12">
                <?php if (roman_cavalry_option('three-column-center') != '') {
                    echo roman_cavalry_option('three-column-center');
                }?>				
            </div><!-- col-lg-4 col-xs-12 -->

            <div class="col-md-4 col-xs-12">
                <?php if (roman_cavalry_option('three-column-right') != '') {
                    echo roman_cavalry_option('three-column-right');
                }?>
            </div><!-- col-lg-4 col-xs-12 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- three-column -->