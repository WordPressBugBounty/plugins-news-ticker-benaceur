<?php
    if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div id="wrap_modif_by_filter_ntb" style="padding-bottom:20px;" class="wrap ntb">

<input type='button' style="width:100%;margin:10px 0 15px 0;height:40px;font-size:15px;" id='click_modif_by_filter_ntb' class="button-secondary" value='<?php _e('Modifications and additions by &#34;filter&#34;', 'news-ticker-benaceur'); ?>';>
<div style="font-family: DroidKufi_Ben, sans-serif;background:yellow;width:max-content;padding:6px 10px;"><?php echo __('Last update', 'news-ticker-benaceur') . ': 29-' . __( 'October' ) . '-2020'; ?></div>
<div id="display_modif_by_filter_ntb" style="display:none;">

<input type='button' style="width:max-content;margin-top:10px;" id='click_modif_by_filter_ntb1' class="button-secondary" value='<?php _e('Add date and other', 'news-ticker-benaceur'); ?>';>
<div id="display_modif_by_filter_ntb1" style="display:none;">
<p style="margin-bottom:7px;"><?php _e('To add the date / author of the post / last modification of the post / the number of comments on the post, see the following topic:', 'news-ticker-benaceur'); ?></p>
<a href="https://benaceur-php.com/?p=3280" target="_blank" rel="noopener noreferrer">Add the date,author,comment count to news ticker benaceur plugin</a>
</div>

<input type="button" style="white-space: normal;margin-top:20px;" id="click_modif_by_filter_ntb2" class="button-secondary" value='<?php _e('Exclude the comments of a specific member or group', 'news-ticker-benaceur'); ?>';>
<div id="display_modif_by_filter_ntb2" style="display:none;">
<p><?php _e('When choosing the last comments, it&#39;s possible to exclude the comments of a specific member from appearing, by his user id:', 'news-ticker-benaceur'); ?></p>
<p><?php _e('Edit the functions.php file for your active theme and put the following below it:', 'news-ticker-benaceur'); ?></p>

<?php ob_start(); ?>
function func1_ntb_filter_arguments_recent_comments($args) {
	
	$args['author__not_in'] = array('1');
	return $args;
}
add_filter( 'ntb_filter_arguments_recent_comments','func1_ntb_filter_arguments_recent_comments' );
<?php $content1 = ob_get_contents(); ob_end_clean();
//echo '<pre>' . print_r( $content1, TRUE) . '</pre>';
?>
<div class="code-box-copy">
<span class="code-box-copy__btn" data-clipboard-target="#example-head3" title="<?php _e('Copy'); ?>"></span>
<pre><code class="language-html" id="example-head3"><?php echo esc_html($content1); ?></code></pre>
</div>

<?php _e('And replace No. 1 with the appropriate number, and you can exclude more than one membership, for example: array(&#39;1&#39;, &#39;55&#39;, &#39;9&#39;)', 'news-ticker-benaceur'); ?>
<div style="margin:18px 0 15px 0;" class="to-tr2"></div>
<?php _e('Second, depending on the group, for example by excluding comments from the &#34;administrator&#34; group, in this case put the following code instead of the first:', 'news-ticker-benaceur'); ?>
<?php ob_start(); ?>
function func1_ntb_filter_arguments_recent_comments($args) {
	
    $ids = get_users( array('role' => 'administrator') );
    $idsArray = array();
	
    foreach ( $ids as $userid ) {
            $idsArray[] = $userid->ID;
    }
	$args['author__not_in'] = $idsArray;
	return $args;
}
add_filter( 'ntb_filter_arguments_recent_comments','func1_ntb_filter_arguments_recent_comments' );
<?php $content2 = ob_get_contents(); ob_end_clean();
//echo '<pre>' . print_r( $content2, TRUE) . '</pre>';
?>
<div class="code-box-copy">
<span class="code-box-copy__btn" data-clipboard-target="#example-head4" title="<?php _e('Copy'); ?>"></span>
<pre><code class="language-html" id="example-head4"><?php echo esc_html($content2); ?></code></pre>
</div>
<div style="margin:18px 0 15px 0;" class="to-tr2"></div>

</div>

<div class="note-benaceur_shortcode note2 aligncenter-ben_note">
<span style="float: <?php echo $this->rtl_right_left(); ?>; font-size:58px; color:#afdeea; margin-<?php echo $this->rtl_right_left(); ?>:-5px;" class="dashicons dashicons-warning"></span><p></p>
<div style="padding-<?php echo $this->rtl_left_right(); ?>: 0; padding-<?php echo $this->rtl_right_left(); ?>: 70px;" class="box-inner-block777">
<p>
<?php _e('Put the code php in the functions.php file when you update your theme, because it will be deleted after each update of the theme. You can resolve this problem by using the child theme method. For more details, follow the following subject: ', 'news-ticker-benaceur'); ?>
<a href="https://benaceur-php.com/?p=3153/#comment-1820" target="_blank" rel="noopener noreferrer">https://benaceur-php.com/child-theme</a>
</p>
</div>
</div>

</div>
</div>

