<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>

<body>

	<header>
		<div id="franja_azul">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1><?php bloginfo('description'); ?></h1>
					</div>
				</div>
			</div>
		</div>

		<div id="franja_logo">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4 logo">
						<?php youtube_the_custom_logo(); ?>
					</div>

					<div class="col-xs-12 col-md-4 buscador">
						<?php get_search_form(); ?>
					</div>

					<div class="col-xs-12 col-md-4">
						
					</div>
				</div>
			</div>
		</div>

		<div id="franja_menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php wp_nav_menu( array ('theme_location' => 'primary')); ?>
					</div>
				</div>
			</div>
		</div>

		<div id="franja_banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 banner">
						<?php 
							echo do_shortcode('[smartslider3 slider=1]');
						?>
					</div>
				</div>
			</div>
		</div>
	</header>
	