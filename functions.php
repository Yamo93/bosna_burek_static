<?php

// Lägger till "Produkt"-typen
add_action( 'init', 'prowp_register_my_post_types' );

add_theme_support('post-thumbnails');
add_post_type_support( 'my_product', 'thumbnail' ); 

function prowp_register_my_post_types() {
    $labels = array(
		'name'               => _x( 'Products', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Product', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Products', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'product', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Product', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Product', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Product', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Product', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Products', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Products', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Products:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No products found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No products found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'products' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions'),
		'taxonomies' 				 => array( 'category' )
    );
    
    register_post_type( 'products', $args );
}

// Registrerar huvud- och fotmenyerna
function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Huvudmeny' ),
		'footer-menu' => __( 'Fotmeny' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Pagination
function pagination_nav() {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) { ?>
			<nav class="pagination" role="navigation">
					<div class="nav-previous"><?php next_posts_link( '&larr; Äldre artiklar' ); ?></div>
					<div class="nav-next"><?php previous_posts_link( 'Nyare artiklar &rarr;' ); ?></div>
			</nav>
<?php }
}

?>