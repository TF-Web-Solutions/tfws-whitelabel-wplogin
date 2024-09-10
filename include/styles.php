<?php
// Style the login page

namespace TFWebSolutions\WhiteLabelWPLogin\Styles;

add_action( 'login_head', __NAMESPACE__ . '\\login_styles' );

function login_styles() {

    // Get new image
	$image = get_theme_mod( 'tfws-whitelabel-wplogin-loginimage' );

    // Set new image or use WP default
	if ( $image ) {
		$image = wp_get_attachment_image_src( $image, 'tfws-whitelabel-wplogin-loginimage' );
	} else {
	    $image = [ admin_url( 'images/wordpress-logo.svg' ), '84', '84' ];
    }

	// Get the page background color
	$background_color = get_theme_mod( 'tfws-whitelabel-wplogin-backgroundcolor', '#F5F5F5' );

	// Get login button colors
	$login_button_color                 = get_theme_mod( 'tfws-whitelabel-wplogin-buttoncolor', '#084AF3' );
	$login_button_color_hover           = get_theme_mod( 'tfws-whitelabel-wplogin-buttoncolor-hover', '#4175FC' );
	$login_button_text                  = get_theme_mod( 'tfws-whitelabel-wplogin-buttontextcolor', '#F5F5F5' );
    $login_button_border_color          = get_theme_mod( 'tfws-whitelabel-wplogin-buttonbordercolor', '#084AF3' );
    $login_button_border_color_hover    = get_theme_mod( 'tfws-whitelabel-wplogin-buttonbordercolor-hover', '#4175FC' );


	// Get under form links colors
	$link_color = get_theme_mod( 'tfws-whitelabel-wplogin-linkcolor', '#50575e' );
	$link_color_hover = get_theme_mod( 'tfws-whitelabel-wplogin-linkcolor-hover', '#135e96' );

	?>
    <style type="text/css">
        body {
            background: <?php echo $background_color ?>;
        }

        .login form {
            border-radius: 8px;
        }

        #login h1 a {
            width: <?php echo $image[1] ?>px;
            height: <?php echo $image[2] ?>px;
            background-size: cover;
            background-image: url("<?php echo $image[0] ?>");
        }

        .wp-core-ui .button-primary, .wp-core-ui .button.button-large {
            width: 100%;
            height: auto;
            padding: 0.25rem;
            margin-top: 1rem;
            font-size: 1rem;
            color: <?php echo $login_button_text ?>;
            background-color: <?php echo $login_button_color ?>;
            border-color: <?php echo $login_button_border_color ?>;
        }

        .wp-core-ui .button-primary:hover {
            background: <?php echo $login_button_color_hover ?>;
            border-color: <?php echo $login_button_border_color_hover ?>;
        }

        .login #backtoblog a, .login #nav a {
            color: <?php echo $link_color ?>;
        }

        .login #backtoblog a:hover, .login #nav a:hover {
            color: <?php echo $link_color_hover ?>;
        }
    </style>
	<?php
}
