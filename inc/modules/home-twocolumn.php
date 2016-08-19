<?php
/**
 * File used for homepage two column content module
 *
 * @package WordPress
 */
?>

<div class="two-column">
    <div class="container wrap-section">
        <div class="row">

            <?php if (roman_cavalry_option('two-column-title') != '') {
                echo '<h1 class="centered">', roman_cavalry_option('two-column-title'), '</h1><hr>';
            } ?>

            <div class="col-md-6 col-sm-6 col-xs-12 resumeLeft">
                <?php if (roman_cavalry_option('two-column-left') != '') {
                    echo roman_cavalry_option('two-column-left');
                }?>
            </div><!-- col-lg-6 col-xs-12 -->

            <div class="col-md-6 col-sm-6 col-xs-12 resumeRight">
                <?php if (roman_cavalry_option('two-column-right') != '') {
                    echo roman_cavalry_option('two-column-right');
                }?>
            </div><!-- col-lg-6 col-xs-12 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- two-column -->