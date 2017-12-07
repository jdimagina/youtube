<?php 

add_action('admin_init', 'campos_personalizados');

function campos_personalizados(){


	// CAMPOS HOME ///////////////////

		$franja_superior = array(
			'id'  		=> 'franja_superior',
			'title'  		=> 'Campo para los iconos y textos superiores',
			'desc'		=> '',
			'pages'		=> array('page'),
			'context'	=> 'normal',
			'priority'	=>'high',
			'fields'		=> array(
				array(
					'label' 	=> 'Icono servicio1',
					'id'		=> 'icono_servicio1',
					'type'	=> 'upload',
					'desc' 	=> '',
				),

				array(
					'label' 	=> 'Texto servicio1',
					'id'		=> 'texto_servicio1',
					'type'	=> 'text',
					'desc' 	=> '',
				),

				array(
					'label' 	=> 'Icono servicio2',
					'id'		=> 'icono_servicio2',
					'type'	=> 'upload',
					'desc' 	=> '',
				),

				array(
					'label' 	=> 'Texto servicio2',
					'id'		=> 'texto_servicio2',
					'type'	=> 'text',
					'desc' 	=> '',
				),

				array(
					'label' 	=> 'Icono servicio3',
					'id'		=> 'icono_servicio3',
					'type'	=> 'upload',
					'desc' 	=> '',
				),

				array(
					'label' 	=> 'Texto servicio3',
					'id'		=> 'texto_servicio3',
					'type'	=> 'text',
					'desc' 	=> '',
				),
			)	
		);

		$franja_texto_adicional = array(
			'id'  		=> 'franja_texto_adicional',
			'title'  		=> 'Campo texto inferior home',
			'desc'		=> '',
			'pages'		=> array('page'),
			'context'	=> 'normal',
			'priority'	=>'high',
			'fields'		=> array(
				array(
					'label' 	=> 'Texto adicional',
					'id'		=> 'texto_adicional',
					'type'	=> 'textarea',
					'desc' 	=> '',
				),

				array(
					'label' 	=> 'imagen adicional',
					'id'		=> 'imagen_adicional',
					'type'	=> 'upload',
					'desc' 	=> '',
				),
			)	
		);

	if ( function_exists( 'ot_register_meta_box' ) ){
		 ot_register_meta_box( $franja_superior );
		 ot_register_meta_box( $franja_texto_adicional );
	 }


	 add_action( 'add_meta_boxes', 'remove_post_meta_boxes' );

		function remove_post_meta_boxes() {
		      if( isset($_GET['post']) && $_GET['post'] != 35 ){
		      	remove_meta_box('franja_superior', 'page', 'normal');
		      	remove_meta_box('franja_texto_adicional', 'page', 'normal');
		      }

		}
	
}



 ?>