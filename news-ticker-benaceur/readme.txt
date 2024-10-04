=== news ticker benaceur ===
Contributors: Benaceur 
Tags: news ticker, latest posts, latest comments, news post, latest news animation
Requires at least: 3.0
Tested up to: 6.6
Stable tag: 3.3.2
License: GPLv2 or later

This plugin allow you to display the latest posts or latest comments in a bar with twenty seven beautiful animations and effects...

== Description ==

This plugin allows you to view the latest posts or latest comments in a bar with twenty five beautiful animations, 
you can control and adjust the style of the bar from the admin panel, 
you also the possibility to appear the bar to the particular group or member ...

= and here is all plugin characteristics: =

* Twenty five styles with beautiful animations
* Complete control over the plugin, color properties, font, height, width, etc ... through the Control Panel
* Enable/disable the plugin from the control panel
* Compatible with mobile
* Control the direction of the news ticker RTL / LTR or auto if your site is multi language.
* Double title if your site is multilanguage one ltr and the other rtl.
* Adding a link a sub or a major to the plugin settings page in admin bar
* The possibility to appear the bar to the particular group or member ...
* Include the posts from certain categories only, or conversely, exclude a category or categories
* Include the comments from certain posts only, or conversely, exclude a post or posts
* The possibility to control the maximum number of letters of the title of the article or comment
* The possibility to control speed,timeout ... of animation
* The ability to remove all settings and data from the database when the plugin is disabled or not to remove, is optional
* The ability to customize an appropriate style for the control panel, what you can set and adjust the colors of the options page.
* etc ...

= TRANSLATED IN FOLLOWING LANGUAGES: =
* Arabic
* English

Link to preview <a href="http://benaceur-php.com/" target="_blank">Demo</a> 

= Direct support page on my site: =
<a href="https://benaceur-php.com/?p=1747">https://benaceur-php.com/?p=1747</a>

== Installation ==

1. Upload news ticker benaceur to the "/wp-content/plugins/"
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Activate the plugin again in the control panel (the plugin page)
4. Then follow the instructions at the top of the settings page.

== Screenshots ==

1. Options page admin panel-1
2. Options page admin panel-2
3. Options page admin panel-3
4. Options page admin panel-4
5. Options page admin panel-5
6. Options page admin panel-6
7. Options page admin panel-7
8. Options page admin panel-8
9. Options page admin panel-9
10. Options page admin panel-10

== Changelog ==

