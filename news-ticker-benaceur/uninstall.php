<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('news_ticker_benaceur_glob_options');
delete_option('news_ticker_benaceur_version');
delete_option('news_ticker_benaceur_posts_cache_generation');
delete_option('news_ticker_benaceur_comments_cache_generation');
delete_option('news_ticker_benaceur_posts_cache_marker');
delete_option('news_ticker_benaceur_comments_cache_marker');
delete_metadata( 'user', 0, 'news_ticker_benaceur_msg_opts_up', '', true );
delete_metadata( 'user', 0, 'news_ticker_benaceur_error_msg_opts_up', '', true );
wp_cache_delete( 'news_ticker_benaceur_comment_date_cache_time_hide' );
delete_metadata( 'comment', 0, 'news_ticker_benaceur_comment_date_time_hide', '', true );
