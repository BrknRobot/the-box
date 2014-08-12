<?php

/**
* Set up logo option
*/
function thebox_custom_logo_register($wp_customize) {
	// Checkbox to add logo
	$wp_customize->add_setting('header_hasLogo',array(
		'default'	=> false,
		//'type'		=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_hasLogo', array(
		'label'		=> __( 'Use logo', 'thebox' ),
		'section'	=> 'title_tagline',
		'settings'	=> 'header_hasLogo',
		'type'		=>	'checkbox',
	)));
	$wp_customize->add_setting('logo', array(
		'default'	=> '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label'		=> __('Upload a logo', 'thebox'),
		'section'	=> 'title_tagline',
		'settings'	=> 'logo',
	)));
}
add_action('customize_register','thebox_custom_logo_register');
