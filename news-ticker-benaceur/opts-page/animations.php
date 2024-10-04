<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<div class="wrap ntb">

<div id="go2-setting-ntb"></div>
<span id="ntb4-4"></span>
        <h3 style="font-family: DroidKufi_Ben, sans-serif;"><span style="position:absolute;line-height: 2em;" class="dashicons dashicons-layout"></span><span style="padding:0 26px;line-height: 2em;"><span style="padding:0 6px;border-bottom:3px solid #666;"><?php _e('Animation / effects', 'news-ticker-benaceur'); ?></span></span></h3><br>

<table class="form-table">
                 <tr valign="top">
                    <th scope="row"><?php _e('Animation', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select  style="min-width:100px;text-align:center;"  name="<?php echo $this->option_anim('animation'); ?>"  class="news-ticker-benaceur-color-inp selAnim" >
				<option value="fadein" <?php selected('fadein', $this->options_anim('animation')); ?>><?php _e('FadeIn', 'news-ticker-benaceur'); ?></option>
				<option value="Scroll_Up_NTB" <?php selected('Scroll_Up_NTB', $this->options_anim('animation')); ?>><?php _e('Slide-Up-Down', 'news-ticker-benaceur'); ?></option>
				<option value="ScrollNTB" <?php selected('ScrollNTB', $this->options_anim('animation')); ?>><?php _e('Scroll-H', 'news-ticker-benaceur'); ?></option>
				<option value="TickerNTB" <?php selected('TickerNTB', $this->options_anim('animation')); ?>><?php _e('Typing 1', 'news-ticker-benaceur'); ?></option>
				<option value="fade" <?php selected('fade', $this->options_anim('animation')); ?>><?php _e('Fade', 'news-ticker-benaceur'); ?></option>
				<option value="curtainY" <?php selected('curtainY', $this->options_anim('animation')); ?>><?php _e('Curtain Ver', 'news-ticker-benaceur'); ?></option>
				<option value="curtainX" <?php selected('curtainX', $this->options_anim('animation')); ?>><?php _e('Curtain Hor', 'news-ticker-benaceur'); ?></option>
				<option value="turnUp" <?php selected('turnUp', $this->options_anim('animation')); ?>><?php _e('Turn Up', 'news-ticker-benaceur'); ?></option>
				<option value="turnDown" <?php selected('turnDown', $this->options_anim('animation')); ?>><?php _e('Turn Down', 'news-ticker-benaceur'); ?></option>
				<option value="turnLeft" <?php selected('turnLeft', $this->options_anim('animation')); ?>><?php _e('Turn Left', 'news-ticker-benaceur'); ?></option>
				<option value="turnRight" <?php selected('turnRight', $this->options_anim('animation')); ?>><?php _e('Turn Right', 'news-ticker-benaceur'); ?></option>
				<option value="slideY" <?php selected('slideY', $this->options_anim('animation')); ?>><?php _e('Slide', 'news-ticker-benaceur'); ?></option>
				<option value="slideX" <?php selected('slideX', $this->options_anim('animation')); ?>><?php _e('Slide Hor', 'news-ticker-benaceur'); ?></option>
				<option value="growX" <?php selected('growX', $this->options_anim('animation')); ?>><?php _e('Grow Hor', 'news-ticker-benaceur'); ?></option>
				<option value="growY" <?php selected('growY', $this->options_anim('animation')); ?>><?php _e('Grow Ver', 'news-ticker-benaceur'); ?></option>
				<option value="scrollLeft" <?php selected('scrollLeft', $this->options_anim('animation')); ?>><?php _e('Scroll left', 'news-ticker-benaceur'); ?></option>
				<option value="scrollRight" <?php selected('scrollRight', $this->options_anim('animation')); ?>><?php _e('Scroll right', 'news-ticker-benaceur'); ?></option>
				<option value="fadeUp" <?php selected('fadeUp', $this->options_anim('animation')); ?>><?php _e('Fade Up', 'news-ticker-benaceur'); ?></option>
				<option value="fadeLR" <?php selected('fadeLR', $this->options_anim('animation')); ?>><?php _e('Fade LR', 'news-ticker-benaceur'); ?></option>
				<option value="fadeZoom" <?php selected('fadeZoom', $this->options_anim('animation')); ?>><?php _e('Fade On', 'news-ticker-benaceur'); ?></option>
				<option value="zoom" <?php selected('zoom', $this->options_anim('animation')); ?>><?php _e('Fade In', 'news-ticker-benaceur'); ?></option>
				<option value="shuffle" <?php selected('shuffle', $this->options_anim('animation')); ?>><?php _e('Shuffle', 'news-ticker-benaceur'); ?></option>
				<option value="toss" <?php selected('toss', $this->options_anim('animation')); ?>><?php _e('Toss', 'news-ticker-benaceur'); ?></option>
				<option value="blindZ" <?php selected('blindZ', $this->options_anim('animation')); ?>><?php _e('Blind bott', 'news-ticker-benaceur'); ?></option>
				<option value="uncover" <?php selected('uncover', $this->options_anim('animation')); ?>><?php _e('Uncover', 'news-ticker-benaceur'); ?></option>
				<option value="simple" <?php selected('simple', $this->options_anim('animation')); ?>><?php _e('Simple', 'news-ticker-benaceur'); ?></option>
				<option value="typing_2" <?php selected('typing_2', $this->options_anim('animation')); ?>><?php _e('Typing 2', 'news-ticker-benaceur'); ?></option>
				</select></div>
				</td>
                </tr>
</table>

<br><div class="to-tr2"></div><br>
					<div>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select style="width:118px;height:24px;text-align:center;" id="dropdown_style_transparent" name="<?php echo $this->option_anim('style_transparent'); ?>" class="news-ticker-benaceur-color-inp trans_bk">
						<option value="no" <?php selected('no', $this->options_anim('style_transparent')); ?>><?php _e('Disable', 'news-ticker-benaceur'); ?></option>
						<option value="black" <?php selected('black', $this->options_anim('style_transparent')); ?>><?php _e('Black', 'news-ticker-benaceur'); ?></option>
						<option value="white" <?php selected('white', $this->options_anim('style_transparent')); ?>><?php _e('White', 'news-ticker-benaceur'); ?></option>
						</select></div>
						</div></div>
						<div class="colwrap-display"><td><?php echo __("Transparent background",'news-ticker-benaceur') .' '. __("(not fot typing1)",'news-ticker-benaceur'); ?> </td></div><br>
					</div>
					
					<div class="hide_trans_bk2 box_trans_bk2">
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input style="direction:ltr;width:118px;height:24px;text-align:center;" type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_anim('opacity_style_transparent') ); ?>" name="<?php echo $this->option_anim('opacity_style_transparent'); ?>" />
							</div></div>
						<div class="colwrap-display"><td><?php echo __("The level of transparency 1-0.1",'news-ticker-benaceur') .' '. __("(not fot typing1)",'news-ticker-benaceur'); ?> </td></div><br>
					</div>
