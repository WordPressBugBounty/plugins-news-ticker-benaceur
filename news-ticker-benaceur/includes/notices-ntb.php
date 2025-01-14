<?php
    if ( ! defined( 'ABSPATH' ) ) exit;

if ( current_user_can( apply_filters( 'ntb_manage_options_cap', 'manage_options' ) ) ) {

    $nden_n = 'ntb_21_09_16_en_ntb';
		    ?>
			<div class="notice notice-success" id="<?php echo $nden_n;  ?>" style="background:#FFE3AD;"><p>
			<span class="hov-mib-en" onmouseup="ntb_setcookie('<?php echo $nden_n;  ?>',1)" style="color:#009999;"><strong><span style="margin-top:1px;" class="dashicons dashicons-dismiss"></span> &nbsp;</strong></span>
			<span style="color:red; font-weight: bold;" id="txtClignotantNTB"><?php _e("Important",'news-ticker-benaceur'); ?></span>&nbsp; <?php _e('my latest plugin,perhaps you might be interested <a target="_blank" href="https://wordpress.org/plugins/restrict-usernames-emails-characters/">Restrict Usernames Emails Characters</a>', 'news-ticker-benaceur'); ?>
			</p></div>
			
<style>.hov-mib-en:hover {cursor:pointer;}</style>			
			
<script type="text/javascript">
function ntb_CheckCookieNab(<?php echo $nden_n;  ?>){
 if (ntb_Cookie(<?php echo $nden_n;  ?>)) {
  document.getElementById(<?php echo $nden_n;  ?>).style.display='none';
 }
}

function ntb_setcookie(<?php echo $nden_n;  ?>,days){
 document.cookie=<?php echo $nden_n;  ?> + '=true;expires='+(new Date(new Date().getTime()+(1000*60*60*24*30*12)).toGMTString())+';path=/'; //one years
 document.getElementById(<?php echo $nden_n;  ?>).style.display='none';
}

function ntb_Cookie(<?php echo $nden_n;  ?>){
 var re=new RegExp(<?php echo $nden_n;  ?> + '[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

ntb_CheckCookieNab('<?php echo $nden_n;  ?>');

// clignotement
var ntb_clignotement = function(){ 
   if (document.getElementById('txtClignotantNTB').style.visibility=='visible'){ 
      document.getElementById('txtClignotantNTB').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('txtClignotantNTB').style.visibility='visible'; 
   } 
}; 
periode = setInterval(ntb_clignotement, 800); 
</script>

<?php
}