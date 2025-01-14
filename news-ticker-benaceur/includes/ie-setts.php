<?php
   if ( ! defined( 'ABSPATH' ) ) exit;
   
   $glob_options = $this->glob_options();
/**
 * Process a settings export that generates a .json file.
 */
	
	if( !empty( $_POST['ntb_action'] ) && 'export_settings' == $_POST['ntb_action'] && wp_verify_nonce( $_POST['ntb_export_nonce'], 'ntb_export_nonce' ) ) {
    $filename = 'news-ticker-benaceur-settings_' . date("d-m-Y__H-i-s", current_time( 'timestamp' )) . '.json';
	
	nocache_headers();
	header( 'Content-Description: File Transfer' );
	header( 'Content-Type: application/json; charset=' . get_option( 'blog_charset') );
	header( 'Content-Disposition: attachment; filename=' . $filename );
	
    //$json_file = version_compare( PHP_VERSION, '5.4.0', '>=' ) ? json_encode($glob_options, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : json_encode($glob_options);
    
	/*
	PHP_VERSION 5.4.0 >= : JSON_UNESCAPED_UNICODE
	*/
	$flags = defined( 'JSON_UNESCAPED_UNICODE' ) ? JSON_UNESCAPED_UNICODE : null;

    echo wp_json_encode($glob_options, $flags);
	exit;
	}

/**
 * Process a settings import from a json file.
 */

	if( empty( $_POST['ntb_action'] ) || 'import_settings' != $_POST['ntb_action'] )
		return;
	if( ! wp_verify_nonce( $_POST['ntb_import_nonce'], 'ntb_import_nonce' ) )
		return;
	
	$import_file = $_FILES['NTB_import_file']['tmp_name'];
	if( empty( $import_file ) ) {
		wp_die( __( 'Please upload a file to import' ) );
	}
	
	$tmp = explode('.', $_FILES['NTB_import_file']['name']);
	$extension = end( $tmp );
	if( $extension != 'json' ) {
		wp_die( __( 'Please upload a valid .json file' ) );
	}
	// Retrieve the settings from the file and convert the json object to an associative array.

    $json_options = wp_json_file_decode($import_file, array( 'associative' => true ));
	
	update_option("news_ticker_benaceur_glob_options", $json_options);
	
	$get__option = $this->get_serialized_glob_options();
	
	if ( ( $get__option && is_array($json_options) && trim(maybe_serialize($json_options)) == trim($get__option) ) || apply_filters( 'ntb_filter_import_json_auth', false) ) {
	    add_user_meta( get_current_user_id(), 'news_ticker_benaceur_msg_opts_up', '1' );
	} else {
		update_option("news_ticker_benaceur_glob_options", $glob_options);
		add_user_meta( get_current_user_id(), 'news_ticker_benaceur_error_msg_opts_up', '1' );
	}

/**
 * Process a settings import from a json file.
 */