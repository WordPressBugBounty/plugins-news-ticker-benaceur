

<!--[if lt IE 9]>
<style>
    .n_t_ntb_b, .news-ticker-ntb, #next-button-ntb_ie8,#prev-button-ntb_ie8 {display:none;}

	<?php
	if ($this->options_anim('disa_img_n_fadein') == 'disable_img_n_fadein') { ?>	
    #next-button-ntb_ie8,#prev-button-ntb_ie8 {display:none;}
	<?php } ?>	

	#ntbne_five_ie8 {
		margin-<?php echo $this->right_left(); ?>: 0;
		display:block;
	    color:#bebebe;
	}
	#ntbne_five_ie8 li {
		list-style: none;
		margin-top:0px;
		display: block;
	}
	.news_ticker_ntb_ie8 ul a {
	    color:<?php echo $f_ntb_color_text_back; ?>;
		text-decoration: none;
	}
	
	.news_ticker_ntb_ie8, #ntbne_five_ie8_c {
    	height:<?php echo $this->options_sty('height'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}

	#ntbne_five_ie8 {
    	height:<?php echo $this->options_sty('height'); ?>px;
	}
	#ntbne_five_ie8 li {
		overflow-y: hidden;
		list-style: none;
		margin-top:0px;
		display: block;
    	height:<?php echo $this->options_sty('height'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}
	.news_ticker_ntb_ie8 {
	    line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}
	.news_ticker_ntb_ie8 ul {
		overflow-y: hidden;
	}

	.news_ticker_ntb_ie8 ul a:hover {
		color:<?php echo $this->options_sty('a_hover'); ?>;
		text-decoration: none;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}

	#ntb--title_ie8 {
        z-index: 2;
		color:<?php echo $f_ntb_color_text_title; ?>;
		background-color:<?php echo $f_ntb_color_back_title ?>;
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
	
	.news_ticker_ntb_ie8 {
	font-family:<?php echo $this->options_sty('font_family'); ?>;
	font-size:<?php echo $this->options_sty('font_size'); ?>px;
	font-weight:<?php echo $this->options_sty('font_weight') ;?>;
	width:100%;
	opacity:<?php echo $this->options_sty('opacity'); ?>;
	position:relative;
    overflow: hidden;
	}
	
    .news_ticker_ntb_ie8 ul {
	margin-top: 0px; 
	margin-bottom: 0px;
	}
	
	.ntbne_old_browser_ie8 {
	padding:0 6px;
	background: yellow;	
	color: red;	
	}
	
</style>

<div class="news_ticker_ntb_ie8">
		 <?php if (!$this->options('disable_title') ) {	?>	 
		 <span id="ntb--title_ie8"><?php if ($this->options('title_ltr') != '' && !is_rtl()) { echo $this->options('title_ltr'); } elseif ($this->options('title_rtl') != '' && is_rtl()) { echo $this->options('title_rtl'); } else { if (!is_rtl()) { echo 'Latest news'; } else { echo 'آخر الأخبار'; } } ?></span>
		 <?php }
			if ($this->is_ntb_rtl()) { ?>
				<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb_ie8"></div></a>
				<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb_ie8"></div></a>
			<?php } else { ?>
				<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb_ie8"></div></a>
				<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb_ie8"></div></a>
			<?php } ?>				
					
				<ul id="ntbne_five_ie8" >
				<?php echo $li1; ?><a href="#" title="">
                <p class="ntbne_old_browser_ie8"><?php _e("Your browser is an old version, that's not compatible with this news ticker, update it!",'news-ticker-benaceur'); ?></p>
				</a><?php echo $li2; ?>
                </ul>
</div>

<![endif]-->
