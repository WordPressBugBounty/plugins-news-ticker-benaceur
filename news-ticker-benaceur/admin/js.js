// 2			
(function($) {
        $('#bt-ntbCat').click(function() {
                $('#sub-ntbCat').slideToggle("slow");
        });
})(jQuery);
// 2			

// 5
(function($) {
    $("select.news-ticker-benaceur-color-inp.selAnim").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="TickerNTB"){
                $(".box").not(".fsub-ntb").hide();
                $(".fsub-ntb").show(800);
            }
            else if($(this).attr("value")=="fadein"){
                $(".box").not(".thsub-ntb").hide();
                $(".thsub-ntb").show(900);
            }
            else if($(this).attr("value")=="Scroll_Up_NTB"){
                $(".box").not(".tsub-ntb").hide();
                $(".tsub-ntb").show(900);
            }
            else if($(this).attr("value")=="ScrollNTB"){
                $(".box").not(".sevsub-ntb").hide();
                $(".sevsub-ntb").show(800);
            }
            else if($(this).attr("value")=="shuffle" || $(this).attr("value")=="toss" || $(this).attr("value")=="turnUp" ||
			$(this).attr("value")=="turnDown" || $(this).attr("value")=="zoom" || $(this).attr("value")=="fadeZoom" ||
			$(this).attr("value")=="growX" || $(this).attr("value")=="growY" || $(this).attr("value")=="curtainX" ||
			$(this).attr("value")=="curtainY" || $(this).attr("value")=="slideX" || $(this).attr("value")=="turnLeft" ||
			$(this).attr("value")=="turnRight" || $(this).attr("value")=="fade" || $(this).attr("value")=="slideY" ||
			$(this).attr("value")=="blindZ" || $(this).attr("value")=="scrollLeft" || $(this).attr("value")=="scrollRight" ||
			$(this).attr("value")=="fadeUp" || $(this).attr("value")=="fadeLR" || $(this).attr("value")=="uncover" || 
			$(this).attr("value")=="typing_2" || $(this).attr("value")=="simple"){
                $(".box").not(".anim-two-sub-ntb").hide();
                $(".anim-two-sub-ntb").show(800);
            }
        });
    }).change();
})(jQuery);
// 5			

// 6
(function($) {
    $("select.news-ticker-benaceur-styl-tit").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="simpleTileSt"){
                $(".boxTS").not(".DivChecksimpleTileSt").hide();
                $(".DivChecksimpleTileSt").show(500);
            } 
			else if($(this).attr("value")=="radiusTileSt") {
                $(".boxTS").not(".DivCheckradiusTileSt").hide();
                $(".DivCheckradiusTileSt").show(500);
			}
        });
    }).change();
})(jQuery);
// 6	

// hise update message succes
jQuery(document).ready( function() {
  setTimeout("jQuery('#message.updated').fadeOut('slow');", 2300);
});
// hise update message succes

// go top page
(function($) {
    $("#NTB-up-page").click(function (){
 $('html, body').animate({scrollTop: 0}, 1500);
    });
})(jQuery);
// go top page

// version plugin
(function($) {
var $divNTBvers = $("#ntb-mm411112-divtoBlink"); 
var backgroundInterval = setInterval(function(){
    $divNTBvers.toggleClass("ntb-mm411112-backgroundRed");
 },1000)	
})(jQuery);
// version plugin
/*
(function($) {
	//$('.fsub_lat-pos-ntb_hide-sel').hide();
	//$('.fsub_lat-pos-ntb_hide-sel').hide();
    $("select.custom-select-news").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="latest_posts" || $(this).attr("value")=="latest_comments"){
                $(".ntb_choose_type_news_show_l_m").not(".ntb_choose_type_news_show_latest").hide();
                $(".ntb_choose_type_news_show_latest").show(500);
            }
            else if($(this).attr("value")=="manually"){
                $(".ntb_choose_type_news_show_l_m").not(".ntb_choose_type_news_show_manually").hide();
                $(".ntb_choose_type_news_show_manually").show(500);
            }
        });
    }).change();
})(jQuery);
*/

(function($) {
    $('.fsub_tax-ntb').hide(); 
    $('.news-ticker-benaceur-color-tax,.custom-select-news').change(function(){
        if($('.news-ticker-benaceur-color-tax').val() == 'category' && $('.custom-select-news').val() == 'latest_posts' || $('.custom-select-news').val() == 'latest_comments' ) {
            $('.fsub_tax-ntb').show(); 
        } else {
            $('.fsub_tax-ntb').hide(); 
        } 
    });
})(jQuery);

(function($) {
	$('.fsub_lat-pos-ntb_hide-sel').hide();
    $('.custom-select-news').change(function(){
        if($('.custom-select-news').val() == 'latest_posts' ) {
			$('.fsub_lat-pos-ntb_hide-sel').show(500);
        } else {
			$('.fsub_lat-pos-ntb_hide-sel').hide();
        } 
    });
})(jQuery);

(function($) {
	/*
	$("#news_ticker_benaceur_select_news").change(function() {
        $("form").submit();
    });
    */
    $("#news_ticker_benaceur_select_news").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="latest_posts"){
                $(".box_lat-com").not(".fsub_lat-pos-ntb").hide();
                $(".fsub_lat-pos-ntb").show(500);
				
                $(".ntb_choose_type_news_show_l_m").not(".ntb_choose_type_news_show_latest").hide();
                $(".ntb_choose_type_news_show_latest").show(500);
            }
            else if($(this).attr("value")=="latest_comments"){
                $(".box_lat-com").not(".fsub_lat-com-ntb").hide();
                $(".fsub_lat-com-ntb").show(500);
				
                $(".ntb_choose_type_news_show_l_m").not(".ntb_choose_type_news_show_latest").hide();
                $(".ntb_choose_type_news_show_latest").show(500);
			}
            else if($(this).attr("value")=="manually"){
				$(".fsub_lat-pos-ntb").hide();
                $(".fsub_lat-com-ntb").hide();
				
                $(".ntb_choose_type_news_show_l_m").not(".ntb_choose_type_news_show_manually").hide();
                $(".ntb_choose_type_news_show_manually").show(500);
				
            if( $('#news-ticker-benaceur-s--style_m').length ) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    mode: 'htmlmixed',
                }
            );
            var editor = wp.codeEditor.initialize( $('#news-ticker-benaceur-s--style_m'), editorSettings );
            }
				
            }
        });
    }).change();
	
})(jQuery);

