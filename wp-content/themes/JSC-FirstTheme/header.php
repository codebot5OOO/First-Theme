<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<?php wp_head(); ?>

	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></span>
							<h1 id="title"><?php bloginfo('name'); ?></h1>
							<p><?php bloginfo('description'); ?></p>
						</div>

					<!-- Nav -->
						<nav id="nav">

						<?php 

							$defualts = array(
								'contatiner = false',
								'theme_location' => 'primary-menu',
								'menu_class' => 'no-bullet'
								);

								wp_nav_menu( $defualts );

								?>
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<!--
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
							-->
						</nav>

				</div>

				<div class="bottom">

					<?php if ( has_nav_menu( 'social-media' ) ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'social-media',
			'container'       => 'false',
			'container_id'    => '',
			'container_class' => '',
			'menu_class'      => 'icons',
			'depth'           => 1,
			'fallback_cb'     => '',
		)
	);
} ?>
				

				</div>

			</div>