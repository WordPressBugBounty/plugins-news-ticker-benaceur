<?php
    switch ($this->options_anim('animation')) {
		case 'fadein':
		$ani = 'dist_from_left_right_fadein';
		break;
		case 'Scroll_Up_NTB':
		$ani = 'dist_from_left_right_scrollup';
		break;
		case 'ScrollNTB':
		$ani = 'dist_from_left_right_scrollntb';
		break;
		case 'TickerNTB':
		$ani = $this->is_ntb_rtl() ? 'margin_right_ltr_no_scr_typ' : 'margin_left_ltr_no_scr_typ';
		break;
		
		default;
		$ani = 'width_anms__two';
	}
?>

<style>
	.n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {
	margin:<?php echo "{$this->options_sty('margin_top')}px {$this->options_sty('margin_right')}px {$this->options_sty('margin_bottom')}px {$this->options_sty('margin_left')}px"; ?>;
	box-sizing: border-box;
    -webkit-box-sizing: border-box;
	border-<?php echo $this->right_left(); ?>:<?php echo $this->options_sty('border_right'); ?>px solid <?php echo $f_ntb_color_border; ?>;
	border-<?php echo $this->left_right(); ?>:<?php echo $this->options_sty('border_left'); ?>px solid <?php echo $f_ntb_color_border; ?>;
    border-radius:<?php echo $this->options_sty('border_radius'); ?>px;
	text-shadow: <?php if ($this->options_sty('text_shadow') == 'no') echo 'none'; else echo "{$this->options_sty('text_shadow_color')}"; ?>;
    }
	
	#ntbne_five_c, #ntbne_five_c_ie8 {
	border-top:<?php echo $this->options_sty('border_top'); ?>px solid <?php echo $f_ntb_color_border; ?>;
	border-bottom:<?php echo $this->options_sty('border_bottom'); ?>px solid <?php echo $f_ntb_color_border; ?>;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;	
	position: relative;
	<?php if ($this->options('disable_title') && $this->options_anim('animation') != 'TickerNTB') { ?>
	padding-<?php echo $this->right_left(); ?>: <?php echo $this->options_anim($ani); ?>px;
	<?php } ?>
	margin: 0;
	}
	
	.news-ticker-ntb ul, .news_ticker_ntb_ie8 ul {
	padding: 0px;
	margin: 0px;
	}
	
	<?php
	$border_top_bottom = $this->options_sty('border_top') + $this->options_sty('border_bottom');
	if ($this->options_sty('border_top') == $this->options_sty('border_bottom')) {
	$bor_top_bottom = 2;
	} elseif ($this->options_sty('border_top') != 0 && $this->options_sty('border_top') != $this->options_sty('border_bottom')) {
	$bor_top_bottom = -($border_top_bottom/2);
	} else {
	$bor_top_bottom = $border_top_bottom;
	}
	$_bor_top_bottom = $this->options_sty('line_height_title') - $bor_top_bottom;
	
	$bor_t_top_bottom = $this->options_sty('border_top_title') + $this->options_sty('border_bottom_title');
	if ($this->options_sty('border_top_title') == $this->options_sty('border_bottom_title')) {
	$t_bor_top_bottom = $bor_t_top_bottom;
	} elseif ($this->options_sty('border_top_title') > 0) {
	$t_bor_top_bottom = $this->options_sty('border_top_title') * 2;
	} elseif ($this->options_sty('border_bottom_title') > 0) {
	$t_bor_top_bottom = 0;
	} else {
	$t_bor_top_bottom = $bor_t_top_bottom;
	}
	
	if ($this->options('disable_title')) $t_bor_top_bottom = 0;
	?>

	#ntb--title, .n_t_ntb_b-name, #ntb--title_ie8 {
	    font-family:<?php echo $this->options_sty('title_font_family'); ?>; 
        box-sizing: border-box;
        -webkit-box-sizing: border-box;	
    	height:<?php echo $this->options_sty('height_title') ?>px;
		line-height:<?php echo $_bor_top_bottom - $t_bor_top_bottom; ?>px;
	    margin-top: <?php echo $this->options_sty('margin_top_title'); ?>px;
	    <?php if ($this->options_anim('animation') != 'TickerNTB') { ?>
	    margin-<?php echo $this->left_right(); ?>: <?php echo $this->options_anim($ani); ?>px;
	    <?php } ?>
		margin-<?php echo $this->right_left(); ?>: <?php echo $this->options_sty('margin_r_l_title'); ?>px;
	    border-top:<?php echo $this->options_sty('border_top_title'); ?>px solid <?php echo $this->options_sty('color_border_title'); ?>;
	    border-bottom:<?php echo $this->options_sty('border_bottom_title'); ?>px solid <?php echo $this->options_sty('color_border_title'); ?>;
	    border-<?php echo $this->right_left(); ?>:<?php echo $this->options_sty('border_right_title'); ?>px solid <?php echo $this->options_sty('color_border_title'); ?>;
	    border-<?php echo $this->left_right(); ?>:<?php echo $this->options_sty('border_left_title'); ?>px solid <?php echo $this->options_sty('color_border_title'); ?>;
		width: <?php echo $this->options_sty('width_title_background'); ?>px;
	}
	
	.news-ticker-ntb, .news_ticker_ntb_ie8 {
	    <?php if ($this->is_ntb_rtl()) { ?>	
		direction:rtl;
	    <?php } else { ?>
		direction:ltr;
	    <?php } ?>
		text-align:<?php echo $this->right_left(); ?>;
	}

    @media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
    .news-ticker-ntb, .n_t_ntb_b {letter-spacing: normal;}
	}
	
