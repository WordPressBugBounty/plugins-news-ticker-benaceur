<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

    delete_option('news_ticker_benaceur_glob_options');
    delete_option('news_ticker_benaceur_version');