<br><div class="to-tr2"></div><br>

<!-- Typing -->
<div class="fsub-ntb box">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('speed_no_scr_typ'); ?>" value="<?php echo esc_attr( $this->options_anim('speed_no_scr_typ') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('padding top', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('margin_top_no_scr_typ'); ?>" value="<?php echo esc_attr( $this->options_anim('margin_top_no_scr_typ') ); ?>" /></div>
                   </td>
                </tr>
                <tr style="<?php if (!$this->is_ntb_rtl()) echo "display:none;"; ?>" valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Distance from the right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('margin_right_ltr_no_scr_typ'); ?>" value="<?php echo esc_attr( $this->options_anim('margin_right_ltr_no_scr_typ') ); ?>" /></div>
                   </td>
                </tr>
                <tr style="<?php if ($this->is_ntb_rtl()) echo "display:none;"; ?>" valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Distance from the left', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('margin_left_ltr_no_scr_typ'); ?>" value="<?php echo esc_attr( $this->options_anim('margin_left_ltr_no_scr_typ') ); ?>" /></div>
                   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('pause__typing'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('pause__typing'); ?>" value="1" <?php checked( $this->options_anim('pause__typing'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
					<tr>
						<td>
                   <input type="radio" id="option_anim_enable_curs_no_scr_typ1" name="<?php echo $this->option_anim('enable_curs_no_scr_typ'); ?>" value="enable" <?php if( $this->options_anim('enable_curs_no_scr_typ') == 'enable') echo 'checked';?> >
                    <td><label for="option_anim_enable_curs_no_scr_typ1"><?php _e("Enable cursor",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="option_anim_enable_curs_no_scr_typ2" name="<?php echo $this->option_anim('enable_curs_no_scr_typ'); ?>" value="disable" <?php if( $this->options_anim('enable_curs_no_scr_typ') == 'disable') echo 'checked';?> >
                   <td><label for="option_anim_enable_curs_no_scr_typ2"><?php _e("Disable cursor",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('The distance top of the indicator', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('cursor_top_typ1'); ?>" value="<?php echo esc_attr( $this->options_anim('cursor_top_typ1') ); ?>" /></div>
                   </td>
                </tr>
</table>
				
<table class="form-table">
                 <tr valign="top">
                    <th scope="row"><?php _e('Indicator size', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select  style="min-width:100px;text-align:center;"  name="<?php echo $this->option_anim('cursor_bold_typ1'); ?>"  class="news-ticker-benaceur-color-inp selAnim" >
				<option value="normal" <?php selected('normal', $this->options_anim('cursor_bold_typ1')); ?>><?php _e('Normal', 'news-ticker-benaceur'); ?></option>
				<option value="bold" <?php selected('bold', $this->options_anim('cursor_bold_typ1')); ?>><?php _e('Bold', 'news-ticker-benaceur'); ?></option>
				</select></div>
				</td>
                </tr>
</table>

<table class="form-table">
					<tr>
						<td>
                   <input type="radio" id="option_anim_np_img_no_scr_typ1" name="<?php echo $this->option_anim('np_img_no_scr_typ'); ?>" value="enable" <?php if( $this->options_anim('np_img_no_scr_typ') == 'enable')echo 'checked';?> >
                    <td><label for="option_anim_np_img_no_scr_typ1"><?php _e("Enable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="option_anim_np_img_no_scr_typ2" name="<?php echo $this->option_anim('np_img_no_scr_typ'); ?>" value="disable" <?php if( $this->options_anim('np_img_no_scr_typ') == 'disable')echo 'checked';?> >
                   <td><label for="option_anim_np_img_no_scr_typ2"><?php _e("Disable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable autostart', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('autostart_typ1'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('autostart_typ1'); ?>" value="1" <?php checked( $this->options_anim('autostart_typ1'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
</table>
</br>
</div>
<!-- Typing -->

<!-- Fade -->
<div class="fvsub-ntb box">
</br>
</div>
<!-- Fade -->

<!-- Slide -->
<div class="sxsub-ntb box">
</br>
</div>
<!-- Slide -->

<!-- Slide-Up-Down -->
<div class="tsub-ntb box">
<table class="form-table">
					<tr>
						<td>
                   <input type="radio" id="option_anim_disa_img_n_scrollup1" name="<?php echo $this->option_anim('disa_img_n_scrollup'); ?>" value="enable_img_n_scrollup" <?php if( $this->options_anim('disa_img_n_scrollup') == 'enable_img_n_scrollup')echo 'checked';?> >
                    <td><label for="option_anim_disa_img_n_scrollup1"><?php _e("Enable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="option_anim_disa_img_n_scrollup2" name="<?php echo $this->option_anim('disa_img_n_scrollup'); ?>" value="disable_img_n_scrollup" <?php if( $this->options_anim('disa_img_n_scrollup') == 'disable_img_n_scrollup')echo 'checked';?> >
                   <td><label for="option_anim_disa_img_n_scrollup2"><?php _e("Disable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
					<tr>
						<td>
                   <input type="radio" id="option_anim_updown_slide_up_down1" name="<?php echo $this->option_anim('updown_slide_up_down'); ?>" value="up_slide_u_d" <?php if( $this->options_anim('updown_slide_up_down') == 'up_slide_u_d') echo 'checked';?> >
                    <td><label for="option_anim_updown_slide_up_down1"><?php _e("Up",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="option_anim_updown_slide_up_down2" name="<?php echo $this->option_anim('updown_slide_up_down'); ?>" value="down_slide_u_d" <?php if( $this->options_anim('updown_slide_up_down') == 'down_slide_u_d') echo 'checked';?> >
                   <td><label for="option_anim_updown_slide_up_down2"><?php _e("Down",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('pause_slide_up_down'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('pause_slide_up_down'); ?>" value="1" <?php checked( $this->options_anim('pause_slide_up_down'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable autostart', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('autostart_slide_up_down'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('autostart_slide_up_down'); ?>" value="1" <?php checked( $this->options_anim('autostart_slide_up_down'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('timeout_slide_up_down'); ?>" value="<?php echo esc_attr( $this->options_anim('timeout_slide_up_down') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('speed_slide_up_down'); ?>" value="<?php echo esc_attr( $this->options_anim('speed_slide_up_down') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php if ($this->is_ntb_rtl()) _e('Distance from the right', 'news-ticker-benaceur'); else _e('Distance from the left', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('dist_from_left_right_scrollup'); ?>" value="<?php echo esc_attr( $this->options_anim('dist_from_left_right_scrollup') ); ?>" /></div>
                   </td>
                </tr>
</table>
</br>
</div>
<!-- Slide-Up-Down -->

<!-- FadeIn -->
<div class="thsub-ntb box">
<table class="form-table">
					<tr>
						<td>
                   <input type="radio" id="option_anim_disa_img_n_fadein1" name="<?php echo $this->option_anim('disa_img_n_fadein'); ?>" value="enable_img_n_fadein" <?php if( $this->options_anim('disa_img_n_fadein') == 'enable_img_n_fadein')echo 'checked';?> >
                    <td><label for="option_anim_disa_img_n_fadein1"><?php _e("Enable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="option_anim_disa_img_n_fadein2" name="<?php echo $this->option_anim('disa_img_n_fadein'); ?>" value="disable_img_n_fadein" <?php if( $this->options_anim('disa_img_n_fadein') == 'disable_img_n_fadein')echo 'checked';?> >
						</td>
                   <td><label for="option_anim_disa_img_n_fadein2"><?php _e("Disable img next/prev",'news-ticker-benaceur'); ?></label></td>
					</tr>
<tr><td style="padding-top:0;padding-bottom:0;">------------</tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('timeout_fadein'); ?>" value="<?php echo esc_attr( $this->options_anim('timeout_fadein') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php if ($this->is_ntb_rtl()) _e('Distance from the right', 'news-ticker-benaceur'); else _e('Distance from the left', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('dist_from_left_right_fadein'); ?>" value="<?php echo esc_attr( $this->options_anim('dist_from_left_right_fadein') ); ?>" /></div>
                   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('pause_fadein'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('pause_fadein'); ?>" value="1" <?php checked( $this->options_anim('pause_fadein'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable autostart', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">	
                        <input type="hidden" value="" name="<?php echo $this->option_anim('autostart_fadein'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('autostart_fadein'); ?>" value="1" <?php checked( $this->options_anim('autostart_fadein'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
</table>
</br>
</div>
<!-- FadeIn -->

<!-- Scroll-H -->
<div class="sevsub-ntb box">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('speed_scrollntb_'); ?>" value="<?php echo esc_attr( $this->options_anim('speed_scrollntb_') ); ?>" /></div>
                   </td>
                </tr>
                <tr class="fsub_lat-com-ntb box_lat-com" valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Number of title characters', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('expt_title_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('expt_title_scrollntb') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php if ($this->is_ntb_rtl()) _e('Distance from the right', 'news-ticker-benaceur'); else _e('Distance from the left', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('dist_from_left_right_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('dist_from_left_right_scrollntb') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('The distance between elements', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('dist_between_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('dist_between_scrollntb') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Image dimensions', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb">
					<input style="font-weight:bold;max-width:70px;text-align:center;" type="text" name="<?php echo $this->option_anim('w_img_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('w_img_scrollntb') ); ?>" /> x
					<input style="font-weight:bold;max-width:70px;text-align:center;" type="text" name="<?php echo $this->option_anim('h_img_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('h_img_scrollntb') ); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
				<?php $distance_trl = ($this->options('dir') == 'auto' && is_rtl() || $this->options('dir') == 'rtl') ?  __('Distance from the left/right of the image', 'news-ticker-benaceur') : __('Distance from the right/left of the image', 'news-ticker-benaceur'); ?>
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php echo $distance_trl; ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb">
					<input style="font-weight:bold;max-width:70px;text-align:center;" type="text" name="<?php echo $this->option_anim('ri_le_img_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('ri_le_img_scrollntb') ); ?>" /> /
					<input style="font-weight:bold;max-width:70px;text-align:center;" type="text" name="<?php echo $this->option_anim('le_ri_img_scrollntb'); ?>" value="<?php echo esc_attr( $this->options_anim('le_ri_img_scrollntb') ); ?>" />
					</div>
                   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('pause_scrollntb'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('pause_scrollntb'); ?>" value="1" <?php checked( $this->options_anim('pause_scrollntb'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable title (screen mobile)', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('disable_title_scr_mobile_s'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('disable_title_scr_mobile_s'); ?>" value="1" <?php checked( $this->options_anim('disable_title_scr_mobile_s'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr class="fsub_lat-com-ntb box_lat-com">  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('+ date and title', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('all_scrollntb'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('all_scrollntb'); ?>" value="1" <?php checked( $this->options_anim('all_scrollntb'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
</table>
</br>
</div>
<!-- Scroll-H -->

<!-- Two -->
<div class="anim-two-sub-ntb box">
<table class="form-table">
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Speed', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('speed_anms_two'); ?>" value="<?php echo esc_attr( $this->options_anim('speed_anms_two') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('TimeOut', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('timeout_anms_two'); ?>" value="<?php echo esc_attr( $this->options_anim('timeout_anms_two') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php if ($this->is_ntb_rtl()) _e('Distance from the right', 'news-ticker-benaceur'); else _e('Distance from the left', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_anim('width_anms__two'); ?>" value="<?php echo esc_attr( $this->options_anim('width_anms__two') ); ?>" /></div>
                   </td>
                </tr>
					<tr>
						<td>
                   <input type="radio" id="option_anim_np_img_anms_two1" name="<?php echo $this->option_anim('np_img_anms_two'); ?>" value="enable" <?php if( $this->options_anim('np_img_anms_two') == 'enable')echo 'checked';?> >
                    <td><label for="option_anim_np_img_anms_two1"><?php _e("Enable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="option_anim_np_img_anms_two2" name="<?php echo $this->option_anim('np_img_anms_two'); ?>" value="disable" <?php if( $this->options_anim('np_img_anms_two') == 'disable')echo 'checked';?> >
                   <td><label for="option_anim_np_img_anms_two2"><?php _e("Disable img next/prev",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Pause on hover', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('pause_anms_two'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('pause_anms_two'); ?>" value="1" <?php checked( $this->options_anim('pause_anms_two'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable autostart', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('autostart_animtwo'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('autostart_animtwo'); ?>" value="1" <?php checked( $this->options_anim('autostart_animtwo'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
</table>
</br>
</div>
<!-- Two -->

<!-- image-attachment-scrollntb -->
<?php wp_enqueue_media(); 

$image_id = $this->options_anim('image_att_scrollntb');
if( intval( $image_id ) > 0 ) {
    // Change with the image size you want to use
    $image = wp_get_attachment_image( $image_id, array('75', '60'), false, array( 'id' => 'ntb__prefix-preview-image' ) );
} else {
	
	$directory = plugins_url('img/ntb-topics.jpeg', NTB_BEN_BASENAME);
    // Some default image
    $image = "<img id='ntb__prefix-preview-image' src='$directory' width='75' height='60' />";
}
?>


<div class="sevsub-ntb box">
	<table class="form-table">
		<div class='image-preview-wrapper'>
			<?php echo $image; ?>
		</div>
		<input id="ntb_upload_image_button" type="button" class="button" value="<?php _e( 'Upload image', 'news-ticker-benaceur' ); ?>" />
		<input type="hidden" name="<?php echo $this->option_anim('image_att_scrollntb'); ?>" id="ntb_image_attachment_id" value="<?php echo $image_id; ?>" />
		&nbsp;&nbsp;<input type="submit" name="reset_image_selector_ntb" value="<?php _e( 'Reset default image', 'news-ticker-benaceur' ); ?>" class="button-primary">
	</table>
	
<table class="form-table">
                <tr>  
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><div class="dd"><?php _e('Disable the icon', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">
                        <input type="hidden" value="" name="<?php echo $this->option_anim('dis_icon_scrollntb'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_anim('dis_icon_scrollntb'); ?>" value="1" <?php checked( $this->options_anim('dis_icon_scrollntb'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
</table>
	
<script type='text/javascript'>
jQuery(document).ready( function($) {

      jQuery('input#ntb_upload_image_button').click(function(e) {

             e.preventDefault();
             var image_frame;
             if(image_frame){
                 image_frame.open();
             }
             // Define image_frame as wp.media object
             image_frame = wp.media({
                           title: 'Select Media',
                           multiple : false,
                           library : {
                                type : 'image',
                            }
                       });

                       image_frame.on('close',function() {
                          // On close, get selections and save to the hidden input
                          // plus other AJAX stuff to refresh the image preview
                          var selection =  image_frame.state().get('selection');
                          var gallery_ids = new Array();
                          var my_index = 0;
                          selection.each(function(attachment) {
                             gallery_ids[my_index] = attachment['id'];
                             my_index++;
                          });
                          var ids = gallery_ids.join(",");
                          jQuery('input#ntb_image_attachment_id').val(ids);
                          Refresh_Image_news_ticker_benaceur(ids);
                       });

                      image_frame.on('open',function() {
                        // On open, get the id from the hidden input
                        // and select the appropiate images in the media manager
                        var selection =  image_frame.state().get('selection');
                        var ids = jQuery('input#ntb_image_attachment_id').val().split(',');
                        ids.forEach(function(id) {
                          var attachment = wp.media.attachment(id);
                          attachment.fetch();
                          selection.add( attachment ? [ attachment ] : [] );
                        });

                      });

                    image_frame.open();
     });

});

// Ajax request to refresh the image preview
function Refresh_Image_news_ticker_benaceur(the_id){
        var data = {
            action: 'ntb__prefix_get_image',
            id: the_id
        };

        jQuery.get(ajaxurl, data, function(response) {

            if(response.success === true) {
                jQuery('#ntb__prefix-preview-image').replaceWith( response.data.image );
            }
        });
}
</script>
	
</div>

<!-- image-attachment-scrollntb -->

<div class="to-tr2"></div>

<table class="form-table">
                 <tr valign="top">
                    <th scope="row"><?php _e('Choose where to place the Java file', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select  style="min-width:100px;text-align:center;"  name="<?php echo $this->option_anim('scripts_animation'); ?>"  class="news-ticker-benaceur-color-inp selAnim" >
				<option value="footer" <?php selected('footer', $this->options_anim('scripts_animation')); ?>><?php _e('In footer (recommended)', 'news-ticker-benaceur'); ?></option>
				<option value="bottom_news_bar" <?php selected('bottom_news_bar', $this->options_anim('scripts_animation')); ?>><?php _e('Bottom the news bar', 'news-ticker-benaceur'); ?></option>
				</select></div>
				</td>
                </tr>
</table>

		<p class="submit"><input type="submit" name="submit_animation" id="submit-ftb3" class="button-benTheme" value="<?php _e( 'Save Changes' ); ?>"  /></p>
		<p class="ntb_cache_changesSaved"><?php _e( 'Purge the cache after each settings change, If you were of course using a cache plugin.','news-ticker-benaceur' ); ?></p>

</div>		
