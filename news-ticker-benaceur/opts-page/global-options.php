<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
	                    <input type="hidden" value="" name="<?php echo $this->option('enable'); ?>" />
                        <input type="checkbox"  value="1" <?php checked( $this->options('enable'), 1 );  ?> name="<?php echo $this->option('enable'); ?>" />
                        <label></label>
	</div>
	<center><div class="enable_ntb_plugin" ><?php _e("Enable plugin",'news-ticker-benaceur'); ?></div></center>
		</td>
	</tr>
</table>
<table class="form-table44">
	
                 <tr valign="top">
               <td>
				<select style="display:none;" name="<?php echo $this->option('latest_p_c'); ?>" id="news_ticker_benaceur_select_news" class="custom-select-news" >
				<option value="latest_posts" <?php selected('latest_posts', $this->options('latest_p_c')); ?>><?php _e("Latest posts", 'news-ticker-benaceur'); ?></option>
				<option value="latest_comments" <?php selected('latest_comments', $this->options('latest_p_c')); ?>><?php _e("Latest comments", 'news-ticker-benaceur'); ?></option>
				<option value="manually" <?php selected('manually', $this->options('latest_p_c')); ?>><?php _e("Latest news Manually", 'news-ticker-benaceur'); ?></option>
				</select>
			   </td>
                </tr>
				
<br>
</table><br>

<div class="to-tr2"></div>
<br>
<table class="form-table44-moh">
					<tr>
						<td>
						<select name="<?php echo $this->option('links_admin_bar_menu'); ?>">
						<option value="menu" <?php selected('menu', $this->options('links_admin_bar_menu')); ?>><?php _e('Menu', 'news-ticker-benaceur'); ?></option>
						<option value="submenu" <?php selected('submenu', $this->options('links_admin_bar_menu')); ?>><?php _e('Submenu', 'news-ticker-benaceur'); ?></option>
						</select>
						</td>
					</tr>
					
					<tr style="height:20px;"><td></td></tr>
					
