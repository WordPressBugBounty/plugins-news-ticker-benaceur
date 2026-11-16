<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
	                    <input type="hidden" value="" name="<?php echo $this->option('enable'); ?>" />
                        <input type="checkbox"  value="1" <?php checked( $this->options('enable'), 1 );  ?> name="<?php echo $this->option('enable'); ?>" />
                        <label></label>
	</div>
	<center><div class="enable_ntb_plugin" ><?php esc_html_e("Enable plugin",'news-ticker-benaceur'); ?></div></center>
		</td>
	</tr>
</table>
<table class="form-table44">
	
            <tr valign="top">
               <td>
				<select style="display:none;" name="<?php echo $this->option('latest_p_c'); ?>" id="news_ticker_benaceur_select_news" class="custom-select-news" >
				<option value="latest_posts" <?php selected('latest_posts', $this->options('latest_p_c')); ?>><?php esc_html_e("Latest posts", 'news-ticker-benaceur'); ?></option>
				<option value="latest_comments" <?php selected('latest_comments', $this->options('latest_p_c')); ?>><?php esc_html_e("Latest comments", 'news-ticker-benaceur'); ?></option>
				<option value="manually" <?php selected('manually', $this->options('latest_p_c')); ?>><?php esc_html_e("Latest news Manually", 'news-ticker-benaceur'); ?></option>
				</select>
			   </td>
            </tr>
				
<br>
</table><br>

<table style="margin-top: 13px;" class="form-table43">
	
            <tr valign="top">
                <td style="padding:0px;">
				<select style="display:none;" name="<?php echo $this->option('cache_p_c'); ?>" class="news-ticker-benaceur-cache-selsect" >
				<option value="disabled" <?php selected('disabled', $this->options('cache_p_c')); ?>><?php esc_html_e("Do not temporarily store data", 'news-ticker-benaceur'); ?></option>
				<option value="enabled" <?php selected('enabled', $this->options('cache_p_c')); ?>><?php esc_html_e("Temporarily store of data", 'news-ticker-benaceur'); ?></option>
				</select>
			    </td>
            </tr>
				
</table>

<div id="ntb_button_h_sh_in" class="ntb_button_h_sh_in_cache_notes">		
<span id="ntb_button_hide_cache_notes" class="dashicons dashicons-arrow-down-alt2"></span>				
<input type='button' style="background:#ffeded; min-width:130px; margin-top:20px;" id='ntb_button_hide_cache_notes2' class="button-secondary" value='<?php esc_attr_e('Important before enabling the cache!', 'news-ticker-benaceur'); ?>';>
</div>

<div class="ntb_cache_notes_txt_sh" style="display:none;">
<div style="padding:0 4px;"><p class="news-ticker-benaceur-cache-note"><?php esc_html_e( 'When should I enable the cache? Enabling it is useful when visitors view the same latest posts or comments multiple times before they change. If your site does not add new posts or comments every day, or the list remains unchanged for longer, the cache will generally be more useful. However, if the list changes constantly or the ticker is viewed infrequently, the cache may be less beneficial.', 'news-ticker-benaceur' ); ?></p></div>
<div style="padding:0 4px; color:red;"><p class="news-ticker-benaceur-cache-note"><?php esc_html_e( 'Random results: If a filter changes the latest posts or comments query to return random results, the cache may keep showing the same results until it expires. Disable the cache if you need a new random selection on each page load. Results returned directly through ntb_pre_get_recent_posts or ntb_pre_get_recent_comments bypass the plugin cache.', 'news-ticker-benaceur' ); ?></p></div>
<div style="padding:0 4px;"><p class="news-ticker-benaceur-cache-note"><?php esc_html_e( 'Custom filters: The plugin cache is for the latest posts and comments retrieved by the plugin by default. To provide your own results before the plugin retrieves the latest comments, use ntb_pre_get_recent_comments. For the latest posts, use ntb_pre_get_recent_posts. Results provided through these filters do not use the plugin cache. If you want to cache them, create your own cache and invalidate it when your data changes. The legacy ntb_filter_get_all_recent_comments and ntb_filter_get_all_recent_posts filters also bypass the plugin cache. If you use ntb_filter_get_all_recent_comments to replace the plugin results with your own, we recommend switching to ntb_pre_get_recent_comments. For posts, replace ntb_filter_get_all_recent_posts with ntb_pre_get_recent_posts.', 'news-ticker-benaceur' ); ?></p></div>
</div><br>

