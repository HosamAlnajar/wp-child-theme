<?php

/**
 * Enqueue css & javascript
 */
function theme_style()
{
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', 1.0);

    wp_enqueue_script( 'child-custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_style' );

/**
 * change login log /wp-admin
 */
function change_login_logo() {
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(http://localhost:8888/wordpress/wp-content/uploads/2016/04/shoes-image.gif);
        }
    </style>
    <?php
}

add_action( 'login_enqueue_scripts', 'change_login_logo' );