(function($) {
    $("select.news-ticker-benaceur-color-tax").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="category"){
                $(".box_cat-tax").not(".fsub_cat-or-tax-ntb").hide();
                $(".fsub_cat-or-tax-ntb").show();
            }
            else{
                $(".box_cat-tax").not(".fsub_tax-or-cat-ntb").hide();
                $(".fsub_tax-or-cat-ntb").show();
            }
        });
    }).change();
})(jQuery);

// custom select

/*  jQuery Nice Select - v1.1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by Hernán Sartorio  */
 
(function($) {

  $.fn.niceSelect = function(method) {
    
    // Methods
    if (typeof method == 'string') {      
      if (method == 'update') {
        this.each(function() {
          var $select = $(this);
          var $dropdown = $(this).next('.nice-select');
          var open = $dropdown.hasClass('open');
          
          if ($dropdown.length) {
            $dropdown.remove();
            create_nice_select($select);
            
            if (open) {
              $select.next().trigger('click');
            }
          }
        });
      } else if (method == 'destroy') {
        this.each(function() {
          var $select = $(this);
          var $dropdown = $(this).next('.nice-select');
          
          if ($dropdown.length) {
            $dropdown.remove();
            $select.css('display', '');
          }
        });
        if ($('.nice-select').length == 0) {
          $(document).off('.nice_select');
        }
      } else {
        console.log('Method "' + method + '" does not exist.')
      }
      return this;
    }
      
    // Hide native select
    this.hide();
    
    // Create custom markup
    this.each(function() {
      var $select = $(this);
      
      if (!$select.next().hasClass('nice-select')) {
        create_nice_select($select);
      }
    });
    
    function create_nice_select($select) {
      $select.after($('<div></div>')
        .addClass('nice-select')
        .addClass($select.attr('class') || '')
        .addClass($select.attr('disabled') ? 'disabled' : '')
        .attr('tabindex', $select.attr('disabled') ? null : '0')
        .html('<span class="current"></span><ul class="list"></ul>')
      );
        
      var $dropdown = $select.next();
      var $options = $select.find('option');
      var $selected = $select.find('option:selected');
      
      $dropdown.find('.current').html($selected.data('display') || $selected.text());
      
      $options.each(function(i) {
        var $option = $(this);
        var display = $option.data('display');

        $dropdown.find('ul').append($('<li></li>')
          .attr('data-value', $option.val())
          .attr('data-display', (display || null))
          .addClass('option' +
            ($option.is(':selected') ? ' selected' : '') +
            ($option.is(':disabled') ? ' disabled' : ''))
          .html($option.text())
        );
      });
    }
    
    /* Event listeners */
    
    // Unbind existing events in case that the plugin has been initialized before
    $(document).off('.nice_select');
    
    // Open/close
    $(document).on('click.nice_select', '.nice-select', function(event) {
      var $dropdown = $(this);
      
      $('.nice-select').not($dropdown).removeClass('open');
      $dropdown.toggleClass('open');
      
      if ($dropdown.hasClass('open')) {
        $dropdown.find('.option');  
        $dropdown.find('.focus').removeClass('focus');
        $dropdown.find('.selected').addClass('focus');
      } else {
        $dropdown.focus();
      }
    });
    
    // Close when clicking outside
    $(document).on('click.nice_select', function(event) {
      if ($(event.target).closest('.nice-select').length === 0) {
        $('.nice-select').removeClass('open').find('.option');  
      }
    });
    
    // Option click
    $(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function(event) {
      var $option = $(this);
      var $dropdown = $option.closest('.nice-select');
      
      $dropdown.find('.selected').removeClass('selected');
      $option.addClass('selected');
      
      var text = $option.data('display') || $option.text();
      $dropdown.find('.current').text(text);
      
      $dropdown.prev('select').val($option.data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown.nice_select', '.nice-select', function(event) {    
      var $dropdown = $(this);
      var $focused_option = $($dropdown.find('.focus') || $dropdown.find('.list .option.selected'));
      
      // Space or Enter
      if (event.keyCode == 32 || event.keyCode == 13) {
        if ($dropdown.hasClass('open')) {
          $focused_option.trigger('click');
        } else {
          $dropdown.trigger('click');
        }
        return false;
      // Down
      } else if (event.keyCode == 40) {
        if (!$dropdown.hasClass('open')) {
          $dropdown.trigger('click');
        } else {
          var $next = $focused_option.nextAll('.option:not(.disabled)').first();
          if ($next.length > 0) {
            $dropdown.find('.focus').removeClass('focus');
            $next.addClass('focus');
          }
        }
        return false;
      // Up
      } else if (event.keyCode == 38) {
        if (!$dropdown.hasClass('open')) {
          $dropdown.trigger('click');
        } else {
          var $prev = $focused_option.prevAll('.option:not(.disabled)').first();
          if ($prev.length > 0) {
            $dropdown.find('.focus').removeClass('focus');
            $prev.addClass('focus');
          }
        }
        return false;
      // Esc
      } else if (event.keyCode == 27) {
        if ($dropdown.hasClass('open')) {
          $dropdown.trigger('click');
        }
      // Tab
      } else if (event.keyCode == 9) {
        if ($dropdown.hasClass('open')) {
          return false;
        }
      }
    });

    // Detect CSS pointer-events support, for IE <= 10. From Modernizr.
    var style = document.createElement('a').style;
    style.cssText = 'pointer-events:auto';
    if (style.pointerEvents !== 'auto') {
      $('html').addClass('no-csspointerevents');
    }
    
    return this;

  };

}(jQuery));

jQuery(document).ready(function($){ 
     $('.custom-select-news,.custom_select_auto_add_code,.personalize_not_fixed_select').niceSelect() 
});
// custom select


// hide in
(function($) {
    $('#H-ntbSelpage').click(function() {
        $('#H2-ntbSelpage').slideToggle("slow");
    });
})(jQuery);
// hide in

// hide after time
(function($) {
    $('#show-H-ntbSelpage-hide').click(function() {
        $('#H3-ntbSelpage-hide').slideToggle("slow");
    });
})(jQuery);
// hide after time

// accordion-NTB

// add display none to accordion-NTB
(function($) {
    $('.koalapse__title-NTB.op1').click(function() {$('.koalapse__content-NTB.op1').slideToggle("slow");});
	$(".koalapse__title-NTB.op2,.koalapse__title-NTB.op3,.koalapse__title-NTB.op4,.koalapse__title-NTB.op5").click(function(){$(".koalapse__content-NTB.op1").slideUp("slow");});

    $('.koalapse__title-NTB.op2').click(function() {$('.koalapse__content-NTB.op2').slideToggle("slow");});
	$(".koalapse__title-NTB.op1,.koalapse__title-NTB.op3,.koalapse__title-NTB.op4,.koalapse__title-NTB.op5").click(function(){$(".koalapse__content-NTB.op2").slideUp("slow");});

    $('.koalapse__title-NTB.op3').click(function() {$('.koalapse__content-NTB.op3').slideToggle("slow");});
	$(".koalapse__title-NTB.op1,.koalapse__title-NTB.op2,.koalapse__title-NTB.op4,.koalapse__title-NTB.op5").click(function(){$(".koalapse__content-NTB.op3").slideUp("slow");});

    $('.koalapse__title-NTB.op4').click(function() {$('.koalapse__content-NTB.op4').slideToggle("slow");});
	$(".koalapse__title-NTB.op1,.koalapse__title-NTB.op2,.koalapse__title-NTB.op3,.koalapse__title-NTB.op5").click(function(){$(".koalapse__content-NTB.op4").slideUp("slow");});
	
    $('.koalapse__title-NTB.op5').click(function() {$('.koalapse__content-NTB.op5').slideToggle("slow");});
	$(".koalapse__title-NTB.op1,.koalapse__title-NTB.op2,.koalapse__title-NTB.op3,.koalapse__title-NTB.op4").click(function(){$(".koalapse__content-NTB.op5").slideUp("slow");});
})(jQuery);
// add display none to accordion-NTB

(function($){
    $.fn.accordion_NTB=function(options){

        // variables used in the plugin
        var defaults = {
                "parentSelector": ".koalapse-NTB",
                "panelSelector": ".koalapse__content-NTB",
                "headingSelector": ".koalapse__title-NTB",
                "closeOthers": true,
                "animated": false,
                "showContentOnFocus": false,
                "showFirst": false
            },
            parameters = $.extend(defaults, options),
            $_that = this;


        //
        $_that.each(function(){
            // variables attached to the element
            var kParent = $(this),
                kHeading = kParent.find(parameters.headingSelector);


            // Link title and panel together with ID and ARIA attributes.
            kHeading.each(function(i){
                var id = "koalapse-" + kParent.index() + $(this).index(),
                    kPanel = $(this).next(parameters.panelSelector);

                // Add WAI-ARIA attributes and make it focusable
                $(this).attr({
                    'aria-expanded': false,
                    'aria-controls': id,
                    'tabindex': -1
                });

                // Add WAI-ARIA attributes to the content related to the title
                kPanel.attr({
                    'id': id,
                    'aria-hidden': true
                });

                // If "showFirst" is true - show first
                if( parameters.showFirst && i === 0){
                    $(this).attr({
                        'aria-expanded': true,
                        'tabindex': 0
                    });

                    $('#'+ $(this).attr("aria-controls")).attr('aria-hidden', false);
                }
            });
        });


        /**
        * Function that update tabindex on heading
        */
        var updateTabindex = function( showTab, parent ){
            // Remove all heading from the tab order
            $(parameters.headingSelector, parent).attr('tabIndex', -1);

            // Add showTab in the tab order
            $(showTab).attr('tabindex', 0);
        };


        // Events
        $('body').on('click', parameters.headingSelector, function(){
            var $_this = $(this),
                state = $_this.attr('aria-expanded') === 'false' ? true : false,
                controledEl = $('#' + $_this.attr('aria-controls')),
                parent = $_this.parents(parameters.parentSelector);

            // Close others - if options is set to true
            if( parameters.closeOthers === true ){
                $(parameters.headingSelector, parent).attr('aria-expanded', false);
                $(parameters.panelSelector, parent).attr('aria-hidden', true);
            }

            // Show the selected content
            $_this.attr('aria-expanded', state);
            controledEl.attr('aria-hidden', !state);

            updateTabindex($_this, parent);

        }).on('keydown', parameters.headingSelector, function(e){
            var $_this = $(this),
                activeEl = $(document.activeElement),
                parent = activeEl.parents(parameters.parentSelector);

                // Enter and Space toggle the panel
                if( e.keyCode === 13  || e.keyCode === 32 ){
                    $(this).click();
                }

                // Left and Up arrows : focus the next heading
                if( e.keyCode === 37 || e.keyCode === 38 ){
                    // If it's first heading - focus on last
                    if( activeEl[0] == parent.find(parameters.headingSelector).first()[0] ){
                        activeEl.nextAll(parameters.headingSelector).last().focus();

                        // If "showContentOnFocus" : show content
                        if( parameters.showContentOnFocus ){
                            activeEl.nextAll(parameters.headingSelector).last().click();
                        } else {
                            // Else updateTabindex of heading
                            updateTabindex( activeEl.nextAll(parameters.headingSelector).last(), parent );
                        }
                    } else {
                        activeEl.prevAll(parameters.headingSelector).first().focus();

                        // If "showContentOnFocus" : show content
                        if( parameters.showContentOnFocus ){
                            activeEl.prevAll(parameters.headingSelector).first().click();
                        } else {
                            // Else updateTabindex of heading
                            updateTabindex( activeEl.prevAll(parameters.headingSelector).first(), parent );
                        }
                    }
                }

                // Right and Down arrows : focus the next heading
                if( e.keyCode === 39 || e.keyCode === 40 ){
                    // If it's last heading - focus on first
                    if( activeEl[0] == parent.find(parameters.headingSelector).last()[0] ){
                        activeEl.prevAll(parameters.headingSelector).last().focus();

                        // If "showContentOnFocus" : show content
                        if( parameters.showContentOnFocus ){
                            activeEl.prevAll(parameters.headingSelector).last().click();
                        } else {
                            // Else updateTabindex of heading
                            updateTabindex( activeEl.prevAll(parameters.headingSelector).last(), parent );
                        }
                    } else {
                        activeEl.nextAll(parameters.headingSelector).first().focus();

                        // If "showContentOnFocus" : show content
                        if( parameters.showContentOnFocus ){
                            activeEl.nextAll(parameters.headingSelector).first().click();
                        } else {
                            // Else updateTabindex of heading
                            updateTabindex( activeEl.nextAll(parameters.headingSelector).first(), parent );
                        }
                    }
                }

                // Home : focus the first heading
                if( e.keyCode === 36 ){
                    parent.find(parameters.headingSelector).first()[0].focus();

                    // Update tabindex
                    updateTabindex( parent.find(parameters.headingSelector).first()[0], parent );
                }

                // End : focus the last heading
                if( e.keyCode === 35 ){
                    parent.find(parameters.headingSelector).last()[0].focus();

                    // Update tabindex
                    updateTabindex( parent.find(parameters.headingSelector).last()[0], parent );
                }

        }).on('keydown', parameters.panelSelector, function(e){
            var $_this = $(this),
                activeEl = $(document.activeElement),
                panel = activeEl.parents(parameters.panelSelector),
                panelID = panel.attr('id'),
                parent = activeEl.parents(parameters.parentSelector),
                heading = $(parameters.headingSelector + '[aria-controls='+ panelID +']');


            // CTRL + Left or Up arrows : focus on heading of the "active" panel
            if( (e.keyCode === 37 || e.keyCode === 38) && e.ctrlKey ){
                heading.focus();
            }

            // CTRL + Page Up : show previous tab and focus previous heading
            if( e.keyCode === 33 && e.ctrlKey ){
                // If it's first heading - focus on last
                if( heading[0] == parent.find(parameters.headingSelector).first()[0] ){
                    heading.nextAll(parameters.headingSelector).last().focus();

                    // If "showContentOnFocus" : show content
                    if( parameters.showContentOnFocus ){
                        heading.nextAll(parameters.headingSelector).last().click();
                    } else {
                        // Else updateTabindex of heading
                        updateTabindex( heading.nextAll(parameters.headingSelector).last(), parent );
                    }

                } else {
                    heading.prevAll(parameters.headingSelector).first().focus();

                    // If "showContentOnFocus" : show content
                    if( parameters.showContentOnFocus ){
                        heading.prevAll(parameters.headingSelector).first().click();
                    } else {
                        // Else updateTabindex of heading
                        updateTabindex( heading.prevAll(parameters.headingSelector).first(), parent );
                    }

                }
            }

            // CTRL + Page Down : show next tab and focus previous heading
            if( e.keyCode === 34 && e.ctrlKey ){
                // If it's first heading - focus on last
                if( heading[0] == parent.find(parameters.headingSelector).last()[0] ){
                    heading.prevAll(parameters.headingSelector).last().focus();

                    // If "showContentOnFocus" : show content
                    if( parameters.showContentOnFocus ){
                        heading.prevAll(parameters.headingSelector).last().click();
                    } else {
                        // Else updateTabindex of heading
                        updateTabindex( heading.prevAll(parameters.headingSelector).last(), parent );
                    }

                } else {
                    heading.nextAll(parameters.headingSelector).first().focus();

                    // If "showContentOnFocus" : show content
                    if( parameters.showContentOnFocus ){
                        heading.nextAll(parameters.headingSelector).first().click();
                    } else {
                        // Else updateTabindex of heading
                        updateTabindex( heading.nextAll(parameters.headingSelector).first(), parent );
                    }

                }
            }
        });


        // Return the element for jQuery chaining
        return $_that;

    };
})(jQuery);

(function($) {
$('.koalapse-NTB').accordion_NTB();
})(jQuery);
	
// accordion-NTB

// color picker

// jQuery MiniColors: A tiny color picker built on jQuery
!function(i){"function"==typeof define&&define.amd?define(["jquery"],i):"object"==typeof exports?module.exports=i(require("jquery")):i(jQuery)}(function(i){"use strict";function t(t,o){var s,a,n,e,r,l,h,d=i('<div class="minicolors" />'),p=i.minicolors.defaults;if(!t.data("minicolors-initialized")){if(o=i.extend(!0,{},p,o),d.addClass("minicolors-theme-"+o.theme).toggleClass("minicolors-with-opacity",o.opacity),void 0!==o.position&&i.each(o.position.split(" "),function(){d.addClass("minicolors-position-"+this)}),a="rgb"===o.format?o.opacity?"25":"20":o.keywords?"11":"7",t.addClass("minicolors-input").data("minicolors-initialized",!1).data("minicolors-settings",o).prop("size",a).wrap(d).after('<div class="minicolors-panel minicolors-slider-'+o.control+'"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite"><div class="minicolors-grid-inner"></div><div class="minicolors-picker"><div></div></div></div></div>'),o.inline||(t.after('<span class="minicolors-swatch minicolors-sprite minicolors-input-swatch"><span class="minicolors-swatch-color"></span></span>'),t.next(".minicolors-input-swatch").on("click",function(i){i.preventDefault(),t.focus()})),l=t.parent().find(".minicolors-panel"),l.on("selectstart",function(){return!1}).end(),o.swatches&&0!==o.swatches.length)for(l.addClass("minicolors-with-swatches"),n=i('<ul class="minicolors-swatches"></ul>').appendTo(l),h=0;h<o.swatches.length;++h)"object"===i.type(o.swatches[h])?(s=o.swatches[h].name,e=o.swatches[h].color):(s="",e=o.swatches[h]),r=e,e=v(e)?g(e,!0):I(u(e,!0)),i('<li class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" title="'+s+'"></span></li>').appendTo(n).data("swatch-color",r).find(".minicolors-swatch-color").css({backgroundColor:C(e),opacity:e.a}),o.swatches[h]=e;o.inline&&t.parent().addClass("minicolors-inline"),c(t,!1),t.data("minicolors-initialized",!0)}}function o(i){var t=i.parent();i.removeData("minicolors-initialized").removeData("minicolors-settings").removeProp("size").removeClass("minicolors-input"),t.before(i).remove()}function s(i){var t=i.parent(),o=t.find(".minicolors-panel"),s=i.data("minicolors-settings");!i.data("minicolors-initialized")||i.prop("disabled")||t.hasClass("minicolors-inline")||t.hasClass("minicolors-focus")||(a(),t.addClass("minicolors-focus"),o.animate?o.stop(!0,!0).fadeIn(s.showSpeed,function(){s.show&&s.show.call(i.get(0))}):(o.show(),s.show&&s.show.call(i.get(0))))}function a(){i(".minicolors-focus").each(function(){var t=i(this),o=t.find(".minicolors-input"),s=t.find(".minicolors-panel"),a=o.data("minicolors-settings");s.animate?s.fadeOut(a.hideSpeed,function(){a.hide&&a.hide.call(o.get(0)),t.removeClass("minicolors-focus")}):(s.hide(),a.hide&&a.hide.call(o.get(0)),t.removeClass("minicolors-focus"))})}function n(i,t,o){var s,a,n,r,c,l=i.parents(".minicolors").find(".minicolors-input"),h=l.data("minicolors-settings"),d=i.find("[class$=-picker]"),p=i.offset().left,u=i.offset().top,g=Math.round(t.pageX-p),m=Math.round(t.pageY-u),f=o?h.animationSpeed:0;t.originalEvent.changedTouches&&(g=t.originalEvent.changedTouches[0].pageX-p,m=t.originalEvent.changedTouches[0].pageY-u),g<0&&(g=0),m<0&&(m=0),g>i.width()&&(g=i.width()),m>i.height()&&(m=i.height()),i.parent().is(".minicolors-slider-wheel")&&d.parent().is(".minicolors-grid")&&(s=75-g,a=75-m,n=Math.sqrt(s*s+a*a),r=Math.atan2(a,s),r<0&&(r+=2*Math.PI),n>75&&(n=75,g=75-75*Math.cos(r),m=75-75*Math.sin(r)),g=Math.round(g),m=Math.round(m)),c={top:m+"px"},i.is(".minicolors-grid")&&(c.left=g+"px"),d.animate?d.stop(!0).animate(c,f,h.animationEasing,function(){e(l,i)}):(d.css(c),e(l,i))}function e(i,t){function o(i,t){var o,s;return i.length&&t?(o=i.offset().left,s=i.offset().top,{x:o-t.offset().left+i.outerWidth()/2,y:s-t.offset().top+i.outerHeight()/2}):null}var s,a,n,e,c,h,d,p=i.val(),u=i.attr("data-opacity"),g=i.parent(),m=i.data("minicolors-settings"),v=g.find(".minicolors-input-swatch"),b=g.find(".minicolors-grid"),w=g.find(".minicolors-slider"),y=g.find(".minicolors-opacity-slider"),C=b.find("[class$=-picker]"),M=w.find("[class$=-picker]"),x=y.find("[class$=-picker]"),I=o(C,b),S=o(M,w),z=o(x,y);if(t.is(".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider")){switch(m.control){case"wheel":e=b.width()/2-I.x,c=b.height()/2-I.y,h=Math.sqrt(e*e+c*c),d=Math.atan2(c,e),d<0&&(d+=2*Math.PI),h>75&&(h=75,I.x=69-75*Math.cos(d),I.y=69-75*Math.sin(d)),a=f(h/.75,0,100),s=f(180*d/Math.PI,0,360),n=f(100-Math.floor(S.y*(100/w.height())),0,100),p=k({h:s,s:a,b:n}),w.css("backgroundColor",k({h:s,s:a,b:100}));break;case"saturation":s=f(parseInt(I.x*(360/b.width()),10),0,360),a=f(100-Math.floor(S.y*(100/w.height())),0,100),n=f(100-Math.floor(I.y*(100/b.height())),0,100),p=k({h:s,s:a,b:n}),w.css("backgroundColor",k({h:s,s:100,b:n})),g.find(".minicolors-grid-inner").css("opacity",a/100);break;case"brightness":s=f(parseInt(I.x*(360/b.width()),10),0,360),a=f(100-Math.floor(I.y*(100/b.height())),0,100),n=f(100-Math.floor(S.y*(100/w.height())),0,100),p=k({h:s,s:a,b:n}),w.css("backgroundColor",k({h:s,s:a,b:100})),g.find(".minicolors-grid-inner").css("opacity",1-n/100);break;default:s=f(360-parseInt(S.y*(360/w.height()),10),0,360),a=f(Math.floor(I.x*(100/b.width())),0,100),n=f(100-Math.floor(I.y*(100/b.height())),0,100),p=k({h:s,s:a,b:n}),b.css("backgroundColor",k({h:s,s:100,b:100}))}u=m.opacity?parseFloat(1-z.y/y.height()).toFixed(2):1,r(i,p,u)}else v.find("span").css({backgroundColor:p,opacity:u}),l(i,p,u)}function r(i,t,o){var s,a=i.parent(),n=i.data("minicolors-settings"),e=a.find(".minicolors-input-swatch");n.opacity&&i.attr("data-opacity",o),"rgb"===n.format?(s=v(t)?g(t,!0):I(u(t,!0)),o=""===i.attr("data-opacity")?1:f(parseFloat(i.attr("data-opacity")).toFixed(2),0,1),!isNaN(o)&&n.opacity||(o=1),t=i.minicolors("rgbObject").a<=1&&s&&n.opacity?"rgba("+s.r+", "+s.g+", "+s.b+", "+parseFloat(o)+")":"rgb("+s.r+", "+s.g+", "+s.b+")"):(v(t)&&(t=y(t)),t=p(t,n.letterCase)),i.val(t),e.find("span").css({backgroundColor:t,opacity:o}),l(i,t,o)}function c(t,o){var s,a,n,e,r,c,h,d,w,C,x=t.parent(),I=t.data("minicolors-settings"),S=x.find(".minicolors-input-swatch"),z=x.find(".minicolors-grid"),F=x.find(".minicolors-slider"),T=x.find(".minicolors-opacity-slider"),j=z.find("[class$=-picker]"),D=F.find("[class$=-picker]"),q=T.find("[class$=-picker]");switch(v(t.val())?(s=y(t.val()),r=f(parseFloat(b(t.val())).toFixed(2),0,1),r&&t.attr("data-opacity",r)):s=p(u(t.val(),!0),I.letterCase),s||(s=p(m(I.defaultValue,!0),I.letterCase)),a=M(s),e=I.keywords?i.map(I.keywords.split(","),function(t){return i.trim(t.toLowerCase())}):[],c=""!==t.val()&&i.inArray(t.val().toLowerCase(),e)>-1?p(t.val()):v(t.val())?g(t.val()):s,o||t.val(c),I.opacity&&(n=""===t.attr("data-opacity")?1:f(parseFloat(t.attr("data-opacity")).toFixed(2),0,1),isNaN(n)&&(n=1),t.attr("data-opacity",n),S.find("span").css("opacity",n),d=f(T.height()-T.height()*n,0,T.height()),q.css("top",d+"px")),"transparent"===t.val().toLowerCase()&&S.find("span").css("opacity",0),S.find("span").css("backgroundColor",s),I.control){case"wheel":w=f(Math.ceil(.75*a.s),0,z.height()/2),C=a.h*Math.PI/180,h=f(75-Math.cos(C)*w,0,z.width()),d=f(75-Math.sin(C)*w,0,z.height()),j.css({top:d+"px",left:h+"px"}),d=150-a.b/(100/z.height()),""===s&&(d=0),D.css("top",d+"px"),F.css("backgroundColor",k({h:a.h,s:a.s,b:100}));break;case"saturation":h=f(5*a.h/12,0,150),d=f(z.height()-Math.ceil(a.b/(100/z.height())),0,z.height()),j.css({top:d+"px",left:h+"px"}),d=f(F.height()-a.s*(F.height()/100),0,F.height()),D.css("top",d+"px"),F.css("backgroundColor",k({h:a.h,s:100,b:a.b})),x.find(".minicolors-grid-inner").css("opacity",a.s/100);break;case"brightness":h=f(5*a.h/12,0,150),d=f(z.height()-Math.ceil(a.s/(100/z.height())),0,z.height()),j.css({top:d+"px",left:h+"px"}),d=f(F.height()-a.b*(F.height()/100),0,F.height()),D.css("top",d+"px"),F.css("backgroundColor",k({h:a.h,s:a.s,b:100})),x.find(".minicolors-grid-inner").css("opacity",1-a.b/100);break;default:h=f(Math.ceil(a.s/(100/z.width())),0,z.width()),d=f(z.height()-Math.ceil(a.b/(100/z.height())),0,z.height()),j.css({top:d+"px",left:h+"px"}),d=f(F.height()-a.h/(360/F.height()),0,F.height()),D.css("top",d+"px"),z.css("backgroundColor",k({h:a.h,s:100,b:100}))}t.data("minicolors-initialized")&&l(t,c,n)}function l(i,t,o){var s,a,n,e=i.data("minicolors-settings"),r=i.data("minicolors-lastChange");if(!r||r.value!==t||r.opacity!==o){if(i.data("minicolors-lastChange",{value:t,opacity:o}),e.swatches&&0!==e.swatches.length){for(s=v(t)?g(t,!0):I(t),a=-1,n=0;n<e.swatches.length;++n)if(s.r===e.swatches[n].r&&s.g===e.swatches[n].g&&s.b===e.swatches[n].b&&s.a===e.swatches[n].a){a=n;break}i.parent().find(".minicolors-swatches .minicolors-swatch").removeClass("selected"),a!==-1&&i.parent().find(".minicolors-swatches .minicolors-swatch").eq(n).addClass("selected")}e.change&&(e.changeDelay?(clearTimeout(i.data("minicolors-changeTimeout")),i.data("minicolors-changeTimeout",setTimeout(function(){e.change.call(i.get(0),t,o)},e.changeDelay))):e.change.call(i.get(0),t,o)),i.trigger("change").trigger("input")}}function h(t){var o,s=i(t).attr("data-opacity");if(v(i(t).val()))o=g(i(t).val(),!0);else{var a=u(i(t).val(),!0);o=I(a)}return o?(void 0!==s&&i.extend(o,{a:parseFloat(s)}),o):null}function d(t,o){var s,a=i(t).attr("data-opacity");if(v(i(t).val()))s=g(i(t).val(),!0);else{var n=u(i(t).val(),!0);s=I(n)}return s?(void 0===a&&(a=1),o?"rgba("+s.r+", "+s.g+", "+s.b+", "+parseFloat(a)+")":"rgb("+s.r+", "+s.g+", "+s.b+")"):null}function p(i,t){return"uppercase"===t?i.toUpperCase():i.toLowerCase()}function u(i,t){return i=i.replace(/^#/g,""),i.match(/^[A-F0-9]{3,6}/gi)?3!==i.length&&6!==i.length?"":(3===i.length&&t&&(i=i[0]+i[0]+i[1]+i[1]+i[2]+i[2]),"#"+i):""}function g(i,t){var o=i.replace(/[^\d,.]/g,""),s=o.split(",");return s[0]=f(parseInt(s[0],10),0,255),s[1]=f(parseInt(s[1],10),0,255),s[2]=f(parseInt(s[2],10),0,255),void 0!==s[3]&&(s[3]=f(parseFloat(s[3],10),0,1)),t?void 0!==s[3]?{r:s[0],g:s[1],b:s[2],a:s[3]}:{r:s[0],g:s[1],b:s[2]}:"undefined"!=typeof s[3]&&s[3]<=1?"rgba("+s[0]+", "+s[1]+", "+s[2]+", "+s[3]+")":"rgb("+s[0]+", "+s[1]+", "+s[2]+")"}function m(i,t){return v(i)?g(i):u(i,t)}function f(i,t,o){return i<t&&(i=t),i>o&&(i=o),i}function v(i){var t=i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);return!(!t||4!==t.length)}function b(i){return i=i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+(\.\d{1,2})?|\.\d{1,2})[\s+]?/i),i&&6===i.length?i[4]:"1"}function w(i){var t={},o=Math.round(i.h),s=Math.round(255*i.s/100),a=Math.round(255*i.b/100);if(0===s)t.r=t.g=t.b=a;else{var n=a,e=(255-s)*a/255,r=(n-e)*(o%60)/60;360===o&&(o=0),o<60?(t.r=n,t.b=e,t.g=e+r):o<120?(t.g=n,t.b=e,t.r=n-r):o<180?(t.g=n,t.r=e,t.b=e+r):o<240?(t.b=n,t.r=e,t.g=n-r):o<300?(t.b=n,t.g=e,t.r=e+r):o<360?(t.r=n,t.g=e,t.b=n-r):(t.r=0,t.g=0,t.b=0)}return{r:Math.round(t.r),g:Math.round(t.g),b:Math.round(t.b)}}function y(i){return i=i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i),i&&4===i.length?"#"+("0"+parseInt(i[1],10).toString(16)).slice(-2)+("0"+parseInt(i[2],10).toString(16)).slice(-2)+("0"+parseInt(i[3],10).toString(16)).slice(-2):""}function C(t){var o=[t.r.toString(16),t.g.toString(16),t.b.toString(16)];return i.each(o,function(i,t){1===t.length&&(o[i]="0"+t)}),"#"+o.join("")}function k(i){return C(w(i))}function M(i){var t=x(I(i));return 0===t.s&&(t.h=360),t}function x(i){var t={h:0,s:0,b:0},o=Math.min(i.r,i.g,i.b),s=Math.max(i.r,i.g,i.b),a=s-o;return t.b=s,t.s=0!==s?255*a/s:0,0!==t.s?i.r===s?t.h=(i.g-i.b)/a:i.g===s?t.h=2+(i.b-i.r)/a:t.h=4+(i.r-i.g)/a:t.h=-1,t.h*=60,t.h<0&&(t.h+=360),t.s*=100/255,t.b*=100/255,t}function I(i){return i=parseInt(i.indexOf("#")>-1?i.substring(1):i,16),{r:i>>16,g:(65280&i)>>8,b:255&i}}i.minicolors={defaults:{animationSpeed:50,animationEasing:"swing",change:null,changeDelay:0,control:"hue",defaultValue:"",format:"hex",hide:null,hideSpeed:100,inline:!1,keywords:"",letterCase:"lowercase",opacity:!1,position:"bottom",show:null,showSpeed:100,theme:"default",swatches:[]}},i.extend(i.fn,{minicolors:function(n,e){switch(n){case"destroy":return i(this).each(function(){o(i(this))}),i(this);case"hide":return a(),i(this);case"opacity":return void 0===e?i(this).attr("data-opacity"):(i(this).each(function(){c(i(this).attr("data-opacity",e))}),i(this));case"rgbObject":return h(i(this),"rgbaObject"===n);case"rgbString":case"rgbaString":return d(i(this),"rgbaString"===n);case"settings":return void 0===e?i(this).data("minicolors-settings"):(i(this).each(function(){var t=i(this).data("minicolors-settings")||{};o(i(this)),i(this).minicolors(i.extend(!0,t,e))}),i(this));case"show":return s(i(this).eq(0)),i(this);case"value":return void 0===e?i(this).val():(i(this).each(function(){"object"==typeof e&&null!==e?(void 0!==e.opacity&&i(this).attr("data-opacity",f(e.opacity,0,1)),e.color&&i(this).val(e.color)):i(this).val(e),c(i(this))}),i(this));default:return"create"!==n&&(e=n),i(this).each(function(){t(i(this),e)}),i(this)}}}),i([document]).on("mousedown.minicolors touchstart.minicolors",function(t){i(t.target).parents().add(t.target).hasClass("minicolors")||a()}).on("mousedown.minicolors touchstart.minicolors",".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider",function(t){var o=i(this);t.preventDefault(),i(t.delegateTarget).data("minicolors-target",o),n(o,t,!0)}).on("mousemove.minicolors touchmove.minicolors",function(t){var o=i(t.delegateTarget).data("minicolors-target");o&&n(o,t)}).on("mouseup.minicolors touchend.minicolors",function(){i(this).removeData("minicolors-target")}).on("click.minicolors",".minicolors-swatches li",function(t){t.preventDefault();var o=i(this),s=o.parents(".minicolors").find(".minicolors-input"),a=o.data("swatch-color");r(s,a,b(a)),c(s)}).on("mousedown.minicolors touchstart.minicolors",".minicolors-input-swatch",function(t){var o=i(this).parent().find(".minicolors-input");t.preventDefault(),s(o)}).on("focus.minicolors",".minicolors-input",function(){var t=i(this);t.data("minicolors-initialized")&&s(t)}).on("blur.minicolors",".minicolors-input",function(){var t,o,s,a,n,e=i(this),r=e.data("minicolors-settings");e.data("minicolors-initialized")&&(t=r.keywords?i.map(r.keywords.split(","),function(t){return i.trim(t.toLowerCase())}):[],""!==e.val()&&i.inArray(e.val().toLowerCase(),t)>-1?n=e.val():(v(e.val())?s=g(e.val(),!0):(o=u(e.val(),!0),s=o?I(o):null),n=null===s?r.defaultValue:"rgb"===r.format?g(r.opacity?"rgba("+s.r+","+s.g+","+s.b+","+e.attr("data-opacity")+")":"rgb("+s.r+","+s.g+","+s.b+")"):C(s)),a=r.opacity?e.attr("data-opacity"):1,"transparent"===n.toLowerCase()&&(a=0),e.closest(".minicolors").find(".minicolors-input-swatch > span").css("opacity",a),e.val(n),""===e.val()&&e.val(m(r.defaultValue,!0)),e.val(p(e.val(),r.letterCase)))}).on("keydown.minicolors",".minicolors-input",function(t){var o=i(this);if(o.data("minicolors-initialized"))switch(t.which){case 9:a();break;case 13:case 27:a(),o.blur()}}).on("keyup.minicolors",".minicolors-input",function(){var t=i(this);t.data("minicolors-initialized")&&c(t,!0)}).on("paste.minicolors",".minicolors-input",function(){var t=i(this);t.data("minicolors-initialized")&&setTimeout(function(){c(t,!0)},1)})});
// jQuery MiniColors: A tiny color picker built on jQuery

jQuery(document).ready(function($){
$('.news-ticker-benaceur-color-inp3').minicolors({

  // animation speed
  animationSpeed: 50,

  // easing function
  animationEasing: 'swing',

  // defers the change event from firing while the user makes a selection
  changeDelay: 0,

  // hue, brightness, saturation, or wheel
  control: 'hue',

  // default color
  defaultValue: '',

  // hex or rgb
  format: 'hex',

  // show/hide speed
  showSpeed: 100,
  hideSpeed: 100,

  // is inline mode?
  inline: false,

  // a comma-separated list of keywords that the control should accept (e.g. inherit, transparent, initial). 
  keywords: '',

  // uppercase or lowercase
  letterCase: 'lowercase',

  // enables opacity slider
  opacity: false,

  // custom position
  position: 'bottom left',
  
  // additional theme class
  theme: 'default',

  // an array of colors that will show up under the main color <a href="https://www.jqueryscript.net/tags.php?/grid/">grid</a>
  swatches: []
  
});
});
// color picker

// jQuery Code Box Copy
jQuery(document).ready(function($){
    $('.code-box-copy').codeBoxCopy({
        tooltipText: ntb_admin_js.code_copied,
        tooltipShowTime: 1000,
        tooltipFadeInTime: 300,
        tooltipFadeOutTime: 300
    });
});
// jQuery Code Box Copy

jQuery(document).ready(function($) {
  $('#submit-ftb1').on('click',function()  { $(this).val(ntb_admin_js.wait_click); });
  $('#submit-ftb3').on('click',function()  { $(this).val(ntb_admin_js.wait_click); });
  $('#submit-ftb5').on('click',function()  { $(this).val(ntb_admin_js.wait_click); });
  $('#submit-ftb7').on('click',function()  { $(this).val(ntb_admin_js.wait_click); });
  $('#submit-ftb-all').on('click',function()  { $(this).val(ntb_admin_js.wait_click); });
});

// go to div after submit
jQuery(document).ready(function($){
if (ntb_admin_js.scrool_to == 'glob_options') {	
$('html, body').animate({scrollTop: $("#go1-setting-ntb").offset().top}, 800);
} else if (ntb_admin_js.scrool_to == 'anim_options') {
$('html, body').animate({scrollTop: $("#go2-setting-ntb").offset().top}, 800);
} else if (ntb_admin_js.scrool_to == 'sty_options') {
$('html, body').animate({scrollTop: $("#go3-setting-ntb").offset().top}, 800);	
} else if (ntb_admin_js.scrool_to == 'oth_options') {
$('html, body').animate({scrollTop: $("#go4-setting-ntb").offset().top}, 800);	
}
});
// go to div after submit

// Change text alignment of textarea
jQuery(document).ready(function($){
  $('#b78t-ntbCat-txt_news_manually').on('click', function(){
  $('.news-ticker-benaceur-s-style_m').toggleClass("b78tae_main");
  })
});
// Change text alignment of textarea

// radio on change event ntb_hideAfterTime
(function($) {
	var valueChecked = $('#ntb_hideAfterTime input[type=radio]:checked').val();
	if (valueChecked == 'disable_this_option') {
        $(".h77-this-sec").hide();
    } else {
        $(".h77-this-sec").show();
	}
	
$('input[type=radio][name="news_ticker_benaceur_glob_options[global_options][hide_after_time][hide]"]').change(function() {
	if ($(this).attr("value") == 'disable_this_option') {
        $(".h77-this-sec").hide();
    } else {
        $(".h77-this-sec").show();
	}
});

})(jQuery);
// radio on change event ntb_hideAfterTime

(function($) {

    $("select.news-ticker-benaceur-color-inp.trans_bk").change(function(){
        $(this).find("option:selected").each(function(){

            if($(this).attr("value")=="no"){
                //$(".box_trans_bk").not(".hide_trans_bk").hide(); 
                $(".hide_trans_bk").show(400); // الوان
            } else if($(this).attr("value")=="black" || $(this).attr("value")=="white"){
                $(".box_trans_bk").hide();
            }
			
            if($(this).attr("value")=="black" || $(this).attr("value")=="white"){
                //$(".box_trans_bk2").not(".hide_trans_bk2").hide();
                $(".hide_trans_bk2").show(400);
            } else if($(this).attr("value")=="no"){
                $(".box_trans_bk2").hide();
            }
        });
    }).change();
})(jQuery);

(function($) {

    $("select.news-ticker-benaceur-color-inp.selAnim").change(function(){
        $(this).find("option:selected").each(function(){
			
	        if($(this).attr("value")=="TickerNTB"){
			$("#dropdown_style_transparent").val('no');	
			//$("#dropdown_style_transparent > option[value='no']").attr("selected", true);
			//$("#dropdown_style_transparent > option[value='black']").attr("selected", false);
			//$("#dropdown_style_transparent > option[value='white']").attr("selected", false);
			$(".hide_trans_bk2").hide();
			$(".hide_trans_bk").css("display", "block");
            } 
        });
    }).change();
})(jQuery);

// add wp.codeEditor color to textarea
(function($){
	 'use strict'; 
    $(function(){
        
        if( $('#news-ticker-benaceur-CodeMirrorJs').length ) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    mode: 'javascript',
                }
            );
            var editor = wp.codeEditor.initialize( $('#news-ticker-benaceur-CodeMirrorJs'), editorSettings );
        }

        if( $('#news-ticker-benaceur-CodeMirrorCss').length ) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    mode: 'css',
                }
            );
            var editor = wp.codeEditor.initialize( $('#news-ticker-benaceur-CodeMirrorCss'), editorSettings );
        }
    });
})(jQuery);
 // add wp.codeEditor color to textarea
 
 // modification by filter
