<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

require_once( __DIR__ . '/assets/functions/functions-alpha-scripts.php');
require_once( __DIR__ . '/assets/functions/functions-alpha-setup.php');

require_once( __DIR__ . '/assets/functions/functions-beta-breadcrumbs.php');
require_once( __DIR__ . '/assets/functions/functions-beta-header.php');
require_once( __DIR__ . '/assets/functions/functions-beta-footer.php');
require_once( __DIR__ . '/assets/functions/functions-beta-blog.php');
require_once( __DIR__ . '/assets/functions/functions-beta-facet.php');




