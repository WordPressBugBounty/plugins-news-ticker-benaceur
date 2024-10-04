<?php
/*
 * Plugin Name: news ticker benaceur
 * Plugin URI: https://benaceur-php.com/
 * Description: This plugin allow you to display the latest posts or latest comments in a bar with twenty seven beautiful animations and effects...
 * Version: 3.3.2
 * Author: benaceur
 * Text Domain: news-ticker-benaceur
 * Domain Path: /lang
 * Author URI: https://benaceur-php.com/
 * License: GPL2
*/

    if ( ! defined( 'ABSPATH' ) ) exit;

    if (!defined('NTB_VERSION_BEN'))
	define("NTB_VERSION_BEN", "2.6.8");

    if (!defined('NS_TR_BEN')) 
	define("NS_TR_BEN", "news_ticker_benaceur");

    if (!defined('NTB_BEN_O_G')) 
	define("NTB_BEN_O_G", "options-general.php");

    if (!defined('NTB_BEN_NAME'))
    define('NTB_BEN_NAME', 'news-ticker-benaceur');

    if (!defined('NTB_BEN_FILENAME'))
    define('NTB_BEN_FILENAME', 'news-ticker-benaceur.php');

    if (!defined('NTB_BEN_BASENAME'))
    define('NTB_BEN_BASENAME', 'news-ticker-benaceur/news-ticker-benaceur.php');

    if (!defined('NTB_BEN_DIR'))
    define('NTB_BEN_DIR', WP_PLUGIN_DIR . '/news-ticker-benaceur/');

    if (!defined('NTB_BEN_URL_DIR'))
    define('NTB_BEN_URL_DIR', WP_PLUGIN_URL . '/news-ticker-benaceur');

    if (!defined('NTB_BEN_PLUGIN_DIR')) // __FILE__ = NTB_BEN_PLUGIN_DIR
    define('NTB_BEN_PLUGIN_DIR', NTB_BEN_DIR . 'news-ticker-benaceur.php');

    function wp_news_ticker_benaceur_() { 
      do_action('wp_news_ticker_benaceur');
    }


    foreach(array('global','functs','fixed') as $file) {
    require_once ("includes/{$file}.php"); // classes
	}
	
	new class______news_ticker_benaceur_fixed;
