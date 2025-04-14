<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset')?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="pingback" href="<?php bloginfo('pingback_url')?>" />
		<?php wp_head(); ?>
        <script id="__bs_script__">
        document.write("<script async src='http://HOST:3002/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>".replace("HOST", location.hostname));

	</head>
	<body <?php body_class('antialiased')?>>
		<?php wp_body_open(); ?>