.ntb_ellip {
  display: block;
  height: 100%;
}

.ntb_ellip-line {
  text-overflow: ellipsis;
  white-space: nowrap;
  word-wrap: normal;
  max-width: 100%;
}

.ntb_ellip,
.ntb_ellip-line {
  position: relative;
  overflow: hidden;
}

    @media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
		
    <?php if ($this->options_sty('enable_style_mobile')) { ?>
	
	#ntbne2 ul, #ntbne_five_c {
	<?php if ($this->options_anim('animation') != 'TickerNTB') { ?>
	padding-<?php echo $this->right_left(); ?>: <?php echo $this->options_sty('padding_right_left_mobile') ?>px;
	<?php } ?>
	}
	
	#ntbne_five, #ntbne2 ul, #ntbne_five_c {
	padding-top: <?php echo $this->options_sty('padding_top_mobile'); ?>px;
	padding-bottom: 0px;
	margin-top: 0px;
	margin-bottom: 0px;
	margin-<?php echo $this->right_left(); ?>: 0px;
	}
	
	.news-ticker-ntb, .ticker-content, .n_t_ntb_b {
	font-size:<?php echo $this->options_sty('size_mobile'); ?>px;
	}
	<?php } ?>
	}

	<?php if ( !in_array($this->options_anim('animation'), array('TickerNTB','ScrollNTB')) ) { ?>
    .news-ticker-ntb ul {
	margin-top: 0px; 
	margin-bottom: 0px;
	}
	<?php } ?>

	<?php if ($this->options_anim('animation') != 'TickerNTB') { ?>
	
	<?php if ($this->is_ntb_rtl()) { ?>
	#next-button-ntb:before,#next-button-ntb_ie8:before {content: "\003C";}
	#prev-button-ntb:before,#prev-button-ntb_ie8:before {content: "\003E";}
    <?php } else { ?>	
	#next-button-ntb:before,#next-button-ntb_ie8:before {content: "\003E";}
	#prev-button-ntb:before,#prev-button-ntb_ie8:before {content: "\003C";}
    <?php } ?>	
	<?php } else { ?>
	<?php if ($this->is_ntb_rtl()) { ?>
	#next-button-ntb:before,#next-button-ntb_ie8:before {content: "\003C";}
	#prev-button-ntb:before,#prev-button-ntb_ie8:before {content: "\003E";}
    <?php } else { ?>	
	#next-button-ntb:before,#next-button-ntb_ie8:before {content: "\003E";}
	#prev-button-ntb:before,#prev-button-ntb_ie8:before {content: "\003C";}
    <?php } ?>	
	<?php } ?>
	
	#next-button-ntb:before, #next-button-ntb_ie8:before, #prev-button-ntb:before, #prev-button-ntb_ie8:before {
	font-family: Verdana, Tahoma;	
	font-weight: <?php echo $this->options_sty('prevNext_weight');?>;
	}
	
    #next-button-ntb, #prev-button-ntb, #next-button-ntb_ie8, #prev-button-ntb_ie8 {
    position:absolute;
	z-index: 99;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
	top:<?php echo $this->options_sty('prevNext_top');?>px;
	margin-top:<?php echo $this->options_sty('prevNext_top');?>px;
    font-size:<?php echo $this->options_sty('prevNext_font_size'); ?>px;
	color:<?php echo $this->options_sty('prevNext_color'); ?>;
	}
	
	<?php if ($this->is_ntb_rtl()) {
	$np__nlr = 'left: 34px;'; $np__plr = 'left: 10px;';
	} else {
	$np__nlr = 'right: 10px;'; $np__plr = 'right: 34px;';
	}
    printf( '#next-button-ntb, #next-button-ntb_ie8 {%1$s} #prev-button-ntb, #prev-button-ntb_ie8 {%2$s}',
	$np__nlr, 
	$np__plr
	); ?>
	
    #next-button-ntb:hover, #prev-button-ntb:hover, #next-button-ntb_ie8:hover, #prev-button-ntb_ie8:hover {
    filter: alpha(opacity=100);
    opacity: 1;
	}
	
	.n_t_ntb_b a, .news-ticker-ntb a, .news_ticker_ntb_ie8 a, .ntb_ellip {
	font-family:<?php echo $this->options_sty('font_family'); ?>; 
	text-decoration:none; 
	}
	
    .news-ticker-ntb, .news_ticker_ntb_ie8, .n_t_ntb_b a, .news-ticker-ntb a, .news_ticker_ntb_ie8 a, #ntb--title, .n_t_ntb_b-name, #ntb--title_ie8 {
	font-weight:<?php echo $this->options_sty('font_weight') ;?>;
	}

    <?php
	if ($this->options_anim('style_transparent') != 'no' && $this->options_anim('animation') != 'TickerNTB') {
		
    if ($this->options_anim('style_transparent') == 'black') {
	$color_bk = '0, 0, 0';
    $color_c = '255, 255, 255';
    $color_n_p = '#8f8f8f';
	$color_txt_h = '#847c7c';
	} else {
    $color_bk = '255, 255, 255';	
	$color_c = '0, 0, 0';
    $color_n_p = '#484545';
	$color_txt_h = '#424242';
	}

	printf( '
	.n_t_ntb_b a, #scroll-ntb a, #scroll-ntb span, .news-ticker-ntb ul a, .news_ticker_ntb_ie8 ul a, .news-ticker-ntb a, .news_ticker_ntb_ie8 a {color: rgb(%2$s);}
	.n_t_ntb_b a:hover, #scroll-ntb a:hover, .news-ticker-ntb ul a:hover, .news-ticker-ntb a:hover, .news_ticker_ntb_ie8 ul a:hover, .news_ticker_ntb_ie8 a:hover {color: %4$s;}
	
	.n_t_ntb_b, .news-ticker-ntb {
    background-color: rgba(%1$s, %5$s);
	opacity:1;
	}
    #next-button-ntb, #prev-button-ntb, #prev-button-ntb_ie8 {color: %3$s;}
	',
	$color_bk, $color_c, $color_n_p, $color_txt_h, $this->options_anim('opacity_style_transparent')
	);
	
	} else {
    printf(  '.n_t_ntb_b, .news-ticker-ntb {background-color:%1$s;}', $this->options_sty('color_back_') );
	}		
    ?>
   
	#ntbne_five li, #ntbne_five_ie8 li, #ntbne_five, #ntbne_five_ie8 {
    	height:<?php echo $this->options_sty('height') - $bor_; ?>px;
		line-height:<?php echo $this->options_sty('line_height') - $bor_li; ?>px;
	}
	#next-button-ntb, #prev-button-ntb, #prev-button-ntb_ie8 {
		line-height:<?php echo $this->options_sty('line_height') - $bor__pn; ?>px;
	}
	<?php
    if ($this->options_sty('enable_style_mobile')) { ?>
    @media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
		
	#ntbne_five li, #ntbne_five {
    	height:<?php echo $this->options_sty('height_mobile') - $bor_; ?>px;
		line-height:<?php echo $this->options_sty('line_height_mobile') - $bor_li; ?>px;
	}
	#next-button-ntb, #prev-button-ntb {
		line-height:<?php echo $this->options_sty('line_height_mobile') - $bor__pn; ?>px;
	}
	
	}
    <?php } ?>
	.n_t_ntb_b a, .news-ticker-ntb a, .news_ticker_ntb_ie8 a {display:block !important;}
</style>

<?php include ('inc/ie8.php'); ?>