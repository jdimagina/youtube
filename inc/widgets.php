<?php

// *** DATOS CONTACTO FOOTER ***

class datos_contacto_widget extends WP_Widget{

	function __construct(){
		parent::__construct('datos_contacto_widget'," Datos contacto",array("description"=>"Cambia los datos del teléfono y correo del sitio "));
	}

	public function widget($args,$instance){
    		$telefono = $instance['telefono'];
    		$correo = $instance['correo'];

?>

    <div class="telefono">
		<i class="icono-tel"></i>
		<span><?= $telefono; ?></span>
	</div>
	<div class="correo">
		<i class="icono-mail"></i>
		<a href="mailto:<?= $correo; ?>"><?= $correo; ?></a>
	</div>

<?php

	}

	public function form($instance){
		$telefono = $instance['telefono'];
    		$correo = $instance['correo'];
?>
		<p>
			<label for='<?= $this->get_field_id('telefono'); ?>'>Teléfono:</label>
			<input type='text' class="widefat" name='<?= $this->get_field_name('telefono'); ?>' id='<?= $this->get_field_id('telefono'); ?>' value='<?= $telefono; ?>'>
		</p>

		<p>
			<label for='<?= $this->get_field_id('correo'); ?>'>Correo:</label>
			<input type='text' class="widefat" name='<?= $this->get_field_name('correo'); ?>' id='<?= $this->get_field_id('correo'); ?>' value='<?= $correo; ?>'>
		</p>
<?php
	}
	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['telefono'] = strip_tags($new_instance['telefono']);
		$instance['correo'] = strip_tags($new_instance['correo']);
		return $instance;
	}
}


// *** WIDGETS REDES SOCIALES ****

class redes_widget extends WP_Widget{

	function __construct(){
		parent::__construct('redes_widget', "Redes Sociales" ,array("description"=>"Cambia las redes sociales. "));
	}
	public function widget($args,$instance){
	    $facebook = $instance['facebook'];
	    $twitter = $instance['twitter'];
	    $instagram = $instance['instagram'];
?>
	<?php if($facebook || $twitter  || $instagram) {?>

		<ul class="redes">
		    <?php if($facebook) {?>
		    		<li>
				    	<a href="<?=$facebook;?>" target="_blank">
				    		<i class="icono-facebook"></i>
				    	</a>
				  </li>
			<?php } ?>


		    <?php if($twitter) {?>
		    		<li>
		    			<a href="<?=$twitter;?>" target="_blank">
		    				<i class="icono-twitter"></i>
		    			</a>
		    		</li>
		    	<?php } ?>


		    <?php if($instagram) {?>
		    		<li>
		    			<a href="<?=$instagram;?>" target="_blank">
		    				<i class="icono-instagram"></i>
		    			</a>
		    		</li>
		    	<?php } ?>
		</ul>

	<?php } ?>

<?php
	}

	public function form($instance){
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];
		$google = $instance['google'];
		$instagram = $instance['instagram'];
?>
		<p>
			<label for='<?= $this->get_field_id('facebook'); ?>'>Facebook</label>
			<input type='text' class="widefat" name='<?= $this->get_field_name('facebook'); ?>' id='<?= $this->get_field_id('facebook'); ?>' value='<?= $facebook; ?>'>
		</p>

		<p>
			<label for='<?= $this->get_field_id('twitter'); ?>'>Twitter</label>
			<input type='text' class="widefat" name='<?= $this->get_field_name('twitter'); ?>' id='<?= $this->get_field_id('twitter'); ?>' value='<?= $twitter; ?>'>
		</p>

		<p>
			<label for='<?= $this->get_field_id('instagram'); ?>'>Instagram</label>
			<input type='text' class="widefat" name='<?= $this->get_field_name('instagram'); ?>' id='<?= $this->get_field_id('instagram'); ?>' value='<?= $instagram; ?>'>
		</p>
<?php
	}
	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['facebook'] = strip_tags($new_instance['facebook']);
		$instance['twitter'] = strip_tags($new_instance['twitter']);
		$instance['instagram'] = strip_tags($new_instance['instagram']);
		return $instance;
	}
}


?>