<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52601638-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-52601638-1');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/bigswig_fav.png" rel="shortcut icon">
   <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?> >
<div class="wrapper">

<div id="preloader">
	<img class="fug_Preloader" src="<?php echo get_template_directory_uri();?>/img/preloader.svg" >
</div>

<!-- HIDDEN LINK FOR ADDING LOGO TO NAV -->
<div class="logo-holder">
	<img class="logo-mark" src="<?php echo get_template_directory_uri(); ?>/img/logo-mark.svg" >
	<img class="logo-words" src="<?php echo get_template_directory_uri(); ?>/img/logo-words.svg" >
</div>

	<header class="header" role="banner">
		<div class="content header-inner-wrap">
			<nav class="main-nav mainNav" role="navigation">
				<?php main_theme_nav(); ?>
			</nav>
			<div class="mobile-logo">
				<a class="c-block-fill" href="/"></a>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" >
			</div>
			<div class="mobile-menu mobileToggle">
				<span class="hamTop"></span>
				<span class="hamMid"></span>
				<span class="hamBot"></span>
			</div>
		
		</div>
	</header>