(function($) {
    $('#click_modif_by_filter_ntb').click(function() {
        $('#display_modif_by_filter_ntb').slideToggle("slow");
    });
    $('#click_modif_by_filter_ntb1').click(function() {
        $('#display_modif_by_filter_ntb1').slideToggle(100);
    });
    $('#click_modif_by_filter_ntb2').click(function() {
        $('#display_modif_by_filter_ntb2').slideToggle(100);
    });
})(jQuery);
 // modification by filter

(function($) {

    $("select.custom_select_auto_add_code").change(function(){
        $(this).find("option:selected").each(function(){
			
	        if($(this).attr("value")=="top" || $(this).attr("value")=="bottom"){
			$("#ntb__personalize_not_fixed").css("display", "block");
            } else {
			$("#ntb__personalize_not_fixed").hide();	
			}
        });
    }).change();
})(jQuery);

// notification bottom submit Button
(function($) {
        $('input[name="submit_global"],input[name="submit_animation"],input[name="submit_style"]').click(function() {
                $('.ntb_cache_changesSaved').css({'background': '#f66666', 'border-color': 'red', 'color' : 'white'});
        });
		
        $('input[name="submit_others"]').click(function() {
                $('.ntb_cache_changesSaved-s-oth').css({'background': '#f66666', 'border-color': 'red', 'color' : 'white'});
        });
		
        $('input[name="submit__ntb_all"]').click(function() {
                $('.ntb_cache_changesSaved-s-all').css({'background': '#f66666', 'border-color': 'red', 'color' : 'white'});
        });
})(jQuery);
// notification bottom submit Button