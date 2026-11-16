<?php
    if ( ! defined( 'ABSPATH' ) ) exit;

class class______news_ticker_benaceur_functs extends class______news_ticker_benaceur {
	
	function glob_options() {
		return get_option( 'news_ticker_benaceur_glob_options' );
	}

	function all__options() {
	return array (
	'global_options' => array (
	    'enable' => '1',
	    'for_visitors' => '',
	    'links_admin_bar_front' => '',
	    'links_admin_bar_admin' => '',
	    'for_users' => '',
	    'for_role_x' => '',
	    'for_user_id' => '',
	    'for_cat_tax' => 'category',
	    'for_cat' => '',
		'for_all_expt_admin' => '',
	    'in_home' => '',
	    'in_single' => '',
	    'in_page' => '',
	    'in_category' => '',
	    'in_author' => '',
	    'in_search' => '',
	    'in_page_id' => '',
	    'in_single_id' => '',
	    'disable_title' => '',
	    'title_pulsate' => '',
	    'title_styles' => '',
	    'title_ltr' => 'Latest news',
	    'title_rtl' => 'آخر الأخبار',
	    'links_admin_bar_menu' => 'menu',
		'personalize_not_fixed' => 'customed',
	    'dir' => 'auto',
	    'num_posts' => '10',
	    'latest_p_c' => 'latest_posts',
		'cache_p_c' => 'disabled',
	    'include_exclude_id' => 'exclude_id',
	    'expt_txt_title' => '100',
	    'expt_txt_comment' => '100',
	    'expt_txt_manually_news' => '100',
	    'post_type' => array('post'),
	    'post_status' => 'publish',
	    'comment_status' => 'approve',
	    'title_styles_topleft_lef' => '0',
	    'title_styles_topright_lef' => '34',
	    'title_styles_topleft_ri' => '34',
	    'title_styles_topright_ri' => '0',
	    'title_styles_bottomright' => '0',
	    'title_styles_bottomleft' => '0',
		'txt_news_manually' => '',
		'hide_or_noHide_in' => 'disable_this_option',
		'hide_after_time' => array(
		     'hide' => 'disable_this_option',
			 'time_ago' => '',
			 'ago_in_seconds' => 'days',
			 'time_latest' => '',
			 'latest_in_seconds' => 'minute',
			 'manually_date' => current_time( 'mysql' ),
			 'update_manually_date' => 'no',
			 ),
		'empty_txt_news_manually' => '',
		'hide_if_noItems' => '',
		'txt_noItems' => '',
		'auto_add_ntb_not_fixed' => 'no',
	),
	'anim_options' => array (
	    'autostart_slide_up_down' => '',
	    'autostart_fadein' => '',
		'autostart_typ1' => '',
		'autostart_animtwo' => '',
	    'animation' => 'fadein',
	    'speed_anms_two' => '1000',
	    'timeout_anms_two' => '4000',
	    'speed_scrollntb_' => '5',
	    'pause_scrollntb' => '1',
	    'expt_title_scrollntb' => '28',
	    'all_scrollntb' => '1',
	    'disa_img_n_scrollup' => 'enable_img_n_scrollup',
	    'disa_img_n_fadein' => 'enable_img_n_fadein',
	    'timeout_slide_up_down' => '4000',
	    'speed_slide_up_down' => '450',
	    'updown_slide_up_down' => 'up_slide_u_d',
	    'timeout_fadein' => '4000',
	    'width_anms__two' => '5',
	    'speed_no_scr_typ' => '12',
	    'margin_top_no_scr_typ' => '0',
	    'margin_left_ltr_no_scr_typ' => '5',
	    'margin_right_ltr_no_scr_typ' => '5',
	    'np_img_no_scr_typ' => 'enable',
	    'enable_curs_no_scr_typ' => 'enable',
	    'np_img_anms_two' => 'enable',
	    'pause_anms_two' => '1',
	    'pause_slide_up_down' => '1',
	    'pause_fadein' => '1',
	    'pause__typing' => '1',
	    'dist_from_left_right_fadein' => '5',
	    'dist_from_left_right_scrollup' => '5',
	    'dist_from_left_right_scrollntb' => '5',
	    'dist_between_scrollntb' => '10',
	    'w_img_scrollntb' => '20',
	    'h_img_scrollntb' => '17',
	    'ri_le_img_scrollntb' => '2',
		'le_ri_img_scrollntb' => '5',
		'image_att_scrollntb' => '0',
		'dis_icon_scrollntb' => '',
		'disable_title_scr_mobile_s' => '1',
		'scripts_animation' => 'footer',
		'style_transparent' => 'no',
		'opacity_style_transparent' => '0.7',
		'cursor_top_typ1' => '5',
		'cursor_bold_typ1' => 'normal',
	),
	'style_options' => array (
	    'enable_style_mobile' => '1',
	    'disable_in_screen_max_width' => '',
	    'disable_this_font' => '',
	    'margin_r_l_title' => '0',
	    'default' => '',
	    'hide_icon_evol_plug' => '',
	    'color_back_' => '#F9F7F3',
	    'color_back_title' => '#CE1031',
	    'color_text_back' => '#000000',
	    'color_text_title' => '#FFFFFF',
	    'color_border' => '#CE1031',
	    'border_top' => '0',
	    'border_bottom' => '0',
	    'border_right' => '0',
	    'border_left' => '0',
	    'border_radius' => '1',
	    'opacity' => '1',
	    'font_family' => 'Verdana, DroidKufi_Ben, Arial',
	    'font_size' => '14',
	    'font_size_title' => '14',
	    'width' => '100%',
		'margin_top_title' => '0',
	    'margin_top' => '0',
	    'margin_bottom' => '0',
	    'margin_right' => '0',
	    'margin_left' => '0',
	    'font_weight' => 'normal',
	    'text_shadow' => 'no',
	    'text_shadow_color' => '#000000',
	    'box_shadow' => 'no',
	    'box_shadow_color' => '#B5B5B5',
	    'box_shadow_v' => '1',
	    'prevNext_color' => '#8F8F8F',
	    'prevNext_font_size' => '26',
	    'prevNext_weight' => 'normal',
	    'prevNext_top' => '0',
	    'title_font_family' => 'Verdana, DroidKufi_Ben, Arial',
	    'screen_max_width' => '782',
	    'screen_min_width' => '782',
	    'height_mobile' => '46',
	    'line_height_mobile' => '46',
	    'padding_top_mobile' => '0',
	    'padding_right_left_mobile' => '6',
	    'size_mobile' => '15',
	    'v_screen_max_width' => '782',
	    'height' => '44',
	    'line_height' => '44',
	    'a_hover' => '#4c4b4b',
	    'width_title_background' => '100',
	    'color_border_title' => '#FFFFFF',
	    'border_top_title' => '0',
	    'border_bottom_title' => '0',
	    'border_right_title' => '0',
	    'border_left_title' => '0',
		'height_title' => '44',
	    'line_height_title' => '44',
	    'fixed' => '',
	    'fixed_top_bottom_site' => 'bottom',
	    'fixed_top_bottom' => '0',
	    'fixed_width' => '100',
	    'fixed_index' => '10000',
		's_style' => '',
		's_script' => '',
		'fixed_class_for_top' => '',
		'fixed_class_for_bottom'=> '',
		'adminbar_height' => '',
		'adminbar_height_mobile'=> '',
		'disable_fixed_600_for_top' => '',
		'disable_fixed_600_for_bottom' => '',
		'auto_add_ntb_fixed' => 'yes',
	),
	'other_options' => array (
	    'delete_all_options' => 'not_delete',
	    'remove_short_code' => 'not_remove',
	),
	'exclude_from_reset' => '',
	'reset' => 'submit',
	'scrool_to' => '',
	);
	}
	
