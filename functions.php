<?php
function getMyResources(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_script( 'bootstrap-js');
	wp_enqueue_style( 'bootstrap-css');
}

function theme_add_bootstrap() {

}
 
add_theme_support( 'post-thumbnails' ); 

add_action('wp_enqueue_scripts' ,'getMyResources', 'theme_add_bootstrap');

//Navigation

register_nav_menus(array('primary' => __('Custom Menu')));
remove_filter('the_content', 'wpautop');

function get_top_ancestor_id(){
	global $post;
	if ($post -> post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
}

function getPermalink(){
	echo "<a href =";
	get_the_permalink(get_top_ancestor_id());
	echo ">";
	echo "</a>";
	echo "<span class = 'parent-link'>";
	echo "<a href=";
	get_the_permalink(get_top_ancestor_id());
	echo ">" ;
	get_the_title(get_top_ancestor_id());
	echo "</a>";
	echo "</span>";
	$args = array('child_of' => get_top_ancestor_id(),
				  'title_li' => "");
	wp_list_pages($args);
}


// to allow for a custom logo https://developer.wordpress.org/themes/functionality/custom-logo/
// this can simply be add_theme_support( 'custom-logo' );
// but i want the image to be resonsive so i added this.... will need to look into it!
function custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array('site-title', 'site-description' ),
		'unlink-homepage-logo' => false, 
	);
	add_theme_support('custom-logo', $defaults);
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


// if we want to register ANY widget to show in the side bar of the customise part:
//	https://www.tipsandtricks-hq.com/how-to-add-widgets-to-wordpress-themes-footer-1033
register_sidebar( 
	array(
		'name' => 'SocialMediaLinks',
		'id' => 'social-media-sidebar',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	)
);
?>
