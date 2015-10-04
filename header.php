<!DOCTYPE html>
<html>

	<head>
	
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-68425564-1', 'auto');
			ga('send', 'pageview');
		</script>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic" rel="stylesheet" type="text/css">

		<?php wp_head() ?>

	</head>

	<?php if( get_the_ID() == 26 ): ?>
		<body class="blue">
	<?php else: ?>
		<body>
	<?php endif; ?>

		<nav id="menu">
			<h1>Menu</h1>

			<?php

			$args = [
				'container' => false,
				'theme_location' => 'menu'
			];

			wp_nav_menu( $args );

			?>

		</nav>