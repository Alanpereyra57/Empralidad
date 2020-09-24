<?php
$wp_customize->add_section('emp_section_components_content', array(
  'title'    => __('Contenido', 'empralidad'),
  'priority' => 4,
  'panel'    => 'emp_panel_components'
));
// Font size
$wp_customize->add_setting('emp_components_content_size', array(
  'default'           => 1,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control('emp_components_content_size_control1', array(
  'label'      => __( 'Tamaño de texto', 'empralidad' ),
  'section'    => 'emp_section_components_content',
  'settings'   => 'emp_components_content_size',
  'type'			 => 'range',
  'input_attrs'=> array(
    'min'      => 10,
    'max'      => 50,
    'step'     => 1
  )
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_styles_tipography_control1', array(
  'label'          => __( 'Tipografía', 'empralidad' ),
  'section'        => 'emp_section_styles_tipography',
  'settings'       => 'emp_styles_tipography',
  'type'           => 'radio',
  'choices'        => array(
    'serif'  			 => __( 'Serif', 'empralidad' ),
    'sans-serif'   => __( 'Sans-serif', 'empralidad' ),
    'varela round' => __( 'Varela Round', 'empralidad' ),
    'indie flower' => __( 'Indie Flower', 'empralidad' ),
    'roboto' 			 => __('Roboto', 'empralidad'),
    'Kumbh Sans'	 => __('Kumbh Sans', 'empralidad'),
    'nunito'			 => __('Nunito', 'empralidad')
  )
)));
// color
$wp_customize->add_setting('emp_components_content_color', array(
  'default'           => '#262626',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_content_color_control', array(
  'label'      => __('Color de texto', 'empralidad'),
  'section'    => 'emp_section_components_content',
  'settings'   => 'emp_components_content_color',
  'description'=> __( 'Texto dentro del contenedor principal', 'empralidad' )

)));
// Background
$wp_customize->add_setting('emp_components_content_background', array(
  'default'           => '#fff',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_content_background_control', array(
  'label'      => __('Color de fondo', 'empralidad'),
  'section'    => 'emp_section_components_content',
  'settings'   => 'emp_components_content_background',
  'description'=> __( 'Fondo del contenedor principal', 'empralidad' )

)));
?>
