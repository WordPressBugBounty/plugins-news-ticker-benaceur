<style type="text/css">

.news-ticker-ntb li {margin-<?php echo $rtl_; ?>:0px;}

<?php
if (!$this->options('disable_title')) {
	
if ($this->options_sty('enable_style_mobile')) { ?>
@media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
#ntbne_five {
margin-<?php echo $rtl_; ?>:<?php echo $this->options_sty('width_title_background') + $this->options_anim('width_anms__two'); ?>px;
}
}

@media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
#ntbne_five {
margin-<?php echo $rtl_; ?>:<?php echo $this->options_anim('width_anms__two') +5; ?>px;
}
}	
<?php } else { ?>
#ntbne_five {
margin-<?php echo $rtl_; ?>:<?php echo $this->options_sty('width_title_background') + $this->options_anim('width_anms__two'); ?>px;
}
<?php }

}
?>

	<?php if ($this->options_anim('animation') == 'fade') { ?>
    #ntbne_five li{right:0px;}
	<?php } ?>
	
	<?php if ($this->options_anim('np_img_anms_two') == 'disable') { ?>	
    #next-button-ntb,#prev-button-ntb {display:none;}
	<?php } ?>	

	#ntbne_five li {
		position:relative;
		}

	#ntbne_five {
	    color:<?php echo $f_ntb_color_text_back; ?>;
	}
	.news-ticker-ntb ul a {		
	    color:<?php echo $f_ntb_color_text_back; ?>;
		text-decoration: none;
	}

	.news-ticker-ntb ul a:hover {
		color:<?php echo $this->options_sty('a_hover'); ?>;
		text-decoration: none;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
<?php if ($this->options_sty('enable_style_mobile')) { ?>
@media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
	
    #ntb--title {display:none; max-width:0px;}

	.news-ticker-ntb ul{
		padding-top: <?php echo $this->options_sty('padding_top_mobile'); ?>px;
    }
}
@media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
<?php } 
if (!$this->options('disable_title')) { ?>
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

<?php
}
if ($this->options_sty('enable_style_mobile')) { ?>
}	
<?php } ?>
	.news-ticker-ntb {
	font-family:<?php echo $this->options_sty('font_family'); ?>;
	font-size:<?php echo $this->options_sty('font_size'); ?>px;
	font-weight:<?php echo $this->options_sty('font_weight') ;?>;
	width:<?php echo $this->options_sty('width'); ?>;
	opacity:<?php echo $this->options_sty('opacity'); ?>;
	position:relative;
    overflow: hidden;
	}
	
	.news-ticker-ntb, #ntbne_five_c {
    	height:<?php echo $this->options_sty('height'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}

	<?php
	if ($this->options_anim('np_img_anms_two') == 'enable') { ?>
	#ntbne_five {margin-<?php echo $this->left_right(); ?>: 54px;}
	.news-ticker-ntb ul {width:auto !important;}
    <?php } else { ?>
	.news-ticker-ntb ul {width:auto !important;}
	#ntbne_five {margin-<?php echo $this->left_right(); ?>: 5px;}
	<?php } ?>

@media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
	
	.news-ticker-ntb ul a {
		white-space:normal;
	}
	
	#ntbne_five {
    	height:<?php echo $this->options_sty('height'); ?>px;
	}

	#ntbne_five li {
		overflow:hidden;
		list-style: none;
		margin-top:0px;
		display: block;
    	height:<?php echo $this->options_sty('height'); ?>px;
		line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}
	
<?php if ($this->options_sty('enable_style_mobile')) { ?>
	
	#ntbne_five {margin-<?php echo $this->left_right(); ?>: 10px;}
	.news-ticker-ntb ul {width:auto !important;}
	
	#ntbne_five {
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
	}

	#ntbne_five li {
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
		line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
	}
	.news-ticker-ntb, #ntbne_five_c {
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
	}
	
    #next-button-ntb,#prev-button-ntb {display:none;}
<?php } ?>	
}

@media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
	#ntbne_five li {
		overflow:hidden;
		list-style: none;
		margin-top:0px;
		display: block;
		line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}
	.news-ticker-ntb ul a {
		white-space:normal;
	}
}

    .news-ticker-ntb {
		overflow: hidden;
    }
</style>
