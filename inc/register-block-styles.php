<?php
/**
 * Block styles.
 *
 * @package blog-block
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function blog_block_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blog-block-flat-button',
			'label' => __( 'Flat button', 'blog-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'blog-block-navigation-button',
			'label' => __( 'Button style', 'blog-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'blog-block-list-underline',
			'label' => __( 'Underlined list items', 'blog-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blog-block-box-shadow',
			'label' => __( 'Box shadow', 'blog-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'blog-block-box-shadow',
			'label' => __( 'Box shadow', 'blog-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'blog-block-box-shadow',
			'label' => __( 'Box shadow', 'blog-block' ),
		)
	);
}
add_action( 'init', 'blog_block_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function blog_block_unregister_block_style() {
	wp_enqueue_script(
		'blog-block-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		BLOG_BLOCK_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'blog_block_unregister_block_style' );