	function oldOptionsToDeleting() {
		
	$names = array(
	'news_ticker_benaceur_enable_plug',
	'news_ticker_benaceur_for_visitors',
	'news_ticker_benaceur_links_admin_bar_front',
	'news_ticker_benaceur_links_admin_bar_admin',
	'news_ticker_benaceur_for_users',
	'news_ticker_benaceur_for_role_x',
	'news_ticker_benaceur_for_user_id',
	'news_ticker_benaceur_for_cat_tax',
	'news_ticker_benaceur_for_cat',
	'news_ticker_benaceur_for_all_expt_admin',
	'news_ticker_benaceur_in_home',
	'news_ticker_benaceur_in_single',
	'news_ticker_benaceur_in_page',
	'news_ticker_benaceur_in_category',
	'news_ticker_benaceur_in_author',
	'news_ticker_benaceur_in_search',
	'news_ticker_benaceur_in_page_id',
	'news_ticker_benaceur_in_single_id',
	'news_ticker_benaceur_disable_title',
	'news_ticker_benaceur_title_anim_pulsate',
	'news_ticker_benaceur_title_styles',
	'news_ticker_benaceur_title_ltr',
	'news_ticker_benaceur_title_rtl',
	'news_ticker_benaceur_links_admin_bar_menu',
	'news_ticker_benaceur_dir',
	'news_ticker_benaceur_num_posts',
	'news_ticker_benaceur_latest_p_c',
	'news_ticker_benaceur_include_exclude_id',
	'news_ticker_benaceur_expt_txt_title',
	'news_ticker_benaceur_expt_txt_comm',
	'news_ticker_benaceur_post_type',
	'news_ticker_benaceur_post_status',
	'news_ticker_benaceur_comment_status',
	'news_ticker_benaceur_title_styles_topleft_le',
	'news_ticker_benaceur_title_styles_topright_le',
	'news_ticker_benaceur_title_styles_topleft_ri',
	'news_ticker_benaceur_title_styles_topright_ri',
	'news_ticker_benaceur_title_styles_bottomright',
	'news_ticker_benaceur_title_styles_bottomleft',
    'news_ticker_benaceur_delete_all_options',
    'news_ticker_benaceur_ntb_st_code',
	'news_ticker_benaceur_autostart_slide_up_down',
	'news_ticker_benaceur_autostart_fadein',
	'news_ticker_benaceur_style',
	'news_ticker_benaceur_timeout_tickerntb',
	'news_ticker_benaceur_speedIn_typing_2',
	'news_ticker_benaceur_anim_speed_anms_two',
	'news_ticker_benaceur_anim_timeout_anms_two',
	'news_ticker_benaceur_anim_timeout_typing_2',
	'news_ticker_benaceur_speed_scrollntb_',
	'news_ticker_benaceur_pause_scrollntb',
	'news_ticker_benaceur_expt_title_scrollntb',
	'news_ticker_benaceur_all_scrollntb',
	'news_ticker_benaceur_dis_fin_img_scrollntb',
	'news_ticker_benaceur_dis_fin_no_img_scrollntb',
	'news_ticker_benaceur_disa_img_n_scrollup',
	'news_ticker_benaceur_disa_img_n_fadein',
	'news_ticker_benaceur_timeout_slide_up_down',
	'news_ticker_benaceur_speed_slide_up_down',
	'news_ticker_benaceur_updown_slide_up_down',
	'news_ticker_benaceur_timeout_fadein',
	'news_ticker_benaceur_width_anms__two',
	'news_ticker_benaceur_width_typing__2',
	'news_ticker_benaceur_timeout_no_scr_typ',
	'news_ticker_benaceur_speed_no_scr_typ',
	'news_ticker_benaceur_line_no_scr_typ',
	'news_ticker_benaceur_margin_top_no_scr_typ',
	'news_ticker_benaceur_margin_left_ltr_no_scr_typ',
	'news_ticker_benaceur_margin_right_ltr_no_scr_typ',
	'news_ticker_benaceur_cursor_no_scr_typ',
	'news_ticker_benaceur_cursor_margin_left_right_no_scr_typ',
	'news_ticker_benaceur_NP_img_no_scr_typ',
	'news_ticker_benaceur_ENABLE_curs_no_scr_typ',
	'news_ticker_benaceur_NP_img_anms_two',
	'news_ticker_benaceur_NP_img_typing_2',
	'news_ticker_benaceur_pause_anms_two',
	'news_ticker_benaceur_pause_typing_2',
	'news_ticker_benaceur_pause_slide_up_down',
	'news_ticker_benaceur_pause_fadein',
	'news_ticker_benaceur_pause_typing',
	'news_ticker_benaceur_dist_from_left_right_fadein',
	'news_ticker_benaceur_dist_from_left_right_scrollup',
	'news_ticker_benaceur_dist_from_left_right_scrollntb',
	'news_ticker_benaceur_dist_between_scrollntb',
	'news_ticker_benaceur_w_img_scrollntb',
	'news_ticker_benaceur_h_img_scrollntb',
	'news_ticker_benaceur_ri_le_img_scrollntb',
	'news_ticker_benaceur_le_ri_img_scrollntb',
	'news_ticker_benaceur_ena_js_scrollntb',
	'ntb_media_selector_attachment_id',
	'news_ticker_benaceur_color_back_',
	'news_ticker_benaceur_color_back_title',
	'news_ticker_benaceur_color_text_back',
	'news_ticker_benaceur_color_text_title',
	'news_ticker_benaceur_color_border',
	'news_ticker_benaceur_border_top',
	'news_ticker_benaceur_border_bottom',
	'news_ticker_benaceur_border_right',
	'news_ticker_benaceur_border_left',
	'news_ticker_benaceur_border_radius',
	'news_ticker_benaceur_opacity',
	'news_ticker_benaceur_font_family',
	'news_ticker_benaceur_font_size',
	'news_ticker_benaceur_font_size_title',
	'news_ticker_benaceur_width',
	'news_ticker_benaceur_padding_top',
	'news_ticker_benaceur_padding_bottom',
	'news_ticker_benaceur_margin_top',
	'news_ticker_benaceur_margin_bottom',
	'news_ticker_benaceur_font_weight',
	'news_ticker_benaceur_text_shadow',
	'news_ticker_benaceur_text_shadow_color',
	'news_ticker_benaceur_box_shadow',
	'news_ticker_benaceur_box_shadow_color',
	'news_ticker_benaceur_box_shadow_v',
	'news_ticker_benaceur_PrevNext_color',
	'news_ticker_benaceur_PrevNext_font_size',
	'news_ticker_benaceur_title_font_family',
	'news_ticker_benaceur_PrevNext_weight',
	'news_ticker_benaceur_PrevNext_top',
	'news_ticker_benaceur_enable_style_mobile',
	'news_ticker_benaceur_screen_max_width',
	'news_ticker_benaceur_screen_min_width',
	'news_ticker_benaceur_height_mobile',
	'news_ticker_benaceur_padding_top_mobile',
	'news_ticker_benaceur_padding_right_left_mobile',
	'news_ticker_benaceur_min_height_mobile',
	'news_ticker_benaceur_line_height_mobile',
	'news_ticker_benaceur_disable_in_screen_max_width',
	'news_ticker_benaceur_v_screen_max_width',
	'news_ticker_benaceur_disable_this_font',
	'news_ticker_benaceur_padding_top_title',
	'news_ticker_benaceur_default',
	'news_ticker_benaceur_height',
	'news_ticker_benaceur_a_hover',
	'news_ticker_benaceur_hide_icon_evol_plug',
	'news_ticker_benaceur_color_border_title',
	'news_ticker_benaceur_border_title',
	'news_ticker_benaceur_line_height_title',
	'news_ticker_benaceur_width_title_background',
	'news_ticker_benaceur_sty_opts',
	'news_ticker_benaceur_styles_options_p',
	'news_ticker_benaceur_time_export_sett_gmt',
	'news_ticker_benaceur_cursor_top_no_scr_typ_',
	'ntb_group_reset', '',
    'ntb_group_anim_reset',
    'ntb_group_sty_reset',
	);
	
	foreach ( $names as $name ) {
	delete_option( $name );	
	}
	
	}
	
