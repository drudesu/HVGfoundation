<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
	
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
    	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic|PT+Sans+Narrow:700" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:900' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <div class="off-canvas-wrap">
  <div class="inner-wrap">
< /hr>
  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
        <div class="contain-to-grid">
	<nav class="top-bar" data-topbar>
	<ul class="title-area">
	<li class="name">     
	<div class="nameplate show-for-small-only"><h1><a href="<?php echo get_option('home'); ?>">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/herogamesthumb.png" title="Hero Games Logo" alt="<?php bloginfo('name'); ?>" />
    </a></h1></div></li> 
	
	<li class="toggle-topbar menu-icon"><a href="#"></a></li> 
	</ul> 
	
	<section class="top-bar-section">

	<!-- Right Nav Section --> 
	<ul class="left"> 
	<li><a href="/wordpress/events/">Events</a></li>
	<li><a href="/wordpress/updates/">Updates</a></li>
	<li><a href="/wordpress/about/">About</a></li>
	 </ul> 
	 <ul class="middle">
	 
	 <li>        <div class="nameplatebig show-for-large-up"><h1><a href="<?php echo get_option('home'); ?>">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/herologo.png" title="Hero Games Homepage" alt="<?php bloginfo('name'); ?>" />
    </a></h1>
		 <a href="<?php bloginfo('url'); ?>">
    </a></div>
	<div class="nameplatemed show-for-medium-only"><h1><a href="<?php echo get_option('home'); ?>">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/herogamesthumb.png" title="Hero Games Logo" alt="<?php bloginfo('name'); ?>" />
    </a></h1></div></li>
	
	
	 <ul class="right">
	 <li><a href="/wordpress/gallery/">Gallery</a></li>
	 <li><a href="/wordpress/contact/">Contact</a></li>
	 <li><a href="/wordpress/products/">Products</a></li>
	 
	 </ul>
	</section> </nav>

	</div><!--sticky-->

<header class="row" role="banner">
  <div class="small-12 columns">
  </div>
</header>

<section class="container" role="document">
  <div class="row white">