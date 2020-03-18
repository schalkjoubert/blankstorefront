<?php
// ================================
// DISABLE GUTENBERG
// ================================
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// ================================
// LOGIN LOGO
// ================================
function my_login_logo() { ?>
<style type="text/css">
body.login div#login h1 a {
background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/this-side-up-media.png); width:120px; background-size: 120px 80px;}
body.login { background-color: #940000; }
.login form { background: none repeat scroll 0 0 rgba(0, 0, 0, 0.4); }
.login form .forgetmenot { display: none; }
.wp-core-ui .button-primary {background: none repeat scroll 0 0 #940000; border-color: #940000;box-shadow: none;width: 100%;}
.wp-core-ui .button-primary:hover {background: rgba(0, 0, 0, 0.4);border-color: rgba(0, 0, 0, 0.2);box-shadow: none;}</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// ================================
// LOGIN LINK
// ================================
function my_login_logo_url() {return ('https://www.thissideupmedia.com');}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {return 'This Side Up Media';}
// add_filter( 'login_headertitle', 'my_login_logo_url_title' );
add_filter( 'login_headertext', 'my_login_logo_url_title' );





// ================================
// LOGOUT LINK
// ================================
function custom_toolbar_link($wp_admin_bar) {
$args = array(
'id' => 'Logout',
'title' => 'Logout', 
'href' => wp_logout_url(),
'meta' => array(
'class' => 'tsum-logout', 
'title' => 'Logouts'
));
$wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'custom_toolbar_link', 999);

// ================================
// REDIRECT AFTER LOGIN
// ================================
// function my_login_redirect( $url, $request, $user ){
// if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
// if( $user->has_cap( 'administrator') or $user->has_cap( 'author')) {
// $url = admin_url();
// } else {
// $url = home_url('/wp-admin/edit.php?post_type=estates');
// }
// }
// return $url;
// }
// add_filter('login_redirect', 'my_login_redirect', 10, 3 );

// ================================
// OLD - REMOVES HELP
// ================================
function oz_remove_help_tabs( $old_help, $screen_id, $screen ){
    $screen->remove_help_tabs();
    return $old_help;
}
add_filter( 'contextual_help', 'oz_remove_help_tabs', 999, 3 );


// ================================
// SCREEN OPTION & HELP
// ================================
// function wpb_remove_screen_options() { 
// if(!current_user_can('manage_options')) {
// return false;
// }
// return true; 
// }
// add_filter('screen_options_show_screen', 'wpb_remove_screen_options');



// ================================
// DASHBOARD
// ================================
function disable_default_dashboard_widgets() {
  global $wp_meta_boxes;
  // wp..
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
  // bbpress
  //unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);
  // yoast seo
  //unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
  // gravity forms
  //unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);
}
add_action('wp_dashboard_setup', 'disable_default_dashboard_widgets', 999);



// ================================
// POST EDIT 
// https://codex.wordpress.org/Function_Reference/remove_meta_box
// ================================
// function my_remove_meta_boxes() {
//   if ( ! current_user_can( 'manage_options' ) ) {
//     remove_meta_box( 'categorydiv', 'link', 'normal' );   // Categories metabox. 
  //  remove_meta_box( 'author_cat', 'link', 'side' );   // Author CAT Plugin
  //  remove_meta_box( 'linktargetdiv', 'link', 'normal' );
  //  remove_meta_box( 'postimagediv', 'link', 'normal' );  // FEATURED IMAGE
    // remove_meta_box( 'slugdiv', 'post', 'normal' );  // SLUG
    //  remove_meta_box( '', 'link', 'normal' );
    //  remove_meta_box( '', 'link', 'normal' );
    //  remove_meta_box( '', 'link', 'normal' );
//  remove_meta_box( '', 'link', 'normal' );
    //  remove_meta_box( '', 'link', 'normal' );
  //  remove_meta_box( 'linkxfndiv', 'link', 'normal' );
  //  remove_meta_box( 'linkadvanceddiv', 'link', 'normal' );
    // remove_meta_box( 'postexcerpt', 'post', 'normal' );
    // remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
  //  remove_meta_box( 'postcustom', 'post', 'normal' );
    // remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
    // remove_meta_box( 'commentsdiv', 'post', 'normal' );
    // remove_meta_box( 'revisionsdiv', 'post', 'normal' );
  //  remove_meta_box( 'authordiv', 'post', 'normal' );
    // remove_meta_box( 'sqpt-meta-tags', 'post', 'normal' );
//   }
// }
// add_action( 'admin_menu', 'my_remove_meta_boxes' );

// ================================
// ADMIN BAR ITEMSS  
// ================================
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
//    $wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
    $wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
//	$wp_admin_bar->remove_menu('edit');        // EDIT PAGE	
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );


// ================================
// MENU OPTIONS
// ================================
function custom_menu_page_removing() {
  if( !current_user_can('administrator') ) {
    
 // remove_menu_page( 'index.php' );                  //Dashboard
 //remove_menu_page( 'edit.php' );                   //Posts
//  remove_menu_page( 'upload.php' );                 //Media
 // remove_menu_page( 'edit.php?post_type=page' );    //Pages
 //remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
//  remove_menu_page( 'plugins.php' );                //Plugins
//  remove_menu_page( 'users.php' );                  //Users
 // remove_menu_page( 'tools.php' );                  //Tools
//  remove_menu_page( 'options-general.php' );        //Settingsia
//  remove_menu_page( 'edit.php?post_type=yith-wcbm-badge' );    //BADGE
//   remove_submenu_page('users.php', 'profile.php');
//    remove_menu_page('profile.php');
 //   remove_menu_page( 'edit.php?post_type=popup' );
//    remove_submenu_page( 'edit.php?post_type=estates', 'post-new.php?post_type=estates' );

// remove_submenu_page( 'gf_edit_forms', 'gf_help' );
// remove_submenu_page( 'gf_entries', 'gf_help' ); 
// remove_menu_page( 'gf_help' ); 

//	remove_submenu_page( 'edit.php?post_type=page', 'post-new.php?post_type=page' );
}
}
add_action( 'admin_menu', 'custom_menu_page_removing' );

// ================================
// GRAVITY FORMS HELP 
// ================================
function remove_menu_links() {
    remove_submenu_page( 'gf_entries', 'gf_help' );
}
add_action( 'admin_menu', 'remove_menu_links', 9999 );


// ================================
// PAGE SLUG CLASS 
// ================================
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// =============================================
// POST DEFAULT IMAGE
// =============================================


// add_filter( 'post_thumbnail_html', 'my_post_thumbnail_html' );

// function my_post_thumbnail_html( $html ) {

//   if ( empty( $html ) )
//     $html = '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'assets/images/default-thumbnail.jpg' . '" alt="" />';

//   return $html;
// }