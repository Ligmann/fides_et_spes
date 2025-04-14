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
        //<![CDATA[
            document.write("<script async src='http://HOST:3002/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>".replace("HOST", location.hostname));
        //]]>
        </script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-TKDVKMC');
        </script>
		<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class('antialiased')?>>
		<?php wp_body_open(); ?>
