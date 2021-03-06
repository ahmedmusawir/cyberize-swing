<?php
/**
 * Theme Setup Functions
 */
require get_template_directory() . '/_functions/theme-setup.php';

/**
 * Widget Setup Functions
 */
require get_template_directory() . '/_functions/widget-setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/_functions/scripts-setup.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
 * Bootstrap 4 Nav Walker
 */
require get_template_directory() . '/_functions/bootstrap-navwalker.php';
/**
 * Helper Functions
 */
require get_template_directory() . '/_functions/helpers-setup.php';

/**
 *
 * React App Setup
 *
 */
require get_template_directory() . '/_functions/react-setup.php';

/**
 *
 * Adding Breadcrums
 *
 */

require get_template_directory() . '/_functions/breadcrum-function.php';

/**
 *
 * WooCommerce Plugins 		
 *
 */

require get_template_directory() . '/_functions/woocom-functions.php';


/**
 *
 * Changing Comments Headline (Leave a Reply to Leave a comment)
 *
 */

//change text to leave a reply on comment form
function isa_comment_reform ($arg) {
$arg['title_reply'] = __('Leave a Comment:');
return $arg;
}
add_filter('comment_form_defaults','isa_comment_reform');



/*=====  End of MOOSE INCLUDES  ======*/



/*====== SHAWN ========*/

// allow SVG file type to upload
define('ALLOW_UNFILTERED_UPLOADS', true);


// LIMIT THE EXCERPT LENGTH
function custom_excerpt_length( $length ) {
  return 0;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// define the comment_form_after callback
function swing_action_comment_form_after( $array ) {

	?>
</div> </div>	
	<?php
};

// add the action
add_action( 'comment_form_after', 'swing_action_comment_form_after', 10, 1 );


/*====== End of SHAWN======*/
