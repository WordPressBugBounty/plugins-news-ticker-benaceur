<?php
    if ( ! defined( 'ABSPATH' ) ) exit;

	$recent = $this->get_recent();
	$recent_posts_ntb = $recent[0];
    $comments_list = $recent[1];

			if($this->options('latest_p_c') == 'latest_posts'){
			if ($recent_posts_ntb) {
			foreach( $recent_posts_ntb as $recent_ntb ) : // foreach
			
				echo $li1; ?><a href="<?php echo get_permalink($recent_ntb["ID"]); ?>" title="<?php echo $recent_ntb["post_title"]; ?>">
				<?php
				$ntb_nm_expt_t = $this->options('expt_txt_title') ? $this->expt_title_text($recent_ntb["post_title"], $this->options('expt_txt_title')) : $recent_ntb["post_title"];

				$user = get_user_by( 'id', $recent_ntb["post_author"] );
				$display_name = $user ? $user->display_name : '';
				$args = array($recent_ntb["post_date"], $display_name, $recent_ntb["post_modified"], $recent_ntb["comment_count"]);
				$post = $recent_ntb;
				$filter_title_ntb = apply_filters( 'ntb_title_filter_ben', $ntb_nm_expt_t, $args, $post );				
				echo $filter_title_ntb;
				?>
				</a><?php echo $li2; ?>
			<?php endforeach; // end foreach
			
			} else {
	        echo "$li1<a style='cursor:text !important;' href='#'>";
            apply_filters( 'ben_ntb_filter_no_items', _e("No items",'news-ticker-benaceur') );
	        echo "</a>$li2";
			}
			
			} elseif ($this->options('latest_p_c') == 'latest_comments') {
				
if ( count( $comments_list ) > 0 ) {
$date_format = 'j F Y';

foreach ( $comments_list as $comment ) {

$comment__content = apply_filters( 'ntb_filter_comment_content', wp_strip_all_tags($comment->comment_content, true), $comment );
/*
Ex:
add_filter( 'ntb_filter_comment_content', function ( $comment_content, $comment ) {
	return $comment->comment_content; // without wp_strip_all_tags
}, 10,2);
*/
$ntb_nm_expt = $this->options('expt_txt_comment') ? $this->expt_title_text( $comment__content, $this->options('expt_txt_comment') ) : $comment__content;

$ti = 1379; // minutes
$tim = $ti * 60; // result time
$date_diff = time() - mysql2date('U',$comment->comment_date);
$ymd = $date_diff <= $tim ? "H-i" : "Y/m/d" ;
	 
if ($this->options_anim('animation') == 'ScrollNTB') {
	 
$comment_content = apply_filters( 'ntb_filter_comment_content', wp_strip_all_tags($comment->comment_content, true), $comment ); 
$ntb_nm_expt_title = $this->options_anim('expt_title_scrollntb') != '' ? $this->options_anim('expt_title_scrollntb') : 28 ;

if ($this->options_anim('all_scrollntb')) {
$comment_url = '<span class="n_t_ntb_bimg"><span><span class="ntb_img_post_t_scrollntb"></span></span><span>'.$comment->comment_author.' :</span> <span><a href="'.esc_url(get_permalink($comment->comment_post_ID)).'#comment-'.$comment->comment_ID.'">'. $ntb_nm_expt .'</a></span> - <span><i>'.date( $ymd, strtotime( $comment->comment_date ) ).'</i></span> - <span><i><a href="'.esc_url(get_permalink( $comment->comment_post_ID )).'" title="'.get_the_title( $comment->comment_post_ID ).'"> '.$this->expt_title_text(get_the_title( $comment->comment_post_ID ), $ntb_nm_expt_title ).'</a></i></span></span>';
} else {
$comment_url = '<span class="n_t_ntb_bimg"><span><span class="ntb_img_post_t_scrollntb"></span></span><span>'.$comment->comment_author.' :</span> <span><a href="'.esc_url(get_permalink($comment->comment_post_ID)).'#comment-'.$comment->comment_ID.'">'. $ntb_nm_expt .'</a></span></span>';
}	

} else {
	
$ntb_nm_expt_t = $this->options('expt_txt_title') ? $this->expt_title_text(get_the_title( $comment->comment_post_ID ), $this->options('expt_txt_title')) : get_the_title( $comment->comment_post_ID );
$args = array(date( $ymd, strtotime( $comment->comment_date ) ), $comment->comment_author, null, $ntb_nm_expt_t);
$filter_comment_ntb = apply_filters( 'ntb_comment_filter_ben', $ntb_nm_expt, $args, $comment );			
$comment_url = '<li><a href="'.esc_url(get_permalink($comment->comment_post_ID)).'#comment-'. $comment->comment_ID .'">'. $filter_comment_ntb .'</a></li>';
	
}

echo apply_filters( 'ntb_filter_ntb_comment', $comment_url, $comment);

}
 
} else {
echo "$li1<a style='cursor:text !important;' href='#'>";
apply_filters( 'ben_ntb_filter_no_comments', _e("No comments",'news-ticker-benaceur') );
echo "</a>$li2";
}
	
			} else if ($this->options('latest_p_c') == 'manually'){
				
			//$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			//if (preg_match($reg_exUrl, $news))
			//if (preg_match('#<\s*?a\b[^>]*>(.*?)</a\b[^>]*>#s', $news) )
			$get_news = array_filter(array_unique(array_map('trim',explode(PHP_EOL, $this->options('txt_news_manually')))));	
			$tagname = 'a';
			if ($get_news) {
			foreach( $get_news as $news ) {
			$_news = $this->options('expt_txt_manually_news') ? $this->expt_text_without_tags($news, $this->options('expt_txt_manually_news')) : $news;
			if (apply_filters( 'ben_ntb_filter_validate_url_news', preg_match("/<$tagname ?.*>(.*)<\/$tagname>/", $news) )) {
			echo "$li1{$_news}$li2";
			} else {
			echo "$li1<a style='cursor:text !important;' href='#'>$_news</a>$li2";
			}
			}
			} else {
	        echo "$li1<a style='cursor:text !important;' href='#'>";
            if (!$this->options('empty_txt_news_manually')) { _e("No news",'news-ticker-benaceur'); } else { echo $this->options('empty_txt_news_manually'); }
	        echo "</a>$li2";
			}
			}
/*
// add secondary title plugin
if (function_exists( 'has_secondary_title' ) && class_exists( 'class______news_ticker_benaceur' )) {
add_filter( 'ntb_title_filter_ben', function ( $title, $args, $recent_ntb ) {
$getfex = new class______news_ticker_benaceur_fixed();
$opts = get_option( 'news_ticker_benaceur_glob_options' );
$expt_txt_title = isset($opts['global_options']['expt_txt_title']) ? $opts['global_options']['expt_txt_title'] : 0;

$secondary_title = get_secondary_title($recent_ntb["ID"]);
$post_title = $expt_txt_title ? $getfex->expt_title_text($secondary_title .': '. $recent_ntb["post_title"], $expt_txt_title) : $secondary_title .': '. $recent_ntb["post_title"];

return $secondary_title ? $post_title : $title;
}, 10, 3 );
}
*/