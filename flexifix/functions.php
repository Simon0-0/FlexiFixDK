<?php 

function flexifix_files(){
    wp_enqueue_style('flexifix_main_styles', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap', array(), null);
    wp_enqueue_style('cdn-fonts', 'https://fonts.cdnfonts.com/css/the-goldsmith-vintage');
}
add_action('wp_enqueue_scripts', 'flexifix_files');
	
add_theme_support( 'post-thumbnails' );

function flexifix_features(){
    register_nav_menu('headerMenu', 'Header Menu'); 
    register_nav_menu('footerMenu', 'Footer Menu One');
    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'flexifix_features');


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');
  /**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}