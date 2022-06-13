<?php
/*
Template Name: product collection page
*/

get_header("puerfons");
$lang_code =ICL_LANGUAGE_CODE;

?>

<div class="page-banners">

    <?php


if( have_rows('banners') ):
    while ( have_rows('banners') ) : the_row();
    
    $img_url = wp_get_attachment_url(get_sub_field('banner_image'));
    
    
    ?>

    <div>
        <img src="<?php echo $img_url;?>" alt="">
    </div>
    <?php
endwhile;
endif;
    ?>

</div>


<?php

echo get_field('content_container');
?>


<!-- <div class="container  first-container">

    <div class="row no-gutters position-relative mt-3">
        <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 positive-relative cust-1 gold-bg p-5">

            <div class="big-title mb-5">Power of NAD+</div>
            <div>Puerfons’ capsules ensure supplementing the lost nutrition and vitality of individuals by enhancing the
                level of NAD + in human body. NMN and NR are both proven effective precursor of NAD+, and resveratrol
                plays the important role of multiplying the impacts synergistically.</div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 w-70   cust-2 d-block text-center"><img
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/girl-back.jpg" alt="">
        </div>
    </div>
</div> -->


<!-- <div class="container collection-first-div">


    <div class=" pue-section-subheading mt-5 mb-5">Puerfons Ultimate Anti-aging Face Cream</div>

    <div class="row no-gutters">

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 white-bg mb-xl-0 mb-lg-3 mb-md-3 mb-sm-3 mb-3  "><img
                class="d-block  mx-auto"
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/beauty-product-img-bg.jpg" alt="">
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12  " style="background:#e9e4e0">

            <div class="d-table h-100">
                <div class="d-table-cell align-middle p-5">Along with a 40-year-research result on FITOMELATONINA® by
                    Dr.
                    Francesca
                    Ferri, the Italian legendary pharmacist, Puerfons recognizes the powerful formulation of
                    Fitomelatonina®+NMN in skin care products for significant anti-aging result.
                    <br><br>
                    Exclusive formula of Fitomelatonina® extracted from Alpine plants and anti-aging compound of NMN to
                    activate cellular endogenous power to rejuvenate and nourish your skin in 24 hours of uninterrupted
                    reparation.
                </div>
            </div>
        </div>
    </div>


</div> -->




<div class="container products-container mt-5">


    <?php 
				$term = get_field('product_category_slug'); //get_field("health");
				$args = array(
				    'posts_per_page' => 3,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'slug',
				            'terms' => $term,
				            'orderby'   => 'meta_value'
				        )
				    ),
				    'post_type' => 'product',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC'
				);
                $the_query = new WP_Query( $args );
                
                
            ?>

    <div class="text-center d-flex justify-content-center flex-wrap">

        <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="product-div mb-xl-0 mb-lg-0 mb-md-3 mb-sm-3 mb-3 ">
            <div class="product-grey-bg">

                <?php
            // echo get_the_ID();
            if(get_field('best_seller')=='yes')
            {
?>
                <div class="best-seller">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle"> Best <br>
                            Seller
                        </div>
                    </div>

                </div>
                <?php
            }
          ?>



                <div class="product-thumbnail"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
                    </a>
                </div>
                <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                <?php $product = wc_get_product(); ?>

                <?php
                $product_type = $product->get_type();

                if($product_type=='simple')
                {?>


                <div class="price mt-4">


                    <?php 
                    if($product->sale_price)
                    {
                        ?>
                    <div class="was-price">
                        <?php echo ($lang_code=='en') ?'was' : '原價';?>


                        <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                    </div>

                    <div class="now-price mt-2">
                        <?php echo ($lang_code=='en') ?'now' : '減價';?>

                        <?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?>
                    </div>

                    <?php
                    }
                    else{
                        ?>
                    <div class="now-price">
                        <?php echo ($lang_code=='en') ?'price' : '售價';?>
                        <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                    </div>
                    <?php
                    }
                    ?>


                </div>

                <?php
                }
                else if($product_type=='variable')
                {

                    $variations = $product->get_available_variations();
                    $was_price=[];
                    $now_price=[];
                    // print_r($variations);
                
                    foreach ($variations as $variation) {
                        $display_regular_price = $variation['display_regular_price'];
                        $display_price = $variation['display_price'];
                        array_push($was_price,$display_regular_price );
                        array_push($now_price,$display_price );
                            }
    
                    ?>

                <?php
                    if($was_price[0]==$now_price[0] &&$was_price[1]==$now_price[1])
                    {
                        ?>
                <div class="price mt-4">



                    <div class="now-price mt-2">
                        <?php echo ($lang_code=='en') ?'price' : '售價';?>


                        <?php 
                                echo get_woocommerce_currency_symbol().$now_price[1].'/'.$now_price[0];

                                ?>
                    </div>



                </div>
                <?php
                    }
                    else
                    {
                        ?>
                <div class="price mt-4">


                    <div class="was-price">
                        <?php echo ($lang_code=='en') ?'was' : '原價';?>


                        <?php 
echo $was_price[0].'/'.$was_price[1];
?>
                    </div>

                    <div class="now-price mt-2">
                        <?php echo ($lang_code=='en') ?'now' : '減價';?>


                        <?php 
                        echo get_woocommerce_currency_symbol().$now_price[1].'/'.$now_price[0];

?>
                    </div>



                </div>
                <?php
                    }
                    ?>



                <?php
                }
                ?>


                <div class="text-center mt-4 shop-now-btn-div">
                    <a href="<?php the_permalink(); ?>"
                        class="shop-now-btn"><?php echo ($lang_code=='en') ?'Shop Now' : '產品詳細';?>
                    </a>
                </div>
            </div>
        </div>

        <?php
endwhile;
endif;?>


    </div>
</div>

<!-- <div class="section">
    <div class="section-wrapper">
        <div class="row product-list row-eq-height">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php //the_content(); ?>
            </div>
            <?php 
				$term = get_field("product_category_slug");
				$args = array(
				    'posts_per_page' => 4,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'slug',
				            'terms' => $term,
				            'orderby'   => 'meta_value'
				        )
				    ),
				    'post_type' => 'product',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC'
				);
				$the_query = new WP_Query( $args );
			?>
            <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="product-thumbnail"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
                    </a>
                </div>
                <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                <?php $product = wc_get_product(); ?>
                <div class="price"><span
                        class="ori-price"><?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?></span><span><?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?></span>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div> -->

<script type="text/javascript">
var $ = jQuery;
$(function() {
    $('.page-banners').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        autoplay: true,
        fade: true,
        cssEase: 'ease-out',
        pauseOnHover: false
    })

})
</script>

<?php

get_footer("puerfons");