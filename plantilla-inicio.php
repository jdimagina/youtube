<?php 
/*Template Name: Plantilla Inicio*/
get_header(); 
the_post();
?>

<div id="franja_servicios"> <!-- franja servicios -->
	<div class="container"> <!-- container -->
		<div class="row"><!-- row -->

			<div class="col xs-12 col-md-4 servicio">
				<div class="contenido">
					<div class="contenedor-imagen">
						<img src=" <?php echo get_post_meta($post->ID, 'icono_servicio1', true)?  get_post_meta($post->ID, 'icono_servicio1', true) : '' ?>" alt="">
					</div>
					
					<div class="contenedor-texto">
						<h2>
							 <?php echo get_post_meta($post->ID, 'texto_servicio1', true)?  get_post_meta($post->ID, 'texto_servicio1', true) : '' ?>
						</h2>
					</div>
				</div>
			</div>
			
			<div class="col xs-12 col-md-4 servicio">
				<div class="contenido">
					<div class="contenedor-imagen">
						<img src=" <?php echo get_post_meta($post->ID, 'icono_servicio2', true)?  get_post_meta($post->ID, 'icono_servicio2', true) : '' ?>" alt="">
					</div>
					
					<div class="contenedor-texto">
						<h2>
	 						<?php echo get_post_meta($post->ID, 'texto_servicio2', true)?  get_post_meta($post->ID, 'texto_servicio2', true) : '' ?>
						</h2>
					</div>
				</div>
			</div>
			
			<div class="col xs-12 col-md-4 servicio">
				<div class="contenido">
						<div class="contenedor-imagen">
						<img src=" <?php echo get_post_meta($post->ID, 'icono_servicio3', true)?  get_post_meta($post->ID, 'icono_servicio3', true) : '' ?>" alt="">
					</div>
					
					<div class="contenedor-texto">
						<h2>
	 						<?php echo get_post_meta($post->ID, 'texto_servicio3', true)?  get_post_meta($post->ID, 'texto_servicio3', true) : '' ?>
						</h2>
					</div>
				</div>
			</div>

		</div><!-- / row -->
	</div><!-- / container -->
</div> <!-- / franja servicios -->

<div id="franja_productos"> <!-- franja productos -->

	<h2>Ultimos productos</h2>

	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-md-3 producto">
				<div class="imagen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="">
				</div>
				<h3>producto</h3>
				<a href="">Ver producto</a>
			</div>

			<div class="col-xs-12 col-md-3 producto">
				<div class="imagen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="">
				</div>
				<h3>producto</h3>
				<a href="">Ver producto</a>
			</div>

			<div class="col-xs-12 col-md-3 producto">
				<div class="imagen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p3.jpg" alt="">
				</div>
				<h3>producto</h3>
				<a href="">Ver producto</a>
			</div>

			<div class="col-xs-12 col-md-3 producto">
				<div class="imagen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/p4.jpg" alt="">
				</div>
				<h3>producto</h3>
				<a href="">Ver producto</a>
			</div>

		</div>
	</div>
</div><!-- /franja productos -->

<?php
	$imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div id="franja_contenido" style="background:url(' <?php echo $imagen_destacada; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-6">
				<?php the_content(); ?>

			</div>
		</div>
	</div>
</div>

<div id="franja_contenido_extra">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<?php echo get_post_meta($post->ID, 'texto_adicional', true)?  get_post_meta($post->ID, 'texto_adicional', true) : '' ?>
			</div>

			<div class="col-xs-12 col-md-6 imagen">
					<img src=" <?php echo get_post_meta($post->ID, 'imagen_adicional', true)?  get_post_meta($post->ID, 'imagen_adicional', true) : '' ?>" alt="">
			</div>
		</div>
	</div>
</div>

<?php
get_footer(); 
?>