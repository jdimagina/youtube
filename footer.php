
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 menu-legal">
					<?php wp_nav_menu( array ('theme_location' => 'legal')); ?>
				</div>
				<div class="col-xs-12 col-md-4 datos-contacto">
					<?php 

						if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('datos-contacto'));

					 ?>
				</div>
				<div class="col-xs-12 col-md-4 redes-sociales">
					<?php 
						if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('redes-sociales'));
					 ?>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>