	function all_options( $name ) { // $this->all_options('global_options');
	
    $opts = $this->all__options();
	
	if ($name == 'all')
	return $opts;
	if ($name == 'global_options')
	return $opts['global_options'];
	if ($name == 'anim_options')
	return $opts['anim_options'];	
	if ($name == 'style_options')
	return $opts['style_options'];
	if ($name == 'other_options')
	return $opts['other_options'];
	}
	
	function option($value){ // ex: $this->option('enable')
	    $opt = "news_ticker_benaceur_glob_options[global_options][$value]";
	    return $opt;
	}
	
	function options($value){ // $this->options('enable')
		$opts = $this->glob_options();
		$opt_s = isset($opts['global_options'][$value]) && str_replace(' ','', $opts['global_options'][$value]) != '' ? $opts['global_options'][$value] : '' ;
		return $opt_s;
	}
	
	function option_hi($value){ // ex: $this->option_hi('enable')
	    $opt = "news_ticker_benaceur_glob_options[global_options][hide_after_time][$value]";
	    return $opt;
	}
	
	function options_hi($value){ // $this->options_hi('enable')
		$opts = $this->glob_options();
		$opt_s = isset($opts['global_options']['hide_after_time'][$value]) && str_replace(' ','', $opts['global_options']['hide_after_time'][$value]) != '' ? $opts['global_options']['hide_after_time'][$value] : '' ;
		return $opt_s;
	}
	
	function option_anim($value){ // ex: $this->option_anim('enable')
	    $opt = "news_ticker_benaceur_glob_options[anim_options][$value]";
	    return $opt;
	}
	
	function options_anim($value){ // $this->options_anim('enable')
		$opts = $this->glob_options();
		$opt_s = isset($opts['anim_options'][$value]) && str_replace(' ','', $opts['anim_options'][$value]) != '' ? $opts['anim_options'][$value] : '' ;
		return $opt_s;
	}
	 
	function option_sty($value){ // ex: $this->option_sty('fixed')
	    $opt = "news_ticker_benaceur_glob_options[style_options][$value]";
	    return $opt;
	}
		
	function options_sty($value){ // $this->options_sty('enable')
		$opts = $this->glob_options();
		$opt_s = isset($opts['style_options'][$value]) && str_replace(' ','', $opts['style_options'][$value]) != '' ? $opts['style_options'][$value] : '' ;
		return $opt_s;
	}
	
	function option_oth($value){ // ex: $this->option_oth('fixed')
	    $opt = "news_ticker_benaceur_glob_options[other_options][$value]";
	    return $opt;
	}
		
	function options_oth($value){ // $this->options_oth('enable')
		$opts = $this->glob_options();
		$opt_s = isset($opts['other_options'][$value]) && str_replace(' ','', $opts['other_options'][$value]) != '' ? $opts['other_options'][$value] : '' ;
		return $opt_s;
	}
	
	function option_s($value){
	    $opt = "news_ticker_benaceur_glob_options[$value]";
	    return $opt;
	}
		
	function options_s($value){ // $this->options_s($value)
		$opts = $this->glob_options();
		$opt_s = isset($opts[$value]) && str_replace(' ','', $opts[$value]) != '' ? $opts[$value] : '' ;
		return $opt_s;
	}
	
