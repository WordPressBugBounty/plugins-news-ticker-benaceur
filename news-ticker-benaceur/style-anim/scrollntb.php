<?php 
if ($this->options('dir') == 'auto' && !is_rtl() || $this->options('dir') == 'ltr') { $ori_padd1 = $this->options_anim('ri_le_img_scrollntb'); $ori_padd2 = $this->options_anim('le_ri_img_scrollntb'); } else { $ori_padd1 = $this->options_anim('le_ri_img_scrollntb'); $ori_padd2 = $this->options_anim('ri_le_img_scrollntb'); }
	
$getID_attachment = $this->options_anim('image_att_scrollntb');
$img_attachment = $getID_attachment ? wp_get_attachment_url( $getID_attachment ) : plugins_url('img/ntb-topics.jpeg', NTB_BEN_BASENAME) ;
 ?>

<style type="text/css">
.n_t_ntb_bimg {display: none;}

.n_t_ntb_bimg {
margin:0 <?php echo $this->options_anim('dist_between_scrollntb'); ?>px;
}
.n_t_ntb_bimg span {display:inline-block; vertical-align:middle;}

.ntb_img_post_t_scrollntb::before {
content:"<?php echo apply_filters( 'ntb_filter_content_before_scrollntb', '' ); ?>";
}

.ntb_img_post_t_scrollntb {
margin:0 <?php echo $ori_padd1; ?>px 0 <?php echo $ori_padd2; ?>px;
<?php if (! has_filter( 'ntb_filter_content_before_scrollntb' ) && !$this->options_anim('dis_icon_scrollntb')) { ?>
background:url(<?php echo $img_attachment; ?>) no-repeat;
background-size: <?php echo $this->options_anim('w_img_scrollntb'); ?>px <?php echo $this->options_anim('h_img_scrollntb'); ?>px;
width:<?php echo $this->options_anim('w_img_scrollntb'); ?>px;
height:<?php echo $this->options_anim('h_img_scrollntb'); ?>px;
float:<?php echo $ori; ?>;
<?php }	?>
}


<?php if ($this->options_sty('disable_in_screen_max_width')) { ?>
@media only screen and (max-width: <?php echo $this->options_sty('v_screen_max_width'); ?>px) {
	.n_t_ntb_b {display:none;}
}
<?php } else if ($this->options_anim('disable_title_scr_mobile_s')) { ?>
@media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
	.n_t_ntb_b .n_t_ntb_b-name {display:none;}
	
	#ntbne_five_c { 
	padding-<?php echo $this->left_right(); ?>:5px;
	}
	
}
<?php } ?>

	.n_t_ntb_b {
		font-size:<?php echo $this->options_sty('font_size'); ?>px;
		font-weight:<?php echo $this->options_sty('font_weight') ;?>;
		width:<?php echo $this->options_sty('width'); ?>;
    	opacity:<?php echo $this->options_sty('opacity'); ?>;
		overflow:hidden;
		position:relative;	
	}
	#scroll-ntb {
        <?php if (!is_rtl() && $this->options('dir') == 'rtl') { ?>
		direction:rtl;
        <?php } elseif (is_rtl() && $this->options('dir') == 'ltr') { ?>
		direction:ltr;
        <?php } ?>
		color:<?php echo $f_ntb_color_text_back; ?>;
	}
	#scroll-ntb a {
		color:<?php echo $f_ntb_color_text_back; ?>;
		text-decoration: none;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	}
	#scroll-ntb a:hover {
		color:<?php echo $this->options_sty('a_hover'); ?>;
		text-decoration: none;
	   -webkit-transition: all 0.5s ease-out;
	   -moz-transition: all 0.5s ease-out;
	   -o-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
		}
		
	.n_t_ntb_b-name {
		color:<?php echo $f_ntb_color_text_title; ?>;
		background-color:<?php echo $f_ntb_color_back_title; ?>;
    	font-size:<?php echo $this->options_sty('font_size_title'); ?>px;
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

	#scroll-ntb div {
		margin-top:<?php echo $this->options_sty('padding_top'); ?>px;
        margin-bottom:<?php echo $this->options_sty('padding_bottom'); ?>;
	}

/* for limarquee
.str_wrap {
	overflow:hidden;
	width:100%;
	position:relative;
	white-space:nowrap;
}

.str_move { 
	white-space:nowrap;
	position:absolute; 
}
.str_vertical .str_move,
.str_down .str_move {
	white-space:normal;
	width:100%;
}
*/

	.n_t_ntb_b, #scroll-ntb, #ntbne_five_c {
    	height:<?php echo $this->options_sty('height'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height'); ?>px;
	}

@media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
	#ntbne_five_c {
	padding-<?php echo $this->left_right(); ?>:5px;
	}
}

@media only screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) {
	<?php if ($this->options_sty('enable_style_mobile')) { ?>
	.n_t_ntb_b, #scroll-ntb, #ntbne_five_c {
    	height:<?php echo $this->options_sty('height_mobile'); ?>px;
	    line-height:<?php echo $this->options_sty('line_height_mobile'); ?>px;
	}
	<?php } ?>
}
</style>