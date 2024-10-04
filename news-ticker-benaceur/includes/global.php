<?php
    if ( ! defined( 'ABSPATH' ) ) exit;

class class______news_ticker_benaceur {

    protected $no_items = false;
	protected $scriptVer = '1.0.2';
	public $adminbar32;
	public $adminbar46;

    function __construct(){
	$this->adminbar32 = $this->options_sty('adminbar_height') && is_numeric($this->options_sty('adminbar_height')) ? $this->options_sty('adminbar_height') : 32;
    $this->adminbar46 = $this->options_sty('adminbar_height_mobile') && is_numeric($this->options_sty('adminbar_height_mobile')) ? $this->options_sty('adminbar_height_mobile') : 46;
	
	add_action("admin_head-settings_page_news_ticker_benaceur", array($this, 'ntb__admin_head'));
	add_action('wp_head', array($this, 'ntb_css'));	
	add_action('wp_loaded', array($this, 'auto_code__'));
    add_action('wp_head', array($this, 'ntb_head'), 11);
    add_filter('plugin_action_links_'. NTB_BEN_BASENAME, array($this, 'action_links'));
	add_action('init', array($this, 'text_domain'));
	add_action('admin_menu', array($this, 'menu'));
	add_action('admin_init', array($this, 'options_default_up'));
	add_action('admin_init', array($this, 'register_options'));
	register_activation_hook( NTB_BEN_PLUGIN_DIR, array($this, 'plugin_activation'));
	add_shortcode('wp_news_ticker_benaceur_short_code', array($this, 'shortcode_ntb_func'));
	add_action('admin_bar_menu', array($this, 'links_on_admin_bar'), 99);
	add_action('admin_init', array($this, 'admin_notices'));
	register_deactivation_hook( NTB_BEN_PLUGIN_DIR, array($this, 'plugin_deactivation'));
    add_action('admin_init', array($this, 'reset_options'));
    add_action('wp_ntb_msg_update', array($this, 'verPlug'));
	add_action( 'admin_init', array($this, 'exp_imp'));
	
	add_action('wp_enqueue_scripts', array($this, 'scripts_'));
	if ($this->options_anim('scripts_animation') == 'bottom_news_bar')
	add_action('wp_news_ticker_benaceur_anim_scripts', array($this, 'scripts__'));
	
	add_action('admin_enqueue_scripts', array($this, 'codemirror'));
    add_action( 'wp_ajax_ntb__prefix_get_image', array($this, 'prefix_get_image') ); // Ajax action to refresh the image	
	}
	
    function ntb_disabled_or_hide() {
	if ($this->options('enable') != '1' || $this->ntb_hide() ) return true;
	if ($this->get_time_recent()) return true;
    return;
	}
	
	function auto_code__() {
		
	if (!$this->condition_auto_code() && $this->options('auto_add_ntb_not_fixed') != 'shortcode')
	add_action( apply_filters( 'ntb_filter_ntb__manualy', 'wp_news_ticker_benaceur' ), array($this, 'wp_news_ticker_benaceur___') );
	
	add_action($this->options_sty('fixed_top_bottom_site') == 'top' && $this->options_sty('fixed') || $this->options('auto_add_ntb_not_fixed') == 'top' && !$this->options_sty('fixed') ? apply_filters( 'ntb_filter_ntb__head', 'wp_head' ) : apply_filters( 'ntb_filter_ntb__footer', 'wp_footer' ), array($this, 'auto_code'));
	}

	function auto_code() {
	if ($this->condition_auto_code()) {
	return $this->wp_news_ticker_benaceur___();
	}
	}
	
	function condition_auto_code() {
	if ($this->options_sty('fixed') && $this->options_sty('auto_add_ntb_fixed') != 'no' || $this->options('auto_add_ntb_not_fixed') != 'no' && !$this->options_sty('fixed')) {
	return true;
	}
	}

    function ntb_version() {
		
    $plugin_data = get_plugin_data( NTB_BEN_PLUGIN_DIR );
    $plugin_version = $plugin_data['Version'];
    return $plugin_version;
    }
	
    function latest_version($plugin){

			if( ! function_exists( 'plugins_api' ) ) {
				include_once ABSPATH . '/wp-admin/includes/plugin-install.php'; 
			}
			$api = plugins_api( 'plugin_information', array(
			'slug' => $plugin,
			'fields' => array( 'version' => true )
			) );
			
			if( is_wp_error( $api ) ) return;
			
				return $api->version;
    }

    function action_links($links){
    $links[] = '<a href="'.get_admin_url(null, NTB_BEN_O_G.'?page='.NS_TR_BEN).'">'.__("Settings", 'news-ticker-benaceur').'</a>';
    return $links;
    }

    function text_domain() {
    load_plugin_textdomain( 'news-ticker-benaceur', false, NTB_BEN_NAME . '/lang/' );
    }
	
    function ntb_multidimensional_parse_args( &$a, $b ) {
	$a = (array) $a;
	$b = (array) $b;
	$result = $b;
	foreach ( $a as $k => &$v ) {
		if ( is_array( $v ) && isset( $result[ $k ] ) ) {
			$result[ $k ] = $this->ntb_multidimensional_parse_args( $v, $result[ $k ] );
		} else {
			$result[ $k ] = $v;
		}
	}
	return $result;
	}
  
    function ntb_parse_args($option, $get_option, $default_options) {
		$ops_merged = $this->ntb_multidimensional_parse_args($get_option, $default_options);
		return update_option($option, $ops_merged);
	}

    function menu() {
    $menu = add_options_page('news-ticker-benaceur', 'News-Ticker-Benaceur', apply_filters( 'ntb_manage_options_cap', 'manage_options' ), ''.NS_TR_BEN.'', array($this,'page_options'));
    add_action("admin_print_styles-$menu", array($this, 'js_page_panel'));
    //add_action("admin_head-$menu", array($this, 'droidkufi_ben'));
    }

