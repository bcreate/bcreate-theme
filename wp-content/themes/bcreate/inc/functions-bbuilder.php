<?php
function bcreate_bblocks_category($categories) {
    return array_merge(
        [
            [
                'slug' => 'bblocks',
                'title' => __('bBlocks'),
            ],
        ],
        $categories
    );
}

add_filter('block_categories_all', 'bcreate_bblocks_category', 10, 2);


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // register a testimonial block.
        acf_register_block_type(array(
            'name' => 'bblock-title-text',
            'title' => __('Title + Text'),
            'description' => __('A custom testimonial block.'),
            'render_template' => '/templates/template-parts/bblocks/title-text.php',
            'category' => 'bblocks',
            'icon' => 'admin-comments',
            'keywords' => array('bblock'),
        ));
    }

	if (function_exists('acf_register_block_type')) {
		// register a testimonial block.
		acf_register_block_type(array(
			'name' => 'bblocks-usps',
			'title' => __('USPs'),
			'description' => __('A custom testimonial block.'),
			'render_callback' => 'render_bblocks',
			'category' => 'bblocks',
			'icon' => 'admin-comments',
			'keywords' => array('bblock'),
		));
	}
}

function render_bblocks($block) {
	// convert name ("bblocks-usps") into template location ("bblocks/usps")
	$slug = implode("/", explode("-", $block['name']));
	$slug = str_replace("acf/", "", $slug);
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/templates/template-parts/{$slug}.php") ) ) {
		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20141119);
		wp_enqueue_style('bcreate-style', get_stylesheet_uri(), array(), _S_VERSION);
		wp_enqueue_style('style', get_stylesheet_directory_uri() . "/css/theme.css", array(), _S_VERSION);
		wp_enqueue_script('bcreate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true);
		include( get_theme_file_path("/templates/template-parts/{$slug}.php") );
	}
}

function get_style_from_bblock($style, $field_name, $arg, $post_fix = null) {
	$acf_field_name = str_replace("-", "_", $field_name);
	$acf_args = str_replace("-", "_", $arg);

	if(isset($style[$field_name . "_" . $acf_args])) {
		$style_res = $style[$acf_field_name . "_" . $acf_args];

		if($post_fix !== null) {
			$style_res.=$post_fix;
		}
		return $arg . ": " . $style_res . ";";
	}

	return null;
}