<div class="ntb_submit_delete_data_stored_now">
<?php
printf(
	'<input type="submit" name="ntb_submit_delete_data_stored_now" id="submit" class="button" %1$s value="%2$s" onclick="return confirm(\'%3$s\')">',
	( 'enabled' !== $this->options( 'cache_p_c' ) || ! $this->exists_ntb_cache() ) ? 'disabled' : '',
	esc_attr__( 'Delete data stored now', 'news-ticker-benaceur' ),
	esc_js( __( 'Are you sure you want to clear the plugin cache now?', 'news-ticker-benaceur' ) )
);
?>
</div>
<div style="padding:0 0 6px;"><p class="news-ticker-benaceur-cache-note"><?php esc_html_e( 'The cache (keys) is cleared whenever the data used by the Latest Posts or Latest Comments ticker changes. It also expires automatically every 12 hours. You can change this duration using the news_ticker_benaceur_transient_time filter.', 'news-ticker-benaceur' ); ?></p></div>

<div class="to-tr2"></div>
<br>
<table class="form-table44-moh">
					<tr>
						<td>
						<select name="<?php echo $this->option('links_admin_bar_menu'); ?>">
						<option value="menu" <?php selected('menu', $this->options('links_admin_bar_menu')); ?>><?php esc_html_e('Menu', 'news-ticker-benaceur'); ?></option>
						<option value="submenu" <?php selected('submenu', $this->options('links_admin_bar_menu')); ?>><?php esc_html_e('Submenu', 'news-ticker-benaceur'); ?></option>
						</select>
						</td>
					</tr>
					
					<tr style="height:20px;"><td></td></tr>
					
