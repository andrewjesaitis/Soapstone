<!doctype html>
<html lang=en>

<head>
	<meta charset=utf-8 />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="container">
<header>
	<hrgroup>
		<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> :: </h1> <h2><?php bloginfo('description'); ?> </h2>
	</hrgroup>
	<div id="blurb">
		<?php echo do_shortcode('[AFG_gallery]'); ?>
	</div>
</header>
<div id="content">
<!-- end header -->
