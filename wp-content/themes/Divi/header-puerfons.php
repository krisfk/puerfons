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
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon-32x32.png">
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	

	<link href="<?php echo get_template_directory_uri();?>/js/flexslider/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri();?>/css/puerfons.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri();?>/css/puerfons-responsive.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Noto+Sans+HK:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/function.js"></script>
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
	<div class="header-top">
		<div class="header-wrapper">
			<div class="logo">
				<a href="<?php bloginfo("url"); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" /></a>
			</div>
			<div class="social-btn">
				<a href="#" class="icon-fb"></a>
				<a href="#" class="icon-ig"></a>
				<a href="#" class="icon-jd"></a>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="search-form">
			<?php echo get_search_form(); ?>
		</div>	
		<div class="header-bottom-box">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'menu-top-container' ) ); ?>
			<div class="menu-icon-container">
				<ul class="menu-icon">				
					<?php if( get_locale() == "zh_TW" ){ ?> 
						<li><a href="/我的帳戶/?lang=zh-hant" class="icon-profile"></a></li>
					<?php }else{ ?> 
						<li><a href="/my-account/" class="icon-profile"></a></li>
					<?php } ?>	
					<?php echo do_shortcode("[woo_cart_but]"); ?>				
					<li><a href="javascript:avoid(0);"class="icon-search"></a></li>
					<li><?php echo do_shortcode('[wpml_language_switcher flags=0 native=1 ][/wpml_language_switcher]') ?></li>
				</ul>				
			</div>	
			<?php 
				do_action('wcml_currency_switcher', array('format' => '%code% (%symbol%)'));
			 ?>
		</div>
	</div>	
</header>
