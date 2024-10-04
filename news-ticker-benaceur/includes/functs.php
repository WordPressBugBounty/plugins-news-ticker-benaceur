<?php
    if ( ! defined( 'ABSPATH' ) ) exit;

class class______news_ticker_benaceur_functs extends class______news_ticker_benaceur {

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
	    'include_exclude_id' => 'exclude_id',
	    'expt_txt_title' => '100',
	    'expt_txt_comment' => '100',
	    'expt_txt_manually_news' => '100',
	    'post_type' => 'post',
	    'post_status' => 'publish',
	    'comment_status' => 'approve',
	    'title_styles_topleft_lef' => '0',
	    'title_styles_topright_lef' => '34',
	    'title_styles_topleft_ri' => '34',
	    'title_styles_topright_ri' => '0',
	    'title_styles_bottomright' => '0',
	    'title_styles_bottomleft' => '0',
		'txt_news_manually' => get_option( 'news_ticker_benaceur_glob_options' ) !== false ? $this->options('txt_news_manually') : '', // prevent this value to reset
		'hide_or_noHide_in' => 'disable_this_option',
		'hide_after_time' => array(
		     'hide' => 'disable_this_option',
			 'time_ago' => '',
			 'ago_in_seconds' => 'days',
			 'time_latest' => '',
			 'latest_in_seconds' => 'minute',
			 'manually_date' => get_option( 'news_ticker_benaceur_glob_options' ) !== false ? $this->options_hi('manually_date') : current_time( 'mysql' ), // prevent this value to reset
			 'update_manually_date' => 'no',
			 ),
		'empty_txt_news_manually' => '',
		'hide_if_noItems' => '',
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
	    'speed_scrollntb_' => '7',
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
	    'pause__typing' => '',
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
	    'border_bottom' => '2',
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
	    'padding_right_left_mobile' => '5',
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
		's_style' => get_option( 'news_ticker_benaceur_glob_options' ) !== false ? $this->options('s_style') : '', // prevent this value to reset
		's_script' => get_option( 'news_ticker_benaceur_glob_options' ) !== false ? $this->options('s_script') : '', // prevent this value to reset
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
	delete_option($name);	
	}
	
	}
	
	function all_options($name) { // $this->all_options('global_options');
	
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
		$opts = get_option( 'news_ticker_benaceur_glob_options' );
		$opt_s = isset($opts['global_options'][$value]) && str_replace(' ','', $opts['global_options'][$value]) != '' ? $opts['global_options'][$value] : '' ;
		return $opt_s;
	}
	
	function option_hi($value){ // ex: $this->option('enable')
	    $opt = "news_ticker_benaceur_glob_options[global_options][hide_after_time][$value]";
	    return $opt;
	}
	
	function options_hi($value){ // $this->options('enable')
		$opts = get_option( 'news_ticker_benaceur_glob_options' );
		$opt_s = isset($opts['global_options']['hide_after_time'][$value]) && str_replace(' ','', $opts['global_options']['hide_after_time'][$value]) != '' ? $opts['global_options']['hide_after_time'][$value] : '' ;
		return $opt_s;
	}
	
	function option_anim($value){ // ex: $this->option_anim('enable')
	    $opt = "news_ticker_benaceur_glob_options[anim_options][$value]";
	    return $opt;
	}
	
	function options_anim($value){ // $this->options_anim('enable')
		$opts = get_option( 'news_ticker_benaceur_glob_options' );
		$opt_s = isset($opts['anim_options'][$value]) && str_replace(' ','', $opts['anim_options'][$value]) != '' ? $opts['anim_options'][$value] : '' ;
		return $opt_s;
	}
	 
	function option_sty($value){ // ex: $this->option_sty('fixed')
	    $opt = "news_ticker_benaceur_glob_options[style_options][$value]";
	    return $opt;
	}
		
	function options_sty($value){ // $this->options_sty('enable')
		$opts = get_option( 'news_ticker_benaceur_glob_options' );
		$opt_s = isset($opts['style_options'][$value]) && str_replace(' ','', $opts['style_options'][$value]) != '' ? $opts['style_options'][$value] : '' ;
		return $opt_s;
	}
	
	function option_oth($value){ // ex: $this->option_oth('fixed')
	    $opt = "news_ticker_benaceur_glob_options[other_options][$value]";
	    return $opt;
	}
		
	function options_oth($value){ // $this->options_oth('enable')
		$opts = get_option( 'news_ticker_benaceur_glob_options' );
		$opt_s = isset($opts['other_options'][$value]) && str_replace(' ','', $opts['other_options'][$value]) != '' ? $opts['other_options'][$value] : '' ;
		return $opt_s;
	}
	
	function option_s($value){
	    $opt = "news_ticker_benaceur_glob_options[$value]";
	    return $opt;
	}
		
	function options_s($value){ // $this->options_s($value)
		$opts = get_option( 'news_ticker_benaceur_glob_options' );
		$opt_s = isset($opts[$value]) && str_replace(' ','', $opts[$value]) != '' ? $opts[$value] : '' ;
		return $opt_s;
	}
	
    function is_ntb_top_site() {
        if ($this->options_sty('fixed')) {
            if ($this->options_sty('fixed_top_bottom_site') == 'top')
            return true;
        //return;
        } else if ($this->options('auto_add_ntb_not_fixed') == 'top') {
        return true;
        }

       // return;
    }
	
    function get_recent() {
    $get_for_cat = array_filter(array_unique(array_map('trim',explode(',', $this->options('for_cat')))));

    // L comments	
    $args_comms = array(
    'status' => $this->options('comment_status'),
	'number' => $this->options('num_posts'),
	'post__in' => ( $this->options('include_exclude_id') == 'include_id' ) ? $get_for_cat : '',
	'post__not_in' => ( $this->options('include_exclude_id') == 'exclude_id' ) ? $get_for_cat : '',
	'post_type' => $this->options('post_type'),
	'order' => 'DESC',
    );
    // L comments

    //
    $catID_b = array_filter(array_unique(array_map('trim',explode(',', $this->options('for_cat')))));
    foreach ($catID_b as &$value){
    $value = '-' . trim($value);
    }
    $ntb_cat_excl = implode(',', $catID_b);
    // 	
	 $lp = array(
			'post_type' => $this->options('post_type'),
			'posts_per_page' => $this->options('num_posts'),
			'order' => 'DESC',
			'post_status' => $this->options('post_status')
			);
	 
	if ($this->options('for_cat_tax') == 'category' || !$this->options('for_cat_tax')) {
		$lp['cat'] = ( $this->options('include_exclude_id') == 'include_id' ) ? $get_for_cat : $ntb_cat_excl;
	} else {
		$lp['tax_query'] = array(
		    array(
			'taxonomy' => $this->options('for_cat_tax'),
			'field' => 'id',
			'terms' => $get_for_cat
		    )
	        );
	}
	 
	if ($this->options_hi('hide') != 'disable_this_option') {
		$lp['date_query'] = array(
              array(
                'after' => $this->options_hi('time_ago') . ' ' . $this->options_hi('ago_in_seconds') . ' ago',
				'inclusive' => true,
				'column' => 'post_date',
              )
            );
			
		$args_comms['date_query'] = array(
              array(
                'after' => $this->options_hi('time_ago') . ' ' . $this->options_hi('ago_in_seconds') . ' ago',
				'inclusive' => true,
				'column' => 'comment_date',
              )
            );
	}
	 
	$lp = apply_filters( 'ntb_filter_arguments_recent_posts', $lp );
	$recent_posts_ntb = apply_filters( 'ntb_filter_get_all_recent_posts', wp_get_recent_posts( $lp ) );
	
    /* exemple
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
    exemple */
	
	$args_comms = apply_filters( 'ntb_filter_arguments_recent_comments', $args_comms );
    $comments_list = apply_filters( 'ntb_filter_get_all_recent_comments', get_comments($args_comms) );
	
	return array($recent_posts_ntb, $comments_list);
    }
	
    function get_time_recent($time_Out = '') {
	$recent = $this->get_recent();
	$recent_posts_ntb = $recent[0];
    $comments_list = $recent[1];
	
	$in_seconds = MINUTE_IN_SECONDS;
	if ($this->options_hi('latest_in_seconds') == 'minute')
	$in_seconds = MINUTE_IN_SECONDS;
	if ($this->options_hi('latest_in_seconds') == 'hour')
	$in_seconds = HOUR_IN_SECONDS;
	if ($this->options_hi('latest_in_seconds') == 'day')
	$in_seconds = DAY_IN_SECONDS;

	$time = $in_seconds * (int)$this->options_hi('time_latest');
	$get_news = array_filter(array_unique(array_map('trim',explode(PHP_EOL, $this->options('txt_news_manually')))));	
	
	if ($this->options('latest_p_c') == 'latest_posts') {
	$diference = $recent_posts_ntb ? current_time( 'timestamp' ) - mysql2date('U', $recent_posts_ntb[0]["post_date"]) : current_time( 'timestamp' );
	$timeOut = $diference >= $time ? '' : ($time - $diference) * 1000 ;	
	} else if ($this->options('latest_p_c') == 'latest_comments') {
	$comments__list = $comments_list ? $comments_list[0] : $comments_list;	
	$diference = $comments_list ? current_time( 'timestamp' ) - mysql2date('U', $comments__list->comment_date) : current_time( 'timestamp' );
	$timeOut = $diference >= $time ? '' : ($time - $diference) * 1000 ;	
	} else if ($this->options('latest_p_c') == 'manually') {
	$diference = $get_news && $this->options_hi('manually_date') ? current_time( 'timestamp' ) - mysql2date('U', $this->options_hi('manually_date')) : current_time( 'timestamp' );
	$timeOut = $diference >= $time ? '' : ($time - $diference) * 1000 ;	
	}		
	 
	if ($time_Out && $timeOut) return $timeOut;
	 
	if ( $this->options('latest_p_c') == 'latest_posts' && !$recent_posts_ntb || 
	$this->options('latest_p_c') == 'latest_comments' && count( $comments_list ) <= 0 ||
	$this->options('latest_p_c') == 'manually' && !$get_news) 
	$this->no_items = true; 

    if ($this->options('hide_if_noItems') && $this->no_items) return true; // hide if no item and hide_if_noItems option is enabled

    if ($this->options_hi('hide') == 'hide') { // hide after time without jquery
		
    if ( $diference >= $time )
	return true;
	
	} else if ($this->options_hi('hide') == 'hide_jquery') { // hide after time with jquery
	
	if ($diference >= $time + 1)
    return true;	
	}
    }
	
	function is_php_8_1_wpcore() {
		if (version_compare( PHP_VERSION, '8.1', '>=' ) && version_compare( get_bloginfo('version'), '6.2', '<'))
		return true;
	}
	 
}
