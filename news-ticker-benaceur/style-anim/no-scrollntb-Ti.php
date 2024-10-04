<style type="text/css">
	.ticker-title, .ticker-title span {
    color:transparent;
	z-index:-99;
	/*
	max-width:0px;
	min-width:0px;
	*/
    }
	.news-ticker-ntb, #ticker p {
    	line-height:<?php echo $this->options_sty('line_height') - $bor_ticker; ?>px;
	}
	.ticker-swipe, #ticker {
    	height:<?php echo $this->options_sty('height') - $bor__; ?>px;
    	line-height:<?php echo $this->options_sty('line_height') - $bor_ticker; ?>px;
	}
	.news-ticker-ntb, #ntbne_five_c {
    	height:<?php echo $this->options_sty('height'); ?>px;
	}
	.news-ticker-ntb {
		overflow:hidden;
	}
    #ntbne2 li {margin-<?php echo $rtl_; ?>:0px; overflow-y: hidden;}

	.news-ticker-ntb {
	background:<?php echo $this->options_sty('color_back_'); ?>;
	width:<?php echo $this->options_sty('width'); ?>;
	opacity:<?php echo $this->options_sty('opacity'); ?>;
	position:relative;	
	}

/* Ticker Styling */
.ticker-wrapper.has-js {
}
.ticker {
	/*width: 100%;*/
	/*position: relative;*/
	height:<?php echo $this->options_sty('height'); ?>px;
	line-height:<?php echo $this->options_sty('line_height'); ?>px;
}

<?php if ($this->options_sty('enable_style_mobile')) { ?>
@media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
<?php } ?>
	
	#ntb--title {
		z-index: 2;
		color:<?php echo $f_ntb_color_text_title; ?>;
		background-color:<?php echo $f_ntb_color_back_title; ?>;
    	font-size:<?php echo $this->options_sty('font_size_title'); ?>px;
		display:block;
		float:<?php echo $this->right_left(); ?>;
		height:<?php echo $this->options_sty('height_title'); ?>px;
		text-align:center;
		<?php if ($this->options('title_pulsate')) {  ?>
        animation: pulsateNTB 1.2s linear infinite;
		-webkit-animation: pulsateNTB 1.2s linear infinite;
        <?php } ?>
    	line-height:<?php echo $this->options_sty('line_height_title'); ?>px;