	/*
	$this->update_add_option(
    array(
    'reset' => 'submit',
    'anim_options' => array('bbbb','cccc','cursor_bold_typ1' => 'bold2', '_bold_typ1' => 'bold3333'),
    'global_options' => array('gggg','kkkk','enable' => 'on22', 'hide_after_time' => array('time_ago' => '14000', 'hide' => 'oooo55', 
    'nnhide' => 'oooo'), 'for_cat_tax' => 'ben', 'post_type' => array('post','page')),
    )
    );
	*/
	function update_add_option($data){
		
        $opts = $this->glob_options();

		if ( $opts == false || !is_array( $opts ) )
			return false;
		
		if ( ! is_array( $data ) )
		    return false;
        
		foreach ( $data as $key => $val ) {
			if ( in_array($key, array('exclude_from_reset','reset','scrool_to')) ) {
			    
			    $opts[$key] = $val;
			    
			} else {
			    
		        foreach ( $val as $key2 => $val2 ) {
			        if (  is_array($val2) && $key == 'global_options' ) {
		                foreach ( $val2 as $key3 => $val3 ) {
		                    $opts[$key][$key2][$key3] = $val3;
		                }
			        } else {
		                $opts[$key][$key2] = $val2;
				    }
		        }
			}
		}

		return update_option( 'news_ticker_benaceur_glob_options', $opts);
	}
	
	/*
	$this->remove_option('news_ticker_benaceur_glob_options', 'global_options', array('personalize_not_fixed','for_visitors'));
	$this->remove_option('news_ticker_benaceur_glob_options', 'global_options', array('for_users','for_user_id','hide_after_time' => array('latest_in_seconds', 'ago_in_seconds')));
	$this->remove_option('news_ticker_benaceur_glob_options', 'global_options', array('hide_after_time' => array('latest_in_seconds', 'ago_in_seconds')));
	$this->remove_option('news_ticker_benaceur_glob_options', 'reset');
    */
	function remove_option($option_name, $get_key1, $keys = '') {
		
		$get_options = get_option( $option_name );
		if (!$get_options) return;
		
		if (!$keys) {
			
			unset($get_options[$get_key1]);
			
		} else {
		 
        foreach ($keys as $key => $val) {
            if (is_array($val)) {
				foreach ($val as $k) {
                    unset($get_options[$get_key1][$key][$k]);
				}
			} else if (!is_array($key)) {
				unset($get_options[$get_key1][$val]);
			}
        }
		
		}
		
        return update_option($option_name, $get_options);
	}
	
	// prevent this value to reset
	function _reset_all() {
		$opts = $this->all_options('all');
		
		if (!$this->options_s('exclude_from_reset')) {
		    unset($opts['global_options']['txt_news_manually'],
		    $opts['global_options']['hide_after_time']['manually_date'],
		    $opts['style_options']['s_style'],
		    $opts['style_options']['s_script']);
		}
		
		unset($opts['reset']); // to display __('Saved + reset successfully', 'news-ticker-benaceur') message
		$this->update_add_option( $opts );
        update_option( 'news_ticker_benaceur_version', NTB_VERSION_BEN);
	}
	
	// prevent this value to reset
	function unset_from_global_options() {
		$opts = $this->all_options('global_options');
		
		if (!$this->options_s('exclude_from_reset')) {
		    unset($opts['txt_news_manually'], $opts['hide_after_time']['manually_date']);
		}
		
		return $opts;
	}
	
	// prevent this value to reset
	function unset_from_style_options() {
		$opts = $this->all_options('style_options');
		
		if (!$this->options_s('exclude_from_reset')) {
		    unset($opts['s_style'], $opts['s_script']);
		}
		
		return $opts;
	}
	
    function is_ntb_top_site() {
        if ($this->options_sty('fixed')) {
            if ($this->options_sty('fixed_top_bottom_site') == 'top')
            return true;
        } else if ($this->options('auto_add_ntb_not_fixed') == 'top') {
        return true;
        }
    }
	
	function post_status_args_comments() {
		return apply_filters( 'news_ticker_benaceur_post_status_args_comments', 'publish' );
	}
	
	// cache
	
	function ntb_get_recent_posts( $args ) {
		$posts = wp_get_recent_posts( $args );

		return apply_filters_deprecated(
			'ntb_filter_get_all_recent_posts',
			array( $posts ),
			'3.5',
			'ntb_pre_get_recent_posts',
			__( 'This filter runs after the plugin retrieves the posts. To provide your own results before retrieval, use ntb_pre_get_recent_posts. Return null from the new filter to use the plugin default.', 'news-ticker-benaceur' )
		);
	}	
	
	function ntb_get_recent_comments( $args ) {
		$comments = get_comments( $args );

		return apply_filters_deprecated(
			'ntb_filter_get_all_recent_comments',
			array( $comments ),
			'3.5',
			'ntb_pre_get_recent_comments',
			__( 'This filter runs after the plugin retrieves the comments. To provide your own results before retrieval, use ntb_pre_get_recent_comments. Return null from the new filter to use the plugin default.', 'news-ticker-benaceur' )
		);
	}	
	
	function posts_comments_transient_time() {
		return apply_filters( 'news_ticker_benaceur_transient_time', 12 * HOUR_IN_SECONDS );
	}
	
	function posts_cache_name() {
		return 'news_ticker_benaceur_posts_cache';
	}
	
	function comments_cache_name() {
		return 'news_ticker_benaceur_comments_cache';
	}

	/**
	 * Return the current generation for a transient cache family.
	 */
	function transient_cache_generation( $type ) {
		$option_name = 'posts' === $type ? 'news_ticker_benaceur_posts_cache_generation' : 'news_ticker_benaceur_comments_cache_generation';
		return (string) get_option( $option_name, '1' );
	}

	/**
	 * Invalidate every argument-specific transient in a cache family.
	 */
	function bump_transient_cache_generation( $type ) {
		$args = $this->get_arguments( $type );

		$cache_key = 'posts' === $type
			? $this->posts_cache_key( $args )
			: $this->comments_cache_key( $args );

		delete_transient( $cache_key );

		$option_name = 'posts' === $type
			? 'news_ticker_benaceur_posts_cache_generation'
			: 'news_ticker_benaceur_comments_cache_generation';

		update_option( $option_name, md5( uniqid( (string) mt_rand(), true ) ), false );
	}	 

	function posts_cache_key( $args ) {
		return $this->posts_cache_name() . '_' . $this->transient_cache_generation( 'posts' ) . '_' . md5( serialize( $args ) );
	}

	function comments_cache_key( $args ) {
		return $this->comments_cache_name() . '_' . $this->transient_cache_generation( 'comments' ) . '_' . md5( serialize( $args ) );
	}

	function set_argument_cache( $type, $cache_key, $value, $expiration ) {
		$stored = set_transient( $cache_key, $value, $expiration );
		if ( ! $stored ) {
			return;
		}

		$option_name = 'posts' === $type ? 'news_ticker_benaceur_posts_cache_marker' : 'news_ticker_benaceur_comments_cache_marker';
		$expiration  = (int) $expiration;
		$marker      = array(
			'generation' => $this->transient_cache_generation( $type ),
			'expires'    => 0 !== $expiration ? time() + $expiration : 0,
		);
		update_option( $option_name, $marker, false );
	}

