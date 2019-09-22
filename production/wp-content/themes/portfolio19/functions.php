<?php
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'twoColContent',
        'title'             => __('Two Column Content'),
        'description'       => __('A custom two column block.'),
        'render_template'   => 'template-parts/blocks/twoColBlock.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'two column' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
