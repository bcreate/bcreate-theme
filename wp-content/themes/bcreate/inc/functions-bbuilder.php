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
}