<tr valign="top"><td  scope="row"><?php esc_html_e('Enable News Ticker Benaceur on admin bar in frontend', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="hidden" value="" name="<?php echo $this->option('links_admin_bar_front'); ?>" /><input type="checkbox" name="<?php echo $this->option('links_admin_bar_front'); ?>" class="switch-input" value="1" <?php checked( $this->options('links_admin_bar_front'), 1 ); ?> /><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><td scope="row"><?php esc_html_e('Enable News Ticker Benaceur on admin bar in admin panel', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="hidden" value="" name="<?php echo $this->option('links_admin_bar_admin'); ?>" /><input type="checkbox" name="<?php echo $this->option('links_admin_bar_admin'); ?>" class="switch-input" value="1"<?php checked( $this->options('links_admin_bar_admin'), 1 ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
</table>
<br>
<div class="to-tr2"></div>
<div id="go1a-setting-ntb"></div><br>
			<table class="form-table">
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('Hide for visitors', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('for_visitors'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('for_visitors'); ?>" value="1" <?php checked( $this->options('for_visitors'), 1 ); ?> />
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('Hide for all users', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('for_users'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('for_users'); ?>" value="1" <?php checked( $this->options('for_users'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('Hide for all except administrator', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('for_all_expt_admin'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('for_all_expt_admin'); ?>" value="1" <?php checked( $this->options('for_all_expt_admin'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				<tr>    
                	<th scope="row"><?php esc_html_e('Hide for this group(s) (You can select more than one group)', 'news-ticker-benaceur'); ?></th>
                    <td>
						
<div class="styled-select-ntb">
<select name="<?php echo $this->option('for_role_x'); ?>[]" id="news_ticker_benaceur_for_role_x" style="min-width:150px; font-weight: bold; height: auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="" select="select"><?php esc_html_e('Remove Selection', 'news-ticker-benaceur'); ?></option>

						    	<?php
									$rolexcap_ntb = $settings[ 'rolexcap_ntb' ];

									foreach ( $roles as $role => $name ) {
								?>
<option value="<?php echo esc_attr( $role ); ?>"<?php selected( in_array( $role, $rolexcap_ntb ) ); ?>><?php echo esc_html( $name ); ?></option>
								<?php
									}
								?>
</select>
</div>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Hide for this user id', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('for_user_id'); ?>" placeholder="<?php esc_attr_e( 'Enter here the user id', 'news-ticker-benaceur' ); ?>" value="<?php echo esc_attr( $this->options('for_user_id') ); ?>" /></div>
                    &nbsp;&nbsp;<em><?php esc_html_e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('Hide if no items (no posts or)', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('hide_if_noItems'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('hide_if_noItems'); ?>" value="1" <?php checked( $this->options('hide_if_noItems'), 1 ); ?> />
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr class="ntb_is_no_elements" valign="top">
                    <th scope="row"><?php esc_html_e('The text that appears if there is no items (posts or comments)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('txt_noItems'); ?>" value="<?php echo esc_attr( $this->options('txt_noItems') ); ?>" placeholder="<?php esc_attr_e('Leave it blank (default text)', 'news-ticker-benaceur'); ?>" /></div>
                   </td>
                </tr>
			</table>
				
<div id="ntb_button_h_sh_in">			
<span id="ntb_button_h_sh_in1" class="dashicons dashicons-arrow-down-alt2"></span>				
<input type='button' style="min-width:130px;margin-top:20px;"  id='H-ntbSelpage' class="button-secondary" value='<?php esc_attr_e('Hide/Show in:', 'news-ticker-benaceur'); ?>';>
</div>

<div id="H2-ntbSelpage" style="display:none;">

<table style="margin-top:10px;" class="form-table">
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hide_or_noHide_in1" name="<?php echo $this->option('hide_or_noHide_in'); ?>" value="disable_this_option" <?php if( $this->options('hide_or_noHide_in') == 'disable_this_option') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hide_or_noHide_in1">
					<?php esc_html_e("Disable hide/show option",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hide_or_noHide_in2" name="<?php echo $this->option('hide_or_noHide_in'); ?>" value="hide" <?php if( $this->options('hide_or_noHide_in') == 'hide') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hide_or_noHide_in2">
					<?php esc_html_e("Hide in",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr> 
						<td class="td_ntb_radio1">
                   <input type="radio" id="hide_or_noHide_in3" name="<?php echo $this->option('hide_or_noHide_in'); ?>" value="show" <?php if( $this->options('hide_or_noHide_in') == 'show') echo 'checked';?> >
						</td>
                    <td class="td_ntb_radio"><label for="hide_or_noHide_in3">
					<?php esc_html_e("Show in",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
</table>

------------
					
<table class="form-table">
					
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('home', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('in_home'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('in_home'); ?>" value="1" <?php checked( $this->options('in_home'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('category page', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('in_category'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('in_category'); ?>" value="1" <?php checked( $this->options('in_category'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e("author page", 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('in_author'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('in_author'); ?>" value="1" <?php checked( $this->options('in_author'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e("search page", 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('in_search'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('in_search'); ?>" value="1" <?php checked( $this->options('in_search'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('single post (in post)', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('in_single'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('in_single'); ?>" value="1" <?php checked( $this->options('in_single'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('ID of post', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('in_single_id'); ?>" placeholder="<?php esc_attr_e( 'Leave blank to activate All', 'news-ticker-benaceur' ); ?>" value="<?php echo esc_attr( $this->options('in_single_id') ); ?>" /></div>
                    &nbsp;&nbsp;<em><?php esc_html_e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
<br>				
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('pages', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('in_page'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('in_page'); ?>" value="1" <?php checked( $this->options('in_page'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('ID of page', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('in_page_id'); ?>" placeholder="<?php esc_attr_e( 'Leave blank to activate All', 'news-ticker-benaceur' ); ?>" value="<?php echo esc_attr( $this->options('in_page_id') ); ?>" /></div>
                    &nbsp;&nbsp;<em><?php esc_html_e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
</table>
</div>

<div id="ntb_button_h_sh_in">			
<span id="ntb_button_h_sh_in2" class="dashicons dashicons-arrow-down-alt2"></span>				
<input type='button' style="min-width:130px;margin-top:20px;"  id='show-H-ntbSelpage-hide' class="button-secondary" value='<?php esc_attr_e('Hide after time:', 'news-ticker-benaceur'); ?>';>
</div>

<div id="H3-ntbSelpage-hide" style="display:none;">
<table style="margin-top:10px;" id="ntb_hideAfterTime" class="form-table">
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hi_hide1" name="<?php echo $this->option_hi('hide'); ?>" value="disable_this_option" <?php if( $this->options_hi('hide') == 'disable_this_option') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hi_hide1">
					<?php esc_html_e("Disable this option",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hi_hide2" name="<?php echo $this->option_hi('hide'); ?>" value="hide" <?php if( $this->options_hi('hide') == 'hide') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hi_hide2">
					<?php esc_html_e("Hide (when page reloaded)",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr> 
						<td class="td_ntb_radio1">
                   <input type="radio" id="hi_hide3" name="<?php echo $this->option_hi('hide'); ?>" value="hide_jquery" <?php if( $this->options_hi('hide') == 'hide_jquery') echo 'checked';?> >
						</td>
                    <td class="td_ntb_radio"><label for="hi_hide3">
					<?php esc_html_e("hide (without reloading the page - jquery)",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
</table>

              <table class="form-table">
                <tr valign="top">
                    <th class="fsub_lat-pos-ntb box_lat-com" scope="row"><?php esc_html_e('Hide after spending a (the time entered here) of your recent post:', 'news-ticker-benaceur'); ?></th>
                    <th class="fsub_lat-com-ntb box_lat-com" scope="row"><?php esc_html_e('Hide after spending a (the time entered here) of your recent comment:', 'news-ticker-benaceur'); ?></th>
					<th class="ntb_choose_type_news_show_manually ntb_choose_type_news_show_l_m" scope="row"><?php esc_html_e('Hide after spending a (the time entered here) of your recent update date:', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_hi('time_latest'); ?>" value="<?php echo esc_attr( $this->options_hi('time_latest') ); ?>" /></div>
                   <div>
						<select name="<?php echo $this->option_hi('latest_in_seconds'); ?>">
						<option value="minute" <?php selected('minute', $this->options_hi('latest_in_seconds')); ?>><?php esc_html_e('Minute', 'news-ticker-benaceur'); ?></option>
						<option value="hour" <?php selected('hour', $this->options_hi('latest_in_seconds')); ?>><?php esc_html_e('Hour', 'news-ticker-benaceur'); ?></option>
						<option value="day" <?php selected('day', $this->options_hi('latest_in_seconds')); ?>><?php esc_html_e('Day', 'news-ticker-benaceur'); ?></option>
						</select>
				   </div>
				   </td>
                </tr>
              </table>
			  
<span class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m">
						<br>
--------------
			  
              <table class="form-table">
                <tr class="" valign="top">
                    <th class="fsub_lat-pos-ntb box_lat-com" scope="row"><?php esc_html_e('Get only posts published less than:', 'news-ticker-benaceur'); ?></th>
                    <th class="fsub_lat-com-ntb box_lat-com" scope="row"><?php esc_html_e('Get only comments published less than:', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_hi('time_ago'); ?>" value="<?php echo esc_attr( $this->options_hi('time_ago') ); ?>" /></div>
                   <div>
						<select name="<?php echo $this->option_hi('ago_in_seconds'); ?>">
						<option value="minutes" <?php selected('minutes', $this->options_hi('ago_in_seconds')); ?>><?php esc_html_e('Minute', 'news-ticker-benaceur'); ?></option>
						<option value="hours" <?php selected('hours', $this->options_hi('ago_in_seconds')); ?>><?php esc_html_e('Hour', 'news-ticker-benaceur'); ?></option>
						<option value="days" <?php selected('days', $this->options_hi('ago_in_seconds')); ?>><?php esc_html_e('Day', 'news-ticker-benaceur'); ?></option>
						</select>
				   </div>
				   <em class="fsub_lat-pos-ntb box_lat-com"><?php esc_html_e( 'Leave it blank to get all posts', 'news-ticker-benaceur' ); ?></em>
				   <em class="fsub_lat-com-ntb box_lat-com"><?php esc_html_e( 'Leave it blank to get all comments', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
              </table>
</span>
		
</div>

<div style="margin-top:20px;"></div>
<div class="to-tr2"></div>
<div style="margin-top:10px;"></div>

<span class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m">

<table style="margin-bottom:-50px;" class="form-table">
                 <tr valign="top">
                    <th scope="row"><?php esc_html_e('Choose the post type (You can select more than one type)', 'news-ticker-benaceur'); ?></th>
                    <td>
				<div class="bold-3"><select style="min-width:150px; text-align:center; height:auto;"  name="<?php echo $this->option('post_type'); ?>[]" multiple="multiple">
<?php
  $post_type_ntb = (array) $this->options('post_type');
  $post_types = get_post_types( array( 'public' => true ), 'names' );  
  
  foreach ( $post_types as $post_type ) {
	if ($post_type != 'attachment') {  
?>
<option value="<?php echo esc_attr( $post_type ); ?>"<?php selected( in_array( $post_type, $post_type_ntb ) ); ?>><?php echo esc_attr( $post_type ); ?></option>
<?php
	}
}
?>
				</select></div>
				</td>
                </tr>
</table>

	<span class="fsub_lat-pos-ntb box_lat-com">				

<table style="margin-top:35px; margin-bottom:-50px;" class="form-table">
<?php $ntb_post__status = (array) $this->options('post_status'); ?>
                 <tr valign="top">
                    <th scope="row"><?php esc_html_e('Choose the post status (You can select more than one status)', 'news-ticker-benaceur'); ?></th>
                    <td>
				<div class="bold-3"><select style="min-width:150px; text-align:center; height:auto;"  name="<?php echo $this->option('post_status'); ?>[]"  multiple="multiple">
				<option value="publish" <?php selected( in_array( 'publish', $ntb_post__status ) ); ?>><?php esc_html_e("publish", 'news-ticker-benaceur'); ?></option>
				<option value="pending" <?php selected( in_array( 'pending', $ntb_post__status ) ); ?>><?php esc_html_e("pending", 'news-ticker-benaceur'); ?></option>
				<option value="trash" <?php selected( in_array( 'trash', $ntb_post__status ) ); ?>><?php esc_html_e("trash", 'news-ticker-benaceur'); ?></option>
				<option value="draft" <?php selected( in_array( 'draft', $ntb_post__status ) ); ?>><?php esc_html_e("draft", 'news-ticker-benaceur'); ?></option>
				<option value="future" <?php selected( in_array( 'future', $ntb_post__status ) ); ?>><?php esc_html_e("future", 'news-ticker-benaceur'); ?></option>
				<option value="private" <?php selected( in_array( 'private', $ntb_post__status ) ); ?>><?php esc_html_e("private", 'news-ticker-benaceur'); ?></option>
				<option value="auto-draft" <?php selected( in_array( 'auto-draft', $ntb_post__status ) ); ?>><?php esc_html_e("auto-draft", 'news-ticker-benaceur'); ?></option>
				<option value="inherit" <?php selected( in_array( 'inherit', $ntb_post__status ) ); ?>><?php esc_html_e("inherit", 'news-ticker-benaceur'); ?></option>
				</select>
				<em><a style="color:#0451f7;" target="_blank" href="https://codex.wordpress.org/Post_Status">post status</a></em>
				</div>
				</td>
                </tr>
</table>
				
	</span>	
	
	<span class="fsub_lat-com-ntb box_lat-com">				

<table style="margin-top:35px; margin-bottom:-60px;" class="form-table">
                 <tr valign="top">
                    <th scope="row"><?php esc_html_e('Choose the comment status', 'news-ticker-benaceur'); ?></th>
                    <td>
				<div class="bold-3"><select style="min-width:150px; text-align:center;"  name="<?php echo $this->option('comment_status'); ?>">
				<option value="approve" <?php selected('approve', $this->options('comment_status')); ?>><?php esc_html_e('Approved comments', 'news-ticker-benaceur'); ?></option>
				<option value="hold" <?php selected('hold', $this->options('comment_status')); ?>><?php esc_html_e('Unapproved comments', 'news-ticker-benaceur'); ?></option>
				<option value="trash" <?php selected('trash', $this->options('comment_status')); ?>><?php esc_html_e('Trashed comments', 'news-ticker-benaceur'); ?></option>
				<option value="spam" <?php selected('spam', $this->options('comment_status')); ?>><?php esc_html_e('Spam comments', 'news-ticker-benaceur'); ?></option>
				<option value="all" <?php selected('all', $this->options('comment_status')); ?>><?php esc_html_e('All status', 'news-ticker-benaceur'); ?></option>
				</select></div>
				</td>
                </tr>
</table>
				
	</span>	

<table class="form-table">

                 <tr valign="top">
                    <th scope="row"><span class="fsub_lat-pos-ntb box_lat-com"><?php esc_html_e('Choose the name of taxonomy', 'news-ticker-benaceur'); ?></span></th>
                    
                    <td>
<span class="fsub_lat-pos-ntb_hide-sel">
				
<div class="bold-3">
<select style="min-width:150px;text-align:center;"  name="<?php echo $this->option('for_cat_tax'); ?>"  class="news-ticker-benaceur-color-tax">
<?php
$taxonomies_ntb = array($this->options('for_cat_tax'));
$taxonomies = get_object_taxonomies( 'post' );
foreach ( $taxonomies as $taxonomy ) {
?>
<option value="<?php echo esc_attr( $taxonomy ); ?>"<?php selected( in_array( $taxonomy, $taxonomies_ntb ) ); ?>><?php echo esc_attr( $taxonomy ); ?></option>
<?php
}
?>
</select>
</div>
</span>
</tr>

<tr valign="top">
<th scope="row">
<span class="fsub_lat-pos-ntb box_lat-com">
<span class="fsub_cat-or-tax-ntb box_cat-tax"><?php esc_html_e('category id (include/exclude)', 'news-ticker-benaceur'); ?></span>
<span class="fsub_tax-or-cat-ntb box_cat-tax"><?php esc_html_e('taxonomy id (required)', 'news-ticker-benaceur'); ?></span>
</span>
<span class="fsub_lat-com-ntb box_lat-com"><?php esc_html_e('post id', 'news-ticker-benaceur'); ?></span>
</th>
<td>
<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('for_cat'); ?>" placeholder="<?php if ($this->options('for_cat_tax') == 'category') { esc_attr_e( 'Leave blank to activate All', 'news-ticker-benaceur' ); } else { esc_attr_e( 'Enter the id', 'news-ticker-benaceur' ); } ?>" value="<?php echo esc_attr( $this->options('for_cat') ); ?>" />
<div style="margin-bottom: 15px;"><em><?php esc_html_e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></div>

<?php
$cats = get_categories(array('hide_empty' => false, 'taxonomy' => $this->options('for_cat_tax') ? $this->options('for_cat_tax') : 'category'));
if ( count($cats) < apply_filters( 'ntb_filter_number_cat_display', 300 ) ) {
?>
<span class="cat_ntb_button_h_sh_in"><span class="fsub_lat-pos-ntb_hide-sel">
<div id="ntb_button_h_sh_in">			
<span id="ntb_button_h_sh_in3" class="dashicons dashicons-arrow-down-alt2"></span>				
<input type='button' id='bt-ntbCat' class="button-secondary" value='<?php esc_attr_e('Display all categories', 'news-ticker-benaceur'); ?>'; />
</div>
</span></span>
<div id="sub-ntbCat" style="display:none;">		
<?php
  printf('<div>
<table width="100%1$s" cellspacing="1" style="border:1px solid #999999;background:#A4A4A4;">
	<tr>
		<td align="center" width="60%1$s" style="border-%5$s:1px solid #999999;"><b>%2$s</b></td>
		<td align="center" width="20%1$s" style="border-%5$s:1px solid #999999;"><b>%3$s</b></td>
		<td align="center" width="20%1$s"><b>%4$s</b></td>
	</tr>
</table></div>', '%', esc_html__( 'Category name', 'news-ticker-benaceur'), esc_html__( 'Category id', 'news-ticker-benaceur'), esc_html__( 'Post Count', 'news-ticker-benaceur'), $this->rtl_left_right());

foreach($cats as $cat) {
  printf('<div>
<table width="100%1$s" cellspacing="1" style="border:1px solid #999999;">
	<tr>
		<td align="center" width="60%1$s" style="border-%5$s:1px solid #999999;">%2$s</td>
		<td align="center" width="20%1$s" style="border-%5$s:1px solid #999999;">%3$s</td>
		<td align="center" width="20%1$s">%4$s</td>
	</tr>
</table>  </div>', '%', esc_html( $cat->name ), esc_html( $cat->term_id ), esc_html( $cat->count ), $this->rtl_left_right());
}
?>
<br><br>
</div>
<?php } ?>

					</div>
                    </td>
                    
                </tr>
				
					<tr>
						<td>
					<span class="fsub_tax-ntb">	
                   <input type="radio" id="option_include_exclude_id1" name="<?php echo $this->option('include_exclude_id'); ?>" value="include_id" <?php if( $this->options('include_exclude_id') == 'include_id') echo 'checked';?> >
				    </span>   
					   </td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><span class="fsub_tax-ntb">
					<span class="fsub_lat-pos-ntb box_lat-com"><label for="option_include_exclude_id1"><?php esc_html_e("Include cat id",'news-ticker-benaceur'); ?></label></span>
					<span class="fsub_lat-com-ntb box_lat-com"><label for="option_include_exclude_id1"><?php esc_html_e("Include post id",'news-ticker-benaceur'); ?></label></span>
					</span></td></div>
					</tr><br>
					<tr> 
						<td>
					<span class="fsub_tax-ntb">	
                   <input type="radio" id="option_include_exclude_id2" name="<?php echo $this->option('include_exclude_id'); ?>" value="exclude_id" <?php if( $this->options('include_exclude_id') == 'exclude_id')echo 'checked';?> >
					 </span> 	
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><span class="fsub_tax-ntb">
					<span class="fsub_lat-pos-ntb box_lat-com"><label for="option_include_exclude_id2"><?php esc_html_e("Exclude cat id",'news-ticker-benaceur'); ?></label></span>
					<span class="fsub_lat-com-ntb box_lat-com"><label for="option_include_exclude_id2"><?php esc_html_e("Exclude post id",'news-ticker-benaceur'); ?></label></span>
					</span></td></div>
					</tr><br>
					
					
					
</table>

</span>

<div class="ntb_choose_type_news_show_manually ntb_choose_type_news_show_l_m">

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('The text that appears if there is no items (manually news)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('empty_txt_news_manually'); ?>" value="<?php echo esc_attr( $this->options('empty_txt_news_manually') ); ?>" placeholder="<?php esc_attr_e('Leave it blank (default text)', 'news-ticker-benaceur'); ?>" /></div>
                   </td>
                </tr>
            </table>

            <p class="ntb-title2"><?php esc_html_e("Enter your news (manually) here:",'news-ticker-benaceur'); ?></p>
			<p style="" class="h77-this-sec"><?php esc_html_e('The last update of manually news date:','news-ticker-benaceur'); echo ' ' . $this->options_hi('manually_date'); ?></p>
				<p style="" class="h77-this-sec"><select style="min-width:100px;text-align:center;"  name="<?php echo $this->option_hi('update_manually_date'); ?>"  class="news-ticker-benaceur-styl-tit">
				<option value="no" <?php selected('no', $this->options_hi('update_manually_date')); ?>><?php esc_html_e('Do not update the date', 'news-ticker-benaceur'); ?></option>
				<option value="yes" <?php selected('yes', $this->options_hi('update_manually_date')); ?>><?php esc_html_e('Update the date of manually news', 'news-ticker-benaceur'); ?></option>
				</select></p>
<?php			
			echo '<div style="margin: 0 0 12px; padding: 0;"><input type="button" id="b78t-ntbCat-txt_news_manually" class="button-secondary" value="'. __("Text direction", 'news-ticker-benaceur') .'"></div>';
?>			
			<p class="news-ticker-benaceur-s-style_m"><textarea id="news-ticker-benaceur-s--style_m" name="<?php echo $this->option('txt_news_manually'); ?>" ><?php echo esc_textarea( $this->options('txt_news_manually') ); ?></textarea></p>
			<p><em><?php esc_html_e("Put each news in new line between this tags",'news-ticker-benaceur'); echo esc_html(' <a></a>, '); esc_html_e('ex:', 'news-ticker-benaceur'); ?></em></p>
			<p class="ntb-ex2"><b><?php esc_html_e("This form is correct:",'news-ticker-benaceur'); ?></b></p>
			<p class="ntb-ex3"><em><?php echo esc_html('<a href="https://site.com/" title="">'); esc_html_e("your first news ...",'news-ticker-benaceur'); echo esc_html('</a>'); ?></em></p>
			<p class="ntb-ex2"><em><?php esc_html_e("your second news ...",'news-ticker-benaceur'); ?></em></p>
			<p class="ntb-ex3"><em><?php echo esc_html('<a href="#" >'); esc_html_e("your third news ...",'news-ticker-benaceur'); echo esc_html('</a>'); ?></em></p>
			<p class="ntb-ex2"><b><?php esc_html_e("This form is incorrect:",'news-ticker-benaceur'); ?></b></p>
			<p class="ntb-ex2"><em><?php esc_html_e("your first news ...",'news-ticker-benaceur'); echo esc_html(' <a href="https://site.com/" title="">'); esc_html_e("click here",'news-ticker-benaceur'); echo esc_html('</a>'); ?></em></p>

</div>

<div id="go1b-setting-ntb"></div>
<div class="to-tr2"></div>

<div class="ntb_choose_type_news_show_manually ntb_choose_type_news_show_l_m">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Number of characters of the news', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('expt_txt_manually_news'); ?>" value="<?php echo esc_attr( $this->options('expt_txt_manually_news') ); ?>" /></div>
                   &nbsp;&nbsp;<em><?php esc_html_e( 'Put 0 to disable', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
            </table>

			  <br>
</div>
			  
<p style="font-size:14px;padding-top:10px;"><?php esc_html_e('Choose one title for each site according direction if your multilingual site', 'news-ticker-benaceur'); ?></p>			  
              <table class="form-table">
			  
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('The title ltr', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('title_ltr'); ?>" value="<?php echo esc_attr( $this->options('title_ltr') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('The title rtl', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('title_rtl'); ?>" value="<?php echo esc_attr( $this->options('title_rtl') ); ?>" /></div>
                   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('Disable Title', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('disable_title'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('disable_title'); ?>" value="1" <?php checked( $this->options('disable_title'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php esc_html_e('Title animation pulsate', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('title_pulsate'); ?>" />
	                    <input type="checkbox" class="switch-input"  name="<?php echo $this->option('title_pulsate'); ?>" value="1" <?php checked( $this->options('title_pulsate'), 1 ); ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
                 <tr valign="top">
                    <th scope="row"><?php esc_html_e('Title styles', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="<?php echo $this->option('title_styles'); ?>"  class="news-ticker-benaceur-styl-tit">
				<option value="simpleTileSt" <?php selected('simpleTileSt', $this->options('title_styles')); ?>><?php esc_html_e('Simple', 'news-ticker-benaceur'); ?></option>
				<option value="radiusTileSt" <?php selected('radiusTileSt', $this->options('title_styles')); ?>><?php esc_html_e('Radius', 'news-ticker-benaceur'); ?></option>
				</select></div>
                </tr>
				</table>
				
<!-- styles-title -->

<!-- Simple Tile Style -->
<div class="DivChecksimpleTileSt boxTS"></div>
<!-- Simple Tile Style -->

<!-- Radius Tile Style -->
<div class="DivCheckradiusTileSt boxTS">
<table class="form-table">
				<?php if (!is_rtl() && $this->options('dir') != 'rtl' || is_rtl() && $this->options('dir') == 'ltr') { ?>
                <tr valign="top">
                    <th style="font-weight:normal;" scope="row"><?php esc_html_e('Top left', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topleft_lef'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topleft_lef') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-weight:normal;" scope="row"><?php esc_html_e('Top right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topright_lef'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topright_lef') ); ?>" /></div>
                   </td>
                </tr>
				<?php } else { ?>
                <tr valign="top">
                    <th style="font-weight:normal;" scope="row"><?php esc_html_e('Top left', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topleft_ri'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topleft_ri') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-weight:normal;" scope="row"><?php esc_html_e('Top right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topright_ri'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topright_ri') ); ?>" /></div>
                   </td>
                </tr>
				<?php } ?>
                <tr valign="top">
                    <th style="font-weight:normal;" scope="row"><?php esc_html_e('Bottom right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_bottomright'); ?>" value="<?php echo esc_attr( $this->options('title_styles_bottomright') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-weight:normal;" scope="row"><?php esc_html_e('Bottom left', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_bottomleft'); ?>" value="<?php echo esc_attr( $this->options('title_styles_bottomleft') ); ?>" /></div>
                   </td>
                </tr>
</table>
</div>
<!-- Radius Tile Style -->

<!-- styles-title -->
			  --------------
              <table class="form-table">
                <tr class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m" valign="top">
                    <th class="fsub_lat-pos-ntb box_lat-com" scope="row"><?php esc_html_e('Numbre of posts', 'news-ticker-benaceur'); ?></th>
                    <th class="fsub_lat-com-ntb box_lat-com" scope="row"><?php esc_html_e('Numbre of comments', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('num_posts'); ?>" value="<?php echo esc_attr( $this->options('num_posts') ); ?>" /></div>
                   </td>
                </tr>
              </table>
              <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Direction', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="<?php echo $this->option('dir'); ?>" class="news-ticker-benaceur-color-inp">
				<option value="auto" <?php selected('auto', $this->options('dir')); ?>><?php esc_html_e('Auto', 'news-ticker-benaceur'); ?></option>
				<option value="ltr" <?php selected('ltr', $this->options('dir')); ?>><?php esc_html_e('LTR', 'news-ticker-benaceur'); ?></option>
				<option value="rtl" <?php selected('rtl', $this->options('dir')); ?>><?php esc_html_e('RTL', 'news-ticker-benaceur'); ?></option></select></div>
                </tr>
            </table>
<table class="form-table">
                <tr class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m" valign="top">
                    <th scope="row"><?php esc_html_e('Number of characters of the news', 'news-ticker-benaceur') . esc_html_e(' (post)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('expt_txt_title'); ?>" value="<?php echo esc_attr( $this->options('expt_txt_title') ); ?>" /></div>
                   &nbsp;&nbsp;<em><?php esc_html_e( 'Put 0 to disable', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
                <tr class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m" valign="top">
                    <th scope="row"><?php esc_html_e('Number of characters of the news', 'news-ticker-benaceur') . esc_html_e(' (comment)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('expt_txt_comment'); ?>" value="<?php echo esc_attr( $this->options('expt_txt_comment') ); ?>" /></div>
                   &nbsp;&nbsp;<em><?php esc_html_e( 'Put 0 to disable', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
</table>
		<p class="submit"><input type="submit" name="submit_global" id="submit-ftb1" class="button-benTheme" value="<?php esc_attr_e( 'Save general settings', 'news-ticker-benaceur' ); ?>"  /></p>
		<p class="ntb_cache_changesSaved"><?php echo $this->purge_cache_msg(); ?></p>
