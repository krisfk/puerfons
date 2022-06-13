<?php
/*
Template Name: index page
*/

get_header("puerfons");
$lang_code =ICL_LANGUAGE_CODE;

?>

<div class="page-banners">
    <!-- 111 -->
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

<div class="container products-container mt-4">


    <?php 
                // $term = 'nr'; //get_field("health");
                
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'order' => 'ASC'

                );
              
                $the_query = new WP_Query( $args );
                
                
            ?>

    <div class="text-center">

        <div class="product-slider position-relative">

            <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="product-div mb-xl-0 mb-lg-0 mb-md-3 mb-sm-3 mb-3 ">
                <div class="product-grey-bg">

                    <?php  if(get_field('best_seller')=='yes')
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
                            class="shop-now-btn"><?php echo ($lang_code=='en') ?'SHOP NOW' : '現在購買';?>
                        </a>
                    </div>
                </div>
            </div>

            <?php
endwhile;
endif;?>

        </div>


    </div>
</div>


<?php


$args = array(
	'p'         => 1360, //about page
	'post_type' => 'any'
  );
  $the_query = new WP_Query($args);
  
  if ( $the_query->have_posts() ) {
    // while ( $the_query->have_posts() ) {
		$the_query->the_post();
		?>
<div class="section bg-hr pue-section pue-section-5 mt-5">

    <div class="text-center mb-3">
        <div class="pue-section-subheading mt-5 text-center">

            <?php echo ($lang_code=='en') ?'Supportive Members All Over the World' : '遍佈全球的支持者
';?>

        </div>
    </div>

    <div class="container mb-5">
        <div class="members-slider">
            <?php
	
	
	if( have_rows('section4supporter') ):

		// Loop through rows.
		while ( have_rows('section4supporter') ) : 
			the_row();
   
		?>
            <div class="row gold-bg no-gutters">

                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 members-slider-left white-bg">


                    <img class="d-block mx-auto float-xl-right float-lg-right float-md-right float-sm-none float-none"
                        src="<?php the_sub_field('img'); ?>">



                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 members-slider-right">

                    <div class="d-table h-100">
                        <div class="d-table-cell align-middle pt-4 pb-4">
                            <div class="row no-gutters">

                                <div class="col-1">

                                    <div class="d-table h-100 mx-auto">
                                        <div class="d-table-cell">
                                            <div class="about-quote-open"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <?php the_sub_field('msg'); ?>


                                </div>
                                <div class="col-1">

                                    <div class="d-table h-100 mx-auto">
                                        <div class="d-table-cell align-bottom">
                                            <div class="about-quote-close"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row no-gutters">

                                <div class="col-1">


                                </div>
                                <div class="col-10">
                                    <div class="supporter-person"><?php the_sub_field('name'); ?></div>
                                    <div><?php the_sub_field('supporter_title'); ?></div>


                                </div>
                                <div class="col-1">

                                </div>


                            </div>
                        </div>
                    </div>


                </div>

            </div>



            <?php
	
	   endwhile;

	   endif;

	   ?>



        </div>

    </div>


    <div class="container">
        <div class="row other-support justify-content-center no-gutters">
            <?php

				// Check value exists.
				if( have_rows('section4other') ):

				    // Loop through rows.
				    while ( have_rows('section4other') ) : the_row();

					?>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 supporters-div">
                <div class="img-box">
                    <img src="<?php the_sub_field('img'); ?>" />
                    <?php the_sub_field('name'); ?>
                </div>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>
    </div>

    <?php
		// echo get_the_title();
    // }
}

?>
    <!-- 1360 -->
    <?php 
	// wp_footer();
	get_footer("puerfons");

	?>


    <script type="text/javascript">
    var $ = jQuery;


    function autoResize() {
        $('#iframe1').height($('#iframe1').contents().height());
        $('#iframe2').height($('#iframe2').contents().height());
    }

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

        $('.members-slider').slick({
            dots: true,
            arrows: false,
            pauseOnFocus: false,
            infinite: true,
            speed: 800,
            autoplaySpeed: 5000,
            autoplay: true,
            fade: true,
            cssEase: 'ease-out',
            adaptiveHeight: true,
            pauseOnHover: false
        })

        $('.product-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        arrows: false,

                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows: false,

                        dots: true
                    }
                }
            ]
        })


    })
    </script>

    <style type="text/css">
    .product-slider .slick-track {
        display: flex !important;
    }

    .slick-slide {
        height: inherit !important;
    }

    .slick-slide {
        margin: 0 5px;
    }


    .slick-arrow {
        position: absolute;
        z-index: 100;
        top: 235px;
    }

    .slick-prev.slick-arrow {

        width: 0;
        height: 0;
        border-style: solid;
        border-width: 15px 20px 15px 0;
        left: -40px;
        border-color: transparent #ad835d transparent transparent;
        font-size: 0px;
        background: none;
        outline: none;
        z-index: 0;

    }

    .slick-next.slick-arrow {
        right: -40px;
        width: 0;
        font-size: 0px;

        height: 0;
        border-style: solid;
        border-width: 15px 0 15px 20px;
        border-color: transparent transparent transparent #ad835d;
        background: none;
        outline: none;
        z-index: 0;

    }
    </style>
    </body>

    </html>