<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_register_script( 'jquery.backstrech', get_template_directory_uri() . '/js/jquery.backstrech.js');
	// For either a plugin or a theme, you can then enqueue the script:

}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



class Walker_MenuLateral extends Walker_page {
  	function start_el(&$output, $page, $depth, $args, $current_page) {
		if ( $depth )
			$indent = str_repeat("\t", $depth);
		else
			$indent = '';
 		
		extract($args, EXTR_SKIP);
		$icones = array("about me" => "icon-user", "articles" => "icon-coffee","labs" => "icon-beaker");
		$output .= $indent . '<li><a href="' . get_page_link($page->ID) . '" title="' . esc_attr( wp_strip_all_tags( apply_filters( 'the_title', $page->post_title, $page->ID ) ) ) . '">'. '<i class="icone_menu_lateral icon-3x '. $icones[strtolower($page->post_title)] . '"></i>' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';
 
	}

}

?>