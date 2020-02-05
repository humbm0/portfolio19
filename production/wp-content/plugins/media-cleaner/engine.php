<?php

class Meow_WPMC_Engine {

	function __construct( $core, $admin ) {
		$this->core = $core;
		$this->admin = $admin;
	}

	/*
		STEP 1: Parse the content, and look for references
	*/

	// Parse the posts for references (based on $limit and $limitsize for paging the scan)
	function parse( $limit, $limitsize, &$message = '' ) {
		if ( empty( $limit ) )
			$this->core->reset_issues();

		$method = get_option( 'wpmc_method', 'media' );
		$check_library = get_option(' wpmc_media_library', true );
		$check_content = get_option( 'wpmc_content', true );
		//$check_postmeta = get_option( 'wpmc_postmeta', false );
		//$check_posts = get_option( 'wpmc_posts', false );
		//$check_widgets = get_option( 'wpmc_widgets', true );

		if ( $method == 'media' && !$check_content ) {
			$message = __( "Posts, content analysis is off. Done.", 'media-cleaner' );
			return true;
		}
		if ( $method == 'files' && $check_library && !$check_content ) {
			$message = __( "Posts, library check and content analysis are off. Done.", 'media-cleaner' );
			return true;
		}

		// Initialize the parsers
		do_action( 'wpmc_initialize_parsers' );

		global $wpdb;
		// Maybe we could avoid to check more post_types.
		// SELECT post_type, COUNT(*) FROM `wp_posts` GROUP BY post_type
		$posts = $wpdb->get_col( $wpdb->prepare( "SELECT p.ID FROM $wpdb->posts p
			WHERE p.post_status NOT IN ('inherit', 'trash', 'auto-draft')
			AND p.post_type NOT IN ('attachment', 'shop_order', 'shop_order_refund', 'nav_menu_item', 'revision', 'auto-draft', 'wphb_minify_group', 'customize_changeset', 'oembed_cache', 'nf_sub')
			AND p.post_type NOT LIKE 'dlssus_%'
			AND p.post_type NOT LIKE 'ml-slide%'
			AND p.post_type NOT LIKE '%acf-%'
			AND p.post_type NOT LIKE '%edd_%'
			LIMIT %d, %d", $limit, $limitsize
			)
		);

		// Only at the beginning
		if ( empty( $limit ) ) {
			$this->core->log( "Parsed references:" );
			//if ( get_option( 'wpmc_widgets', false ) ) {

				global $wp_registered_widgets;
				$syswidgets = $wp_registered_widgets;
				$active_widgets = get_option( 'sidebars_widgets' );
				foreach ( $active_widgets as $sidebar_name => $widgets ) {
					if ( $sidebar_name != 'wp_inactive_widgets' && !empty( $widgets ) && is_array( $widgets ) ) {
						foreach ( $widgets as $key => $widget ) {
							do_action( 'wpmc_scan_widget', $syswidgets[$widget] );
						}
					}
				}

				do_action( 'wpmc_scan_widgets' );
			//}
			do_action( 'wpmc_scan_once' );
		}

		$this->core->timeout_check_start( count( $posts ) );

		foreach ( $posts as $post ) {
			$this->core->timeout_check();

			// Check content
			if ( $check_content ) {
				do_action( 'wpmc_scan_postmeta', $post );
				$html = get_post_field( 'post_content', $post );
				do_action( 'wpmc_scan_post', $html, $post );
			}

			// Extra scanning methods
			do_action( 'wpmc_scan_extra', $post );

			$this->core->timeout_check_additem();
		}

		// Write the references found (and cached) by the parsers
		$this->core->write_references();

		$finished = count( $posts ) < $limitsize;
		if ( $finished )
			$this->core->log();
		$message = __( "Posts checked.", 'media-cleaner' );
		return $finished;
	}

	/*
		STEP 2: List the media entries (or files)
	*/

	// Get files in /uploads (if path is null, the root of /uploads is returned)
	function get_files( $path = null ) {
		$files = apply_filters( 'wpmc_list_uploaded_files', null, $path );
		return $files;
	}

	function get_media_entries( $limit, $limitsize ) {
		global $wpdb;
		$results = $wpdb->get_col( $wpdb->prepare( "SELECT p.ID FROM $wpdb->posts p
			WHERE p.post_status = 'inherit'
			AND p.post_type = 'attachment'
			LIMIT %d, %d", $limit, $limitsize
			)
		);
		return $results;
	}

	/*
		STEP 3: Check the media entries (or files) against the references
	*/

	function check_media( $media ) {
		return $this->core->check_media( $media );
	}

	function check_file( $file ) {
		return apply_filters( 'wpmc_check_file', true, $file );
	}

}

?>