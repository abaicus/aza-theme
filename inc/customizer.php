<?php
/**
 * AZA Theme Theme Customizer.
 *
 * @package AZA_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aza_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /********************************************************/
	/************** WP DEFAULT CONTROLS  ********************/
	/********************************************************/
	
	$wp_customize->remove_control('background_color');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('colors');
    $wp_customize->get_section('header_image')->panel='panel_2';
//        ->panel='panel_2';
    
    
	/********************************************************/
	/********************* APPEARANCE  **********************/
	/********************************************************/

$wp_customize->add_panel( 'panel_2', array(
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Appearance', 'aza' )
	) );


$wp_customize->add_section( 'aza_appearance_cover' , array(
		'title'       => esc_html__( 'Cover options', 'aza' ),
      	'priority'    => 30,
      	'description' => esc_html__('AZA theme general appearance options','aza'),
		'panel'		  => 'panel_2'
	));
	
/*-------------------------------
Logo
---------------------------------*/

    $wp_customize->add_setting( 'aza_logo', array(
		'default' => aza_get_file('/images/logo.png'),
		'sanitize_callback' => 'esc_url',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aza_logo', array(              
	      	'label'    => esc_html__( 'Site Logo', 'aza' ),
	      	'section'  => 'aza_appearance_cover',
			'priority'    => 1,
	)));
    