    function register_options() {
    $args = array(
            'sanitize_callback' => array($this, 'settings_callback')
            );
    register_setting('news_ticker_benaceur_glob_group', 'news_ticker_benaceur_glob_options', $args);
    }
  
    function remove_from_array_2_3($option_name, $get_options, $get_key1, $Keys) {
         
        foreach ($Keys as $key) {
            if (!is_array($key))
              unset($get_options[$get_key1][$key]);
         
        }
        
        foreach ($Keys as $key => $val) {
            if (is_array($val))  {  
            foreach ($val as $k) {
              unset($get_options[$get_key1][$key][$k]);
            }
            }
        } 
    return update_option($option_name, $get_options);
	}
	 
    function unset_options_deleted() {
	$ver = get_option('news_ticker_benaceur_version');
	$option_name = 'news_ticker_benaceur_glob_options';
	
    if ( get_option('news_ticker_benaceur_glob_options') === false ) return;
		
		if ( $ver <= "2.6.5" ) {
           $this->remove_from_array_2_3($option_name, get_option('news_ticker_benaceur_glob_options'), 'global_options',  
           array(
           'textarea_height_new'
           )
           );
		   
           $this->remove_from_array_2_3($option_name, get_option('news_ticker_benaceur_glob_options'), 'anim_options',  
           array(
           'timeout_tickerntb',
           'speedin_typing_2',
           'timeout_typing_2',
           'dis_fin_img_scrollntb',
           'dis_fin_no_img_scrollntb',
           'ena_js_scrollntb',
           'width_typing__2',
           'timeout_no_scr_typ',
           'line_no_scr_typ',
           'cursor_no_scr_typ',
           'cursor_margin_l_r_no_scr_typ',
           'np_img_typing_2',
           'pause_typing_2',
           'pause_typing'
           )
           );
		   
           $this->remove_from_array_2_3($option_name, get_option('news_ticker_benaceur_glob_options'), 'style_options',  
           array(
           'padding_top_title',
           'padding_top',
           'padding_bottom',
           'min_height_mobile',
           'border_title',
           's_line_height',
           'textarea_height',
           'script_textarea_height'
           )
           );
		}
	}
	 
	// add_option / update_option
    function options_default_up() {
	$this->unset_options_deleted();
	$ver = get_option('news_ticker_benaceur_version');
	$glob = get_option('news_ticker_benaceur_glob_options');
	
    if ( $glob === false ) {
	add_option( 'news_ticker_benaceur_version', NTB_VERSION_BEN);
	add_option('news_ticker_benaceur_glob_options', $this->all_options('all'));
	
	$this->oldOptionsToDeleting();
	
    } else if ( $ver != NTB_VERSION_BEN ) {
	$this->ntb_parse_args('news_ticker_benaceur_glob_options', $glob, $this->all_options('all'));
	update_option( 'news_ticker_benaceur_version', NTB_VERSION_BEN);
    }
	
	}
	// add_option / update_option
	
     function plugin_activation(){
     if ( version_compare( get_bloginfo('version'), '3.0', '<') )  { 
        deactivate_plugins( NTB_BEN_FILENAME ); 
			die(__('<strong>Core Control:</strong> Sorry, This plugin requires WordPress 3.0+', 'core-control'));
	 } 
	 }
	 
    function js_page_panel(){
	wp_enqueue_script ('js-page-panel', plugins_url(NTB_BEN_NAME) . '/admin/js.js', array(), $this->ntb_version(), true);
	$ntb_js_params = array(
	    'code_copied' => __("Copied"),
		'wait_click' => __("Please wait...","news-ticker-benaceur"),
		'changes_saved' => __("All changes saved successfully, close this message!","news-ticker-benaceur"),
		'scrool_to' => $this->options_s('scrool_to') ? $this->options_s('scrool_to') : '',
	);
	wp_localize_script( 'js-page-panel', 'ntb_admin_js', $ntb_js_params );
	
	wp_enqueue_style( 'style-NTB', plugins_url(NTB_BEN_NAME) . '/admin/style.css', '', $this->ntb_version() );
    }

    function wp_news_ticker_benaceur___() {
	    return $this->pagePHP();
    }
	
	function shortcode_ntb_func($atts){
		ob_start();
		if ($this->options('auto_add_ntb_not_fixed') == 'shortcode' && !$this->options_sty('fixed'))
		$this->wp_news_ticker_benaceur___();
		$content = ob_get_contents();
		ob_end_clean();

	    return $content;
    }

	function pagePHP() {
	if ($this->ntb_disabled_or_hide()) return;	
    return require_once(NTB_BEN_DIR . 'news-ticker-benaceur-page.php');
    }
   
	function expt_title_text($text, $length = 0) {
		if (mb_strlen($text) > $length) {
			return mb_substr($text,0,$length) .'...';
		} else {
			return $text;
		}
	}
	
