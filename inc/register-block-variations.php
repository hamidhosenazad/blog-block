<?php
/**
 * Block Variations
 *
 * @package blog-block
 * @since 1.0.0
 */

/**
 * This is an example of how to register a block variation.
 * Type /full or use the block inserter to insert a full width group block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.0
 *
 * @return void
 */
function blog_block_register_block_variation() {
	wp_enqueue_script(
		'blog-block-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		BLOG_BLOCK_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'blog_block_register_block_variation' );
