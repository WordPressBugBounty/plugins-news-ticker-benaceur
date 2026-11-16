<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$old_options = $this->glob_options();

/**
* Process a settings export that generates a .json file.
*/
if ( isset( $_POST['ntb_action'] ) && 'export_settings' === $_POST['ntb_action'] ) {
	if ( ! current_user_can( apply_filters( 'ntb_manage_options_cap', 'manage_options' ) ) ) {
		wp_die( esc_html__( 'You are not allowed to export these settings.', 'news-ticker-benaceur' ), '', array( 'response' => 403 ) );
	}

	if ( ! isset( $_POST['ntb_export_nonce'] ) || ! wp_verify_nonce( $_POST['ntb_export_nonce'], 'ntb_export_nonce' ) ) {
		wp_die( esc_html__( 'The export request is invalid.', 'news-ticker-benaceur' ), '', array( 'response' => 403 ) );
	}
	
	$filename = 'news-ticker-benaceur-settings_' . date("d-m-Y__H-i-s", current_time( 'timestamp' )) . '.json';
	
	nocache_headers();
	header( 'Content-Description: File Transfer' );
	header( 'Content-Type: application/json; charset=' . get_option( 'blog_charset') );
	header( 'Content-Disposition: attachment; filename=' . $filename );
	
	//$json_file = version_compare( PHP_VERSION, '5.4.0', '>=' ) ? json_encode($old_options, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : json_encode($old_options);
	
	/*
	PHP_VERSION 5.4.0 >= : JSON_UNESCAPED_UNICODE
	*/
	$flags = defined( 'JSON_UNESCAPED_UNICODE' ) ? JSON_UNESCAPED_UNICODE : null;

	echo wp_json_encode( $old_options, $flags );
	exit;
}


/**
 * Process a settings import from a json file.
 */
if ( ! empty( $_POST['ntb_action'] ) && 'import_settings' === $_POST['ntb_action'] ) {

	if ( ! current_user_can( apply_filters( 'ntb_manage_options_cap', 'manage_options' ) ) ) {
		wp_die(
			esc_html__( 'You are not allowed to import these settings.', 'news-ticker-benaceur' ),
			'',
			array( 'response' => 403 )
		);
	}

	if ( ! isset( $_POST['ntb_import_nonce'] ) || ! wp_verify_nonce( $_POST['ntb_import_nonce'], 'ntb_import_nonce' ) ) {
		wp_die(
			esc_html__( 'The import request is invalid.', 'news-ticker-benaceur' ),
			'',
			array( 'response' => 403 )
		);
	}

	if (
		! isset( $_FILES['NTB_import_file'] )
		|| ! is_array( $_FILES['NTB_import_file'] )
		|| ! isset(
			$_FILES['NTB_import_file']['error'],
			$_FILES['NTB_import_file']['tmp_name'],
			$_FILES['NTB_import_file']['name']
		)
	) {
		wp_die( esc_html__( 'No settings file was uploaded.', 'news-ticker-benaceur' ) );
	}

	$uploaded_file = $_FILES['NTB_import_file'];

	if ( UPLOAD_ERR_OK !== (int) $uploaded_file['error'] ) {
		wp_die( esc_html__( 'The settings file could not be uploaded.', 'news-ticker-benaceur' ) );
	}

	$import_file = $uploaded_file['tmp_name'];

	if ( '' === $import_file || ! is_uploaded_file( $import_file ) ) {
		wp_die( esc_html__( 'The uploaded settings file is invalid.', 'news-ticker-benaceur' ) );
	}

	$extension = strtolower( pathinfo( $uploaded_file['name'], PATHINFO_EXTENSION ) );

	if ( 'json' !== $extension ) {
		wp_die( esc_html__( 'Please upload a valid .json file.', 'news-ticker-benaceur' ) );
	}

	$json_options = wp_json_file_decode(
		$import_file,
		array( 'associative' => true )
	);

	if ( ! is_array( $json_options ) ) {
		wp_die( esc_html__( 'The settings file is invalid.', 'news-ticker-benaceur' ) );
	}

	$sanitized_options = $this->sanitize_options_values( $json_options );

	if ( false === $sanitized_options ) {
		wp_die( esc_html__( 'The settings file contains invalid values.', 'news-ticker-benaceur' ) );
	}

	update_option(
		'news_ticker_benaceur_glob_options',
		$sanitized_options
	);

	$new_options = $this->glob_options();

	if (
		$new_options
		&& maybe_serialize( $sanitized_options ) === maybe_serialize( $new_options )
	) {
		add_user_meta(
			get_current_user_id(),
			'news_ticker_benaceur_msg_opts_up',
			'1'
		);
	} else {
		update_option(
			'news_ticker_benaceur_glob_options',
			$old_options
		);

		add_user_meta(
			get_current_user_id(),
			'news_ticker_benaceur_error_msg_opts_up',
			'1'
		);
	}
}
/**
 * Process a settings import from a json file.
 */