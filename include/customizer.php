<?php
// Create Customizer controls

namespace TFWebSolutions\WhiteLabelWPLogin\Customizer;

use WP_Customize_Manager;
use WP_Customize_Color_Control;
use WP_Customize_Image_Control;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'customize_register', __NAMESPACE__ . '\\create_customizer_tab' );

/**
 * Create tab for plugin in Customizer
 * 
 * @param WP_Customize_Manager $wp_customize
 */
function create_customizer_tab( $wp_customize ) {
	$wp_customize->add_section( 'tfws-whitelabel-wplogin',
		array(
            'priority'    => 80,
            'capability'  => 'manage_options',
			'title'       => 'White Label WP Login',
			'description' => 'Customize your WP Login Page to match the site.',
		)
	);

	/**
	 * Choose the page's background color
     * 
     * Default: #F5F5F5 (Off-White)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-backgroundcolor',
		array(
			'default' => '#F5F5F5',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-backgroundcolor',
			array(
                'settings' => 'tfws-whitelabel-wplogin-backgroundcolor',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Page Background Color',
                'description'    => 'This changes the background color of the page.',
			)
		)
	);


	/**
	 * Choose login button's color
     * 
     * Default: #084AF3 (Dark Blue)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-buttoncolor',
		array(
			'default' => '#084AF3',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-buttoncolor',
			array(
                'settings' => 'tfws-whitelabel-wplogin-buttoncolor',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Login Button Color',
                'description'    => 'This changes the color of the login button.',
			)
		)
	);

	/**
	 * Choose login button's hover color
     * 
     * Default: #4175FC (Light Blue)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-buttoncolor-hover',
		array(
			'default' => '#4175FC',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-buttoncolor-hover',
			array(
                'settings' => 'tfws-whitelabel-wplogin-buttoncolor-hover',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Login Button Hover Color',
                'description'    => 'This changes the color of the login button when hovering.',
			)
		)
	);

	/**
	 * Choose login button's text color
     * 
     * Default: #F5F5F5 (Off-White)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-buttontextcolor',
		array(
			'default' => '#F5F5F5',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-buttontextcolor',
			array(
                'settings' => 'tfws-whitelabel-wplogin-buttontextcolor',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Login Button Text Color',
                'description'    => 'This changes the color of the login button text color.',
			)
		)
	);

	/**
	 * Choose login button's text color when hovering
     * 
     * Default: #F5F5F5 (Off-White)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-buttontextcolor-hover',
		array(
			'default' => '#F5F5F5',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-buttontextcolor-hover',
			array(
                'settings' => 'tfws-whitelabel-wplogin-buttontextcolor-hover',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Login Button Text Hover Color',
                'description'    => 'This changes the color of the login button text color when hovering.',
			)
		)
	);

    /**
	 * Choose login button's border color
     * 
     * Default: #084AF3 (Dark Blue)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-buttonbordercolor',
        array(
            'default' => '#084AF3',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'tfws-whitelabel-wplogin-buttonbordercolor',
            array(
                'settings' => 'tfws-whitelabel-wplogin-buttonbordercolor',
                'section'  => 'tfws-whitelabel-wplogin',
                'label'    => 'Login Button Border Color',
                'description'    => 'This changes the color of the login button border color.',
            )
        )
    );

    /**
	 * Choose login button's border hover color 
     * 
     * Default: #4175FC (Light Blue)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-buttonbordercolor-hover',
        array(
            'default' => '#4175FC',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'tfws-whitelabel-wplogin-buttonbordercolor-hover',
            array(
                'settings' => 'tfws-whitelabel-wplogin-buttonbordercolor-hover',
                'section'  => 'tfws-whitelabel-wplogin',
                'label'    => 'Login Button Border Hover Color',
                'description'    => 'This changes the color of the login button border color when hovering.',
            )
        )
    );

	/**
	 * Choose link text color
     * 
     * Default: #50575e (Gray)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-linkcolor',
		array(
			'default' => '#50575e',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-linkcolor',
			array(
                'settings' => 'tfws-whitelabel-wplogin-linkcolor',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Link Text Color',
                'description'    => 'This changes the color of the text on the links under the form.',
			)
		)
	);

	/**
	 * Choose link text hover color
     * 
     * Default: #135e96 (Wordpress Blue)
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-linkcolor-hover',
		array(
			'default' => '#135e96',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-linkcolor-hover',
			array(
                'settings' => 'tfws-whitelabel-wplogin-linkcolor-hover',
                'section'  => 'tfws-whitelabel-wplogin',
				'label'    => 'Link Text Hover Color',
                'description'    => 'This changes the color of the text on the links under the form when hovering.',
			)
		)
	);

	/**
	 * Upload image to replace default WP Logo
	 */
	$wp_customize->add_setting( 'tfws-whitelabel-wplogin-loginimage' );

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'tfws-whitelabel-wplogin-loginimage',
			array(
				'label'       => 'Upload an image',
				'section'     => 'tfws-whitelabel-wplogin',
				'settings'    => 'tfws-whitelabel-wplogin-loginimage',
				'flex_width'  => false,
				'flex_height' => true,
				'width'       => 200,
				'height'      => 200,
			)
		)
	);

}