= 3.3.2 =
* Tested up to wordpress 6.5
= 3.3.1 =
* Add new filter "ntb_comment_filter_ben" for latest comments.
* Correction in the option of limiting the number of letters in the title.
= 3.3 =
* Some necessary security and other improvements.
* Tested up to wordpress 6.4
= 3.2.3 =
* Tested up to wordpress 6.3
= 3.2.2 =
* Fix: constant filter_sanitize_string is deprecated in php 8.1+
* New filters: ntb_filter_comment_content, ntb_filter_ntb_comment.
* Fix: Manually news.
= 3.2.1 =
* Fix: Some modifications needed for compatibility with php 8.1+ (for the moment wordpress is not 100% compatible with 8.1+).
* Tested up to wordpress 6.2
= 3.2 =
* New option: height admin bar in media screen and min-width/max-width 682.
* Fix: option "Hide for all except administrator".
* Fix: remove space if the news bar is fixed to top or auto added to top and the option "Hide in" is enabled.
* Fix: changed style slot (css) to improve bar loading.
* New: notification to purge cache (if you are using a caching plugin) after each plugin settings update (Save Changes).
* Fix: some changes in Arabic translation in style section in plugin control panel.
* New: add Post Count to "Display all categories" in plugin control panel.
* Update: some other adjustments.
= 3.1.3 =
* Updated some adjustments.
= 3.1.2 =
* Added: New filter (ntb_filter_enable_ellipsis).
= 3.1.1 =
* Update of this filter: ntb_title_filter_ben.
= 3.0 =
* Adjustments needed in the java script and their location.
* Fixed: issue in style with certain themes, like: twentyfourteen and twentythirteen.
* Fixed: script of animation (Slide-Up-Down).
* Added: New filters (ntb_filter_ntb__head,ntb_filter_ntb__footer,ntb_filter_ntb__manualy) to option: choose how to put the code in the theme ...
* New option: Customed for Add the code automatically to top and Add the code automatically to bottom.
* Other corrections recommended.
= 2.9.8 =
* Fixed: option(Transparent background (not fot typing1)).
* Added: New filter.
= 2.9.7 =
* Tested up to wordpress 5.7
= 2.9.6 =
* upgrade to php 8.*
* Fixed the function that determines the length of text.
* Make the text inside the ticker download after downloading the java script.
= 2.9.5 =
* Fixed: Undefined index (error).
* Tested up to wordpress 5.6.
= 2.9.4 =
* Modification of method of parsing arguments default options.
* Fixed: issue in uploading image in Scroll-H animation.
= 2.9.3 =
* Added WordPress Code Editor (color) to editors for settings page of plugin.
* New option: "Number of characters" in manually news option.
* The possibility of deactivating the option to limit the characters of news by putting 0.
* The possibility of adding the date / author of the post / last modification of the post / the number of comments on the post, to the ticker.
= 2.9.2 =
* New option: autostart to all animations.
* New filters: ntb_filter_get_all_recent_posts,ntb_filter_get_all_recent_comments.
* New action.
* New notification: If you are using a non-latin font (like arabic).
* The change of "z-index" value of fixation option.
* Re-add option "Pause on hover" to Typing animation.
= 2.9.1 =
* New action.
= 2.9 =
* Disable all scripts from frontend when the plugin is disabled.
* Modification in style of mobile screen when the style of mobile is enabled.
* New option: font size for mobile screen when the style of mobile is enabled.
* New option: Indicator size to "Typing 1" animation.
* Remove: "min height (Slide-Up-Down)" option.
* Fixed: issue when the bar is disabled in mobile screen if is fixed.
* Fixed: issue in style of "Typing 1" animation (in mobile screen) when the style of mobile is enabled.
* Fixed: others issue in "Typing 1" animation.
* Fixed: issue in script of "Typing 2" animation (in mobile screen) when the style of mobile is enabled with certain themes.
* The change of certain values to better justify the news bar (save your settings before updating the plugin).
* Replace padding top and bottom by line-height.
* Important corrections and adjustments.
= 2.8.6 =
* Fixed: script and style of ScrollNTB animation.
= 2.8.5 =
* Fixed: script of ScrollNTB animation.
= 2.8.4 =
* Fixed: compatibility with new versions of jquery (2.x and 3.x).
* New option: new style with a transparent black and white background.
* New option: Select the location of the script (animations).
* Tested up to wordpress 5.5.
= 2.8.3 =
* Fixed: issue in jquery.
* Fixed: issue in style of "Typing 1" animation with certain themes.
* New option: "Automatically add the code to theme" if the ticker news is not fixed.
* New option: "Automatically add the code to theme" if the ticker news is fixed to top or bottom.
* New option: "Disable fixation (top or bottom) in a screen less than 600px" if the ticker news is fixed.
* The addition of a note concerning the addition of the code to the theme.
* Modification of the two notes concerning: "Class or id (fixed at the top)" and "Class or id (fixed at the bottom)".
* Other changes needed.
= 2.8.2 =
* Fixed: issue in style of "Typing 1" animation with certain themes.
* New option: "Automatically add the code to theme" if the ticker news is not fixed.
* New option: "Automatically add the code to theme" if the ticker news is fixed to top or bottom.
* New option: "Disable fixation (top or bottom) in a screen less than 600px" if the ticker news is fixed.
* The addition of a note concerning the addition of the code to the theme.
* Modification of the two notes concerning: "Class or id (fixed at the top)" and "Class or id (fixed at the bottom)".
* Other changes needed.
= 2.8.1 =
* A simple correction in the font-family in admin.
* Correction of the addition of a slash when an quote is posting. 
= 2.8 =
* Fixed error in the import process of the settings file.
* New option: "Fixation the News Ticker in the bottom or the top of site".
* New option: the possibility to enter your news manually (Latest posts - Latest comments - Manually).
* New option: "Hide if no items (no posts or comments or manually)".
* New option: "Disable title (screen mobile) in Scroll-H animation".
* New option: "Disable the icon" in Scroll-H animation.
* New option: "Hide News Ticker after time" with jquery and without.
* New option: "Style customization (css)".
* New option: "Script customization (java/jquery)".
* Change the "Hide in" option to "Hide/Show in" in general settings section.
* Fixed problem in style of animation (Slide-Up-Down) with certain themes.
* Added "line-height" to "Settings of style".
* Added "line-height" to "Typing 1" animation.
* Added confirmation message to reset button.
* Fixed problem in autostart of fadein and ScrollNTB animation.
* Changing the method to reset the default settings.
* Add this filter: "ntb_title_filter_ben" to comments too.
* Some modifications in the style of the options page in the admin panel.
= 2.7.3 =
* Fixed error in jquery.
= 2.7.2 =
* Tested with WordPress (5.4).
* Some modifications in the style of the options page in the admin panel.
= 2.7.1 =
* Important correction in php class.
= 2.7 =
* Important corrections and adjustments.
* Some modifications in the style of the options page in the admin panel.
* Tested with the latest wordpress update (5.3).
= 2.6 =
* Correction of some compatibility errors with php 7.1 +.
= 2.5.9 =
* Direct support page.
= 2.5.8 =
* Removing some options (unused) from database.
= 2.5.7 =
* Fixed some errors generated by "GET" and in "Display all categories".
* An adjustment in style of options page in admin panel.
= 2.5.6 =
* Added new filters to title (date,author,post modified,comment count).
= 2.5.5 =
* Added new animations (Fade Up,Fade LR).
* Added the possibility to choose the post type (post, page ...).
* Added the possibility to choose the post status for posts (publish, pending, trash ...).
* Added the possibility to choose the post status for comments (approve, hold, all).
* Changes in the default settings method.
= 2.5.4 =
* important corrections and adjustments for all animations.
* An adjustments in style of effect (Scroll-H).
* Fixed a problem in jquery of effect (Typing 1).
* Updated a persian language (thank for Mahmoud Zooroofchi محمود ظروفچی).
* Others adjustments.
= 2.5.3 =
* Ability to download and change the image in effect (Scroll-H). 
* Important adjustments in effect (Scroll-H).
* Important adjustments in jquery in effect (FadeIn and Slide-Up-Down).
* Added the possibility to choose the name of taxonomy (category is by befault).
* Some adjustment in Translation.
* Tested with the latest wordpress update.
= 2.5.2 =
* Added a note about my recent plugin: Restrict Usernames Emails Characters. 
= 2.5.1 =
* Added an hook ( wp_ntb_msg_update ). 
* Change the reset method settings. 
= 2.5 =
* Fixed a problem if we exclude multiple categories id (Latest posts).
* Fixed a problem with the shortcode, thanks to "igorcek": https://wordpress.org/support/topic/news-ticker-is-displayed-before-the_content?replies=2 
* Fixed a problem of the appearance of the shortcode once the plugin is disabled from the admin Panel.
* Added the possibility of export and import plugin settings. 
* Added the possibility of deleting the shortcode from the articles and pages when the plugin is disabled.
* Added ability to update the plugin via the options page in the admin panel when the version of the plugin is not the last.
* Added an important note in top options page in admin panel about $query->is_main_query() (developers). 
= 2.4.8 =
* An adjustment in prev/next button in safari browser.
* An adjustment in prev/next button title in Typing 1 animation .
* Make the title animation pulsate inactive by default.
* Added other links to quick access to settings in options page in admin panel. 
* An adjustment in style of options page in admin panel.
= 2.4.7 =
* Added the ability to quick access to settings. 
* Added the ability to save all setting. 
* Some adjustments in page plugin options in admin panel.
= 2.4.6 =
* Added a margin top to Typing 1 animation. 
* Added the ability to choose a font family for the title and make another for the title of the article. 
* Added Color and Font size and Weight and distance top to (prev/next button).
* Some adjustment in Translation.
* Others adjustments.
= 2.4.5 =
* Added a new style to title (Radius). 
* Fixed a problem in (padding) and problem in (width) for some animations.
* Added a distance from the left/right for animation (FadeIn,Slide-Up-Down,Scroll-H). 
* An adjustment in Translation.
* Added an important note about the cache. 
= 2.4.4 =
* Fixed an error in the last plugin update (2.4.3).
* Added a five new animation (Blind bott,Scroll left,Scroll right,Uncover,Simple).
* Fixed a problem in style of typing 1 animation.
* Change the default height value of 34px to 42px
* Tested with WordPress 4.5 (12/04/2016)
* Essentials others adjustments and corrections.
= 2.4.3 =
* Some adjustments and corrections.
= 2.4.2 =
* Added a the ability to hide the plugin in: single post by post id and pages by page id.
* Fixed a rtl direction problem if the site is ltr and ltr direction if the site is rtl.
* Fixed a problem with cursor in (Typing 1) in rtl direction if the site is ltr and ltr direction if the site is rtl.
* Some others adjustments and corrections in ltr or rtl.
= 2.4.1 =
* Added a the ability to hide the plugin in: home,single post,pages,category,page author,page search.
* Added a new animation (Typing 2).
* Some corrections in css of animation (Typing).
* Added a margin left (ltr) and margin right (rtl) in animation (Typing).
* Added a Enable/Disable cursor in animation (Typing).
* Added a (Distance from the left) if is ltr in the animations that require it.
* Added a button Pause on hover to animation Scroll Horizontal.
* Added a button Pause on hover to animation Typing.
* Activate default pause (Pause on hover).
* Correction of next and prev button.
* Some others adjustments and corrections.
= 2.4 =
* Added a next and prev button.
* Added a Pause on hover.
* Some corrections and adjustments.
= 2.3.7 =
* Added a new thirteen 13 beautiful animations (effects).
* Fixed a jQuery problem in Slide-Up-Down animation.
* Update jQuery file to latest version.
* Some modifications and adjustments in page plugin options in admin panel.
* Some others adjustments.
= 2.3.6 =
* Some adjustments.
= 2.3.5 =
* Some adjustments.
= 2.3.4 =
* Some adjustments.
= 2.3.3 =
* Fixed a title animation pulsate problem.
* Fixed a problem of new values added when update the plugin.
* Added a font size of title.
* Fixed a problem in (Enable jquery-min).
* Some adjustments.
= 2.3.2 =
* Fixed a conflict problem.
* Added a persian language (thank for Mahmoud Zooroofchi محمود ظروفچی).
* Added the compatibility with mobile (style of mobile).
* The ability to hide the news ticker in a screen where the width is less than (specific).
* Added a new notification.
= 2.3.1 =
* Fixed a conflict problem.
* Added a persian language (thank for Mahmoud Zooroofchi محمود ظروفچی).
* Added a the compatibility with mobile (style of mobile).
* The ability to hide the news ticker in a screen where the width is less than (specific).
= 2.3 =
* Added a auto direction if your site is multi language ( example: English Arabic ).
* Added a double title if your site is multilanguage one ltr and the other rtl.
= 2.2.5 =
* Added a a hook (apply_filters) to options page and some colors.
= 2.2.4 =
* repair of a conflict problem in single post with certain themes.
* fixed a problem with animation "fadeIn" in single post.
* Added a links to my plugins.
= 2.2.3 =
* Automatic deactivation of the plugin when activating the plugin if the version of your wordpress is less than 3.0. 
= 2.2.2 =
* Remove latest admin notice. 
= 2.2.1 =
* Tested with WordPress 4.2. 
* Some change in the programming of the plugin.
* Added a reset all setting.
* Added a border of title and line-height.
* Some adjustments.
= 2.2.0 =
* Tested with WordPress 4.2. 
* Some change in the programming of the plugin.
* Added a reset all setting.
* Added a border of title and line-height.
* Some adjustments.
= 2.1.6 =
* Correction in in the default (values) style.
* Some adjustment in Translation.
= 2.1.5 =
* Added a two new animations.
* Added a pulsate animation for the title.
* Added a: Width of title background.
* Some adjustments and corrections.
= 2.1.4 =
* Added a custom theme for settings page in Backend.
* Added a the possibility to Remove all settings and data of the plugin from database when the plugin is disabled.
* Added a the possibility to Hide the plugin rating icon.
= 2.1.3 =
* Added a the possibility to control the number of letters of the title of the article.
* Added a the possibility to control the number of letters of the comments.
* Added a new style in Backend.
* Some adjustment in Translation.
= 2.1.2 =
* Added a a link to the comments.
= 2.1.1 =
* Correction in the font: DroidKufi.
= 2.1.0 =
* Added the ability to choose between the modified style and standart style options page in the Admin Panel.
= 2.0 =
* Note in the options page in the administration panel.
= 1.1.9 =
* Fixed a compatibility problem with some browsers.
* Added a hover color and height in the option page in admin panel.
= 1.1.8 =
* Added a "Latest comments" and the ability to include or exclude cat id/post id.
= 1.1.7 =
* Added a link to a live preview of plugin.
= 1.1.6 =
* Significant corrections in the default style.
= 1.1.5 =
* Some adjustment in Translation.
= 1.1.4 =
* Some adjustment.
= 1.1.3 =
* Added a timeout and speed of animation and the ability to disable the title.
= 1.1.2 =
* Some adjustments on the base and Added the number of posts.
= 1.1.1 =
* Edit the title.
= 1.1 =
* A simple correction in style.
= 1.0 =
* First released version.
