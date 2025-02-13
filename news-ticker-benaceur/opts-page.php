<?php
    if ( ! defined( 'ABSPATH' ) ) exit;
	
	$settings = $this->get_settings();
	global $wp_roles;

	if ( !isset( $wp_roles ) )
	$wp_roles = new WP_Roles();

	$roles = $wp_roles->get_names();
    $roles = array_map( 'translate_user_role', $roles );
		
    $rtl_right = is_rtl() ? 'right' : 'left';
    $rtl_left = is_rtl() ? 'left' : 'right';
?>
		
<br>
        <!-- Cod Box Copy begin -->
        <link href="<?php echo plugins_url( 'admin/code-box-copy/css/prism.min.1.6.0.css' , __FILE__ ); ?>" rel="stylesheet">
        <link href="<?php echo plugins_url( 'admin/code-box-copy/css/code-box-copy.css' , __FILE__ ); ?>" rel="stylesheet">
        <script src="<?php echo plugins_url( 'admin/code-box-copy/js/prism.min.1.6.0.js' , __FILE__ ); ?>"></script>
        <script src="<?php echo plugins_url( 'admin/code-box-copy/js/clipboard.min.1.7.1.js' , __FILE__ ); ?>"></script>
        <script src="<?php echo plugins_url( 'admin/code-box-copy/js/code-box-copy.js' , __FILE__ ); ?>"></script>
        <!-- Cod Box Copy end -->

<?php 
    if (isset($_GET['settings-updated'])) {
	    $this->update_add_option( array('scrool_to' => '') );

        $msg_sbmitted = $this->options_s('reset') == 'submit' ? __('Settings saved successfully', 'news-ticker-benaceur') : __('Saved + reset successfully', 'news-ticker-benaceur');
        echo "<div id='message' class='updated' ><p>$msg_sbmitted</p></div>";
        
        if ($this->options_s('reset') != 'submit')
            $this->update_add_option( array('reset' => 'submit') );
    }
	
	if (in_array(get_user_locale(), array('ar','ary'))) {
		echo '<style>.wrap.ntb table th, .wrap.ntb .ntb-title2, .wrap.ntb table .td_ntb_radio {font-family:DroidKufi_Ben,Tahoma,Arial;font-size:15px;font-weight:normal;line-height:1.5;}</style>';	
	} else {
		echo '<style>.wrap.ntb table th, .wrap.ntb .ntb-title2, .wrap.ntb table .td_ntb_radio {font-family:Tahoma,Arial;} .wrap.ntb table td {font-size:14px;}</style>';	
	}
 ?>
<div class="wrap">
   <h1><?php _e('News-Ticker-Benaceur', 'news-ticker-benaceur'); echo ' V '. $this->ntb_version(); ?></h1>
</div>

<div id="ntb-top-import-setts"></div>
    <div id="wpcontent-benaceur-ntb">
	
		<form method="post" action="options.php" >
            <?php settings_fields( 'news_ticker_benaceur_glob_group' ); 
				do_settings_sections( 'news_ticker_benaceur_glob_group' );
			?>
		<div id="go1-setting-ntb"></div>
		<div class="wrap ntb">
        <?php 
		$this->msg_update_func();

        if ($this->options_sty('fixed')) {
		echo '<style>
		.custom_select_auto_add_code span::after, .custom_select_auto_add_code .option.selected::after {content:" (off)"; color: red;}
		</style>';
		} else {
		echo '<style>
		.custom_select_auto_add_code span::after, .custom_select_auto_add_code .option.selected::after {content:" (on)"; color: green; font-weight: bold;}
		</style>';
		}
?>
    <h3 style="font-family: DroidKufi_Ben, sans-serif;margin-top:15px; margin-bottom: 35px;"><span style="position:absolute;margin-top:-1px;" class="dashicons dashicons-admin-generic"></span><span style="padding:0 26px;"><span style="padding:0 6px;border-bottom:3px solid #666;"><?php _e('General settings', 'news-ticker-benaceur'); ?></span></span></h3>

