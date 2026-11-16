<?php
    if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div id="wrap_modif_by_filter_ntb" style="padding-bottom:20px;" class="wrap ntb">

<span id="wrap_modif_by_filter_ntb1" class="dashicons dashicons-arrow-down-alt2"></span>
<input type='button' style="width:100%;margin:10px 0 15px 0;height:40px;font-size:15px;" id='click_modif_by_filter_ntb' class="button-secondary" value='<?php _e('Modifications and additions by &#34;filter&#34;', 'news-ticker-benaceur'); ?>';>
<div class="news-ticker-benaceur-font-size" style="font-family: DroidKufi_Ben, sans-serif;background:#71c0d9;width:max-content;padding:6px 10px;"><?php echo __('Last update', 'news-ticker-benaceur') . ': 01-' . __( 'June' ) . '-2026'; ?></div>
<div id="display_modif_by_filter_ntb" style="display:none;">

<input type='button' style="width:max-content;margin-top:10px;" id='click_modif_by_filter_ntb1' class="button-secondary" value='<?php _e('Add date and other', 'news-ticker-benaceur'); ?>';>
<div id="display_modif_by_filter_ntb1" style="display:none;">
<p class="news-ticker-benaceur-font-size" style="margin-bottom:7px;"><?php _e('To add the date / author of the post / last modification of the post / the number of comments on the post, see the following topic:', 'news-ticker-benaceur'); ?></p>
<a href="https://benaceur-php.com/?p=3280" target="_blank" rel="noopener noreferrer" class="news-ticker-benaceur-font-size">Add the date,author,comment count to news ticker benaceur plugin</a>
</div>

<input type="button" style="white-space: normal;margin-top:20px;" id="click_modif_by_filter_ntb2" class="button-secondary" value='<?php _e('Exclude the comments of a specific member or group', 'news-ticker-benaceur'); ?>';>
<div id="display_modif_by_filter_ntb2" style="display:none;">
<p class="news-ticker-benaceur-font-size"><?php _e('When choosing the last comments, it&#39;s possible to exclude the comments of a specific member from appearing, by his user id:', 'news-ticker-benaceur'); ?></p>
<p class="news-ticker-benaceur-font-size"><?php _e('Edit the functions.php file for your active theme and put the following below it:', 'news-ticker-benaceur'); ?></p>

<?php ob_start(); ?>
add_filter( 'ntb_filter_arguments_recent_comments', function ($args) {
	
	$args['author__not_in'] = array('1');
	return $args;
} );
<?php $content1 = ob_get_contents(); ob_end_clean();
//echo '<pre>' . print_r( $content1, TRUE) . '</pre>';
?>
<div class="code-box-copy">
<span class="code-box-copy__btn" data-clipboard-target="#example-head3" title="<?php _e('Copy'); ?>"></span>
<pre><code class="language-html" id="example-head3"><?php echo esc_html($content1); ?></code></pre>
</div>

<p class="news-ticker-benaceur-font-size"><?php _e('And replace No. 1 with the appropriate number, and you can exclude more than one membership, for example: array(&#39;1&#39;, &#39;55&#39;, &#39;9&#39;)', 'news-ticker-benaceur'); ?></p>
<div style="margin:18px 0 15px 0;" class="to-tr2"></div>
<p class="news-ticker-benaceur-font-size"><?php _e('Second, depending on the group, for example by excluding comments from the &#34;administrator&#34; group, in this case put the following code instead of the first:', 'news-ticker-benaceur'); ?></p>
<?php ob_start(); ?>
add_filter( 'ntb_filter_arguments_recent_comments', function ( $args ) {
	
    $users_args = array('role' => 'administrator');
	$users = get_users( $users_args );
    $idsArray = wp_list_pluck( $users, 'ID' );
	
	$args['author__not_in'] = $idsArray;
	return $args;
} );
<?php $content2 = ob_get_contents(); ob_end_clean();
//echo '<pre>' . print_r( $content2, TRUE) . '</pre>';
?>
<div class="code-box-copy">
<span class="code-box-copy__btn" data-clipboard-target="#example-head4" title="<?php _e('Copy'); ?>"></span>
<pre><code class="language-html" id="example-head4"><?php echo esc_html($content2); ?></code></pre>
</div>
<div style="margin:18px 0 15px 0;" class="to-tr2"></div>

</div>

<input type='button' style="width:max-content;margin-top:20px;" id='click_modif_by_filter_ntb3' class="button-secondary" value='<?php _e('Other modifications and additions', 'news-ticker-benaceur'); ?>';>
<div id="display_modif_by_filter_ntb3" style="display:none;">
<p class="news-ticker-benaceur-font-size" style="margin-bottom:7px;"></p>
<p>- <a href="https://benaceur-php.com/?p=3822" target="_blank" rel="noopener noreferrer" class="news-ticker-benaceur-font-size">Modification the date of the last comment to hide news ticker benaceur</a></p>
<p>- <a href="https://benaceur-php.com/?p=3826" target="_blank" rel="noopener noreferrer" class="news-ticker-benaceur-font-size">Fetch the latest posts or comments randomly news ticker benaceur</a></p>
</div>
<div class="note-benaceur_shortcode note2 aligncenter-ben_note">
<span style="float: <?php echo $this->rtl_right_left(); ?>; font-size:58px; color:#afdeea; margin-<?php echo $this->rtl_right_left(); ?>:-5px;" class="dashicons dashicons-warning"></span><p></p>
<div class="box-inner-block777">
<p>
1- <?php _e('Put the code php in the functions.php file when you update your theme, because it will be deleted after each update of the theme. You can resolve this problem by using the child theme method. For more details, follow the following subject: ', 'news-ticker-benaceur'); ?>
<a href="https://benaceur-php.com/?p=3153/#comment-1820" target="_blank" rel="noopener noreferrer">https://benaceur-php.com/child-theme</a>
</p>
<p style="background:#fdd2d2; padding:8px;">
2- <?php _e('After each new code is added or updated, you must clear the cache if you are using the (Temporarily store of data) option by clicking on: (Delete data stored now).', 'news-ticker-benaceur'); ?>
</p>
</div>
</div>

</div>
</div>