/*-------------------------------
Site header title
---------------------------------*/
    
     $wp_customize->add_setting( 'aza_header_title', array(
		'default' => esc_html__('AZA Theme','aza'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
	$wp_customize->add_control( 'aza_header_title', array(
		'label'    => esc_html__( 'Main title', 'aza' ),
		'section'  => 'aza_appearance_cover',
		'priority'    => 2,
	));
    
/*-------------------------------
Site header subtitle
---------------------------------*/
    
    $wp_customize->add_setting( 'aza_subheader_title', array(
		'default' => esc_html__('One-page - Responsive, Eyecandy, Clean','aza'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
	$wp_customize->add_control( 'aza_subheader_title', array(
		'label'    => esc_html__( 'Secondary title', 'aza' ),
		'section'  => 'aza_appearance_cover',
		'priority'    => 3,
	));
    
/*-------------------------------
Header store buttons
---------------------------------*/    
    
    $wp_customize->add_setting( 'aza_appstore_link', array(
		'default' => esc_url('#'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
	$wp_customize->add_control( 'aza_appstore_link', array(
		'label'    => esc_html__('Apple Appstore link', 'aza' ),
		'section'  => 'aza_appearance_cover',
		'priority'    => 4,
	));
    
    $wp_customize->add_setting( 'aza_playstore_link', array(
		'default' => esc_url('#'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
	$wp_customize->add_control( 'aza_playstore_link', array(
		'label'    => esc_html__( 'Google Playstore link', 'aza' ),
		'section'  => 'aza_appearance_cover',
		'priority'    => 5,
	));


/*---------------------------------------
FEATURES SECTION
---------------------------------------*/
    
    $wp_customize->add_section( 'aza_appearance_features' , array(
		'title'       => esc_html__( 'Features Section', 'aza' ),
      	'priority'    => 31,
      	'description' => esc_html__('AZA theme Features section appearance options','aza'),
		'panel'		  => 'panel_2'
	));
    
/*-------------------------------
Features heading
---------------------------------*/

     $wp_customize->add_setting( 'aza_features_heading', array(
		'default' => esc_html__('KEY FEATURES','aza'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
	$wp_customize->add_control( 'aza_features_heading', array(
		'label'    => esc_html__( 'Section heading', 'aza' ),
		'section'  => 'aza_appearance_features',
		'priority'    => 1,
	));
    
/*-------------------------------
Features phone screen
---------------------------------*/
    
    $wp_customize->add_setting( 'aza_phone_screen', array(
		'default' => aza_get_file('/images/screen.png'),
		'sanitize_callback' => 'esc_url',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aza_phone_screen', array(
	      	'label'    => esc_html__( 'Phone screen image', 'aza' ),
	      	'section'  => 'aza_appearance_features',
			'priority'    => 2,
	)));

/*-------------------------------
Features Button
---------------------------------*/

    $wp_customize->add_setting( 'aza_features_button_text', array(
		'default' => esc_html__('LEARN MORE','aza'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
	
    $wp_customize->add_control( 'aza_features_button_text', array(
		'label'    => esc_html__( 'Button Text', 'aza' ),
		'section'  => 'aza_appearance_features',
		'priority'    => 3,
	));
    
    $wp_customize->add_setting( 'aza_features_button_link', array(
		'default' => esc_url('#'),
		'sanitize_callback' => 'aza_sanitize_text',
	));
    
	$wp_customize->add_control( 'aza_features_button_link', array(
		'label'    => esc_html__('Button Link', 'aza' ),
		'section'  => 'aza_appearance_features',
		'priority'    => 4,
	));

/*-------------------------------
Features zig-zag
---------------------------------*/
    
    $wp_customize->add_setting( 'aza_zigzag_features_top', array(
        'default' => 0,
    ));

    $wp_customize->add_control( 'aza_zigzag_features_top', array(
        'label' => 'Jagged top edge',
        'type' => 'checkbox',
        'section' => 'aza_appearance_features',
    ));
    
    $wp_customize->add_setting( 'aza_zigzag_features_bottom', array(
        'default' => 0,
        ));

    $wp_customize->add_control( 'aza_zigzag_features_bottom', array(
        'label' => 'Jagged bottom edge',
        'type' => 'checkbox',
        'section' => 'aza_appearance_features',
    ));
    

    
/*---------------------------------------
PARALLAX SECTION
---------------------------------------*/
    
    
     $wp_customize->add_section( 'aza_appearance_parallax' , array(
		'title'       => esc_html__( 'Parallax Section', 'aza' ),
      	'priority'    => 32,
      	'description' => esc_html__('AZA theme Parallax section appearance options','aza'),
		'panel'		  => 'panel_2'
	));
    
    $wp_customize->add_setting( 'aza_parallax_background', array(
		'default' => aza_get_file('/images/parallax-background.png'),
		'sanitize_callback' => 'esc_url',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aza_parallax_background', array(
	      	'label'    => esc_html__( 'Parallax Background Image', 'aza' ),
	      	'section'  => 'aza_appearance_parallax',
			'priority'    => 2,
	)));
    
     $wp_customize->add_setting( 'aza_parallax_layer_1', array(
		'default' => aza_get_file('/images/parallax-layer1.png'),
		'sanitize_callback' => 'esc_url',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aza_parallax_layer_1', array(
	      	'label'    => esc_html__( 'Parallax First Layer Image', 'aza' ),
	      	'section'  => 'aza_appearance_parallax',
			'priority'    => 3,
	)));
    
    $wp_customize->add_setting( 'aza_parallax_layer_2', array(
		'default' => aza_get_file('/images/parallax-layer2.png'),
		'sanitize_callback' => 'esc_url',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aza_parallax_layer_2', array(
	      	'label'    => esc_html__( 'Parallax Second Layer Image', 'aza' ),
	      	'section'  => 'aza_appearance_parallax',
			'priority'    => 4,
	)));
    
    $wp_customize->add_setting( 'aza_parallax_image', array(
		'default' => aza_get_file('/images/parallax-image.png'),
		'sanitize_callback' => 'esc_url',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aza_parallax_image', array(
	      	'label'    => esc_html__( 'Left side of the Parallax Image', 'aza' ),
	      	'section'  => 'aza_appearance_parallax',
			'priority'    => 1,
	)));
    


}
add_action( 'customize_register', 'aza_customize_register' );



function aza_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */


function aza_customize_preview_js() {
	wp_enqueue_script( 'aza_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'aza_customize_preview_js' );