<div id="col-nontb">
<p><?php _e('Note: After activating the plugin, choose how to put the code in the theme, manually or automatically.', 'news-ticker-benaceur'); ?></p>

<div class="class_display_note_ntb">
<span id="class_display_note_ntb1" class="dashicons dashicons-arrow-down-alt2"></span>
<input type='button' style="width:100%;margin:0 0 15px;height:40px;font-size:15px;" id='click_display_note_ntb' class="button-secondary" value='<?php _e('To read ...', 'news-ticker-benaceur'); ?>';>
<div id="display__note__ntb" style="display:none;">
<div style="margin-top:0; margin-bottom:10px; text-shadow: 1px 1px 1px #eacbff;" class="note-benaceur_shortcode note2 aligncenter-ben_note">
<p><?php _e('- If you choose to fix the news bar at the top or bottom of the site, it&#39;s recommended to add the code automatically by activating the option: &#34;Automatically add the code to show the news ticker to the theme&#34; in the fixation options at the bottom of this page and not here, unless the bar doesn&#39;t appear (according to your theme) add it manually, as for the shortcode, put it manually, and doesn&#39;t work until you activate it below this note, and cannot be fixed.', 'news-ticker-benaceur'); echo '<span style="color:#ea4620;font-weight:bold;"> '; _e('Important: this option under the note is considered null if the fixation option is activated.', 'news-ticker-benaceur'); echo '</span>'; ?></p>
<p><?php _e('- For both &#34;Absolute Position (default)&#34; and &#34;Relative Position&#34; options, absolute means that the news ticker location is absolutely at the header location if we choose top and at the footer location if we choose bottom, while relative means that it&#39;s in the header or footer relatively, for those who have no idea about css and html languages, try the first option, which is the default. If it doesn&#39;t work, choose the second one, and it depends on the theme you are using. Note: these two options only work with &#34;Add the code automatically to top&#34; and &#34;Add the code automatically to bottom&#34; option.', 'news-ticker-benaceur'); ?></p>
</div>
</div>
</div>

<table class="form-table">
	
                 <tr valign="top">
               <td style="padding:0px;">
				<select style="display:none;" name="<?php echo $this->option('auto_add_ntb_not_fixed'); ?>" class="custom_select_auto_add_code" >
				<option value="top" <?php selected('top', $this->options('auto_add_ntb_not_fixed')); ?>><?php _e("Add the code automatically to top", 'news-ticker-benaceur'); ?></option>
				<option value="bottom" <?php selected('bottom', $this->options('auto_add_ntb_not_fixed')); ?>><?php _e("Add the code automatically to bottom", 'news-ticker-benaceur'); ?></option>
				<option value="no" <?php selected('no', $this->options('auto_add_ntb_not_fixed')); ?>><?php _e("Add the code manually", 'news-ticker-benaceur'); ?></option>
				<option value="shortcode" <?php selected('shortcode', $this->options('auto_add_ntb_not_fixed')); ?>><?php _e("Enable the shortcode -only manully-", 'news-ticker-benaceur'); ?></option>
				</select>
			   </td>
                </tr>
				
</table>

<div id="ntb__personalize_not_fixed">
						<select style="display:none;" name="<?php echo $this->option('personalize_not_fixed'); ?>" class="personalize_not_fixed_select" >
						<option value="customed" <?php selected('customed', $this->options('personalize_not_fixed')); ?>><?php _e('Absolute Position (default)', 'news-ticker-benaceur'); ?></option>
						<option value="common" <?php selected('common', $this->options('personalize_not_fixed')); ?>><?php _e('Relative Position', 'news-ticker-benaceur'); ?></option>
						</select>
</div>

<div style="clear:both;" class="code-box-copy">
<span class="code-box-copy__btn" data-clipboard-target="#example-head1" title="<?php _e('Copy'); ?>"></span>
<pre><code class="language-html" id="example-head1"><?php echo esc_html("<?php if (function_exists( 'wp_news_ticker_benaceur_' )) wp_news_ticker_benaceur_(); ?>"); ?></code></pre>
</div>

