<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<div id="go3-setting-ntb"></div> 
	<div class="option-box">
        <h3 style="font-family: DroidKufi_Ben, sans-serif;"><span style="position:absolute;margin-top:-1px;" class="dashicons dashicons-art"></span><span style="padding:0 26px;"><span style="padding:0 6px;border-bottom:3px solid #666;"><?php _e('Settings of style', 'news-ticker-benaceur'); ?></span></span></h3><br>
<br>

                    <?php

                    $names_col = array( 
					'color_back_' => __('Background color', 'news-ticker-benaceur'),
					'color_text_back' => __('Text color', 'news-ticker-benaceur'),
					'color_back_title' => __('Background color of title', 'news-ticker-benaceur'),
					'color_text_title' => __('Text color of title (if animation pulsate is disabled)', 'news-ticker-benaceur'),
					'color_border' => __('Border color', 'news-ticker-benaceur'),
					'color_border_title' => __('Border color (Title)', 'news-ticker-benaceur'),
					'a_hover' => __('Hover color', 'news-ticker-benaceur')
					);
					foreach ($names_col as $opt => $txt) { ?>         
					<div <?php if (in_array($opt, array('color_back_','color_text_back','a_hover'))) echo 'class="hide_trans_bk box_trans_bk"'; ?>>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="<?php echo $this->option_sty($opt); ?>" class="news-ticker-benaceur-color-inp3" value="<?php echo esc_attr( $this->options_sty($opt) ); ?>"  />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php echo $txt; ?> </td></div><br>
					</div>
					<?php }
                    $names_fields1 = array(
					'border_top_title' => __('border top (Title)', 'news-ticker-benaceur'),
					'border_bottom_title' => __('border bottom (Title)', 'news-ticker-benaceur'),
					'border_right_title' => $this->is_ntb_rtl() ? __('border right (Title)', 'news-ticker-benaceur') : __('border left (Title)', 'news-ticker-benaceur'),
					'border_left_title' => $this->is_ntb_rtl() ? __('border left (Title)', 'news-ticker-benaceur') : __('border right (Title)', 'news-ticker-benaceur'),
					'border_top' => __('border top', 'news-ticker-benaceur'),
					'border_bottom' => __('border bottom', 'news-ticker-benaceur'),
					'border_right' => $this->is_ntb_rtl() ? __('border right', 'news-ticker-benaceur') : __('border left', 'news-ticker-benaceur'),
					'border_left' => $this->is_ntb_rtl() ? __('border left', 'news-ticker-benaceur') : __('border right', 'news-ticker-benaceur'),
					'border_radius' => __('border radius', 'news-ticker-benaceur'),
					'opacity' => __('The level of transparency 1-0.1', 'news-ticker-benaceur'),
					'height' => __('Height', 'news-ticker-benaceur'),
					'line_height' => __('Raise or lower the text (line-height)', 'news-ticker-benaceur'),
					'height_title' => __('height (Title)', 'news-ticker-benaceur'),
					'line_height_title' => __('Raise or lower the title (line-height)', 'news-ticker-benaceur'),
					'width_title_background' => __('Width of the title', 'news-ticker-benaceur'),
					'margin_r_l_title' => $this->is_ntb_rtl() ? __('margin the title from the right (Title)', 'news-ticker-benaceur') : __('margin the title from the left (Title)', 'news-ticker-benaceur'),
					'margin_top_title' => __('margin top  (Title)', 'news-ticker-benaceur'),
					'margin_top' => __('margin top', 'news-ticker-benaceur'),
					'margin_bottom' => __('margin bottom', 'news-ticker-benaceur'),
					'margin_right' => __('margin right', 'news-ticker-benaceur'),
					'margin_left' => __('margin left', 'news-ticker-benaceur')
					);
					foreach ($names_fields1 as $opt => $txt) {
                    ?>
					<div <?php if ($opt == 'opacity') echo 'class="hide_trans_bk box_trans_bk"'; ?> style="">
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="<?php echo $this->option_sty($opt); ?>" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty($opt) ); ?>" />
							</div></div>
						<div class="colwrap-display"><td><?php echo $txt; ?> </td></div><br>
					</div>
					<?php
					}
					?>
					<div class="colwrap-display-media-only ltr"></div>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="<?php echo $this->option_sty('width'); ?>" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('width') ); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><div class="wwid"><td ><?php _e("Width by adding: px or % (It is recommended to use % if your theme uses the percentage in width,",'news-ticker-benaceur'); ?><br><?php _e("and use px if your theme uses the pixels in width.)",'news-ticker-benaceur'); ?></td></div></div><br>
					</tr>
					<div class="colwrap-display-media-only ltr"></div>
					<tr>
						<td>
							<div style="margin-bottom:10px;" class="news-ticker-benaceur-colwrap2">
								<input type="text" name="<?php echo $this->option_sty('font_family'); ?>" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('font_family') ); ?>" />
						&nbsp;&nbsp;&nbsp;&nbsp;<?php _e("Font family",'news-ticker-benaceur'); ?> /
                               <input type="hidden" value="" name="<?php echo $this->option_sty('disable_this_font'); ?>" />
							   <input type="checkbox"  value="1" <?php checked( $this->options_sty('disable_this_font'), 1 ); ?> name="<?php echo $this->option_sty('disable_this_font'); ?>" />
                        <?php _e("Disable this font: DroidKufi_Ben ",'news-ticker-benaceur'); ?> / 
						<span style="color:#a24b4b;"><?php _e("If you are using a non-latin font (like arabic) it should be preceded by &#34;Verdana&#34; followed by a comma then our font. ex: Verdana, Kufi",'news-ticker-benaceur'); ?></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('font_size') ); ?>" name="<?php echo $this->option_sty('font_size'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font size",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('title_font_family') ); ?>" name="<?php echo $this->option_sty('title_font_family'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font family (title)",'news-ticker-benaceur'); ?></td></div>
                         / <span style="color:#a24b4b;"><?php _e("If you are using a non-latin font (like arabic) it should be preceded by &#34;Verdana&#34; followed by a comma then our font. ex: Verdana, Kufi",'news-ticker-benaceur'); ?></span>
					<div style="margin-bottom:10px;"></div>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('font_size_title') ); ?>" name="<?php echo $this->option_sty('font_size_title'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font size (title)",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="<?php echo $this->option_sty('font_weight'); ?>" class="news-ticker-benaceur-color-inp"><option value="normal" <?php selected('normal', $this->options_sty('font_weight')); ?>><?php _e('Normal', 'news-ticker-benaceur'); ?></option><option value="bold" <?php selected('bold', $this->options_sty('font_weight')); ?>><?php _e('Bold', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font weight",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="<?php echo $this->option_sty('text_shadow'); ?>" class="news-ticker-benaceur-color-inp"><option value="no" <?php selected('no', $this->options_sty('text_shadow')); ?>><?php _e('no', 'news-ticker-benaceur'); ?></option><option value="5px 5px 5px" <?php selected('5px 5px 5px', $this->options_sty('text_shadow')); ?>><?php _e('yes', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp3" value="<?php echo esc_attr( $this->options_sty('text_shadow_color') ); ?>" name="<?php echo $this->option_sty('text_shadow_color'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="<?php echo $this->option_sty('box_shadow'); ?>" class="news-ticker-benaceur-color-inp"><option value="no" <?php selected('no', $this->options_sty('box_shadow')); ?>><?php _e('no', 'news-ticker-benaceur'); ?></option><option value="0px 1px 3px" <?php selected('0px 1px 3px', $this->options_sty('box_shadow')); ?>><?php _e('yes', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp3" value="<?php echo esc_attr( $this->options_sty('box_shadow_color') ); ?>" name="<?php echo $this->option_sty('box_shadow_color'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow color",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('box_shadow_v') ); ?>" name="<?php echo $this->option_sty('box_shadow_v'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("box shadow pixel",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<div class="hide_trans_bk box_trans_bk">
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp3" value="<?php echo esc_attr( $this->options_sty('prevNext_color') ); ?>" name="<?php echo $this->option_sty('prevNext_color'); ?>" />
							</div></div>
						<div class="colwrap-display"><td><?php _e("Color of prev/next button",'news-ticker-benaceur'); ?> </td></div><br>
					</div>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('prevNext_font_size') ); ?>" name="<?php echo $this->option_sty('prevNext_font_size'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Font size of prev/next button",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
						<div class="bold-3"><select  name="<?php echo $this->option_sty('prevNext_weight'); ?>" class="news-ticker-benaceur-color-inp"><option value="normal" <?php selected('normal', $this->options_sty('prevNext_weight')); ?>><?php _e('Normal', 'news-ticker-benaceur'); ?></option><option value="bold" <?php selected('bold', $this->options_sty('prevNext_weight')); ?>><?php _e('Bold', 'news-ticker-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Weight of prev/next button",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('prevNext_top') ); ?>" name="<?php echo $this->option_sty('prevNext_top'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("distance top the prev/next button",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
<br><div class="to-tr2"></div>
<p><?php _e("Enable this feature (style of mobile) if your theme uses the percentage % in the width of the site",'news-ticker-benaceur'); ?></p>
                <tr>  
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option_sty('enable_style_mobile'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_sty('enable_style_mobile'); ?>" value="1" <?php checked( $this->options_sty('enable_style_mobile'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Enable style of mobile (recommended)', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr>
				<br><br>
					<?php
                    $names_fields2 = array( 
					'screen_max_width' => __('In a screen where the maximum width is', 'news-ticker-benaceur'),
					'screen_min_width' => __('In a screen where the minimum width is', 'news-ticker-benaceur'),
					'size_mobile' => __('Font size', 'news-ticker-benaceur'),
					'height_mobile' => __('Height', 'news-ticker-benaceur'),
					'line_height_mobile' => __('Raise or lower the text (line-height)', 'news-ticker-benaceur'),
					'padding_top_mobile' => __('padding top', 'news-ticker-benaceur')
					);
					foreach ($names_fields2 as $opt => $txt) {
                    ?>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" name="<?php echo $this->option_sty($opt); ?>" id="news-ticker-benaceur-txtclr_a" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty($opt) ); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php echo $txt; ?> </td></div><br>
					</tr>
					<?php
					}
					?>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('padding_right_left_mobile') ); ?>" name="<?php echo $this->option_sty('padding_right_left_mobile'); ?>" />
							</div></div>
						</td>
						<?php 
                        $p_rl = (is_rtl() && $this->options('dir') != 'ltr') || !is_rtl() && $this->options('dir') == 'rtl' ? __("padding right",'news-ticker-benaceur') : __("padding left",'news-ticker-benaceur');
						?>
						<div class="colwrap-display"><td><?php echo $p_rl; ?> </td></div><br>
					</tr>
<p><?php _e("Or choose:",'news-ticker-benaceur'); ?></p>
                <tr>  
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option_sty('disable_in_screen_max_width'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_sty('disable_in_screen_max_width'); ?>" value="1" <?php checked( $this->options_sty('disable_in_screen_max_width'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Hide the news ticker in a screen where the width is less than', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr>
				<br><br>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('v_screen_max_width') ); ?>" name="<?php echo $this->option_sty('v_screen_max_width'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The smaller width than",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>

<br><div class="to-tr2"></div><br>
                <tr>  
                    <td> 
					<label class="switch-nab">				
                        <input type="hidden" value="" name="<?php echo $this->option_sty('fixed'); ?>" >
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_sty('fixed'); ?>" value="1" <?php checked( $this->options_sty('fixed') ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Fixation the bar top/bottom the site', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr><br><br>
<table style="margin-bottom:20px;" class="form-table44-moh">
	
					<tr style="line-height: 1.8;">
						
						<td>
                   <input type="radio" id="sty_auto_add_ntb_fixed_yes" name="<?php echo $this->option_sty('auto_add_ntb_fixed'); ?>" value="yes" <?php if( $this->options_sty('auto_add_ntb_fixed') == 'yes') echo 'checked';?> />
					<td><label for="sty_auto_add_ntb_fixed_yes"><?php _e("Automatically add the code to show the news ticker to the theme (recommended)",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="sty_auto_add_ntb_fixed_no" name="<?php echo $this->option_sty('auto_add_ntb_fixed'); ?>" value="no" <?php if( $this->options_sty('auto_add_ntb_fixed') == 'no') echo 'checked';?> >
						</td>
                   <td><label for="sty_auto_add_ntb_fixed_no"><?php _e("Manually add",'news-ticker-benaceur'); ?></label></td>
					</tr>
</table>
					<tr>
						<td>
						<div class="colwrap-display"><div style="min-width:145px;" class="news-ticker-benaceur-colwrap">
						<div class="bold-3">
						<select style="min-width:135px;text-align:center;" name="<?php echo $this->option_sty('fixed_top_bottom_site'); ?>" class="news-ticker-benaceur-color-inp">
						<option value="bottom" <?php selected('bottom', $this->options_sty('fixed_top_bottom_site')); ?>><?php _e('At the bottom', 'news-ticker-benaceur'); ?></option>
						<option value="top" <?php selected('top', $this->options_sty('fixed_top_bottom_site')); ?>><?php _e('At the top', 'news-ticker-benaceur'); ?></option>
						</select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Select the fixing method",'news-ticker-benaceur'); ?></td></div><br>
					</tr>
					<br>
					
			<div class="note_7101add_the_code" style="margin-bottom:27px;">
			<p style="max-width:460px;margin-bottom:-8px;">
			<em><?php _e("If you choose manually with fixation at the top, add the code exactly under the body tag in the header:",'news-ticker-benaceur'); ?></em>
			</p>			
			<p class="body_add_the_code_directly">
			<?php echo esc_html("<body <?php body_class(); ?>>"); ?>
			</p>
			<p style="max-width:460px;margin-bottom:-8px;">
			<em><?php _e("and if you choose manually with fixation at the bottom, add it exactly before the closing body tag in the footer:",'news-ticker-benaceur'); ?></em>
			</p>			
			<p class="body_add_the_code_directly">
			<?php echo esc_html("</body>"); ?>
			</p>			
			</div>			
					
                <tr>  
                    <td> 
					<label class="switch-nab">				
                        <input type="hidden" value="" name="<?php echo $this->option_sty('disable_fixed_600_for_top'); ?>" >
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_sty('disable_fixed_600_for_top'); ?>" value="1" <?php checked( $this->options_sty('disable_fixed_600_for_top') ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Disable fixation (top) in a screen less than 600px', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr><br><br>
                <tr>  
                    <td> 
					<label class="switch-nab">				
                        <input type="hidden" value="" name="<?php echo $this->option_sty('disable_fixed_600_for_bottom'); ?>" >
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_sty('disable_fixed_600_for_bottom'); ?>" value="1" <?php checked( $this->options_sty('disable_fixed_600_for_bottom') ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Disable fixation (bottom) in a screen less than 600px', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr><br><br>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php if (!$this->options_sty('fixed_top_bottom')) echo esc_attr( '0' ); else echo esc_attr( $this->options_sty('fixed_top_bottom') ); ?>" name="<?php echo $this->option_sty('fixed_top_bottom'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin top/bottom",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('fixed_width') ); ?>" name="<?php echo $this->option_sty('fixed_width'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width in percent %",'news-ticker-benaceur'); ?> </td></div><br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('fixed_index') ); ?>" name="<?php echo $this->option_sty('fixed_index'); ?>" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("z-index",'news-ticker-benaceur'); ?> </td></div><br>
					</tr><br>



					
					<tr>
					<div style="width:30%;margin-bottom:15px;border-bottom:2px solid #974c16;"></div>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('adminbar_height') ); ?>" name="<?php echo $this->option_sty('adminbar_height'); ?>" />
							</div></div>
						</td>
						<div style="line-height:24px;margin-bottom:15px;" class="colwrap-display"><td><?php _e("The height of the admin bar in a screen width of more than 682px (default &#34;32&#34; leave blank) | This doesn&#39;t affect the height of the admin bar, but rather affects the news ticker when you place it at the top of the site compared to the height of the admin bar",'news-ticker-benaceur'); ?> </td></div>
						<div style="margin-bottom:15px;width:140px;border-bottom:1px solid #999999;"></div>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="news-ticker-benaceur-colwrap">
								<input type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('adminbar_height_mobile') ); ?>" name="<?php echo $this->option_sty('adminbar_height_mobile'); ?>" />
							</div></div>
						</td>
						<div style="line-height:24px;margin-bottom:15px;" class="colwrap-display"><td><?php _e("The height of the admin bar in a screen width of less than 682px (default &#34;46&#34; leave blank) | This doesn&#39;t affect the height of the admin bar, but rather affects the news ticker when you place it at the top of the site compared to the height of the admin bar",'news-ticker-benaceur'); ?> </td></div><div style="width:30%;border-bottom:2px solid #974c16;"></div><br>
					</tr><br>


					
					
					<tr>
						<td>
							<div class="colwrap-display"><div style="min-width:185px;" class="news-ticker-benaceur-colwrap">
								<input style="min-width:175px;direction:ltr;" type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('fixed_class_for_top') ); ?>" name="<?php echo $this->option_sty('fixed_class_for_top'); ?>" />
							</div></div>
						</td>
						<div id="ntb-11-class-or-id" class="colwrap-display"><td><?php _e("Class or id (fixed at the top)",'news-ticker-benaceur'); ?> </td></div>
					</tr>
			<div class="note_7101add_the_code" style="margin-bottom:27px;">
			<p style="max-width:460px;">
			<em><?php _e("This will display the item behind the fixed news ticker. By default, leave the field blank. If the element does not appear (depending on your theme), enter the class or ID of the element.",'news-ticker-benaceur'); ?></em>
			</p>
			</div>			
					<tr>
						<td>
							<div class="colwrap-display"><div style="min-width:185px;" class="news-ticker-benaceur-colwrap">
								<input style="min-width:175px;direction:ltr;" type="text" class="news-ticker-benaceur-color-inp" value="<?php echo esc_attr( $this->options_sty('fixed_class_for_bottom') ); ?>" name="<?php echo $this->option_sty('fixed_class_for_bottom'); ?>" />
							</div></div>
						</td>
						<div id="ntb-11-class-or-id" class="colwrap-display"><td><?php _e("Class or id (fixed at the bottom)",'news-ticker-benaceur'); ?> </td></div>
					</tr>
			<div class="note_7101add_the_code">
			<p style="max-width:460px;">
			<em><?php _e("This will display the item behind the fixed news ticker. By default, leave the field blank. If the element does not appear (depending on your theme), enter the class or ID of the element.",'news-ticker-benaceur'); ?></em>
			</p>
			</div>		
<br><div class="to-tr2"></div>

            <p><?php _e("Style customization (css)",'news-ticker-benaceur'); ?></p>
			<p class="news-ticker-benaceur-s-style"><textarea id="news-ticker-benaceur-CodeMirrorCss" class="news-ticker-benaceur-s--style" name="<?php echo $this->option_sty('s_style'); ?>" ><?php echo esc_textarea( $this->options_sty('s_style') ); ?></textarea></p>
			<p><em><?php _e("Ex:",'news-ticker-benaceur'); ?></em></p>			
			<p><em><div id="pre710166-note" class="ntb-ex"><?php echo esc_html(".news-ticker-ntb li {margin-right:30px;}"); ?></div></em></p>			

<div class="to-tr2"></div>

            <p><?php _e("Script customization or adding (java/jquery)",'news-ticker-benaceur'); ?></p>
			<p class="news-ticker-benaceur-s-style"><textarea id="news-ticker-benaceur-CodeMirrorJs" class="news-ticker-benaceur-s--script" name="<?php echo $this->option_sty('s_script'); ?>" ><?php echo esc_textarea( $this->options_sty('s_script') ); ?></textarea></p>
			<p><em><?php _e("Ex:",'news-ticker-benaceur'); ?></em></p>			
			<p><em><div id="pre710166-note" class="ntb-ex"><?php echo esc_html('(function($) {$(".class").hide();})(jQuery);'); ?></div></em></p>			

<div class="to-tr2"></div><br>
                <tr>  
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option_sty('hide_icon_evol_plug'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option_sty('hide_icon_evol_plug'); ?>" value="1" <?php checked( $this->options_sty('hide_icon_evol_plug'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Hide the plugin rating icon', 'news-ticker-benaceur'); ?></td>
				   </td>
                </tr>
				<br><br>

		<p class="submit"><input type="submit" name="submit_style" id="submit-ftb5" class="button-benTheme" value="<?php _e( 'Save Changes' ); ?>"  /></p>
		<p class="ntb_cache_changesSaved"><?php _e( 'Purge the cache after each settings change, If you were of course using a cache plugin.','news-ticker-benaceur' ); ?></p>
				</div>	