    function expt_text_without_tags($text, $length = 100, $ending = '...', $exact = true, $considerHtml = true) {
       
	   if ($considerHtml) {
       // if the plain text is shorter than the maximum length, return the whole text
       if (mb_strlen(preg_replace('/<.*?>/', '', $text)) <= $length)
       return $text;

       // splits all html-tags to scanable lines
       preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);

       $total_length = mb_strlen($ending);
       $open_tags = array();
       $truncate = '';

       foreach ($lines as $line_matchings) {
       // if there is any html-tag in this line, handle it and add it (uncounted) to the output
       if (!empty($line_matchings[1])) {
       // if it’s an “empty element” with or without xhtml-conform closing slash (f.e.)
       if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
       // if tag is a closing tag (f.e.)
       } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
       // delete tag from $open_tags list
       $pos = array_search($tag_matchings[1], $open_tags);
       if ($pos !== false) {
       unset($open_tags[$pos]);
       }
       // if tag is an opening tag (f.e. )
       } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
       // add tag to the beginning of $open_tags list
       array_unshift($open_tags, strtolower($tag_matchings[1]));
       }
       // add html-tag to $truncate’d text
       $truncate .= $line_matchings[1];
       }

       // calculate the length of the plain text part of the line; handle entities as one character
       $content_length = mb_strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
       if ($total_length+$content_length > $length) {
       // the number of characters which are left
       $left = $length - $total_length;
       $entities_length = 0;
       // search for html entities
       if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
       // calculate the real length of all entities in the legal range
       foreach ($entities[0] as $entity) {
       if ($entity[1]+1-$entities_length <= $left) {
       $left--;
       $entities_length += mb_strlen($entity[0]);
       } else {
       // no more characters left
       break;
       }
       }
       }
       $truncate .= mb_substr($line_matchings[2], 0, $left+$entities_length);
       // maximum lenght is reached, so get off the loop
       break;
       } else {
       $truncate .= $line_matchings[2];
       $total_length += $content_length;
       }

       // if the maximum length is reached, get off the loop
       if($total_length >= $length) {
       break;
       }
       }
	   
       } else {
		   
       if (mb_strlen($text) <= $length) {
       return $text;
       } else {
       $truncate = mb_substr($text, 0, $length - mb_strlen($ending));
       }
       }

       // if the words shouldn't be cut in the middle...
       if (!$exact) {
       // ...search the last occurance of a space...
       $spacepos = strrpos($truncate, ' ');
       if (isset($spacepos)) {
       // ...and cut the text in this position
       $truncate = mb_substr($truncate, 0, $spacepos);
       }
       }

       // add the defined ending to the text
       $truncate .= $ending;

       if($considerHtml) {
       // close all unclosed html-tags
       foreach ($open_tags as $tag) {
       //$truncate .= '';
	   $truncate .= '</' . $tag . '>';
       }
       }

        return $truncate;

    }

    function ntb_hide() {
  
    if ($this->options('enable') != '1') return;
	   
    $action_hide = $hide = false;
    $ntb_in_page_id_arr = array_filter(array_unique(array_map('trim',explode(',', $this->options('in_page_id'))))); 
    $ntb_in_single_id_arr = array_filter(array_unique(array_map('trim',explode(',', $this->options('in_single_id')))));

    $is_single = (is_single() && $this->options('in_single_id') == '');
    $is_page_id = (is_page($ntb_in_page_id_arr) && !is_front_page());
    $is_page = (is_page() && !is_front_page() && $this->options('in_page_id') == '');
    $home = (is_home() || is_front_page());

	if ($this->options('in_home') && $home || 
	$this->options('in_category') && is_category() || 
	$this->options('in_author') && is_author() || 
	$this->options('in_search') && is_search() || 
	$this->options('in_single') && is_single($ntb_in_single_id_arr) || $this->options('in_single') && $is_single || 
	$this->options('in_page') && $is_page_id || $this->options('in_page') && $is_page) 
	{
	$action_hide = true;
	}
	
	if (
	($this->options('hide_or_noHide_in') == 'hide' && $action_hide ||  
	$this->options('hide_or_noHide_in') == 'show' && !$action_hide) &&
	$this->options('hide_or_noHide_in') != 'disable_this_option')
	{
	$hide = true;	
	}
	
	if (($this->options('for_all_expt_admin') && !current_user_can( 'administrator' )) ||
		$this->visitors_ntb() || $this->all_users_ntb() || $this->role_cap_ntb() || $this->id_user_ntb() ||
		apply_filters( 'benresstudents_filter_hide__ntb', false ) ||
		$hide
	) 
	{
	return true;
	}
	
	return;
    }
	
	function scripts__() {
	echo '<script src="' . plugins_url(NTB_BEN_NAME) . '/style-anim/inc/scripts_1-0-3.js?ver='. $this->scriptVer .'" id="ntb_js-anims-js"></script>';
	}

    function scripts_() {
	
	if ($this->ntb_disabled_or_hide()) return;
	
	$rtl = (is_rtl() && $this->options('dir') != 'ltr' || !is_rtl() && $this->options('dir') == 'rtl') ? true : false ;		
    $bor = $this->options_sty('border_top') + $this->options_sty('border_bottom');
	
    if ($this->options_sty('border_top') > $this->options_sty('border_bottom')) {
    $bor_ticker = $bor > 0 ? $bor + 1 : $bor;	
    $bor_li = $bor > 0 ? $bor + 1 : $bor;
    $bor__pn = $bor > 0 ? $bor + 3 : 3;
    $bor_scroll = $bor > 0 ? $bor + 2 : $bor+1;
    } else {
    $bor_ticker = $bor > 0 ? $bor - 1 : $bor;	
    $bor_li = $bor > 0 ? $bor - 1 : $bor;
    $bor__pn = $bor > 0 ? $bor + 1 : 3;
    $bor_scroll = $bor > 0 ? $bor + 2 : $bor+2;
    }
	
    $titleText_tp1 = '';
    if ($this->options("title_ltr") != '' && !is_rtl()) { $titleText_tp1 = $this->options("title_ltr"); } elseif ($this->options("title_rtl") != '' && is_rtl()) { $titleText_tp1 = $this->options("title_rtl"); } else { if (!is_rtl()) { $titleText_tp1 = 'Latest news'; } else { $titleText_tp1 = 'آخر الأخبار'; } }

    $direction_tp1 = '';
    if ($this->options('dir') == 'auto') { if (is_rtl()) {$direction_tp1 = 'rtl';} else {$direction_tp1 = 'ltr';} } elseif ($this->options('dir') == 'ltr') {$direction_tp1 = 'ltr';} elseif ($this->options('dir') == 'rtl') {$direction_tp1 = 'rtl';}
	
    $anim_two__if = array('fade','fadeZoom','turnDown','turnUp','curtainX','curtainY','scrollLeft','scrollRight','blindZ');
	
	// pas encore utilisé
		wp_register_script ('ntb_js_into_anims', null, array('jquery'), $this->scriptVer, false);
	
	    $params_into = array(
	        //'exemple' => '1'
		);
		wp_localize_script( 'ntb_js_into_anims', 'ntb_i_ls', $params_into );
		wp_enqueue_script( 'ntb_js_into_anims' );
	// pas encore utilisé
	
		if ($this->options_anim('scripts_animation') == 'footer') {
		wp_register_script ('ntb_js-anims', plugins_url(NTB_BEN_NAME) . '/style-anim/inc/scripts_1-0-3.js', array('jquery'), $this->scriptVer, true);
		} else {
		wp_register_script ('ntb_js-anims', null, array('jquery'), $this->scriptVer, false);
		}
	
	    $params = array(
	        'animation'               => $this->options_anim('animation'),
	        'next'                    => __('next','news-ticker-benaceur'),
	        'prev'                    => __('prev','news-ticker-benaceur'),
	        'screen_min_width'        => $this->options_sty('screen_min_width'),
	        'height'                  => $this->options_sty('height'),
	        'line_height'             => $this->options_sty('line_height'),
	        'height_mobile'           => $this->options_sty('height_mobile'),
			'line_height_mobile'      => $this->options_sty('line_height_mobile'),
			'enable_style_mobile'     => $this->options_sty('enable_style_mobile'),
			'is_ntb_rtl'              => $this->is_ntb_rtl(),
			'ntb_f_interval_ie8'      => apply_filters( 'ntb_filter_interval_ie8', 7000 ),
			'autostart_typ1'          => $this->options_anim('autostart_typ1'),
			'pause__typing'           => $this->options_anim('pause__typing'),
	        'mouse'                   => $this->options_anim('pause_scrollntb') ? true : false,
			'ori_scr'                 => ($this->options('dir') == 'auto' && is_rtl() || $this->options('dir') == 'rtl') ? 'left' : 'right',
	        'speed_scr'               => $this->options_anim('speed_scrollntb_'),
			'isrtl'                   => $rtl,
	        'rtl'                     => $this->is_ntb_rtl() ? 'right' : 'left',
			'top_600'                 => $this->fixed_top_600_script(),
			'arr_s_script'            => array_filter(array_unique(array_map('trim',explode(PHP_EOL, $this->options_sty('s_script'))))) ? true : false,
			's_script'                => $this->options_sty('s_script'),
	        'rtl_'                    => $rtl ? 'right' : 'left',
	        'ocf'                     => $rtl ? 'opts.cssFirst.right' : 'opts.cssFirst.left',
	        'ocb'                     => $rtl ? 'opts.cssBefore.right' : 'opts.cssBefore.left',
	        'oai'                     => $rtl ? 'opts.animIn.right' : 'opts.animIn.left',
	        'oao'                     => $rtl ? 'opts.animOut.right' : 'opts.animOut.left',
	        'bor'                     => $this->options_sty('border_top') + $this->options_sty('border_bottom'),
	        'bor__'                   => $bor > 0 ? $bor + 1 : $bor,
			'bor_'                    => $bor > 0 ? $bor - 1 : $bor,
			'bor_ticker'              => $bor_ticker,
			'bor_li'                  => $bor_li,
			'bor__pn'                 => $bor__pn,
			'bor_scroll'              => $bor_scroll,
			'is_two'                  => $this->is_two(),
			'np_img_anms_two'         => $this->options_anim('np_img_anms_two'),
			'disable_title'           => $this->options('disable_title'),
			'width_title_background'  => $this->options_sty('width_title_background'),
			'speed_anms_two'          => $this->options_anim('speed_anms_two'),
			'autostart_animtwo'       => $this->options_anim('autostart_animtwo'),
			'timeout_anms_two'        => $this->options_anim('timeout_anms_two'),
			'pause_anms_two'          => $this->options_anim('pause_anms_two'),
			'anim_two__if'            => in_array($this->options_anim('animation'), $anim_two__if) ? true : false,
			'pause_fadein'            => $this->options_anim('pause_fadein'),
			'autostart_fadein'        => $this->options_anim('autostart_fadein'),
			'timeout_fadein'          => $this->options_anim('timeout_fadein'),
			'speed_slide_up_down'     => $this->options_anim('speed_slide_up_down'),
			'updown_slide_up_down'    => $this->options_anim('updown_slide_up_down'),
			'autostart_slide_up_down' => $this->options_anim('autostart_slide_up_down'),
			'timeout_slide_up_down'   => $this->options_anim('timeout_slide_up_down'),
			'pause_slide_up_down'     => $this->options_anim('pause_slide_up_down'),
			'titletext_tp1'           => $titleText_tp1,
			'direction_tp1'           => $direction_tp1,
			'speed_no_scr_typ'        => $this->options_anim('speed_no_scr_typ'),
			'pause_on_items_tp1'      => apply_filters( 'ntb_filter_pause_on_items', 2000 ),
			'np_img_no_scr_typ'       => $this->options_anim('np_img_no_scr_typ'),
			'typ1_margin_mobile'      => apply_filters( 'ntb_filter_typ1_margin_mobile', 15 ),
			'hide_ntb'                => $this->options_hi('hide'),
			'ellipsis'                => apply_filters( 'ntb_filter_enable_ellipsis', true ),
		);
		wp_localize_script( 'ntb_js-anims', 'ntb_anims', $params );
		wp_enqueue_script( 'ntb_js-anims' );
    }
	
	function is_two() {
	$array_anim_two = array('ScrollNTB','Scroll_Up_NTB','fadein','TickerNTB');	
	if ( !in_array($this->options_anim('animation'), $array_anim_two) )
    return true;		
	}

	function get_settings() {

		$settings = array( 
			'rolexcap_ntb' => (array) $this->options('for_role_x')
		);

		$settings[ 'rolexcap_ntb' ] = array_map( 'trim', array_unique( array_filter( $settings[ 'rolexcap_ntb' ] ) ) );
		
		return $settings;
		
	}

    function id_user_ntb() {

	$current_user = wp_get_current_user();
	$user_id = get_current_user_id();
	
	$iduser_ntb = array_filter(array_unique(array_map('trim',explode(',', $this->options('for_user_id')))));
	
	    if($this->options('for_user_id') && in_array($user_id, $iduser_ntb) && is_user_logged_in())
		return true;
	  	return false;
    }

    function role_cap_ntb() {

        $settings = $this->get_settings();	
		$rolexcap_ntb = $settings[ 'rolexcap_ntb' ];
		
		if ( $rolexcap_ntb != '' ) {
			if ( !is_array( $rolexcap_ntb ) )
			$rolexcap_ntb = array( $rolexcap_ntb );

			foreach ( $rolexcap_ntb as $role ) {
			    if ( current_user_can( $role ) && is_user_logged_in() )
				return true;
		    }
	    }
	
	return false;
    }

    function all_users_ntb() {
		
	if ($this->options('for_users') && is_user_logged_in())
	return true;
	return false;
    }

    function visitors_ntb() {
		
	if ($this->options('for_visitors') && !is_user_logged_in())
	return true;
	return false;
    }

    function links_on_admin_bar($wp_admin_bar) {

    if (current_user_can( 'manage_options' ) && $this->options('links_admin_bar_front') && !is_admin() && $this->options('enable') == '1') {
    if ($this->options('links_admin_bar_menu') == 'menu') {
    $wp_admin_bar->add_menu( array( 'id' => 'PLB_ntb5', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/'.NTB_BEN_O_G.'?page=news_ticker_benaceur' ) ) );
    } elseif ($this->options('links_admin_bar_menu') == 'submenu' ) { 
    $wp_admin_bar->add_menu( array( 'parent' => 'appearance', 'id' => 'PLB_ntb6', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/'.NTB_BEN_O_G.'?page=news_ticker_benaceur' ) ) );
    }
	} elseif (current_user_can( 'manage_options' ) && $this->options('links_admin_bar_admin') && is_admin() && $this->options('enable') == '1')  {
    if ($this->options('links_admin_bar_menu') == 'menu') {
    $wp_admin_bar->add_menu( array( 'id' => 'PLB_ntb7', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/'.NTB_BEN_O_G.'?page=news_ticker_benaceur' ) ) );
    } elseif ($this->options('links_admin_bar_menu') == 'submenu') { 
    $wp_admin_bar->add_menu( array( 'parent' => 'site-name', 'id' => 'PLB_ntb8', 'title' => __('News Ticker Benaceur'), 'href' => admin_url('/'.NTB_BEN_O_G.'?page=news_ticker_benaceur' ) ) );
    }
	}	
    }

    function admin_notices() {
    $ntb_notice_admin = false;
    if ( $ntb_notice_admin && $GLOBALS['pagenow'] == NTB_BEN_O_G && isset($_GET['page']) && $_GET['page'] == NS_TR_BEN ) {
    require_once ('notices-ntb.php');
    }
	}

    function page_options() {
    return require_once (NTB_BEN_DIR . 'opts-page.php');
	}

    function plugin_deactivation() {
    global $wpdb;
	$NTB_sht_code = "[wp_news_ticker_benaceur_short_code]";


    if ( $this->options_oth('delete_all_options') == 'delete') {
    delete_option('news_ticker_benaceur_glob_options');	   
	delete_option( 'news_ticker_benaceur_version');
    }

	if ( $this->options_oth('remove_short_code') == 'remove') {
    $wpdb->get_results( "UPDATE $wpdb->posts SET post_content = replace(post_content, '$NTB_sht_code', '') " );
    if ( $this->options_oth('delete_all_options') != 'delete') {
	$opts = get_option('news_ticker_benaceur_glob_options');
	$opts['other_options']['remove_short_code'] = 'not_remove';
	update_option('news_ticker_benaceur_glob_options', $opts);
	}
    }
  
    }
  
  function reset_options() {
  //$nonce = isset($_REQUEST['_wpnonce']) ? esc_attr( $_REQUEST['_wpnonce'] ) : '';
  //if (!wp_verify_nonce( $nonce, 'nonce_ntb_group_sty_reset' )) return;
  
  $glob = get_option('news_ticker_benaceur_glob_options');

// reset group
   if ( isset($_GET['settings-updated']) && $this->options_s('reset') == 'reset_glob' ) {
   $global_options = $glob; 
   $global_options['global_options'] = $this->all_options('global_options');
   $global_options['reset'] = 'submit';
   update_option('news_ticker_benaceur_glob_options', $global_options);
   }
// reset group

// reset group anim 
   if ( isset($_GET['settings-updated']) && $this->options_s('reset') == 'reset_anim' ) {
   $anim_options = $glob; 
   $anim_options['anim_options'] = $this->all_options('anim_options');
   $anim_options['reset'] = 'submit';
   update_option('news_ticker_benaceur_glob_options', $anim_options);
   }
// reset group anim

// reset group sty
   if ( isset($_GET['settings-updated']) && $this->options_s('reset') == 'reset_sty' ) {
   $style_options = $glob; 
   $style_options['style_options'] = $this->all_options('style_options');
   $style_options['reset'] = 'submit';
   update_option('news_ticker_benaceur_glob_options', $style_options);
   }
// reset group sty

// reset all
   if ( isset($_GET['settings-updated']) && $this->options_s('reset') == 'reset_all' ) {
   update_option('news_ticker_benaceur_glob_options', $this->all_options('all'));
   update_option( 'news_ticker_benaceur_version', NTB_VERSION_BEN);
   }
// reset all

   }
  
    function settings_callback($posted_options) {
	
	$_POST = stripslashes_deep($_POST); // prevent adding a slash if the field contains a quote when $_POST is isset
	$_COOKIE = stripslashes_deep($_COOKIE); // prevent adding a slash if the field contains a quote when $_COOKIE is isset
	
	// Prevent saving all parameters except "global_options" when "submit_global" posted.	
    if (isset( $_POST['submit_global'] )) {
		
	if ($posted_options['global_options']['hide_after_time']['update_manually_date'] == 'yes') {
	$posted_options['global_options']['hide_after_time']['manually_date'] = current_time( 'mysql' );
    } else {
	$posted_options['global_options']['hide_after_time']['manually_date'] = $this->options_hi('manually_date');
	}
	$posted_options['global_options']['hide_after_time']['update_manually_date'] = 'no';
	
	$global_options = $posted_options;
	$posted_options = get_option('news_ticker_benaceur_glob_options');
	$posted_options['global_options'] = $global_options['global_options'];
	$posted_options['scrool_to'] = 'glob_options';
    }
	// Prevent saving all parameters except "anim_options" when "submit_animation" posted.	
    else if (isset( $_POST['submit_animation'] )) {
	$anim_options = $posted_options;
	$posted_options = get_option('news_ticker_benaceur_glob_options');
	$posted_options['anim_options'] = $anim_options['anim_options'];
	$posted_options['scrool_to'] = 'anim_options';
    }
	// Prevent saving all parameters except "image_att_scrollntb" when "reset_image_selector_ntb" posted.	
    else if (isset( $_POST['reset_image_selector_ntb'] )) {
	$posted_options = get_option('news_ticker_benaceur_glob_options');
	$posted_options['anim_options']['image_att_scrollntb'] = '0';
	$posted_options['scrool_to'] = 'anim_options';
    }
	// Prevent saving all parameters except "style_options" when "submit_style" posted.	
    else if (isset( $_POST['submit_style'] )) {
	$style_options = $posted_options;
	$posted_options = get_option('news_ticker_benaceur_glob_options');
	$posted_options['style_options'] = $style_options['style_options'];
	$posted_options['scrool_to'] = 'sty_options';
    }
	// Prevent saving all parameters except "other_options" and "reset" when "submit_others" posted.	
    else if (isset( $_POST['submit_others'] )) {
	$other_options = $posted_options;
	$posted_options = get_option('news_ticker_benaceur_glob_options');
	$posted_options['other_options'] = $other_options['other_options'];
	$posted_options['reset'] = $other_options['reset'];
	$posted_options['scrool_to'] = 'oth_options';
    }
    else if (isset( $_POST['submit__ntb_all'] )) {
		
	if ($posted_options['global_options']['hide_after_time']['update_manually_date'] == 'yes') {
	$posted_options['global_options']['hide_after_time']['manually_date'] = current_time( 'mysql' );
    } else {
	$posted_options['global_options']['hide_after_time']['manually_date'] = $this->options_hi('manually_date');
	}
	$posted_options['global_options']['hide_after_time']['update_manually_date'] = 'no';
	
	} else if (!empty($_POST)) {
	$posted_options = get_option('news_ticker_benaceur_glob_options');
	}		
	
	// sécuriser les options (les values) avant de les sauveguarder avec wp_kses_post()
	    $output = array();
		foreach($posted_options as $key => $value) {
			//if ($key == 'reset') continue;
			if (is_array($posted_options[$key])) { // global_options,anim_options,style_options,other_options
			$output2 = $posted_options[$key];
			foreach((array)$output2 as $key2 => $value2) {
			    foreach((array)$value2 as $key3 => $value3) {
					if (is_array($value2)) {
					$output[$key][$key2][$key3] = is_array($value3) ? $value3 : (trim($value3) == '' ? $value3 : wp_kses_post( $value3 ) );
					} else {
					$output[$key][$key2] = is_array($value2) ? $value2 : (trim($value2) == '' ? $value2 : wp_kses_post( $value2 ) );
					}
				}
		    }
            } else { // reset,scrool_to
			$output[$key] = trim($value) == '' ? $value : wp_kses_post( $value );
			}
		}
		
	$posted_options = $output;
	// sécuriser les options (les values) avant de les sauveguarder avec wp_kses_post()
	
	return $posted_options;
    }
	
    function right_left() {
	return ($this->options('dir') == 'auto' && is_rtl() || $this->options('dir') == 'rtl') ? "right" : "left";
	}
	
    function left_right() {
	return ($this->options('dir') == 'auto' && is_rtl() || $this->options('dir') == 'rtl') ? "left" : "right";
	}
	
    function rtl_left_right() {
	return is_rtl() ? "left" : "right";
	}
	
    function rtl_right_left() {
	return is_rtl() ? "right" : "left";
	}

    function is_ntb_rtl() {
	return (is_rtl() && $this->options('dir') != 'ltr' || !is_rtl() && $this->options('dir') == 'rtl') ? true : false ;
	}

    function msg_update_func() {
        do_action('wp_ntb_msg_update');
    }
	
	function codemirror($hook) {
        if ( 'settings_page_news_ticker_benaceur' != $hook ) return;
  
        wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
        //$settings['codeEditor'] = wp_enqueue_code_editor(array('type' => 'text/css'));
        //wp_localize_script('jquery', 'ntb_settings', $settings);
 
        wp_enqueue_script('ntb-codemirror-editor-js');
        wp_enqueue_style('ntb-codemirror-editor-css');
    }
	
    function prefix_get_image() {
    if(isset($_GET['id']) ){
        $image = wp_get_attachment_image( filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT ), array('75', '60'), false, array( 'id' => 'ntb__prefix-preview-image' ) );
        $data = array(
            'image'    => $image,
        );
        wp_send_json_success( $data );
    } else {
        wp_send_json_error();
    }
    }

    function verPlug(){
		
	if ( $this->is_php_8_1_wpcore() ) return;	
    
    // $update_plugins = get_site_transient('update_plugins');
    // if ( isset( $update_plugins->response[ NTB_BEN_BASENAME ] ) ) { 
			
    $url = wp_nonce_url(self_admin_url('update.php?action=upgrade-plugin&plugin=' . NTB_BEN_BASENAME), 'upgrade-plugin_' . NTB_BEN_BASENAME);
    if ($this->ntb_version() < $this->latest_version("news-ticker-benaceur")) {
	printf('<div style="display:none;" class="ntb-mm4111172p">
	<div class="ntb-mm411112"><div id="ntb-mm411112-divtoBlink">%1$s %2$s, %3$s <a href="%4$s">%5$s</a>.</div></div>
    
    <script>
    (function($) {
    $(".ntb-mm4111172p").delay(400).slideToggle("slow");
    })(jQuery); 
    </script>
	</div>',
	__("You are using Version",'news-ticker-benaceur'),
	$this->ntb_version(),
	__("There is a newer version, it's recommended to",'news-ticker-benaceur'),
	$url,
	__("update now",'news-ticker-benaceur'));
    }
    // } 
    }

    function exp_imp() {
    require_once ('ie-setts.php');
	}
	
	function droidkufi_ben() {
		return sprintf( '
        <style>
		@font-face {
        font-family: DroidKufi_Ben;
        src: url(%1$s/font/DroidKufi-Regular.eot);
        src: url(%1$s/font/DroidKufi-Regular.eot?#iefix) format("embedded-opentype"),
        url(%1$s/font/droidkufi-regular.ttf) format("truetype"),
		url(%1$s/font/droidkufi-regular.woff2) format("woff2"),
	    url(%1$s/font/droidkufi-regular.woff) format("woff");
        }
        </style>
		', NTB_BEN_URL_DIR );
    }
	
    function ntb__admin_head() {
		echo $this->droidkufi_ben();
    }
	
    function ntb_head() {
	if ($this->ntb_disabled_or_hide()) return;
	
	$height = $this->options_sty('height');
	$height_ = $height + $this->adminbar32;
	$height_mobile = $this->options_sty('enable_style_mobile') ? $this->options_sty('height_mobile') : $height;
	$height_mobile_ = $height_mobile + $this->adminbar46;
	$max_width = $this->options_sty('screen_max_width') && $this->options_sty('enable_style_mobile') ? $this->options_sty('screen_max_width') : 782;
	$min_width = $this->options_sty('screen_min_width') && $this->options_sty('enable_style_mobile') ? $this->options_sty('screen_min_width') : 783;
	$ori = is_rtl() ? 'right' : 'left';
	$theme = wp_get_theme();
	$and = is_admin_bar_showing() || $this->options_sty('disable_fixed_600_for_top') ? 'and (min-width: 600px)' : '';
	
    echo '<style>';
	
	if ($this->options_sty('fixed') && $this->options_sty('fixed_top_bottom_site') == 'top') {
		
	$adminbar1 = is_admin_bar_showing() ? "
	@media only screen and (min-width: {$min_width}px) {
	    html {margin-top: {$height_}px !important;}
	}
	@media screen and (max-width: {$max_width}px) {$and} {
		html {margin-top: {$height_mobile_}px !important;}
	}
	" : "
	@media only screen and (min-width: {$min_width}px) {
	    html {margin-top: {$height}px !important;}
	}
	@media screen and (max-width: {$max_width}px) {$and} {
		html {margin-top: {$height_mobile}px !important;}
	}
	";
	echo $adminbar1;
	
	if ( $theme->name == 'Twenty Fourteen' ) {
	$adminbar_top = is_admin_bar_showing() ? '
	@media screen and (min-width: 783px) {
	    .admin-bar .n_t_ntb_b, .admin-bar .news-ticker-ntb, .admin-bar .news_ticker_ntb_ie8 {top: 80px;} 
	}
	' : '
	@media screen and (min-width: 783px) {
	    .n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {top: 48px;} 
	}
	';
	echo $adminbar_top;
	}
	
	}		
	
	if (!$this->options_sty('fixed') && $this->options('personalize_not_fixed') == 'customed') {
		
	if (in_array($this->options('auto_add_ntb_not_fixed'), array('top','bottom'))) {
		$z = $theme->name != 'Twenty Sixteen' ? '4' : '101';
		echo "
        .n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {
        position: absolute !important;
		$ori:0;
		z-index: $z;
        }
	    ";
	}
	if ($this->options('auto_add_ntb_not_fixed') == 'top') {
		
	$adminbar = is_admin_bar_showing() ? "
	.n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {top: {$this->adminbar32}px;} 
	html {margin-top: {$height_}px !important;}
	@media screen and (max-width: {$max_width}px) {
	    .n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {top: {$this->adminbar46}px;} 
		html {margin-top: {$height_mobile_}px !important;}
	}
	" : "
	.n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {top: 0px;}
	html {margin-top: {$height}px !important;} 
	@media screen and (max-width: {$max_width}px) {
		html {margin-top: {$height_mobile}px !important;}
	}
	";
	echo $adminbar;
	
	if ( $theme->name == 'Twenty Fourteen' )
	echo '@media screen and (min-width: 783px) {.n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {margin-top:48px;}}';
	}
	
	}
	
	echo '</style>';
	
	//if (apply_filters( 'ntb_filter_hide_ntb_ul', true ))
	//echo '<style>.news-ticker-ntb ul, .n_t_ntb_b ul {display:none;}</style>';
	
	}
	
	function ntb_css() {

	if ($this->ntb_disabled_or_hide()) return;	
		
    $s_style = array_filter(array_unique(array_map('trim',explode(PHP_EOL, $this->options_sty('s_style')))));
    $bor = $this->options_sty('border_top') + $this->options_sty('border_bottom');
    $bor__ = $bor > 0 ? $bor + 1 : $bor;
    $bor_ = $bor > 0 ? $bor - 1 : $bor;

    if ($this->options_sty('border_top') > $this->options_sty('border_bottom')) {
        $bor_ticker = $bor > 0 ? $bor + 1 : $bor;	
        $bor_li = $bor > 0 ? $bor + 1 : $bor;
        $bor__pn = $bor > 0 ? $bor + 3 : 3;
        $bor_scroll = $bor > 0 ? $bor + 5 : $bor+1;
    } else {
        $bor_ticker = $bor > 0 ? $bor - 1 : $bor;	
        $bor_li = $bor > 0 ? $bor - 1 : $bor;
        $bor__pn = $bor > 0 ? $bor + 1 : 3;
        $bor_scroll = $bor > 0 ? $bor + 1 : $bor+2;
    }
    $bor_t = $bor + $this->options_sty('border_top_title') + $this->options_sty('border_bottom_title');

    $f_ntb_color_border = apply_filters( 'ntb_f_color_border', $this->options_sty('color_border') );
    $f_ntb_color_back_title = apply_filters( 'ntb_f_color_back_title', $this->options_sty('color_back_title') );
    $f_ntb_color_text_title = apply_filters( 'ntb_f_color_text_title', $this->options_sty('color_text_title') );
    $f_ntb_color_text_back = apply_filters( 'ntb_f_color_text_back', $this->options_sty('color_text_back') );
	
	$fixed_class_for_top = $this->options_sty('fixed_class_for_top') == '' ? '.ntb_add_class_to_wp_body_footer' : $this->options_sty('fixed_class_for_top');
	$fixed_class_for_bottom = $this->options_sty('fixed_class_for_bottom') == '' ? '.ntb_add_class_to_wp_body_footer' : $this->options_sty('fixed_class_for_bottom');
	
	    $rtl = $this->is_ntb_rtl();		
	    $rtl_ = $rtl ? 'right' : 'left' ;
	
    if ($this->options_anim('animation') != 'ScrollNTB') {
	    $li1 = '<li>';
	    $li2 = '</li>';
	} else {
		$li1 = '<span class="n_t_ntb_bimg"><span><span class="ntb_img_post_t_scrollntb"></span></span><span>';
        $li2 = '</span></span>';
		$ori = $this->right_left();
	}
		
    if ( !$this->options_sty('disable_this_font') ) echo $this->droidkufi_ben();
	 	
	echo "<style>#ntbne_five, #ntbne_five_ie8, #ntbne2, #scroll-ntb {display: none;}</style>";
			
            switch ($this->options_anim('animation')) {
			
			  case 'ScrollNTB':
			    include_once (NTB_BEN_DIR . 'style-anim/scrollntb.php');
			    break;
			  case 'Scroll_Up_NTB':
			    include_once (NTB_BEN_DIR . 'style-anim/no-scrollntb-scroll_up.php');
			    break;
			  case 'fadein':
			    include_once (NTB_BEN_DIR . 'style-anim/no-scrollntb-fadeIn.php');
			    break;
			  case 'TickerNTB':
			    include_once (NTB_BEN_DIR . 'style-anim/no-scrollntb-Ti.php');
			    break;
				
			  default:
               	include_once (NTB_BEN_DIR . 'style-anim/no-scrollntb-two.php');
				
			}
		
	include_once (NTB_BEN_DIR . 'style-anim/style-common.php');
	
	echo $this->fixed_top_bottom_site();
	
    if ($this->options_sty('disable_in_screen_max_width')) {
	echo "<style>
    @media only screen and (max-width: {$this->options_sty('v_screen_max_width')}px) {
	  .news-ticker-ntb, .n_t_ntb_b, .news_ticker_ntb_ie8 {
		  display:none;
	  }
	{$fixed_class_for_top} {margin-top:0px;}
	{$fixed_class_for_bottom} {{$this->height_marginBottom()}:0px;}
    }
	</style>";
	}
	
	echo "<style>#ntbne_five, #ntbne_five_ie8, #scroll-ntb {display: inherit;}</style>";

	if ($this->options_hi('hide') == 'hide_jquery') { // hide after time with jquery

	$height = $this->adminbar32;
	$height_mobile = $this->adminbar46;
	$max_width = $this->options_sty('screen_max_width') && $this->options_sty('enable_style_mobile') ? $this->options_sty('screen_max_width') : 782;
	$min_width = $this->options_sty('screen_min_width') && $this->options_sty('enable_style_mobile') ? $this->options_sty('screen_min_width') : 783;

	$adminbar = is_admin_bar_showing() ? "
	@media only screen and (min-width: {$min_width}px) {
	    .ntb_class_hideTop {margin-top: {$height}px !important;}
	}
	@media screen and (max-width: {$max_width}px) {
		.ntb_class_hideTop {margin-top: {$height_mobile}px !important;}
	}
	" : "
	.ntb_class_hideTop {margin-top: initial !important;}
	";
	
	if ($this->is_ntb_top_site())
	echo "<style>$adminbar</style>";
	?>
    <script type="text/javascript">	
    // hide ticker after delay
    jQuery(document).ready( function($) {
    setTimeout(function() {
       $('.news-ticker-ntb,.n_t_ntb_b').fadeOut("slow");
	   /*
		var newid = 'ntb_class_hideTop';	
		var id = $('html').attr('id');
		var idAttrExists = $('html').get(0).hasAttribute('id');
		var _id = idAttrExists == true ? (id + ' ' + newid) : newid;
        $('html').attr('id', _id);
		*/
	   $("html").addClass('ntb_class_hideTop');
	   //var height = $('#wpadminbar').outerHeight();
	   //$("html").attr({"style": "margin-top: " + height + "px !important"});
	   
	   <?php if ($this->options_sty('fixed_top_bottom_site') == 'top') { ?>
	   $(<?php echo "'{$fixed_class_for_top}'"; ?>).css("margin-top", '0px');
	   <?php } else { ?>
	   $(<?php echo "'{$fixed_class_for_bottom}'"; ?>).css({<?php echo "'{$this->height_marginBottom()}'"; ?>: '0px', 'display' : 'none'});
	   <?php } ?>
    }, <?php echo $this->get_time_recent(true); ?> );
    });
    // hide ticker after delay
    </script>
    <?php
	}

	if ($s_style)
	echo "<style>{$this->options_sty('s_style')}</style>";
	}

}