<tr valign="top"><td  scope="row"><?php _e('Enable News Ticker Benaceur on admin bar in frontend', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="hidden" value="" name="<?php echo $this->option('links_admin_bar_front'); ?>" /><input type="checkbox" name="<?php echo $this->option('links_admin_bar_front'); ?>" class="switch-input" value="1" <?php checked( $this->options('links_admin_bar_front'), 1 ); ?> /><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><td scope="row"><?php _e('Enable News Ticker Benaceur on admin bar in admin panel', 'news-ticker-benaceur'); ?></td><td><label class="switch-nab"><input type="hidden" value="" name="<?php echo $this->option('links_admin_bar_admin'); ?>" /><input type="checkbox" name="<?php echo $this->option('links_admin_bar_admin'); ?>" class="switch-input" value="1"<?php checked( $this->options('links_admin_bar_admin'), 1 ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
</table>
<br>
<div class="to-tr2"></div>
<div id="go1a-setting-ntb"></div><br>
			<table class="form-table">
                <tr>  
                    <th scope="row"><div class="dd"><?php _e('Hide for visitors', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e('Hide for all users', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e('Hide for all except administrator', 'news-ticker-benaceur'); ?></div></th>
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
                	<th scope="row"><?php _e('Hide for this group(s) (You can select more than one group)', 'news-ticker-benaceur'); ?></th>
                    <td>
						
<div class="styled-select-ntb">
<select name="<?php echo $this->option('for_role_x'); ?>[]" id="news_ticker_benaceur_for_role_x" style="min-width:150px; font-weight: bold; height: auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="" select="select"><?php _e('Remove Selection', 'news-ticker-benaceur'); ?></option>

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
                    <th scope="row"><?php _e('Hide for this user id', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('for_user_id'); ?>" placeholder="<?php _e( 'Enter here the user id', 'news-ticker-benaceur' ); ?>" value="<?php echo esc_attr( $this->options('for_user_id') ); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php _e('Hide if no items (no posts or)', 'news-ticker-benaceur'); ?></div></th>
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->option('hide_if_noItems'); ?>" />
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->option('hide_if_noItems'); ?>" value="1" <?php checked( $this->options('hide_if_noItems'), 1 ); ?> />
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
				   </td>
                </tr>
				</table>
<input type='button' style="min-width:130px;margin-top:20px;"  id='H-ntbSelpage' class="button-secondary" value='<?php _e('Hide/Show in:', 'news-ticker-benaceur'); ?>';>
<span style="position:absolute;margin: 23px 5px;font-size: 25px;" class="dashicons dashicons-arrow-down"></span>

<div id="H2-ntbSelpage" style="display:none;">

<table style="margin-top:10px;" class="form-table">
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hide_or_noHide_in1" name="<?php echo $this->option('hide_or_noHide_in'); ?>" value="disable_this_option" <?php if( $this->options('hide_or_noHide_in') == 'disable_this_option') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hide_or_noHide_in1">
					<?php _e("Disable hide/show option",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hide_or_noHide_in2" name="<?php echo $this->option('hide_or_noHide_in'); ?>" value="hide" <?php if( $this->options('hide_or_noHide_in') == 'hide') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hide_or_noHide_in2">
					<?php _e("Hide in",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr> 
						<td class="td_ntb_radio1">
                   <input type="radio" id="hide_or_noHide_in3" name="<?php echo $this->option('hide_or_noHide_in'); ?>" value="show" <?php if( $this->options('hide_or_noHide_in') == 'show') echo 'checked';?> >
						</td>
                    <td class="td_ntb_radio"><label for="hide_or_noHide_in3">
					<?php _e("Show in",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
</table>

------------
					
<table class="form-table">
					
                <tr>  
                    <th scope="row"><div class="dd"><?php _e('home', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e('category page', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e("author page", 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e("search page", 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e('single post (in post)', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><?php _e('ID of post', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('in_single_id'); ?>" placeholder="<?php _e( 'Leave blank to activate All', 'news-ticker-benaceur' ); ?>" value="<?php echo esc_attr( $this->options('in_single_id') ); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
<br>				
                <tr>  
                    <th scope="row"><div class="dd"><?php _e('pages', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><?php _e('ID of page', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('in_page_id'); ?>" placeholder="<?php _e( 'Leave blank to activate All', 'news-ticker-benaceur' ); ?>" value="<?php echo esc_attr( $this->options('in_page_id') ); ?>" /></div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
</table>
</div>

<div>
<input type='button' style="min-width:130px;margin-top:20px;"  id='show-H-ntbSelpage-hide' class="button-secondary" value='<?php _e('Hide after time:', 'news-ticker-benaceur'); ?>';>
<span style="position:absolute;margin: 23px 5px;font-size: 25px;" class="dashicons dashicons-arrow-down"></span>
</div>

<div id="H3-ntbSelpage-hide" style="display:none;">
<table style="margin-top:10px;" id="ntb_hideAfterTime" class="form-table">
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hi_hide1" name="<?php echo $this->option_hi('hide'); ?>" value="disable_this_option" <?php if( $this->options_hi('hide') == 'disable_this_option') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hi_hide1">
					<?php _e("Disable this option",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr>
						<td class="td_ntb_radio1">
                   <input type="radio" id="hi_hide2" name="<?php echo $this->option_hi('hide'); ?>" value="hide" <?php if( $this->options_hi('hide') == 'hide') echo 'checked';?> >
					   </td>
                    <td class="td_ntb_radio"><label for="hi_hide2">
					<?php _e("Hide (when page reloaded)",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
					<tr> 
						<td class="td_ntb_radio1">
                   <input type="radio" id="hi_hide3" name="<?php echo $this->option_hi('hide'); ?>" value="hide_jquery" <?php if( $this->options_hi('hide') == 'hide_jquery') echo 'checked';?> >
						</td>
                    <td class="td_ntb_radio"><label for="hi_hide3">
					<?php _e("hide (without reloading the page - jquery)",'news-ticker-benaceur'); ?>
					</label></td>
					</tr>
</table>

              <table class="form-table">
                <tr valign="top">
                    <th class="fsub_lat-pos-ntb box_lat-com" scope="row"><?php _e('Hide after spending a (the time entered here) of your recent post:', 'news-ticker-benaceur'); ?></th>
                    <th class="fsub_lat-com-ntb box_lat-com" scope="row"><?php _e('Hide after spending a (the time entered here) of your recent comment:', 'news-ticker-benaceur'); ?></th>
					<th class="ntb_choose_type_news_show_manually ntb_choose_type_news_show_l_m" scope="row"><?php _e('Hide after spending a (the time entered here) of your recent update date:', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_hi('time_latest'); ?>" value="<?php echo esc_attr( $this->options_hi('time_latest') ); ?>" /></div>
                   <div>
						<select name="<?php echo $this->option_hi('latest_in_seconds'); ?>">
						<option value="minute" <?php selected('minute', $this->options_hi('latest_in_seconds')); ?>><?php _e('Minute', 'news-ticker-benaceur'); ?></option>
						<option value="hour" <?php selected('hour', $this->options_hi('latest_in_seconds')); ?>><?php _e('Hour', 'news-ticker-benaceur'); ?></option>
						<option value="day" <?php selected('day', $this->options_hi('latest_in_seconds')); ?>><?php _e('Day', 'news-ticker-benaceur'); ?></option>
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
                    <th class="fsub_lat-pos-ntb box_lat-com" scope="row"><?php _e('Get only posts published less than:', 'news-ticker-benaceur'); ?></th>
                    <th class="fsub_lat-com-ntb box_lat-com" scope="row"><?php _e('Get only comments published less than:', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option_hi('time_ago'); ?>" value="<?php echo esc_attr( $this->options_hi('time_ago') ); ?>" /></div>
                   <div>
						<select name="<?php echo $this->option_hi('ago_in_seconds'); ?>">
						<option value="minutes" <?php selected('minutes', $this->options_hi('ago_in_seconds')); ?>><?php _e('Minute', 'news-ticker-benaceur'); ?></option>
						<option value="hours" <?php selected('hours', $this->options_hi('ago_in_seconds')); ?>><?php _e('Hour', 'news-ticker-benaceur'); ?></option>
						<option value="days" <?php selected('days', $this->options_hi('ago_in_seconds')); ?>><?php _e('Day', 'news-ticker-benaceur'); ?></option>
						</select>
				   </div>
				   <em class="fsub_lat-pos-ntb box_lat-com"><?php _e( 'Leave it blank to get all posts', 'news-ticker-benaceur' ); ?></em>
				   <em class="fsub_lat-com-ntb box_lat-com"><?php _e( 'Leave it blank to get all comments', 'news-ticker-benaceur' ); ?></em>
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
                    <th scope="row"><?php _e('Choose the post type (You can select more than one type)', 'news-ticker-benaceur'); ?></th>
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
                    <th scope="row"><?php _e('Choose the post status (You can select more than one status)', 'news-ticker-benaceur'); ?></th>
                    <td>
				<div class="bold-3"><select style="min-width:150px; text-align:center; height:auto;"  name="<?php echo $this->option('post_status'); ?>[]"  multiple="multiple">
				<option value="publish" <?php selected( in_array( 'publish', $ntb_post__status ) ); ?>><?php _e("publish", 'news-ticker-benaceur'); ?></option>
				<option value="pending" <?php selected( in_array( 'pending', $ntb_post__status ) ); ?>><?php _e("pending", 'news-ticker-benaceur'); ?></option>
				<option value="trash" <?php selected( in_array( 'trash', $ntb_post__status ) ); ?>><?php _e("trash", 'news-ticker-benaceur'); ?></option>
				<option value="draft" <?php selected( in_array( 'draft', $ntb_post__status ) ); ?>><?php _e("draft", 'news-ticker-benaceur'); ?></option>
				<option value="future" <?php selected( in_array( 'future', $ntb_post__status ) ); ?>><?php _e("future", 'news-ticker-benaceur'); ?></option>
				<option value="private" <?php selected( in_array( 'private', $ntb_post__status ) ); ?>><?php _e("private", 'news-ticker-benaceur'); ?></option>
				<option value="auto-draft" <?php selected( in_array( 'auto-draft', $ntb_post__status ) ); ?>><?php _e("auto-draft", 'news-ticker-benaceur'); ?></option>
				<option value="inherit" <?php selected( in_array( 'inherit', $ntb_post__status ) ); ?>><?php _e("inherit", 'news-ticker-benaceur'); ?></option>
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
                    <th scope="row"><?php _e('Choose the post status (You can select more than one status)', 'news-ticker-benaceur'); ?></th>
                    <td>
				<div class="bold-3"><select style="min-width:150px; text-align:center;"  name="<?php echo $this->option('comment_status'); ?>">
				<option value="approve" <?php selected('approve', $this->options('comment_status')); ?>><?php _e("approve", 'news-ticker-benaceur'); ?></option>
				<option value="hold" <?php selected('hold', $this->options('comment_status')); ?>><?php _e("pending", 'news-ticker-benaceur'); ?></option>
				<option value="all" <?php selected('all', $this->options('comment_status')); ?>><?php _e("all", 'news-ticker-benaceur'); ?></option>
				</select></div>
				</td>
                </tr>
</table>
				
	</span>	

<table class="form-table">

                 <tr valign="top">
                    <th scope="row"><span class="fsub_lat-pos-ntb box_lat-com"><?php _e('Choose the name of taxonomy', 'news-ticker-benaceur'); ?></span></th>
                    
                    <td>
<span class="fsub_lat-pos-ntb_hide-sel">
				
				<div class="bold-3"><select style="min-width:150px;text-align:center;"  name="<?php echo $this->option('for_cat_tax'); ?>"  class="news-ticker-benaceur-color-tax">
<?php
  $taxonomies_ntb = array($this->options('for_cat_tax'));
  //$taxonomies = get_taxonomies();
  $taxonomies = get_object_taxonomies( 'post' );
  
  foreach ( $taxonomies as $taxonomy ) {
?>
<option value="<?php echo esc_attr( $taxonomy ); ?>"<?php selected( in_array( $taxonomy, $taxonomies_ntb ) ); ?>><?php echo esc_attr( $taxonomy ); ?></option>
<?php
}
?>
				</select></div>
                </span>
				</tr>
				
                <tr valign="top">
                    <th scope="row">
					<span class="fsub_lat-pos-ntb box_lat-com">
					<span class="fsub_cat-or-tax-ntb box_cat-tax"><?php _e('category id (include/exclude)', 'news-ticker-benaceur'); ?></span>
					<span class="fsub_tax-or-cat-ntb box_cat-tax"><?php _e('taxonomy id', 'news-ticker-benaceur'); ?></span>
					</span>
					<span class="fsub_lat-com-ntb box_lat-com"><?php _e('post id', 'news-ticker-benaceur'); ?></span>
					</th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="direction:ltr;font-weight:bold;" type="text" name="<?php echo $this->option('for_cat'); ?>" placeholder="<?php if ($this->options('for_cat_tax') == 'category') { _e( 'Leave blank to activate All', 'news-ticker-benaceur' ); } else { _e( 'Enter the id', 'news-ticker-benaceur' ); } ?>" value="<?php echo esc_attr( $this->options('for_cat') ); ?>" />
<span class=""><span class="fsub_lat-pos-ntb_hide-sel">
<input type='button' style="margin-top:-1px;" id='bt-ntbCat' class="button-secondary" value='<?php _e('Display all categories', 'news-ticker-benaceur'); ?>';>
<span style="position:absolute;margin: -2px 5px;font-size: 25px;" class="dashicons dashicons-arrow-down"></span>
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
</table></div>', '%', __( 'Category name', 'news-ticker-benaceur'), __( 'Category id', 'news-ticker-benaceur'), __( 'Post Count', 'news-ticker-benaceur'), $this->rtl_left_right());

$cats = get_categories(array('hide_empty' => false, 'taxonomy' => $this->options('for_cat_tax') ? $this->options('for_cat_tax') : 'category'));
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

					</div>
                    &nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'news-ticker-benaceur' ); ?></em></td>
                    
                </tr>
				
					<tr>
						<td>
					<span class="fsub_tax-ntb">	
                   <input type="radio" id="option_include_exclude_id1" name="<?php echo $this->option('include_exclude_id'); ?>" value="include_id" <?php if( $this->options('include_exclude_id') == 'include_id') echo 'checked';?> >
				    </span>   
					   </td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><span class="fsub_tax-ntb">
					<span class="fsub_lat-pos-ntb box_lat-com"><label for="option_include_exclude_id1"><?php _e("Include cat id",'news-ticker-benaceur'); ?></label></span>
					<span class="fsub_lat-com-ntb box_lat-com"><label for="option_include_exclude_id1"><?php _e("Include post id",'news-ticker-benaceur'); ?></label></span>
					</span></td></div>
					</tr><br>
					<tr> 
						<td>
					<span class="fsub_tax-ntb">	
                   <input type="radio" id="option_include_exclude_id2" name="<?php echo $this->option('include_exclude_id'); ?>" value="exclude_id" <?php if( $this->options('include_exclude_id') == 'exclude_id')echo 'checked';?> >
					 </span> 	
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><span class="fsub_tax-ntb">
					<span class="fsub_lat-pos-ntb box_lat-com"><label for="option_include_exclude_id2"><?php _e("Exclude cat id",'news-ticker-benaceur'); ?></label></span>
					<span class="fsub_lat-com-ntb box_lat-com"><label for="option_include_exclude_id2"><?php _e("Exclude post id",'news-ticker-benaceur'); ?></label></span>
					</span></td></div>
					</tr><br>
					
					
					
</table>

</span>

<div class="ntb_choose_type_news_show_manually ntb_choose_type_news_show_l_m">

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php _e('If no news (text)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('empty_txt_news_manually'); ?>" value="<?php echo esc_attr( $this->options('empty_txt_news_manually') ); ?>" placeholder="<?php _e('Leave it blank (default text)', 'news-ticker-benaceur'); ?>" /></div>
                   </td>
                </tr>
            </table>

            <p class="ntb-title2"><?php _e("Enter your news (manually) here:",'news-ticker-benaceur'); ?></p>
			<p style="" class="h77-this-sec"><?php _e('The last update of manually news date:','news-ticker-benaceur'); echo ' ' . $this->options_hi('manually_date'); ?></p>
				<p style="" class="h77-this-sec"><select style="min-width:100px;text-align:center;"  name="<?php echo $this->option_hi('update_manually_date'); ?>"  class="news-ticker-benaceur-styl-tit">
				<option value="no" <?php selected('no', $this->options_hi('update_manually_date')); ?>><?php _e('Do not update the date', 'news-ticker-benaceur'); ?></option>
				<option value="yes" <?php selected('yes', $this->options_hi('update_manually_date')); ?>><?php _e('Update the date of manually news', 'news-ticker-benaceur'); ?></option>
				</select></p>
<?php			
			echo '<div style="margin: 0 0 12px; padding: 0;"><input type="button" id="b78t-ntbCat-txt_news_manually" class="button-secondary" value="'. __("Text direction", 'news-ticker-benaceur') .'"></div>';
?>			
			<p class="news-ticker-benaceur-s-style_m"><textarea id="news-ticker-benaceur-s--style_m" name="<?php echo $this->option('txt_news_manually'); ?>" ><?php echo esc_textarea( $this->options('txt_news_manually') ); ?></textarea></p>
			<p><em><?php _e("Put each news in new line between this tags",'news-ticker-benaceur'); echo esc_html(' <a></a>, '); _e('ex:', 'news-ticker-benaceur'); ?></em></p>
			<p class="ntb-ex2"><b><?php _e("This form is correct:",'news-ticker-benaceur'); ?></b></p>
			<p class="ntb-ex3"><em><?php echo esc_html('<a href="https://site.com/" title="">'); _e("your first news ...",'news-ticker-benaceur'); echo esc_html('</a>'); ?></em></p>
			<p class="ntb-ex2"><em><?php _e("your second news ...",'news-ticker-benaceur'); ?></em></p>
			<p class="ntb-ex3"><em><?php echo esc_html('<a href="#" >'); _e("your third news ...",'news-ticker-benaceur'); echo esc_html('</a>'); ?></em></p>
			<p class="ntb-ex2"><b><?php _e("This form is incorrect:",'news-ticker-benaceur'); ?></b></p>
			<p class="ntb-ex2"><em><?php _e("your first news ...",'news-ticker-benaceur'); echo esc_html(' <a href="https://site.com/" title="">'); _e("click here",'news-ticker-benaceur'); echo esc_html('</a>'); ?></em></p>

</div>

<div id="go1b-setting-ntb"></div>
<div class="to-tr2"></div>

<div class="ntb_choose_type_news_show_manually ntb_choose_type_news_show_l_m">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php _e('Number of characters of the news', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('expt_txt_manually_news'); ?>" value="<?php echo esc_attr( $this->options('expt_txt_manually_news') ); ?>" /></div>
                   &nbsp;&nbsp;<em><?php _e( 'Put 0 to disable', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
            </table>

			  <br>
</div>
			  
              <table class="form-table">
			  <?php _e('Choose one title for each site according direction if your multilingual site', 'news-ticker-benaceur'); ?>
                <tr valign="top">
                    <th scope="row"><?php _e('The title ltr', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('title_ltr'); ?>" value="<?php echo esc_attr( $this->options('title_ltr') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('The title rtl', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:250px;" type="text" name="<?php echo $this->option('title_rtl'); ?>" value="<?php echo esc_attr( $this->options('title_rtl') ); ?>" /></div>
                   </td>
                </tr>
                <tr>  
                    <th scope="row"><div class="dd"><?php _e('Disable Title', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><div class="dd"><?php _e('Title animation pulsate', 'news-ticker-benaceur'); ?></div></th>
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
                    <th scope="row"><?php _e('Title styles', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="<?php echo $this->option('title_styles'); ?>"  class="news-ticker-benaceur-styl-tit">
				<option value="simpleTileSt" <?php selected('simpleTileSt', $this->options('title_styles')); ?>><?php _e('Simple', 'news-ticker-benaceur'); ?></option>
				<option value="radiusTileSt" <?php selected('radiusTileSt', $this->options('title_styles')); ?>><?php _e('Radius', 'news-ticker-benaceur'); ?></option>
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
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Top left', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topleft_lef'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topleft_lef') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Top right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topright_lef'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topright_lef') ); ?>" /></div>
                   </td>
                </tr>
				<?php } else { ?>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Top left', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topleft_ri'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topleft_ri') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Top right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_topright_ri'); ?>" value="<?php echo esc_attr( $this->options('title_styles_topright_ri') ); ?>" /></div>
                   </td>
                </tr>
				<?php } ?>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Bottom right', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('title_styles_bottomright'); ?>" value="<?php echo esc_attr( $this->options('title_styles_bottomright') ); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <th style="font-size: 13px;font-weight:normal;" scope="row"><?php _e('Bottom left', 'news-ticker-benaceur'); ?></th>
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
                    <th class="fsub_lat-pos-ntb box_lat-com" scope="row"><?php _e('Numbre of posts', 'news-ticker-benaceur'); ?></th>
                    <th class="fsub_lat-com-ntb box_lat-com" scope="row"><?php _e('Numbre of comments', 'news-ticker-benaceur'); ?></th>
					<td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('num_posts'); ?>" value="<?php echo esc_attr( $this->options('num_posts') ); ?>" /></div>
                   </td>
                </tr>
              </table>
              <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php _e('Direction', 'news-ticker-benaceur'); ?></th>
                    
                    <td>
				<div class="bold-3"><select style="min-width:100px;text-align:center;"  name="<?php echo $this->option('dir'); ?>" class="news-ticker-benaceur-color-inp">
				<option value="auto" <?php selected('auto', $this->options('dir')); ?>><?php _e('Auto', 'news-ticker-benaceur'); ?></option>
				<option value="ltr" <?php selected('ltr', $this->options('dir')); ?>><?php _e('LTR', 'news-ticker-benaceur'); ?></option>
				<option value="rtl" <?php selected('rtl', $this->options('dir')); ?>><?php _e('RTL', 'news-ticker-benaceur'); ?></option></select></div>
                </tr>
            </table>
<table class="form-table">
                <tr class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m" valign="top">
                    <th scope="row"><?php _e('Number of characters of the news', 'news-ticker-benaceur') . _e(' (post)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('expt_txt_title'); ?>" value="<?php echo esc_attr( $this->options('expt_txt_title') ); ?>" /></div>
                   &nbsp;&nbsp;<em><?php _e( 'Put 0 to disable', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
                <tr class="ntb_choose_type_news_show_latest ntb_choose_type_news_show_l_m" valign="top">
                    <th scope="row"><?php _e('Number of characters of the news', 'news-ticker-benaceur') . _e(' (comment)', 'news-ticker-benaceur'); ?></th>
                    <td>
					<div class="sm_benaceurlist_caps_input-ntb"><input style="font-weight:bold;max-width:100px;text-align:center;" type="text" name="<?php echo $this->option('expt_txt_comment'); ?>" value="<?php echo esc_attr( $this->options('expt_txt_comment') ); ?>" /></div>
                   &nbsp;&nbsp;<em><?php _e( 'Put 0 to disable', 'news-ticker-benaceur' ); ?></em>
				   </td>
                </tr>
</table>
		<p class="submit"><input type="submit" name="submit_global" id="submit-ftb1" class="button-benTheme" value="<?php _e( 'Save Changes' ); ?>"  /></p>
		<p class="ntb_cache_changesSaved"><?php _e( 'Purge the cache after each settings change, If you were of course using a cache plugin.','news-ticker-benaceur' ); ?></p>
