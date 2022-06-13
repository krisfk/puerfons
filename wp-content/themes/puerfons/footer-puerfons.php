<div class="section-scribe">
    <div class="section-wrapper container">

        <div class="row">
            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php
					$lang = 1551;
					if( get_locale() == "zh_TW" ){ $lang = 1720; }
					the_field("subscription_content",$lang);
				?>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php if( get_locale() == "zh_TW" ){ echo do_shortcode("[sibwp_form id=2]"); } else { echo do_shortcode("[sibwp_form id=1]"); }?>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer-top">
        <div class="footer-wrapper container">
            <div class="row">
                <?php

					if( have_rows('footer_widget', $lang) ):

					    // Loop through rows.
					    while ( have_rows('footer_widget', $lang)) : the_row();
							?>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <?php the_sub_field('widget_content', $lang); ?>
                </div>
                <?php
					    endwhile;

					endif;
				?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-wrapper container">
            <div class="copyright">
                Copyright 2020. Health Elite Club Ltd. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>


<a href="javascript:void(0);" class="back-to-top-btn">
    <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/back-to-top.png" alt="">
</a>
<script type="text/javascript">
var $ = jQuery;
$(function() {

    $('.wpml-ls-native').attr('title', 'Language');
    $('html[lang^="zh-hant"] .wpml-ls-native').attr('title', '語言');

    $('.back-to-top-btn').click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 500);
    })


    if ($('body').hasClass('woocommerce-cart')) {
        // alert($('.woocommerce-remove-coupon').size());
        console.log($('.woocommerce-remove-coupon').size() + ' ' +
            $('.woocommerce-error').size() + ' ' +
            $('.session-coupon-code').size());
        if ($('.woocommerce-remove-coupon').size() < 1 &&
            $('.woocommerce-error').size() < 1 &&
            $('.session-coupon-code').size() > 0) {
            $('#coupon_code').val('<?php echo $_SESSION['coupon'];?>');
            $('button[name="apply_coupon"]').click();
        }

    }






})
</script>
<?php wp_footer(); ?>
</body>

</html>