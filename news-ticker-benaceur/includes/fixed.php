<?php
    if ( ! defined( 'ABSPATH' ) ) exit;

class class______news_ticker_benaceur_fixed extends class______news_ticker_benaceur_functs {

    function div_in_top_bottom() {
	
	if (!$this->options_sty('fixed')) return;
	
	if ($this->options_sty('fixed_top_bottom_site') == 'top' && $this->options_sty('fixed_class_for_top') != '' ||
	$this->options_sty('fixed_top_bottom_site') == 'bottom' && $this->options_sty('fixed_class_for_bottom') != '')
	return;
	
	echo "<div class='ntb_add_class_to_wp_body_footer'></div>";
	}
	
    function height_marginBottom() {
	return $this->options_sty('fixed_class_for_bottom') == '' ? apply_filters( 'ntb_filter_fixed_class_height_marginbottom', 'margin-bottom' ) : apply_filters( 'ntb_filter_fixed_has_class_height_marginbottom', 'margin-bottom' );
	}
	
    function fixed_top_bottom_site() {
		
	ob_start();
	
	$top = false;
	
    if ($this->options_sty('fixed')) {
		
	if ($this->options_sty('fixed_top_bottom_site') == 'top')
    $top = true;
	
	?><style><?php
		
	$height = $this->options_anim('animation') == 'ScrollNTB' || !$this->options_sty('enable_style_mobile') ? $this->options_sty('height') : $this->options_sty('height_mobile');
		
	$fixed_top_bottom = !$this->options_sty('fixed_top_bottom') ? '0' : $this->options_sty('fixed_top_bottom') . 'px';
	$fixed_class_for_bottom = $this->options_sty('fixed_class_for_bottom') == '' ? '.ntb_add_class_to_wp_body_footer' : $this->options_sty('fixed_class_for_bottom');
	
	printf('
    .n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {
    width:%1$s;
    z-index:%2$s;
	%3$s:0;
	}',
	$this->options_sty('fixed_width') . '%',
	$this->options_sty('fixed_index'),
	is_rtl() ? 'right' : 'left'
	);

	$and = is_admin_bar_showing() || $this->options_sty('disable_fixed_600_for_top') ? 'and (min-width: 600px)' : '';
	
    if ($top) {
	?>
	.n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {
	top:<?php echo $fixed_top_bottom; ?>;
    }

	.news_ticker_ntb_ie8 {position: fixed;}
    .admin-bar .news_ticker_ntb_ie8 {top: <?php echo $this->adminbar46; ?>px;}

    @media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
	.n_t_ntb_b, .news-ticker-ntb {position: fixed;}
    .admin-bar .news-ticker-ntb, .admin-bar .n_t_ntb_b {top: <?php echo $this->adminbar32; ?>px;}
    }
    @media screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) <?php echo $and; ?> {
	.n_t_ntb_b, .news-ticker-ntb {position: fixed;}
    .admin-bar .news-ticker-ntb, .admin-bar .n_t_ntb_b {top: <?php echo $this->adminbar46; ?>px;}
    }
	
	<?php if (!$this->options_sty('disable_fixed_600_for_top')) { ?>
	@media only screen and (max-width: 600px) {
	.fixed_news_ticker_600_ntb {
    position: fixed;
	}
	}
	<?php } ?>

    <?php } else {
	
	$and_bottom = $this->options_sty('disable_fixed_600_for_bottom') ? 'and (min-width: 600px)' : '';
	?>
	.n_t_ntb_b, .news-ticker-ntb, .news_ticker_ntb_ie8 {
	bottom:<?php echo $fixed_top_bottom; ?>;
    }
	
	.news_ticker_ntb_ie8 {position: fixed;}
	
    @media only screen and (min-width: <?php echo $this->options_sty('screen_min_width'); ?>px) {
	.n_t_ntb_b, .news-ticker-ntb {position: fixed;}
	<?php echo $fixed_class_for_bottom; ?> {
	<?php echo $this->height_marginBottom() .': '. $this->options_sty('height'); ?>px;
    display: table;	
    }
    }
	
    @media screen and (max-width: <?php echo $this->options_sty('screen_max_width'); ?>px) <?php echo $and_bottom; ?> {
	.n_t_ntb_b, .news-ticker-ntb {position: fixed;}
      <?php echo $fixed_class_for_bottom; ?> {
      <?php echo $this->height_marginBottom() .': '. $height; ?>px;
	  display: table;
      }
    }
    <?php 
	}
	
	?></style><?php
	}
	
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
	}

    function fixed_top_600_script() {
    if ($this->options_sty('fixed') && $this->options_sty('fixed_top_bottom_site') == 'top' && !$this->options_sty('disable_fixed_600_for_top'))
	return true;	
	}

}