	function has_argument_cache( $type ) {
		$option_name = 'posts' === $type ? 'news_ticker_benaceur_posts_cache_marker' : 'news_ticker_benaceur_comments_cache_marker';
		$marker      = get_option( $option_name, false );

		return is_array( $marker )
			&& isset( $marker['generation'], $marker['expires'] )
			&& $marker['generation'] === $this->transient_cache_generation( $type )
			&& ( 0 === (int) $marker['expires'] || (int) $marker['expires'] > time() );
	}
	
	function delete_all_transient_p_c_caches() {
		$this->bump_transient_cache_generation( 'posts' );
		$this->bump_transient_cache_generation( 'comments' );
	}
	
	
	// Vérifier si le paramètre `orderby` est défini sur `rand` via le filtre, afin de déterminer si les articles sont affichés de manière aléatoire ou non.
	
	function ntb_posts_orderby_is_random( $args ) {
		if ( ! isset( $args['orderby'] ) ) {
			return false;
		}

		$orderby = $args['orderby'];

		if ( is_string( $orderby ) ) {
			return $this->ntb_orderby_value_is_random( $orderby );
		}

		if ( is_array( $orderby ) ) {
			foreach ( $orderby as $key => $value ) {
				// WP_Query can receive an orderby array such as array( 'rand' => 'ASC' ).
				if ( is_string( $key ) && $this->ntb_orderby_value_is_random( $key ) ) {
					return true;
				}

				// Also support a numeric array such as array( 'rand' ).
				if ( is_int( $key ) && is_string( $value ) && $this->ntb_orderby_value_is_random( $value ) ) {
					return true;
				}
			}
		}

		return false;
	}

	function ntb_orderby_value_is_random( $value ) {
		if ( ! is_string( $value ) ) {
			return false;
		}

		$value = trim( $value );

		// WP_Query accepts the unseeded alias only in lowercase.
		if ( preg_match( '/(^|[\s,])rand($|[\s,])/', $value ) ) {
			return true;
		}

		// WP_Query also accepts RAND(seed), case-insensitively.
		return (bool) preg_match( '/(^|[\s,])RAND\([0-9]+\)($|[\s,])/i', $value );
	}
	
	// Vérifier si le paramètre `orderby` est défini sur `rand` via le filtre, afin de déterminer si les articles sont affichés de manière aléatoire ou non.
	
