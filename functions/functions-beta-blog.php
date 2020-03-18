<?php
function remove_storefront_post_meta() {
  remove_action( 'storefront_post_content_before', 'storefront_post_thumbnail', 10 );
}
add_action( 'init', 'remove_storefront_post_meta', 10 );
add_action( 'storefront_post_header_before', 'storefront_post_thumbnail', 9 );

// ============================
// POST TAG LIST
// ============================
if ( ! function_exists( 'storefront_post_meta' ) ) {    
  function storefront_post_taxonomy() {
    if ( 'post' == get_post_type() ) : 
      $tags_list = get_the_tag_list( '', __( ' ', 'storefront' ) );
      if ( $tags_list ) : ?>
        <div class="tags-links">
          <?php
          echo '<div class="label">' . esc_attr( __( '', 'storefront' ) ) . '</div>';
          echo wp_kses_post( $tags_list );
          ?>
        </div>
      <?php endif; 
       endif; 
  }
}
// ============================
add_action( 'init', 'jk_customise_storefront' );
function jk_customise_storefront() {
	remove_action( 'storefront_loop_post', 'storefront_post_content', 30 );
	add_action( 'storefront_loop_post', 'jk_custom_storefront_post_content', 30 );
}
function jk_custom_storefront_post_content() {
	?>
	<div class="entry-content" itemprop="articleBody">
		<?php the_excerpt(); ?>
			<a class="button" href="<?php the_permalink(); ?>">
				Read More
			</a>
<p> </p>
	</div>
	<?php
}