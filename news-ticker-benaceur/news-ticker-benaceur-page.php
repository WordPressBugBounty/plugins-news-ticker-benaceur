<?php

    if ($this->get_time_recent()) return;
	
	/*		
	if ($this->options_sty('fixed') && $this->options_sty('fixed_top_bottom_site') == 'bottom' && $this->options_sty('fixed_class_for_bottom') == '') {
	$this->div_in_top_bottom();
	}
	*/		
	if ($this->options_anim('animation') != 'ScrollNTB') {
	$li1 = '<li>';
	$li2 = '</li>';
	?>
		<div class="news-ticker-ntb">
		 <?php if (!$this->options('disable_title') ) {	?>	 
		 <span id="ntb--title"><?php if ($this->options('title_ltr') != '' && !is_rtl()) { echo $this->options('title_ltr'); } elseif ($this->options('title_rtl') != '' && is_rtl()) { echo $this->options('title_rtl'); } else { if (!is_rtl()) { echo 'Latest news'; } else { echo 'آخر الأخبار'; } } ?></span>
		 <?php }
		echo '<div id="ntbne_five_c">';	
		if ($this->options_anim('animation') != 'TickerNTB') {
			if ($this->is_ntb_rtl()) { ?>
				<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
				<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
			<?php } else { ?>
				<a title="<?php _e("next",'news-ticker-benaceur'); ?>" href="#"><div id="next-button-ntb"></div></a>
				<a title="<?php _e("prev",'news-ticker-benaceur'); ?>" href="#"><div id="prev-button-ntb"></div></a>
			<?php } ?>				
					
				<ul id="ntbne_five" >
			<?php
			require_once ('get-news.php');
			?>
                </ul>
				
        <?php } else { ?>
				<ul id="ntbne2" class="js-hidden">
			<?php
			require ('get-news.php');
			?>
                </ul>
		<?php }	 ?>
		</div>
        </div>	
		
<?php		
        //if ($this->no_items) echo '<style type="text/css">.news-ticker-ntb {display:none;}</style>';

		} else {
		$li1 = '<span class="n_t_ntb_bimg"><span><span class="ntb_img_post_t_scrollntb"></span></span><span>';
        $li2 = '</span></span>';
		$ori = $this->right_left();
			?> 
			<div class="n_t_ntb_b"><div class="n_t_ntb_b2">
	        <?php if (!$this->options('disable_title')) { ?>			  
            <span class="n_t_ntb_b-name"><?php if ($this->options('title_ltr') != '' && !is_rtl()) { echo $this->options('title_ltr'); } elseif ($this->options('title_rtl') != '' && is_rtl()) { echo $this->options('title_rtl'); } else { if (!is_rtl()) { echo 'Latest news'; } else { echo 'آخر الأخبار'; } } ?></span>
	        <?php } ?>
			<div id="ntbne_five_c">
            <div style="position:relative; overflow:hidden;" id="scroll-ntb">
		    <div style="position:absolute; white-space:nowrap;" id="scroll-ntb-elem">
			<?php
			$getID_attachment = $this->options_anim('image_att_scrollntb');
			$img_attachment = $getID_attachment ? wp_get_attachment_url( $getID_attachment ) : plugins_url('img/ntb-topics.jpeg', NTB_BEN_BASENAME) ;
			require_once ('get-news.php');
			?>
			</div>
            </div>
			</div>
            </div></div>

			<?php
	    //if ($this->no_items) echo '<style type="text/css">.n_t_ntb_b {display:none;}</style>';
		 }
			
	$this->div_in_top_bottom();
	
    do_action('wp_news_ticker_benaceur_anim_scripts');
    do_action('action_page_news_ticker_benaceur');