<p style="clear: both;"><?php _e('or put this short code in post or page (only manually):', 'news-ticker-benaceur'); ?></p>
<div class="code-box-copy">
<span class="code-box-copy__btn" data-clipboard-target="#example-head2" title="<?php _e('Copy'); ?>"></span>
<pre><code class="language-html" id="example-head2"><?php echo esc_html("[wp_news_ticker_benaceur_short_code]"); ?></code></pre>
</div>

</div>
	
    <?php require_once ('opts-page/global-options.php'); ?>
	
        </div>

    <?php require_once ('opts-page/animations.php'); ?>

<div id="news-ticker-benaceur-font">
<div class="wrap ntb">

<span id="ntb5-5"></span>

    <?php require_once ('opts-page/style.php'); ?>
			
<span id="ntb6-6"></span>

</div>
<div id="go4-setting-ntb"></div>
<div class="wrap ntb">
        <h3 style="font-family: DroidKufi_Ben, sans-serif;"><span style="position:absolute;margin-top:-1px;font-size:24px;" class="dashicons dashicons-yes"></span><span style="padding:0 26px;"><span style="padding:0 6px;border-bottom:3px solid #666;"><?php _e('Other settings', 'news-ticker-benaceur'); ?></span></span></h3><br>

<table style="margin-top:20px;" class="form-table44-moh">
	
					<tr>
						<td>
                   <input type="radio" id="oth_delete_all_options_yes" name="<?php echo $this->option_oth('delete_all_options'); ?>" value="delete" <?php if( $this->options_oth('delete_all_options') == 'delete') echo 'checked';?> >
                    <td><label for="oth_delete_all_options_yes"><?php _e("Remove all settings and data of the plugin from database when the plugin is disabled",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="oth_delete_all_options_no" name="<?php echo $this->option_oth('delete_all_options'); ?>" value="not_delete" <?php if( $this->options_oth('delete_all_options') == 'not_delete') echo 'checked';?> >
						</td>
                   <td><label for="oth_delete_all_options_no"><?php _e("Do not delete",'news-ticker-benaceur'); ?></label></td>
					</tr>
</table>
<br>--------------
<table style="margin-top:20px;" class="form-table44-moh">
					<tr>
						<td>
                   <input type="radio" id="oth_remove_short_code_yes" name="<?php echo $this->option_oth('remove_short_code'); ?>" value="remove" <?php if( $this->options_oth('remove_short_code') == 'remove') echo 'checked';?> >
                    <td><label for="oth_remove_short_code_yes"><?php _e("Remove [wp_news_ticker_benaceur_short_code] from posts and pages when the plugin is disabled (is recommended that take a copy of the database before this operation)",'news-ticker-benaceur'); ?></label></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" id="oth_remove_short_code_no" name="<?php echo $this->option_oth('remove_short_code'); ?>" value="not_remove" <?php if( $this->options_oth('remove_short_code') == 'not_remove')echo 'checked';?> >
						</td>
                   <td><label for="oth_remove_short_code_no"><?php _e("Do not remove",'news-ticker-benaceur'); ?></label></td>
					</tr>
</table>

<table style="margin:25px 0 0 0;" class="form-table">
					<tr> 
                   <td><p style="font-family: DroidKufi_Ben,Tahoma,Arial,sans-serif; font-size:15px; font-weight:bold;"><?php _e("Reset:",'news-ticker-benaceur'); ?></p></td>
					</tr>

                 <tr valign="top">
               <td style="padding:0px;">
				<div class="bold-3"><select style="min-width:100px;text-align:center;" name="<?php echo $this->option_s('reset'); ?>"  class="news-ticker-benaceur-color-inp selAnim" >
				<option value="submit" <?php selected('submit', $this->options_s('reset')); ?>><?php _e('Choose a section to reset', 'news-ticker-benaceur'); ?></option>
				<option value="reset_glob" <?php selected('reset_glob', $this->options_s('reset')); ?>><?php _e('reset general settings', 'news-ticker-benaceur'); ?></option>
				<option value="reset_anim" <?php selected('reset_anim', $this->options_s('reset')); ?>><?php _e('reset animation settings', 'news-ticker-benaceur'); ?></option>
				<option value="reset_sty" <?php selected('reset_sty', $this->options_s('reset')); ?>><?php _e('reset style settings', 'news-ticker-benaceur'); ?></option>
				<option value="reset_all" <?php selected('reset_all', $this->options_s('reset')); ?>><?php _e('reset all settings', 'news-ticker-benaceur'); ?></option>
				</select></div>
			   </td>
                </tr>
				
                <tr>  
                    <td> 
					<label class="ntb_excluded-reset_checkbox" for="ntb_excluded-reset_checkbox">
                        <span><?php _e('Disable the reset exclude for below options', 'news-ticker-benaceur'); ?></span>
	                    <input type="hidden" value="" name="<?php echo $this->option_s('exclude_from_reset'); ?>" />
						<input type="checkbox" id="ntb_excluded-reset_checkbox" name="<?php echo $this->option_s('exclude_from_reset'); ?>" value="1" <?php checked( $this->options_s('exclude_from_reset'), 1 ); ?> />
                   </label>
				   </td>
                </tr>
</table>

<div class="ntb_excluded-reset-text">
<p class="ntb_ert_class"><span><?php _e( 'The following options are excluded from reset:', 'news-ticker-benaceur' ); ?></span></p>
<p style="margin:0 0 55px;">
<?php _e( '- Enter your news (manually) here (General settings)<br>- The last update of manually news date (General settings)<br>- Style customization css (Settings of style)<br>- Script customization or adding java/jquery (Settings of style)', 'news-ticker-benaceur' ); ?>
</p>
</div>

		<p class="submit"><input type="submit" name="submit_others" id="submit-ftb7" class="button-benTheme" value="<?php _e( 'Save other settings', 'news-ticker-benaceur' ); ?>"  /></p>
		<p class="ntb_cache_changesSaved-s-oth"><?php echo $this->purge_cache_msg(); ?></p>
	
<div class="to-tr2"></div><br><br>
<input type="submit" name="submit__ntb_all" id="submit-ftb-all" class="button-benTheme" value="<?php _e("Save all Changes", 'news-ticker-benaceur'); ?>"  /><br /><br />
<p class="ntb_cache_changesSaved-s-all"><?php echo $this->purge_cache_msg(); ?></p>
<br />

	</form>

  </div>
  </div>
  
<!-- import export -->
<div id="go5-setting-ntb"></div>
		<div class="metabox-holder">
			<div class="wrap ntb">
				<h3><span class="DroidArabicKufi"><span style="position:absolute;margin-top:-2px;font-size:26px;" class="dashicons dashicons-arrow-right"></span><span style="padding:0 26px;"><span style="padding:0 6px;border-bottom:3px solid #666;"><?php _e('Export settings', 'news-ticker-benaceur');?></span></span></span></h3><br>
				<div class="inside">
					<p class="news-ticker-benaceur-font-size"><?php _e('Export all plugin settings in an json file that helps you to save all your settings for reuse here or at another location with ease.', 'news-ticker-benaceur');?></p>
					<form method="post">
						<p><input type="hidden" name="ntb_action" value="export_settings" /></p>
						<p>
							<?php wp_nonce_field( 'ntb_export_nonce', 'ntb_export_nonce' ); ?>
							<?php submit_button( __( 'Export' ), 'secondary', 'submit', false ); ?>
						</p>
					</form>
				</div><!-- .inside -->
			</div><!-- .postbox -->

			<div class="wrap ntb">
				<h3><span class="DroidArabicKufi"><span style="position:absolute;margin-top:-3px;font-size:26px;" class="dashicons dashicons-arrow-left"></span><span style="padding:0 26px;"><span style="padding:0 6px;border-bottom:3px solid #666;"><?php _e('Import settings', 'news-ticker-benaceur');?></span></span></span></h3><br>
				<div class="inside">
					<p class="news-ticker-benaceur-font-size"><?php _e('Click on "Import" to restore all your saved settings from the json file', 'news-ticker-benaceur');?></p>
					<form method="post" enctype="multipart/form-data">
						<p>
							<input type="file" name="NTB_import_file"/>
						</p>
						<p>
							<input type="hidden" name="ntb_action" value="import_settings" />
							<?php wp_nonce_field( 'ntb_import_nonce', 'ntb_import_nonce' ); ?>
							<?php submit_button( __( 'Import' ), 'secondary', 'submit', false ); ?>
						</p>
					</form>
				</div><!-- .inside -->
			</div><!-- .postbox -->
		</div><!-- .metabox-holder -->
<!-- import export -->

    <?php require_once ('includes/filter-functions.php'); ?>

	<div class="wrap ntb koalapse">
        <div class="main-NTB">
            <!-- Content goes here -->
            <div class="koalapse-NTB">
                <h3 class="koalapse__title-NTB op1" data-panel="panel-1"><span><span class="dashicons dashicons-admin-tools"></span> <?php _e("Support",'news-ticker-benaceur'); ?></span></h3>
                <div style="display: none;" class="koalapse__content-NTB op1" data-panel="panel-1">
                    <p><?php _e("You can ask questions about plugin and settings via this topic:",'news-ticker-benaceur'); ?> <a target="_blank" href="https://benaceur-php.com/?p=1747" >https://benaceur-php.com/support</a> </p>
                </div>
                <h3 class="koalapse__title-NTB op2"><span style="margin-top:-1px;" class="dashicons dashicons-admin-multisite"></span> <?php _e("Contribute to translation of plugin",'news-ticker-benaceur'); ?></h3>
                <div style="display: none;" class="koalapse__content-NTB op2">
                    <p><?php _e('If you want to translate this plugin to your language then send me the translation files via:', 'news-ticker-benaceur'); ?> <a target="_blank" href="https://benaceur-php.com/?p=32" >https://benaceur-php.com/contact</a> </p>
                </div>
                <h3 class="koalapse__title-NTB op3"><span style="margin-top:-1px;" class="dashicons dashicons-megaphone"></span> <?php _e("Very important",'news-ticker-benaceur'); ?></h3>
                <div style="display: none;" class="koalapse__content-NTB op3">
                    <p><?php _e('1- If you use a caching plugin, it is necessary in most cases to clear the cache after plugin settings is updated', 'news-ticker-benaceur'); ?></p>
                    <p><?php _e('2- Note for developers: When you use (query_posts) to identify articles that appear in the home page, for example, or in search page or ... must be taken into account that it affects the inclusion or exclusion articles that appear in the ticker, and to avoid this problem, and so as not to interfere with the insertion or exception settings for latest articles, must use this condition: $query->is_main_query()', 'news-ticker-benaceur'); ?></p>
                </div>
                <h3 class="koalapse__title-NTB op4"><span style="margin-top:-2px;" class="dashicons dashicons-admin-users"></span> benaceur-php.com</h3>
                <div style="display: none;" class="koalapse__content-NTB op4">
                    <p><?php _e("Visit plugin site:",'news-ticker-benaceur'); ?> <a target="_blank" href="https://benaceur-php.com">https://benaceur-php.com</a> </p>
                </div>
                <h3 class="koalapse__title-NTB op5"><span style="margin-top:-2px;" class="dashicons dashicons-admin-users"></span> <?php _e("My plugins",'news-ticker-benaceur'); ?></h3>
                <div style="display: none;" class="koalapse__content-NTB op5">
                   <p><a target="_blank" href="https://wordpress.org/plugins/month-name-translation-benaceur/">month-name-translation-benaceur</a></p>
                   <p><a target="_blank" href="https://wordpress.org/plugins/restrict-usernames-emails-characters/">Restrict Usernames Emails Characters</a></p>
                </div>
            </div>
        </div>
	</div>	

<br>
  <div id="NTB-up-page"></div>
<?php if (!$this->options_sty('hide_icon_evol_plug')) {?>
<div style="text-transform: uppercase;" class="hov-button-primary-sub"><div class="button button-primary"><a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/news-ticker-benaceur?filter=5"><?php _e('Do not forget to rate the plugin', 'news-ticker-benaceur');?></a></div></div>
<?php } ?>
	</div>