<?php if ($this->options('title_styles') == 'radiusTileSt') { ?>	
<?php if (!is_rtl() && $this->options('dir') != 'rtl' || is_rtl() && $this->options('dir') == 'ltr') { ?>
-moz-border-radius-topleft: <?php echo $this->options('title_styles_topleft_lef'); ?>px;
-webkit-border-top-left-radius: <?php echo $this->options('title_styles_topleft_lef'); ?>px;
 border-top-left-radius: <?php echo $this->options('title_styles_topleft_lef'); ?>px;
-moz-border-radius-topright: <?php echo $this->options('title_styles_topright_lef'); ?>px;
-webkit-border-top-right-radius: <?php echo $this->options('title_styles_topright_lef'); ?>px;
border-top-right-radius: <?php echo $this->options('title_styles_topright_lef'); ?>px;
<?php } else { ?>	
-moz-border-radius-topleft: <?php echo $this->options('title_styles_topleft_ri'); ?>px;
-webkit-border-top-left-radius: <?php echo $this->options('title_styles_topleft_ri'); ?>px;
 border-top-left-radius: <?php echo $this->options('title_styles_topleft_ri'); ?>px;
-moz-border-radius-topright: <?php echo $this->options('title_styles_topright_ri'); ?>px;
-webkit-border-top-right-radius: <?php echo $this->options('title_styles_topright_ri'); ?>px;
border-top-right-radius: <?php echo $this->options('title_styles_topright_ri'); ?>px;
<?php } ?>	
-moz-border-radius-bottomright: <?php echo $this->options('title_styles_bottomright'); ?>px;
-webkit-border-bottom-right-radius: <?php echo $this->options('title_styles_bottomright'); ?>px;
border-bottom-right-radius: <?php echo $this->options('title_styles_bottomright'); ?>px;
-moz-border-radius-bottomleft: <?php echo $this->options('title_styles_bottomleft'); ?>px;
-webkit-border-bottom-left-radius: <?php echo $this->options('title_styles_bottomleft'); ?>px;
border-bottom-left-radius: <?php echo $this->options('title_styles_bottomleft'); ?>px;
<?php } ?>	

	}
    @-webkit-keyframes pulsateNTB
    {
	0%   { color: #ddd; text-shadow: 0 -1px 0 #000; }
	50%  { color: #fff; text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff; }
	100% { color: #ddd; text-shadow: 0 -1px 0 #000; }
    }
    @keyframes pulsateNTB
    {
	0%   { color: #ddd; text-shadow: 0 -1px 0 #000; }
	50%  { color: #fff; text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff; }
	100% { color: #ddd; text-shadow: 0 -1px 0 #000; }
    }

<?php if ($this->options_sty('enable_style_mobile')) { ?>
}
<?php } ?>

	.ticker-content {
	font-size:<?php echo $this->options_sty('font_size'); ?>px;
	font-weight:<?php echo $this->options_sty('font_weight') ;?>;
	position: absolute;
	color: <?php echo $f_ntb_color_text_back; ?>;
	background-color: transparent;
	overflow: hidden;
	margin-top:<?php echo $this->options_anim('margin_top_no_scr_typ'); ?>px;
    margin-bottom: 0px;
<?php if (!is_rtl() && $this->options('dir') == 'rtl') { ?>
	direction:rtl;
<?php } elseif (is_rtl() && $this->options('dir') == 'ltr') { ?>
	direction:ltr;
<?php } ?>
}

.ticker-content:focus {
	none;
}
.ticker-content a {
	font-family:<?php echo $this->options_sty('font_family'); ?>;
	text-decoration: none;	
	color: <?php echo $f_ntb_color_text_back; ?>;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
	transition: all 0.5s ease-out;
}
.ticker-content a:hover {
	color: <?php echo $this->options_sty('a_hover'); ?>;
    text-decoration: none;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
	transition: all 0.5s ease-out;
}
.ticker-swipe {
	position: absolute;
	padding-top: <?php echo $this->options_anim('margin_top_no_scr_typ'); ?>px;
	background-color: <?php echo $this->options_sty('color_back_'); ?>;
	display: block;
	width: 100%;
	height: 100%;
}
.ticker-swipe span {
	margin-<?php echo $this->right_left(); ?>: 4px;
	background-color: <?php echo $this->options_sty('color_back_'); ?>;
	border-bottom: <?php if ($this->options_anim('cursor_bold_typ1') == 'normal') echo '1'; else echo '2'; ?>px solid <?php echo $f_ntb_color_text_back; ?>;
	<?php if ($this->options_anim('enable_curs_no_scr_typ') == 'enable') { ?>
	height: auto;
	width: 8px;
	<?php } elseif ($this->options_anim('enable_curs_no_scr_typ') == 'disable') { ?>
	height: 0px;
	width: 0px;
	<?php } ?>
	display: inline-block;
	position: relative;
	top: <?php echo $this->options_anim('cursor_top_typ1'); ?>px;
	<?php echo $this->right_left(); ?>: 0px;
}
.ticker-controls {
	list-style-type: none;
	float: left;
	margin: 0px;
}
.js-hidden {
	display: none;
}
.news-ticker-ntb .left .ticker-swipe {
	/*left: 80px;*/
}

#ntbne_five_c {
	/*
	display: -webkit-box;
	display: -ms-flexbox;
	display: -moz-box;
	*/
}

.news-ticker-ntb .ticker-wrapper.right, .news-ticker-ntb .ticker-wrapper.left {
    float: inherit; 
	/*
	display: -webkit-box;
	display: -ms-flexbox;
	display: -moz-box;
	*/
}
.news-ticker-ntb .left .ticker-controls, .news-ticker-ntb .left .ticker-content, .news-ticker-ntb .left .ticker-title, .news-ticker-ntb .left .ticker {
    float: left;
}
.news-ticker-ntb .left .ticker-controls {
    padding-left: 6px;
}
.news-ticker-ntb .right .ticker-swipe {
	/*right: 80px;*/
}

.news-ticker-ntb .right .ticker-controls, .news-ticker-ntb .right .ticker-content, .news-ticker-ntb .right .ticker-title, .news-ticker-ntb .right .ticker {
    float: right; 
}
.news-ticker-ntb .right .ticker-controls {
    padding-right: 6px;
}
    .ticker-wrapper a {overflow:hidden;}
	
.ticker-swipe, #ticker p {
    margin-<?php $ani = $this->is_ntb_rtl() ? 'margin_right_ltr_no_scr_typ' : 'margin_left_ltr_no_scr_typ'; echo $this->right_left(); ?>: <?php echo $this->options_anim($ani); ?>px;
}	

.ticker-content {
	<?php echo "{$this->right_left()}: "; if (!$this->options('disable_title')) echo $this->options_sty('width_title_background'); else echo '0'; ?>px;
}

@media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {

<?php if ($this->options_sty('enable_style_mobile')) { ?>

#ntb--title, #next-button-ntb,#prev-button-ntb {display:none;}
	
.news-ticker-ntb .ticker-content {
	<?php echo $this->right_left(); ?>: 0px;
}
	
.ticker-swipe, #ticker p {
    margin-<?php echo $this->right_left(); ?>: <?php echo $this->options_sty('padding_right_left_mobile'); ?>px;
}	

    .ticker {
		height:<?php echo $this->options_sty('height_mobile'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
    }
	
	.ticker-content {
		padding-top: <?php echo $this->options_sty('padding_top_mobile'); ?>px;
    }
	
    .news-ticker-ntb .right .ticker-content {padding-left :10px;}
    .news-ticker-ntb .left .ticker-content {padding-right :10px;}
	
	
	.news-ticker-ntb , .news-ticker-ntb p {
	line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
	}
	
	#ntbne2 {
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
	}
	#ntbne2 li {
		overflow-y: hidden;
		list-style: none;
		margin-top:0px;
		display: block;
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
	}
	
	.ticker-swipe, .news-ticker-ntb .ticker-wrapper {
	padding-<?php echo $this->left_right(); ?>: 10px;
	}
	
	.news-ticker-ntb, #ntbne_five_c {
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
	}

	.news-ticker-ntb, #ticker p {
    	line-height:<?php echo $this->options_sty('line_height_mobile') - $bor_ticker; ?>px;
	}
	
	.ticker-swipe, #ticker {
    	height:<?php echo $this->options_sty('height_mobile') - $bor__; ?>px;
    	line-height:<?php echo $this->options_sty('line_height_mobile') - $bor_ticker; ?>px;
	}
	
<?php } ?>
}
</style>