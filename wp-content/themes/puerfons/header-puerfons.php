<?php
$lang_code =ICL_LANGUAGE_CODE;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	/**
	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
	 * insert elements into the beginning of the head before any styles or scripts.
	 *
	 * @since 1.0
	 */
	do_action( 'et_head_meta' );

	$template_directory_uri = get_template_directory_uri();
?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri();?>/img/favicon-32x32.png">
    <script type="text/javascript">
    document.documentElement.className = 'js';
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link href="<?php echo get_template_directory_uri();?>/js/flexslider/flexslider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri();?>/css/puerfons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri();?>/css/puerfons-responsive.css" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Noto+Sans+HK:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">

    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/flexslider/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/function.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body <?php body_class(); ?>>
    <header>

        <div class="mobile-cart">
            <ul>
                <?php echo do_shortcode("[woo_cart_but]"); ?>
            </ul>
        </div>
        <div class="mobile-menu-btn">
            <div></div>
            <div></div>
            <div></div>
        </div>


        <!-- <div class="header-top">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php bloginfo("url"); ?>"><img
                            src="<?php echo get_template_directory_uri();?>/img/logo.png" /></a>
                </div>
                <div class="social-btn">
                    <a href="#" class="icon-fb"></a>
                    <a href="#" class="icon-ig"></a>
                    <a href="#" class="icon-jd"></a>
                </div>
            </div>
		</div> -->

        <div class="header-top">

            <div class="container">
                <a href="<?php bloginfo("url"); ?>" class="logo">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="234.46px" height="27.44px" viewBox="0 0 234.46 27.44"
                        style="enable-background:new 0 0 234.46 27.44;" xml:space="preserve">
                        <style type="text/css">
                        .st0 {
                            fill: #AD835D;
                        }
                        </style>
                        <defs>
                        </defs>
                        <g>
                            <polygon class="st0" points="69.29,18.17 81.08,18.17 81.08,15.35 69.29,15.35 69.29,10.31 86.24,10.31 86.24,7.49 66.07,7.49 
		66.07,26.85 86.99,26.85 86.99,24.02 69.29,24.02 	" />
                            <path class="st0" d="M112.38,19.26c3.18-0.7,4.72-2.59,4.72-5.76c0-1.85-0.58-3.28-1.78-4.37c-1.19-1.09-2.83-1.64-4.86-1.64H94.59
		l0,19.36l3.22,0v-7.37h10.5l5.26,7.37h3.64l-5.33-7.48L112.38,19.26z M97.81,16.65l0-6.34l11.84,0c3.42,0,4.14,1.77,4.14,3.25
		c0,1.41-0.68,3.09-3.91,3.09H97.81z" />
                            <polygon class="st0" points="125.62,26.85 128.84,26.85 128.84,18.17 140.62,18.17 140.62,15.35 128.84,15.35 128.84,10.31 
		145.78,10.31 145.78,7.49 125.62,7.49 	" />
                            <polygon class="st0" points="201.9,24.86 187.74,7.48 182.41,7.48 182.41,26.85 185.64,26.85 185.64,9.49 199.8,26.85 
		205.13,26.85 205.13,7.48 201.9,7.48 	" />
                            <path class="st0" d="M55.1,19.83c0,3.17-2.72,4.78-8.09,4.78c-5.39,0-8.12-1.61-8.12-4.78V7.49h-3.22l0,13.12c0,2,0.98,3.6,3,4.88
		c2.04,1.29,4.85,1.95,8.34,1.95c3.47,0,6.26-0.66,8.3-1.95c2.02-1.28,3.01-2.88,3.01-4.88l0-13.12H55.1V19.83z" />
                            <path class="st0" d="M232.31,16.93c-1.34-0.82-3.65-1.39-6.87-1.71c-2.41-0.23-4.65-0.43-6.88-0.62c-1.86-0.31-2.81-1.04-2.81-2.17
		c0-1.84,2.3-2.73,7.04-2.73c4.99,0,9.7,1.88,11.01,2.71V9.47c-2.24-1.16-7.03-2.5-11.08-2.5c-3.31,0-5.92,0.55-7.74,1.63
		c-1.73,1.03-2.57,2.42-2.57,4.25c0,1.54,0.49,2.6,1.53,3.33c1.12,0.79,2.91,1.31,5.32,1.54c0.63,0.06,2.4,0.16,5.11,0.29
		c1.84,0.09,3.16,0.25,4.03,0.5c1.68,0.48,2.54,1.35,2.54,2.58c0,1.1-0.69,1.98-2.06,2.62c-1.28,0.59-3.1,0.9-5.4,0.9
		c-3.58,0-7.79-1.13-11.06-2.79v3.03c3.03,1.53,7.72,2.45,11.12,2.45c3.57,0,6.33-0.58,8.19-1.71c1.83-1.12,2.72-2.65,2.72-4.69
		C234.46,19.1,233.76,17.8,232.31,16.93z" />
                            <path class="st0" d="M21.26,0H0l0,26.85h3.22l0-23.64h18.04c3.3,0,5.98,2.68,5.98,5.97c0,3.29-2.68,5.97-5.98,5.97v3.22
		c5.07,0,9.2-4.12,9.2-9.19C30.46,4.12,26.33,0,21.26,0z" />
                            <polygon class="st0" points="7.52,26.85 10.74,26.85 10.74,18.38 17.37,18.38 17.37,15.16 10.74,15.16 10.74,10.66 20.91,10.66 
		20.91,7.45 7.52,7.45 	" />
                            <path class="st0" d="M171.29,9.56c-2.3-1.73-5.15-2.61-8.48-2.61c-3.35,0-6.21,0.88-8.51,2.61c-2.61,1.95-3.94,4.51-3.94,7.61
		c0,3.15,1.31,5.74,3.9,7.68c2.26,1.7,5.14,2.56,8.56,2.56c3.41,0,6.28-0.86,8.52-2.56c2.58-1.95,3.89-4.53,3.89-7.67
		C175.23,14.09,173.9,11.53,171.29,9.56z M169.39,22.29c-1.67,1.27-3.88,1.91-6.58,1.91c-2.71,0-4.93-0.64-6.62-1.91
		c-1.76-1.32-2.61-2.99-2.61-5.1c0-2.05,0.87-3.7,2.65-5.03c1.76-1.32,3.91-1.97,6.58-1.97c2.65,0,4.79,0.64,6.54,1.96
		c1.78,1.34,2.65,2.99,2.65,5.04C172.01,19.28,171.15,20.96,169.39,22.29z" />
                        </g>
                    </svg>
                </a>


                <div class="menu-icon-container">
                    <ul class="menu-icon">

                        <?php if( get_locale() == "zh_TW" ){ ?>
                        <li><a href="/我的帳戶/?lang=zh-hant" class="icon-profile" title="我的帳戶"></a></li>
                        <?php }else{ ?>
                        <li><a href="/my-account/" class="icon-profile" title="My Account"></a></li>
                        <?php } ?>
                        <?php echo do_shortcode("[woo_cart_but]"); ?>


                        <li><a href="javascript:avoid(0);" class="icon-search"
                                title="<?php echo (get_locale() == "zh_TW") ? '搜尋':'Search'; ?>"></a></li>

                        <li><?php echo do_shortcode('[wpml_language_switcher flags=0 native=1 ][/wpml_language_switcher]') ?>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
        <div class="header-bottom">
            <div class="search-form">
                <?php echo get_search_form(); ?>
            </div>
            <div class="header-bottom-box container p-0">

                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'menu-top-container' ) ); ?>

                <?php 
				// do_action('wcml_currency_switcher', array('format' => '%code% (%symbol%)'));
			 ?>
            </div>
        </div>
    </header>
    <?php