	function ntb_recent_posts( $args ) {
		$custom_posts = apply_filters( 'ntb_pre_get_recent_posts', null, $args );
		if ( null !== $custom_posts ) {
			return $custom_posts;
		}

		// The legacy result filter may depend on data outside the plugin's invalidation hooks.
		if ( 'enabled' !== $this->options('cache_p_c') || has_filter( 'ntb_filter_get_all_recent_posts' ) ) {
			return $this->ntb_get_recent_posts( $args );
		}

		$cache_key = $this->posts_cache_key( $args );
		$posts_cached = get_transient( $cache_key );
		
		if ( false !== $posts_cached ) {
			return $posts_cached;
		}
		
		$recent_posts = $this->ntb_get_recent_posts( $args );
		if ( $recent_posts ) {
			$this->set_argument_cache( 'posts', $cache_key, $recent_posts, $this->posts_comments_transient_time() );
		}
		
		return $recent_posts;
	}
	/**
	* apply_filters( 'ntb_pre_get_recent_posts', null, $args )
	* هنا null تعني: «لا أقدّم نتائج مخصصة؛ أكمل بالطريقة الافتراضية للإضافة». إذا أعاد الفلتر null، تستدعي الإضافة مسارها المعتاد. أما إذا أعاد مصفوفة، حتى لو كانت فارغة، فتعتبرها الإضافة النتيجة المطلوبة وتعيدها مباشرة، من دون الجلب الافتراضي أو كاش الإضافة.
	* مثال: تقديم مقالات مخصصة
		add_filter( 'ntb_pre_get_recent_posts', 'my_custom_recent_posts', 10, 2 );
		function my_custom_recent_posts( $posts, $args ) {
			// إرجاع null يطلب من الإضافة متابعة الجلب الافتراضي.
			if ( ! is_front_page() ) {
				return $posts;
			}

			// عند إرجاع نتائج، تتجاوز الإضافة الجلب الافتراضي وكاشها.
			return array(
				array(
					'ID'            => 123,
					'post_title'    => 'عنوان المقال',
					'post_author'   => 1,
					'post_date'     => '2026-11-02 12:00:00',
					'post_date_gmt' => '2026-11-02 11:00:00',
					'post_modified' => '2026-11-02 12:00:00',
					'comment_count' => '0',
				),
			);
		}
	* يجب أن تكون نتيجة المقالات مصفوفة من المصفوفات، وبها الحقول التي تتوقعها الإضافة مثل ID و`post_title` و`post_author` والتواريخ.	
	 */
	
	
	/**
	 * @since news ticker benaceur 3.5
	 * post inserted or updated
	 */
	function transient_wp_insert_post( $post_id, $post, $update ) {
		if ( $this->options('latest_p_c') !== 'latest_posts' || ! in_array( $post->post_type, (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'posts' );
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * post deleted
	 */
	function transient_post_deleted( $post_id, $post ) {
		if ( $this->options('latest_p_c') !== 'latest_posts' || ! in_array( $post->post_type, (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'posts' );
	}

	function transient_post_updated( $post_id, $post_after, $post_before ) {
		if ( $post_before->post_type === $post_after->post_type ) {
			return;
		}

		$post_types = (array) $this->options('post_type');
		if ( ! in_array( $post_before->post_type, $post_types, true ) && ! in_array( $post_after->post_type, $post_types, true ) ) {
			return;
		}

		if ( 'latest_posts' === $this->options('latest_p_c') ) {
			$this->bump_transient_cache_generation( 'posts' );
		} elseif ( 'latest_comments' === $this->options('latest_p_c') ) {
			$this->bump_transient_cache_generation( 'comments' );
		}
	}

	function transient_post_terms_updated( $object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids ) {
		$tax_query = $this->options('for_cat_tax') ? $this->options('for_cat_tax') : 'category';
		$term_ids  = array_filter( array_unique( array_map( 'trim', explode( ',', $this->options('for_cat') ) ) ) );
		$post_type = get_post_type( $object_id );

		if ( 'latest_posts' !== $this->options('latest_p_c') || ! $term_ids || $taxonomy !== $tax_query || ! in_array( $post_type, (array) $this->options('post_type'), true ) ) {
			return;
		}

		$this->bump_transient_cache_generation( 'posts' );
	}

	function transient_post_term_deleted( $term, $tt_id, $taxonomy ) {
		$tax_query = $this->options('for_cat_tax') ? $this->options('for_cat_tax') : 'category';
		$term_ids  = array_map( 'intval', array_filter( array_unique( array_map( 'trim', explode( ',', $this->options('for_cat') ) ) ) ) );

		if ( 'latest_posts' !== $this->options('latest_p_c') || $taxonomy !== $tax_query || ! in_array( (int) $term, $term_ids, true ) ) {
			return;
		}

		$this->bump_transient_cache_generation( 'posts' );
	}
	
	function ntb_recent_comments( $args ) {
		$custom_comments = apply_filters( 'ntb_pre_get_recent_comments', null, $args );
		if ( null !== $custom_comments ) {
			return $custom_comments;
		}

		// The legacy result filter may depend on data outside the plugin's invalidation hooks.
		if ( 'enabled' !== $this->options('cache_p_c') || has_filter( 'ntb_filter_get_all_recent_comments' ) ) {
			return $this->ntb_get_recent_comments( $args );
		}

		$cache_key = $this->comments_cache_key( $args );
		$comments_cached = get_transient( $cache_key );
		
		if ( false !== $comments_cached ) {
			return $comments_cached;
		}
		
		$recent_comments = $this->ntb_get_recent_comments( $args );
		if ( $recent_comments ) {
			$this->set_argument_cache( 'comments', $cache_key, $recent_comments, $this->posts_comments_transient_time() );
		}
		
		return $recent_comments;
	}
	/**
	* apply_filters( 'ntb_pre_get_recent_comments', null, $args )
	* هنا null تعني: «لا أقدّم نتائج مخصصة؛ أكمل بالطريقة الافتراضية للإضافة». إذا أعاد الفلتر null، تستدعي الإضافة مسارها المعتاد. أما إذا أعاد مصفوفة، حتى لو كانت فارغة، فتعتبرها الإضافة النتيجة المطلوبة وتعيدها مباشرة، من دون الجلب الافتراضي أو كاش الإضافة.
	* مثال: تقديم تعليقات مخصصة
		add_filter( 'ntb_pre_get_recent_comments', 'my_custom_recent_comments', 10, 2 );
		function my_custom_recent_comments( $comments, $args ) {
			if ( ! is_front_page() ) {
				return $comments; // ما زالت null، فيستمر الجلب الافتراضي.
			}

			return array(
				new WP_Comment(
					(object) array(
						'comment_ID'       => 456,
						'comment_post_ID'  => 123,
						'comment_author'   => 'اسم المعلّق',
						'comment_content'  => 'نص التعليق',
						'comment_date'     => '2026-11-02 12:00:00',
						'comment_date_gmt' => '2026-11-02 11:00:00',
					)
				),
			);
		}
	* نتيجة التعليقات يجب أن تكون مصفوفة من كائنات التعليقات التي توفر الخصائص التي تستخدمها الإضافة، مثل comment_author و`comment_content` و`comment_post_ID`.	
	 */
	
	
	function transient_new_comment( $comment_id, $comment ) {
		$post_id = $comment->comment_post_ID;
		if ( $this->options('latest_p_c') !== 'latest_comments' || ! in_array( get_post_type( $post_id ), (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'comments' );
	}

	function transient_comment_update_data( $data, $old_comment, $commentarr ) {
		if ( $this->options('latest_p_c') !== 'latest_comments' ) {
			return $data;
		}

		$old_post_id = isset( $old_comment['comment_post_ID'] ) ? (int) $old_comment['comment_post_ID'] : 0;
		$new_post_id = isset( $data['comment_post_ID'] ) ? (int) $data['comment_post_ID'] : $old_post_id;
		$post_types  = (array) $this->options('post_type');

		if ( in_array( get_post_type( $old_post_id ), $post_types, true ) || in_array( get_post_type( $new_post_id ), $post_types, true ) ) {
			$this->bump_transient_cache_generation( 'comments' );
		}

		return $data;
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * comment edited
	 */
	function transient_edit_comment( $comment_id, $data ) {
		$post_id = isset( $data['comment_post_ID'] ) ? (int) $data['comment_post_ID'] : 0;
		if ( $this->options('latest_p_c') !== 'latest_comments' || ! in_array( get_post_type( $post_id ), (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'comments' );
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * comment status is chenged (including comment trashed) or comment is permanently deleted or the post for this comment is permanently deleted
	 */
	function transient_status_comment_updated( $new_status, $old_status, $comment ) {
		$post_id = $comment->comment_post_ID;
		if ( 'delete' === $new_status || $this->options('latest_p_c') !== 'latest_comments' || ! in_array( get_post_type( $post_id ), (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'comments' );
	}

	function transient_comment_deleted( $comment_id, $comment ) {
		$post_id = $comment->comment_post_ID;
		if ( $this->options('latest_p_c') !== 'latest_comments' || ! in_array( get_post_type( $post_id ), (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'comments' );
	}

	function transient_post_comments_changed( $post_id ) {
		if ( $this->options('latest_p_c') !== 'latest_comments' || ! in_array( get_post_type( $post_id ), (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'comments' );
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * post status for this comment is chenged (including post trashed)
	 */
	function transient_status_post_updated__comment( $new_status, $old_status, $post ) {
		if ( $this->options('latest_p_c') !== 'latest_comments' || ! in_array( $post->post_type, (array) $this->options('post_type'), true ) ) {
			return;
		}
		$this->bump_transient_cache_generation( 'comments' );
	}

	function update_transient_global_or_all_posted() {
		if ( ! current_user_can( apply_filters( 'ntb_manage_options_cap', 'manage_options' ) ) ) {
			return;
		}

		// and in this plugin_deactivation function (when the plugin is disabled)
	    $this->delete_all_transient_p_c_caches();
	}
	
	function delete_all_caches_now_action() {
		if ( ! current_user_can( apply_filters( 'ntb_manage_options_cap', 'manage_options' ) ) ) {
			return;
		}
		
		if ( isset( $_POST['ntb_submit_delete_data_stored_now'] ) ) {
			check_admin_referer( 'news_ticker_benaceur_glob_group-options' );

			if ( 'enabled' === $this->options('cache_p_c') ) {
				$this->delete_all_transient_p_c_caches();
				update_user_meta( get_current_user_id(), 'ntb_submit_delete_data_stored_now', true );
			}
		}		
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * delete all transient for recent posts and comments when glob or all options reset
	 */
	function delete_all_transient_reset() {
		if ( isset($_GET['settings-updated']) && in_array( $this->options_s('reset'), array( 'reset_glob', 'reset_all' ) ) ) {
			$this->delete_all_transient_p_c_caches();
		}
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * delete all transient for recent posts and comments when plugin is deactivated
	 */
	function delete_all_transient_deactivation() {
		$this->delete_all_transient_p_c_caches();
	}
	
	function exists_ntb_cache() {
		if ( 'enabled' !== $this->options('cache_p_c') ) {
			return false;
		}

		if ( 'latest_posts' === $this->options('latest_p_c') ) {
			return $this->has_argument_cache( 'posts' );
		}

		if ( 'latest_comments' === $this->options('latest_p_c') ) {
			return $this->has_argument_cache( 'comments' );
		}
		return false;
	}
	
	// cache
	
    function get_arguments( $type ) {
		
		$cat_post_ids = array_filter(array_unique(array_map('trim', explode(',', $this->options('for_cat')))));
		$for_cat_tax = $this->options('for_cat_tax');
		$include_exclude_id = $this->options('include_exclude_id');
		
		// L comments
		$_comment_status = $this->options('comment_status');
		$comment_statuses = array(
			'all' => array( 'approve', 'hold', 'trash', 'spam' )
		);
		if ( isset( $comment_statuses[ $_comment_status ] ) ) {
			$_comment_status = $comment_statuses[ $_comment_status ];
		}
		
		$args_comms = array(
		'post_status' => $this->post_status_args_comments(),
		'status'      => $_comment_status,
		'number'      => $this->options('num_posts'),
		'post_type'   => $this->options('post_type'),
		'orderby'     => 'comment_date',
		'order'       => 'DESC'
		);
		// L comments
		
		if ( $cat_post_ids ) {
			if ( $include_exclude_id == 'include_id' ) {
				$args_comms['post__in'] = $cat_post_ids;
			} else if ( $include_exclude_id == 'exclude_id' ) {
				$args_comms['post__not_in'] = $cat_post_ids;
			}
		}

		//
		$value = array();
		foreach ( $cat_post_ids as $val ){
			if ($include_exclude_id == 'include_id') {
				$value[] = $val;
			} else if ($include_exclude_id == 'exclude_id') {
				$value[] = '-' . $val;
			}
		}
		$inc_exc_ids = implode(',', $value);
		// 	
		$lp = array(
			'post_type'      => $this->options('post_type'),
			'posts_per_page' => $this->options('num_posts'),
			'orderby'        => 'date', // modified
			'order'          => 'DESC',
			'post_status'    => $this->options('post_status')
		);
		 
		if ( $for_cat_tax == 'category' || ! $for_cat_tax ) {
			if ($cat_post_ids) {
				$lp['cat'] = $inc_exc_ids;
			}
		} else {
			$lp['tax_query'] = array(
				array(
				'taxonomy' => $for_cat_tax,
				'field'    => 'term_id',
				'terms'    => $cat_post_ids
				)
			);
		}
		 
		if ( $this->options_hi('hide') != 'disable_this_option' ) {
			$lp['date_query'] = array(
				array(
					'after'     => $this->options_hi('time_ago') . ' ' . $this->options_hi('ago_in_seconds') . ' ago',
					'inclusive' => true,
					'column'    => 'post_date',
				)
			);
				
			$args_comms['date_query'] = array(
				array(
					'after'     => $this->options_hi('time_ago') . ' ' . $this->options_hi('ago_in_seconds') . ' ago',
					'inclusive' => true,
					'column'    => 'comment_date',
				)
			);
		}
		
		/* Ex
		add_filter( 'ntb_filter_arguments_recent_posts', function($args) {
			$args['posts_per_page']  = 2;
			$args['order'] = 'ASC';

			return $args;
		});

		add_filter( 'ntb_filter_get_all_recent_posts', function($posts) {
		global $wpdb;

		$posts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE `post_type` = 'post' AND `post_status` = 'publish' ORDER BY `post_date` DESC LIMIT 10", ARRAY_A);

		return $posts;
		});
		*/
		
		if ( 'posts' === $type ) {
			return apply_filters( 'ntb_filter_arguments_recent_posts', $lp );
		}
		
		if ( 'comments' === $type ) {
			return apply_filters( 'ntb_filter_arguments_recent_comments', $args_comms );
		}
    }
	
    function get_recent( $recent ) {
		if ( $recent == 'posts' ) {
			return $this->ntb_recent_posts( $this->get_arguments( 'posts' ) );
		}
		
		if ( $recent == 'comments' ) {
			return $this->ntb_recent_comments( $this->get_arguments( 'comments' ) );
		}
    }
	
    function ntb_items( $i = '' ) {
		$nm = $i ? apply_filters( 'ntb_filter_number_ntb_items', 0 ) : 0;
		$txt_news_manually = array_filter(array_unique(array_map('trim', explode(PHP_EOL, $this->options('txt_news_manually')))));	
		 
		if ( $this->options('latest_p_c') == 'latest_posts' && count( $this->get_recent('posts') ) <= $nm )
			return true;
			
		if ( $this->options('latest_p_c') == 'latest_comments' && count( $this->get_recent('comments') ) <= $nm )
			return true;
			
		if ( $this->options('latest_p_c') == 'manually' && count( $txt_news_manually ) <= $nm )
			return true;
		
		return false;
    }
	
    function get_time_in_second() {
		
		$in_seconds = MINUTE_IN_SECONDS;
		
		if ($this->options_hi('latest_in_seconds') == 'minute')
			$in_seconds = MINUTE_IN_SECONDS;
		if ($this->options_hi('latest_in_seconds') == 'hour')
			$in_seconds = HOUR_IN_SECONDS;
		if ($this->options_hi('latest_in_seconds') == 'day')
			$in_seconds = DAY_IN_SECONDS;

		return ( (int) apply_filters( 'news_ticker_benaceur_hide_time_in_seconds', $in_seconds ) * (int) $this->options_hi('time_latest') );
	}
	
    function get_time_recent( $time_out = '' ) {

		$time = $this->get_time_in_second();
		$get_news = array_filter(array_unique(array_map('trim', explode(PHP_EOL, $this->options('txt_news_manually')))));	
		
		if ( $this->options('latest_p_c') == 'latest_posts' ) {
		    $recent_posts_ntb = $this->get_recent('posts');
			$diference = $recent_posts_ntb ? current_time( 'timestamp' ) - mysql2date('U', apply_filters( 'news_ticker_benaceur_hide_time_post_date', $recent_posts_ntb[0]["post_date"], $recent_posts_ntb[0] ) ) : current_time( 'timestamp' );
			$timeOut = $diference >= $time ? '' : ($time - $diference) * 1000 ;	
		} else if ( $this->options('latest_p_c') == 'latest_comments' ) {
			$comments_list = $this->get_recent('comments');
			$comments__list = $comments_list ? $comments_list[0] : array();	
			$diference = $comments__list ? current_time( 'timestamp' ) - mysql2date('U', apply_filters( 'news_ticker_benaceur_hide_time_comment_date', $comments__list->comment_date, $comments__list ) ) : current_time( 'timestamp' );
			$timeOut = $diference >= $time ? '' : ($time - $diference) * 1000 ;	
		} else if ( $this->options('latest_p_c') == 'manually' ) {
			$diference = $get_news && $this->options_hi('manually_date') ? current_time( 'timestamp' ) - mysql2date('U', $this->options_hi('manually_date')) : current_time( 'timestamp' );
			$timeOut = $diference >= $time ? '' : ($time - $diference) * 1000 ;	
		}		
		 
		if ( $time_out && $timeOut ) return $timeOut;

		if ( $this->options('hide_if_noItems') && $this->ntb_items() ) return true; // hide if no item and hide_if_noItems option is enabled

		if ( $this->options_hi('hide') == 'hide' ) { // hide after time without jquery
			
			if ( $diference >= $time )
			return true;
		
		} else if ($this->options_hi('hide') == 'hide_jquery') { // hide after time with jquery
		
			if ( $diference >= $time + 1 )
			return true;	
		}
    }
	
	// filter comment date if hide after time is enabled
	
	function meta_comment_date_key() {
		return 'news_ticker_benaceur_comment_date_time_hide';
	}
	
	function _comment_status_to_new_status( $new_status, $old_status, $comment ) {
		
		if ( $this->options('latest_p_c') != 'latest_comments' ) {
			return;
		}
		
		$status = apply_filters( 'news_ticker_benaceur_comment_status_args', $this->options('comment_status') );
		$comment_statuses = array(
			'hold'    => 'unapproved', // $this->options('comment_status') uses "hold".
			'approve' => 'approved',   // $this->options('comment_status') uses "approve".
		);
		if ( isset( $comment_statuses[ $status ] ) ) {
			$status = $comment_statuses[ $status ];
		}
		
		if ( $status !== $new_status && 'all' !== $status ) {
			return;
		}
		
		if ( $this->options_hi('hide') != 'disable_this_option' ) {
			
			$comment_ID = $comment->comment_ID;
			$meta_comment_date_key = $this->meta_comment_date_key();
			$comment_ids = wp_list_pluck( get_comments( $this->get_arguments( 'comments' ) ), 'comment_ID' );
			
			if ( in_array( $comment_ID, $comment_ids ) ) {
				// wp_cache_delete and delete_metadata in this settings_callback function
				wp_cache_delete( 'news_ticker_benaceur_comment_date_cache_time_hide' );
				delete_metadata( 'comment', 0, $meta_comment_date_key, '', true );
				add_comment_meta( $comment_ID, $meta_comment_date_key, current_time( 'mysql' ) );
			}
				
		}
	
	}

	function filter_hide_time_comment_date( $comment_date, $comment ) {
		global $wpdb;
		
		if ( $this->options('latest_p_c') != 'latest_comments' ) {
			return;
		}
		
		$comment_ID = $comment->comment_ID;
		
		if ( $this->options_hi('hide') != 'disable_this_option' ) {
		
			$cache_key = 'news_ticker_benaceur_comment_date_cache_time_hide';
			$meta_values = wp_cache_get( $cache_key );

			if ( false === $meta_values ) {
				$get_time_in_second = $this->get_time_in_second() + MONTH_IN_SECONDS;
				// Cache get_var
				$meta_values = $wpdb->get_var( $wpdb->prepare(
					"SELECT meta_value FROM {$wpdb->commentmeta} WHERE meta_key = %s ORDER BY comment_id DESC LIMIT 1",
					$this->meta_comment_date_key()
				) );

				wp_cache_set( $cache_key, $meta_values, '', $get_time_in_second );
			}
			
			if ( ! empty( $meta_values ) ) {
				$comment_date = $meta_values;
			}
		}
		
		return $comment_date;
			
	}
	
	/**
	 * @since news ticker benaceur 3.5
	 * delete delete_metadata and wp_cache for comment_date when ntb hides after time
	 */
	function delete_metadata_comment_date() {
		$hide_setting = isset( $_POST['news_ticker_benaceur_glob_options']['global_options']['hide_after_time']['hide'] )
			? $_POST['news_ticker_benaceur_glob_options']['global_options']['hide_after_time']['hide']
			: null;

		if ( 'disable_this_option' !== $hide_setting || 'disable_this_option' === $this->options_hi('hide') ) {
			return;
		}

		if ( ! current_user_can( apply_filters( 'ntb_manage_options_cap', 'manage_options' ) ) ) {
			return;
		}

		check_admin_referer( 'news_ticker_benaceur_glob_group-options' );

		wp_cache_delete( 'news_ticker_benaceur_comment_date_cache_time_hide' );
		delete_metadata( 'comment', 0, $this->meta_comment_date_key(), '', true );
	}	 

	
	// filter comment date if hide after time is enabled
	
	function remove_shortcode_wpdb() {
		global $wpdb;
		
	    $fields = "post_content = replace(post_content, '%s', '')";	
	    $sql    = "UPDATE $wpdb->posts SET $fields";
        return $wpdb->query( $wpdb->prepare( $sql, '[wp_news_ticker_benaceur_short_code]' ) );
	}
	
	function is_php_8_1_wpcore() {
		if ( version_compare( PHP_VERSION, '8.1', '>=' ) && version_compare( get_bloginfo('version'), '6.2', '<' ) )
		return true;
	}
	
	function purge_cache_msg() {
		return __( 'You may need to purge the cache after saving the settings, with some cache plugins, if you are using a cache plugin of course.', 'news-ticker-benaceur' );
	}
	
	function txtNoItems() {
		return trim($this->options('txt_noItems')) != '' ? $this->options('txt_noItems') : __("No items", 'news-ticker-benaceur');
	}
	
	function txtNoNews() {
		return trim($this->options('empty_txt_news_manually')) != '' ? $this->options('empty_txt_news_manually') : __("No news", 'news-ticker-benaceur');
	}
	 
}