session_start();


if($_SESSION['coupon'])
{
    echo '<div class="session-coupon-code">'.$_SESSION['coupon'].'</div>';
}

    if($_GET['c'])
    {
        // if(!$_SESSION['coupon'])
        // {
            $_SESSION['coupon']=$_GET['c'];
        // }
    }


    ?>

    <div class="text-center gold-bg top-msg">
        <!-- All Products On Sales With 15% Off ｜ Free Delivery to Hong Kong -->

        <?php

$blog_id =get_current_blog_id();

//
if($blog_id==9)
{
    $top_msg_id=3149;
}
if($blog_id==1)
{
    
    $top_msg_id=2537;
}

$args_h = array(//2537
            'p'         => $top_msg_id, //about page
            'post_type' => 'any'
          );
          $the_query_h = new WP_Query($args_h);
          
          if ( $the_query_h->have_posts() ) {
                $the_query_h->the_post();
                the_content();
            }
            else
            {
                // wp_reset_query();

                // $args_h2 = array(
                //     'p'         => 3149, //about page
                //     'post_type' => 'any'
                //   );
                //   $the_query_h2 = new WP_Query($args_h2);
                  
                //   if ( $the_query_h2->have_posts() ) {
                //         $the_query_h2->the_post();
                //         the_content();
                //     }
            }
            
            wp_reset_query();

                
                ?>
    </div>