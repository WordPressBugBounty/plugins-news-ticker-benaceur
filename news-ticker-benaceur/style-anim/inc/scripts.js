//ellipsis
// Ellipsis: preserve the link's existing HTML and let CSS handle resizing.
if (ntb_anims.ellipsis === '1') {
	(function ($) {
		$('.news-ticker-ntb ul a').each(function () {
			var $link = $(this);

			// Avoid wrapping the same link more than once.
			if ($link.children('.ntb_ellip.ntb_ellip-line').length) {
				return;
			}

			// Wrap all existing content without converting it to plain text.
			$link.wrapInner('<span class="ntb_ellip ntb_ellip-line"></span>');
		});
	})(jQuery);
}
//ellipsis

// animations two library
if ( ntb_anims.is_two == true && ntb_anims.disable_anim == false ) {
!function($,undefined){"use strict";function debug(s){$.fn.cycle.debug&&log(s)}function log(){window.console&&console.log&&console.log("[cycle] "+Array.prototype.join.call(arguments," "))}function triggerPause(cont,byHover,onPager){var opts=$(cont).data("cycle.opts");if(opts){var paused=!!cont.cyclePause;paused&&opts.paused?opts.paused(cont,opts,byHover,onPager):!paused&&opts.resumed&&opts.resumed(cont,opts,byHover,onPager)}}function handleArguments(cont,options,arg2){function checkInstantResume(isPaused,arg2,cont){if(!isPaused&&arg2===!0){var options=$(cont).data("cycle.opts");if(!options)return log("options not found, can not resume"),!1;cont.cycleTimeout&&(clearTimeout(cont.cycleTimeout),cont.cycleTimeout=0),go(options.elements,options,1,!options.backwards)}}if(cont.cycleStop===undefined&&(cont.cycleStop=0),(options===undefined||null===options)&&(options={}),options.constructor==String){switch(options){case"destroy":case"stop":var opts=$(cont).data("cycle.opts");return opts?(cont.cycleStop++,cont.cycleTimeout&&clearTimeout(cont.cycleTimeout),cont.cycleTimeout=0,opts.elements&&$(opts.elements).stop(),$(cont).removeData("cycle.opts"),"destroy"==options&&destroy(cont,opts),!1):!1;case"toggle":return cont.cyclePause=1===cont.cyclePause?0:1,checkInstantResume(cont.cyclePause,arg2,cont),triggerPause(cont),!1;case"pause":return cont.cyclePause=1,triggerPause(cont),!1;case"resume":return cont.cyclePause=0,checkInstantResume(!1,arg2,cont),triggerPause(cont),!1;case"prev":case"next":return(opts=$(cont).data("cycle.opts"))?("string"==typeof arg2&&(opts.oneTimeFx=arg2),$.fn.cycle[options](opts),!1):(log('options not found, "prev/next" ignored'),!1);default:options={fx:options}}return options}if(options.constructor==Number){var num=options;return(options=$(cont).data("cycle.opts"))?0>num||num>=options.elements.length?(log("invalid slide index: "+num),!1):(options.nextSlide=num,cont.cycleTimeout&&(clearTimeout(cont.cycleTimeout),cont.cycleTimeout=0),"string"==typeof arg2&&(options.oneTimeFx=arg2),go(options.elements,options,1,num>=options.currSlide),!1):(log("options not found, can not advance slide"),!1)}return options}function removeFilter(el,opts){if(!$.support.opacity&&opts.cleartype&&el.style.filter)try{el.style.removeAttribute("filter")}catch(smother){}}function destroy(cont,opts){opts.next&&$(opts.next).unbind(opts.prevNextEvent),opts.prev&&$(opts.prev).unbind(opts.prevNextEvent),(opts.pager||opts.pagerAnchorBuilder)&&$.each(opts.pagerAnchors||[],function(){this.unbind().remove()}),opts.pagerAnchors=null,$(cont).unbind("mouseenter.cycle mouseleave.cycle"),opts.destroy&&opts.destroy(opts)}function buildOptions($cont,$slides,els,options,o){var startingSlideSpecified,opts=$.extend({},$.fn.cycle.defaults,options||{},$.metadata?$cont.metadata():$.meta?$cont.data():{}),meta=$.isFunction($cont.data)?$cont.data(opts.metaAttr):null;meta&&(opts=$.extend(opts,meta)),opts.autostop&&(opts.countdown=opts.autostopCount||els.length);var cont=$cont[0];if($cont.data("cycle.opts",opts),opts.$cont=$cont,opts.stopCount=cont.cycleStop,opts.elements=els,opts.before=opts.before?[opts.before]:[],opts.after=opts.after?[opts.after]:[],!$.support.opacity&&opts.cleartype&&opts.after.push(function(){removeFilter(this,opts)}),opts.continuous&&opts.after.push(function(){go(els,opts,0,!opts.backwards)}),saveOriginalOpts(opts),$.support.opacity||!opts.cleartype||opts.cleartypeNoBg||clearTypeFix($slides),"static"==$cont.css("position")&&$cont.css("position","relative"),opts.width&&$cont.width(opts.width),opts.height&&"auto"!=opts.height&&$cont.height(opts.height),opts.startingSlide!==undefined?(opts.startingSlide=parseInt(opts.startingSlide,10),opts.startingSlide>=els.length||opts.startSlide<0?opts.startingSlide=0:startingSlideSpecified=!0):opts.backwards?opts.startingSlide=els.length-1:opts.startingSlide=0,opts.random){opts.randomMap=[];for(var i=0;i<els.length;i++)opts.randomMap.push(i);if(opts.randomMap.sort(function(a,b){return Math.random()-.5}),startingSlideSpecified)for(var cnt=0;cnt<els.length;cnt++)opts.startingSlide==opts.randomMap[cnt]&&(opts.randomIndex=cnt);else opts.randomIndex=1,opts.startingSlide=opts.randomMap[1]}else opts.startingSlide>=els.length&&(opts.startingSlide=0);opts.currSlide=opts.startingSlide||0;var first=opts.startingSlide;$slides.css({position:"absolute",top:0,left:0}).hide().each(function(i){var z;z=opts.backwards?first?first>=i?els.length+(i-first):first-i:els.length-i:first?i>=first?els.length-(i-first):first-i:els.length-i,$(this).css("z-index",z)}),$(els[first]).css("opacity",1).show(),removeFilter(els[first],opts),opts.fit&&(opts.aspect?$slides.each(function(){var $slide=$(this),ratio=opts.aspect===!0?$slide.width()/$slide.height():opts.aspect;opts.width&&$slide.width()!=opts.width&&($slide.width(opts.width),$slide.height(opts.width/ratio)),opts.height&&$slide.height()<opts.height&&($slide.height(opts.height),$slide.width(opts.height*ratio))}):(opts.width&&$slides.width(opts.width),opts.height&&"auto"!=opts.height&&$slides.height(opts.height))),!opts.center||opts.fit&&!opts.aspect||$slides.each(function(){var $slide=$(this);$slide.css({"margin-left":opts.width?(opts.width-$slide.width())/2+"px":0,"margin-top":opts.height?(opts.height-$slide.height())/2+"px":0})}),!opts.center||opts.fit||opts.slideResize||$slides.each(function(){var $slide=$(this);$slide.css({"margin-left":opts.width?(opts.width-$slide.width())/2+"px":0,"margin-top":opts.height?(opts.height-$slide.height())/2+"px":0})});var reshape=(opts.containerResize||opts.containerResizeHeight)&&$cont.innerHeight()<1;if(reshape){for(var maxw=0,maxh=0,j=0;j<els.length;j++){var $e=$(els[j]),e=$e[0],w=$e.outerWidth(),h=$e.outerHeight();w||(w=e.offsetWidth||e.width||$e.attr("width")),h||(h=e.offsetHeight||e.height||$e.attr("height")),maxw=w>maxw?w:maxw,maxh=h>maxh?h:maxh}opts.containerResize&&maxw>0&&maxh>0&&$cont.css({width:maxw+"px",height:maxh+"px"}),opts.containerResizeHeight&&maxh>0&&$cont.css({height:maxh+"px"})}var pauseFlag=!1;if(opts.pause&&$cont.bind("mouseenter.cycle",function(){pauseFlag=!0,this.cyclePause++,triggerPause(cont,!0)}).bind("mouseleave.cycle",function(){pauseFlag&&this.cyclePause--,triggerPause(cont,!0)}),supportMultiTransitions(opts)===!1)return!1;var requeue=!1;if(options.requeueAttempts=options.requeueAttempts||0,$slides.each(function(){var $el=$(this);if(this.cycleH=opts.fit&&opts.height?opts.height:$el.height()||this.offsetHeight||this.height||$el.attr("height")||0,this.cycleW=opts.fit&&opts.width?opts.width:$el.width()||this.offsetWidth||this.width||$el.attr("width")||0,$el.is("img")){var loading=0===this.cycleH&&0===this.cycleW&&!this.complete;if(loading){if(o.s&&opts.requeueOnImageNotLoaded&&++options.requeueAttempts<100)return log(options.requeueAttempts," - img slide not loaded, requeuing slideshow: ",this.src,this.cycleW,this.cycleH),setTimeout(function(){$(o.s,o.c).cycle(options)},opts.requeueTimeout),requeue=!0,!1;log("could not determine size of image: "+this.src,this.cycleW,this.cycleH)}}return!0}),requeue)return!1;if(opts.cssBefore=opts.cssBefore||{},opts.cssAfter=opts.cssAfter||{},opts.cssFirst=opts.cssFirst||{},opts.animIn=opts.animIn||{},opts.animOut=opts.animOut||{},$slides.not(":eq("+first+")").css(opts.cssBefore),$($slides[first]).css(opts.cssFirst),opts.timeout){opts.timeout=parseInt(opts.timeout,10),opts.speed.constructor==String&&(opts.speed=$.fx.speeds[opts.speed]||parseInt(opts.speed,10)),opts.sync||(opts.speed=opts.speed/2);for(var buffer="none"==opts.fx?0:"shuffle"==opts.fx?500:250;opts.timeout-opts.speed<buffer;)opts.timeout+=opts.speed}if(opts.easing&&(opts.easeIn=opts.easeOut=opts.easing),opts.speedIn||(opts.speedIn=opts.speed),opts.speedOut||(opts.speedOut=opts.speed),opts.slideCount=els.length,opts.currSlide=opts.lastSlide=first,opts.random?(++opts.randomIndex==els.length&&(opts.randomIndex=0),opts.nextSlide=opts.randomMap[opts.randomIndex]):opts.backwards?opts.nextSlide=0===opts.startingSlide?els.length-1:opts.startingSlide-1:opts.nextSlide=opts.startingSlide>=els.length-1?0:opts.startingSlide+1,!opts.multiFx){var init=$.fn.cycle.transitions[opts.fx];if($.isFunction(init))init($cont,$slides,opts);else if("custom"!=opts.fx&&!opts.multiFx)return log("unknown transition: "+opts.fx,"; slideshow terminating"),!1}var e0=$slides[first];return opts.skipInitializationCallbacks||(opts.before.length&&opts.before[0].apply(e0,[e0,e0,opts,!0]),opts.after.length&&opts.after[0].apply(e0,[e0,e0,opts,!0])),opts.next&&$(opts.next).bind(opts.prevNextEvent,function(){return advance(opts,1)}),opts.prev&&$(opts.prev).bind(opts.prevNextEvent,function(){return advance(opts,0)}),(opts.pager||opts.pagerAnchorBuilder)&&buildPager(els,opts),exposeAddSlide(opts,els),opts}function saveOriginalOpts(opts){opts.original={before:[],after:[]},opts.original.cssBefore=$.extend({},opts.cssBefore),opts.original.cssAfter=$.extend({},opts.cssAfter),opts.original.animIn=$.extend({},opts.animIn),opts.original.animOut=$.extend({},opts.animOut),$.each(opts.before,function(){opts.original.before.push(this)}),$.each(opts.after,function(){opts.original.after.push(this)})}function supportMultiTransitions(opts){var i,tx,txs=$.fn.cycle.transitions;if(opts.fx.indexOf(",")>0){for(opts.multiFx=!0,opts.fxs=opts.fx.replace(/\s*/g,"").split(","),i=0;i<opts.fxs.length;i++){var fx=opts.fxs[i];tx=txs[fx],tx&&txs.hasOwnProperty(fx)&&$.isFunction(tx)||(log("discarding unknown transition: ",fx),opts.fxs.splice(i,1),i--)}if(!opts.fxs.length)return log("No valid transitions named; slideshow terminating."),!1}else if("all"==opts.fx){opts.multiFx=!0,opts.fxs=[];for(var p in txs)txs.hasOwnProperty(p)&&(tx=txs[p],txs.hasOwnProperty(p)&&$.isFunction(tx)&&opts.fxs.push(p))}if(opts.multiFx&&opts.randomizeEffects){var r1=Math.floor(20*Math.random())+30;for(i=0;r1>i;i++){var r2=Math.floor(Math.random()*opts.fxs.length);opts.fxs.push(opts.fxs.splice(r2,1)[0])}debug("randomized fx sequence: ",opts.fxs)}return!0}function exposeAddSlide(opts,els){opts.addSlide=function(newSlide,prepend){var $s=$(newSlide),s=$s[0];opts.autostopCount||opts.countdown++,els[prepend?"unshift":"push"](s),opts.els&&opts.els[prepend?"unshift":"push"](s),opts.slideCount=els.length,opts.random&&(opts.randomMap.push(opts.slideCount-1),opts.randomMap.sort(function(a,b){return Math.random()-.5})),$s.css("position","absolute"),$s[prepend?"prependTo":"appendTo"](opts.$cont),prepend&&(opts.currSlide++,opts.nextSlide++),$.support.opacity||!opts.cleartype||opts.cleartypeNoBg||clearTypeFix($s),opts.fit&&opts.width&&$s.width(opts.width),opts.fit&&opts.height&&"auto"!=opts.height&&$s.height(opts.height),s.cycleH=opts.fit&&opts.height?opts.height:$s.height(),s.cycleW=opts.fit&&opts.width?opts.width:$s.width(),$s.css(opts.cssBefore),(opts.pager||opts.pagerAnchorBuilder)&&$.fn.cycle.createPagerAnchor(els.length-1,s,$(opts.pager),els,opts),$.isFunction(opts.onAddSlide)?opts.onAddSlide($s):$s.hide()}}function go(els,opts,manual,fwd){function queueNext(){var ms=0;opts.timeout;opts.timeout&&!opts.continuous?(ms=getTimeout(els[opts.currSlide],els[opts.nextSlide],opts,fwd),"shuffle"==opts.fx&&(ms-=opts.speedOut)):opts.continuous&&p.cyclePause&&(ms=10),ms>0&&(p.cycleTimeout=setTimeout(function(){go(els,opts,0,!opts.backwards)},ms))}var p=opts.$cont[0],curr=els[opts.currSlide],next=els[opts.nextSlide];if(manual&&opts.busy&&opts.manualTrump&&(debug("manualTrump in go(), stopping active transition"),$(els).stop(!0,!0),opts.busy=0,clearTimeout(p.cycleTimeout)),opts.busy)return void debug("transition active, ignoring new tx request");if(p.cycleStop==opts.stopCount&&(0!==p.cycleTimeout||manual)){if(!manual&&!p.cyclePause&&!opts.bounce&&(opts.autostop&&--opts.countdown<=0||opts.nowrap&&!opts.random&&opts.nextSlide<opts.currSlide))return void(opts.end&&opts.end(opts));var changed=!1;if(!manual&&p.cyclePause||opts.nextSlide==opts.currSlide)queueNext();else{changed=!0;var fx=opts.fx;curr.cycleH=curr.cycleH||$(curr).height(),curr.cycleW=curr.cycleW||$(curr).width(),next.cycleH=next.cycleH||$(next).height(),next.cycleW=next.cycleW||$(next).width(),opts.multiFx&&(fwd&&(opts.lastFx===undefined||++opts.lastFx>=opts.fxs.length)?opts.lastFx=0:!fwd&&(opts.lastFx===undefined||--opts.lastFx<0)&&(opts.lastFx=opts.fxs.length-1),fx=opts.fxs[opts.lastFx]),opts.oneTimeFx&&(fx=opts.oneTimeFx,opts.oneTimeFx=null),$.fn.cycle.resetState(opts,fx),opts.before.length&&$.each(opts.before,function(i,o){p.cycleStop==opts.stopCount&&o.apply(next,[curr,next,opts,fwd])});var after=function(){opts.busy=0,$.each(opts.after,function(i,o){p.cycleStop==opts.stopCount&&o.apply(next,[curr,next,opts,fwd])}),p.cycleStop||queueNext()};debug("tx firing("+fx+"); currSlide: "+opts.currSlide+"; nextSlide: "+opts.nextSlide),opts.busy=1,opts.fxFn?opts.fxFn(curr,next,opts,after,fwd,manual&&opts.fastOnEvent):$.isFunction($.fn.cycle[opts.fx])?$.fn.cycle[opts.fx](curr,next,opts,after,fwd,manual&&opts.fastOnEvent):$.fn.cycle.custom(curr,next,opts,after,fwd,manual&&opts.fastOnEvent)}if(changed||opts.nextSlide==opts.currSlide){var roll;opts.lastSlide=opts.currSlide,opts.random?(opts.currSlide=opts.nextSlide,++opts.randomIndex==els.length&&(opts.randomIndex=0,opts.randomMap.sort(function(a,b){return Math.random()-.5})),opts.nextSlide=opts.randomMap[opts.randomIndex],opts.nextSlide==opts.currSlide&&(opts.nextSlide=opts.currSlide==opts.slideCount-1?0:opts.currSlide+1)):opts.backwards?(roll=opts.nextSlide-1<0,roll&&opts.bounce?(opts.backwards=!opts.backwards,opts.nextSlide=1,opts.currSlide=0):(opts.nextSlide=roll?els.length-1:opts.nextSlide-1,opts.currSlide=roll?0:opts.nextSlide+1)):(roll=opts.nextSlide+1==els.length,roll&&opts.bounce?(opts.backwards=!opts.backwards,opts.nextSlide=els.length-2,opts.currSlide=els.length-1):(opts.nextSlide=roll?0:opts.nextSlide+1,opts.currSlide=roll?els.length-1:opts.nextSlide-1))}changed&&opts.pager&&opts.updateActivePagerLink(opts.pager,opts.currSlide,opts.activePagerClass)}}function getTimeout(curr,next,opts,fwd){if(opts.timeoutFn){for(var t=opts.timeoutFn.call(curr,curr,next,opts,fwd);"none"!=opts.fx&&t-opts.speed<250;)t+=opts.speed;if(debug("calculated timeout: "+t+"; speed: "+opts.speed),t!==!1)return t}return opts.timeout}function advance(opts,moveForward){var val=moveForward?1:-1,els=opts.elements,p=opts.$cont[0],timeout=p.cycleTimeout;if(timeout&&(clearTimeout(timeout),p.cycleTimeout=0),opts.random&&0>val)opts.randomIndex--,-2==--opts.randomIndex?opts.randomIndex=els.length-2:-1==opts.randomIndex&&(opts.randomIndex=els.length-1),opts.nextSlide=opts.randomMap[opts.randomIndex];else if(opts.random)opts.nextSlide=opts.randomMap[opts.randomIndex];else if(opts.nextSlide=opts.currSlide+val,opts.nextSlide<0){if(opts.nowrap)return!1;opts.nextSlide=els.length-1}else if(opts.nextSlide>=els.length){if(opts.nowrap)return!1;opts.nextSlide=0}var cb=opts.onPrevNextEvent||opts.prevNextClick;return $.isFunction(cb)&&cb(val>0,opts.nextSlide,els[opts.nextSlide]),go(els,opts,1,moveForward),!1}function buildPager(els,opts){var $p=$(opts.pager);$.each(els,function(i,o){$.fn.cycle.createPagerAnchor(i,o,$p,els,opts)}),opts.updateActivePagerLink(opts.pager,opts.startingSlide,opts.activePagerClass)}function clearTypeFix($slides){function hex(s){return s=parseInt(s,10).toString(16),s.length<2?"0"+s:s}function getBg(e){for(;e&&"html"!=e.nodeName.toLowerCase();e=e.parentNode){var v=$.css(e,"background-color");if(v&&v.indexOf("rgb")>=0){var rgb=v.match(/\d+/g);return"#"+hex(rgb[0])+hex(rgb[1])+hex(rgb[2])}if(v&&"transparent"!=v)return v}return"#ffffff"}debug("applying clearType background-color hack"),$slides.each(function(){$(this).css("background-color",getBg(this))})}var ver="3.0.3";$.expr[":"].paused=function(el){return el.cyclePause},$.fn.cycle=function(options,arg2){var o={s:this.selector,c:this.context};return 0===this.length&&"stop"!=options?!$.isReady&&o.s?(log("DOM not ready, queuing slideshow"),$(function(){$(o.s,o.c).cycle(options,arg2)}),this):(log("terminating; zero elements found by selector"+($.isReady?"":" (DOM not ready)")),this):this.each(function(){var opts=handleArguments(this,options,arg2);if(opts!==!1){opts.updateActivePagerLink=opts.updateActivePagerLink||$.fn.cycle.updateActivePagerLink,this.cycleTimeout&&clearTimeout(this.cycleTimeout),this.cycleTimeout=this.cyclePause=0,this.cycleStop=0;var $cont=$(this),$slides=opts.slideExpr?$(opts.slideExpr,this):$cont.children(),els=$slides.get();if(els.length<2)return void log("terminating; too few slides: "+els.length);var opts2=buildOptions($cont,$slides,els,opts,o);if(opts2!==!1){var startTime=opts2.continuous?10:getTimeout(els[opts2.currSlide],els[opts2.nextSlide],opts2,!opts2.backwards);startTime&&(startTime+=opts2.delay||0,10>startTime&&(startTime=10),debug("first timeout: "+startTime),this.cycleTimeout=setTimeout(function(){go(els,opts2,0,!opts.backwards)},startTime))}}})},$.fn.cycle.resetState=function(opts,fx){fx=fx||opts.fx,opts.before=[],opts.after=[],opts.cssBefore=$.extend({},opts.original.cssBefore),opts.cssAfter=$.extend({},opts.original.cssAfter),opts.animIn=$.extend({},opts.original.animIn),opts.animOut=$.extend({},opts.original.animOut),opts.fxFn=null,$.each(opts.original.before,function(){opts.before.push(this)}),$.each(opts.original.after,function(){opts.after.push(this)});var init=$.fn.cycle.transitions[fx];$.isFunction(init)&&init(opts.$cont,$(opts.elements),opts)},$.fn.cycle.updateActivePagerLink=function(pager,currSlide,clsName){$(pager).each(function(){$(this).children().removeClass(clsName).eq(currSlide).addClass(clsName)})},$.fn.cycle.next=function(opts){advance(opts,1)},$.fn.cycle.prev=function(opts){advance(opts,0)},$.fn.cycle.createPagerAnchor=function(i,el,$p,els,opts){var a;if($.isFunction(opts.pagerAnchorBuilder)?(a=opts.pagerAnchorBuilder(i,el),debug("pagerAnchorBuilder("+i+", el) returned: "+a)):a='<a href="#">'+(i+1)+"</a>",a){var $a=$(a);if(0===$a.parents("body").length){var arr=[];$p.length>1?($p.each(function(){var $clone=$a.clone(!0);$(this).append($clone),arr.push($clone[0])}),$a=$(arr)):$a.appendTo($p)}opts.pagerAnchors=opts.pagerAnchors||[],opts.pagerAnchors.push($a);var pagerFn=function(e){e.preventDefault(),opts.nextSlide=i;var p=opts.$cont[0],timeout=p.cycleTimeout;timeout&&(clearTimeout(timeout),p.cycleTimeout=0);var cb=opts.onPagerEvent||opts.pagerClick;$.isFunction(cb)&&cb(opts.nextSlide,els[opts.nextSlide]),go(els,opts,1,opts.currSlide<i)};/mouseenter|mouseover/i.test(opts.pagerEvent)?$a.hover(pagerFn,function(){}):$a.bind(opts.pagerEvent,pagerFn),/^click/.test(opts.pagerEvent)||opts.allowPagerClickBubble||$a.bind("click.cycle",function(){return!1});var cont=opts.$cont[0],pauseFlag=!1;opts.pauseOnPagerHover&&$a.hover(function(){pauseFlag=!0,cont.cyclePause++,triggerPause(cont,!0,!0)},function(){pauseFlag&&cont.cyclePause--,triggerPause(cont,!0,!0)})}},$.fn.cycle.hopsFromLast=function(opts,fwd){var hops,l=opts.lastSlide,c=opts.currSlide;return hops=fwd?c>l?c-l:opts.slideCount-l:l>c?l-c:l+opts.slideCount-c},$.fn.cycle.commonReset=function(curr,next,opts,w,h,rev){$(opts.elements).not(curr).hide(),"undefined"==typeof opts.cssBefore.opacity&&(opts.cssBefore.opacity=1),opts.cssBefore.display="block",opts.slideResize&&w!==!1&&next.cycleW>0&&(opts.cssBefore.width=next.cycleW),opts.slideResize&&h!==!1&&next.cycleH>0&&(opts.cssBefore.height=next.cycleH),opts.cssAfter=opts.cssAfter||{},opts.cssAfter.display="none",$(curr).css("zIndex",opts.slideCount+(rev===!0?1:0)),$(next).css("zIndex",opts.slideCount+(rev===!0?0:1))},$.fn.cycle.custom=function(curr,next,opts,cb,fwd,speedOverride){var $l=$(curr),$n=$(next),speedIn=opts.speedIn,speedOut=opts.speedOut,easeIn=opts.easeIn,easeOut=opts.easeOut,animInDelay=opts.animInDelay,animOutDelay=opts.animOutDelay;$n.css(opts.cssBefore),speedOverride&&(speedIn=speedOut="number"==typeof speedOverride?speedOverride:1,easeIn=easeOut=null);var fn=function(){$n.delay(animInDelay).animate(opts.animIn,speedIn,easeIn,function(){cb()})};$l.delay(animOutDelay).animate(opts.animOut,speedOut,easeOut,function(){$l.css(opts.cssAfter),opts.sync||fn()}),opts.sync&&fn()},$.fn.cycle.transitions={fade:function($cont,$slides,opts){$slides.not(":eq("+opts.currSlide+")").css("opacity",0),opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts),opts.cssBefore.opacity=0}),opts.animIn={opacity:1},opts.animOut={opacity:0},opts.cssBefore={top:0,left:0}}},$.fn.cycle.ver=function(){return ver},$.fn.cycle.defaults={activePagerClass:"activeSlide",after:null,allowPagerClickBubble:!1,animIn:null,animInDelay:0,animOut:null,animOutDelay:0,aspect:!1,autostop:0,autostopCount:0,backwards:!1,before:null,center:null,cleartypeNoBg:!1,containerResize:1,containerResizeHeight:0,continuous:0,cssAfter:null,cssBefore:null,delay:0,easeIn:null,easeOut:null,easing:null,end:null,fastOnEvent:0,fit:0,fx:"fade",fxFn:null,height:"auto",manualTrump:!0,metaAttr:"cycle",next:null,nowrap:0,onPagerEvent:null,onPrevNextEvent:null,pager:null,pagerAnchorBuilder:null,pagerEvent:"click.cycle",pause:0,pauseOnPagerHover:0,prev:null,prevNextEvent:"click.cycle",random:0,randomizeEffects:1,requeueOnImageNotLoaded:!0,requeueTimeout:250,rev:0,shuffle:null,skipInitializationCallbacks:!1,slideExpr:null,slideResize:1,speed:1e3,speedIn:null,speedOut:null,startingSlide:undefined,sync:1,timeout:4e3,timeoutFn:null,updateActivePagerLink:null,width:null}}(jQuery);
}
// animations two library

if (typeof ntb_anims !== 'undefined' && ntb_anims.animation === 'fadein' && ntb_anims.disable_anim == false) { // +++++++++++++++++++++++++++ fadein

(function($) {
	'use strict';

	// Only keyboard focus holds the ticker (not focus left by a touch or a click).
	function isKeyboardFocus(node) {
		try {
			return node.matches(':focus-visible');
		} catch (err) {
			return true; // very old browsers: keep the previous behavior
		}
	}

	// Invalid, empty or zero values fall back to 4 seconds instead of a near-zero interval.
	function intervalFromSettings() {
		var n = Number(ntb_anims.timeout_fadein);
		return (isFinite(n) && n > 0) ? n : 4000;
	}

    $.fn.newsTicker = function (options) {
        var options = $.extend({}, $.fn.newsTicker.config, options);
		
		/* check that the passed element is actually in the DOM */
		if ($(this).length == 0) {
			if (window.console && window.console.log) {
				window.console.log('Element does not exist in DOM!');
			}
			else {
				alert('Element does not exist in DOM!');		
			}
			return false;
		}
		
		/* ID of the identifier */
		var newsID = '#' + $(this).attr('id');
		$(newsID).hide();
		
        return this.each(function () {
            /* initialize the elements in the collection */
			var settings = {				
				count: 0,
				newsArr: {},
				play: true,
				contentLoaded: false,
				interval:'',
				clearIntrvl:0,
				hovered: false,
				touched: false,
				focused: false,
				held: false,
				bound: false
			};

			var pauseEnabled = ntb_anims.pause_fadein != '';
			var canHover = window.matchMedia
				? window.matchMedia('(hover: hover)').matches
				: true;
			
			/* Next button click button handler */
			$(options.nextBtnDiv).click(function (event) {
				event.preventDefault();
				settings.clearIntrvl = 1;
				putNews();
			});

			/* Prev button click button handler */
			$(options.prevBtnDiv).click(function (event) {
				event.preventDefault();

				if (settings.count == 0) {
					settings.count = countSize(settings.newsArr) - 2;
				} else if (settings.count == 1) {
					settings.count = countSize(settings.newsArr) - 1;
				} else {
					settings.count = settings.count - 2;
				}

				if (settings.count < 0) {
					settings.count = countSize(settings.newsArr) - 1;
				}

				settings.clearIntrvl = 1;
				putNews();
			});
			
			/* Play/Pause button click button handler */
			$(options.playPauseID).click(function() {
				if(settings.play == true)
				{
					if(settings.interval)
					{
						settings.clearIntrvl = 1;
						clearInterval(settings.interval);
					}
					settings.play= false;
					debugError('Paused:'+settings.count);
				}
				else				
				{
					debugError('Play :'+settings.count);
					settings.play= true;
					putNews();
				}
			});
			
			initPage();
			
			function initPage()
			{
				populateNews();
				
				if(settings.contentLoaded)
				{
					settings.clearIntrvl = 1;
					putNews();
				}
			}
            
			function runIntervals()
			{
				settings.clearIntrvl=0;	
				settings.interval = setInterval(function(){ putNews() }, options.interval);
				bindPauseEvents();
			}

			/* Hover, touch and keyboard focus are tracked separately: the ticker stays held while any of them is active */
			function refreshHold()
			{
				var held = settings.focused || (pauseEnabled && (settings.hovered || settings.touched));

				if (held && !settings.held) {
					settings.held = true;
					if (settings.interval) {
						settings.clearIntrvl = 1;
						clearInterval(settings.interval);
					}
				}
				else if (!held && settings.held) {
					settings.held = false;
					if (settings.play) {
						putNews();
					}
				}
			}

			/* Recompute keyboard focus from the document (the focused link may have been replaced) */
			function syncFocus()
			{
				var el = $(options.newsData)[0];
				var active = document.activeElement;

				settings.focused = !!el && !!active && el.contains(active) && isKeyboardFocus(active);
				refreshHold();
			}

			/* Bound once (the old code bound a new hover pair on every runIntervals call) */
			function bindPauseEvents()
			{
				if (settings.bound) {
					return;
				}

				var $news = $(options.newsData);
				var el = $news[0];

				if (!el) {
					return;
				}

				settings.bound = true;

				if (canHover) {
					$news
						.on('mouseenter.ntbFadein', function () {
							settings.hovered = true;
							refreshHold();
						})
						.on('mouseleave.ntbFadein', function () {
							settings.hovered = false;
							refreshHold();
						});
				}
				else if (pauseEnabled) {
					// Touch devices: hold only while the finger is down (no stuck pause).
					var touchOn = function () { settings.touched = true; refreshHold(); };
					var touchOff = function () { settings.touched = false; refreshHold(); };

					el.addEventListener('touchstart', touchOn, { passive: true });
					el.addEventListener('touchend', touchOff, { passive: true });
					el.addEventListener('touchcancel', touchOff, { passive: true });

					// Long-press on a link opens the browser's link menu, which can swallow touchend/touchcancel.
					el.addEventListener('contextmenu', function (e) {
						if (e.target.closest && e.target.closest('a')) {
							touchOff();
						}
					});
				}

				$news
					.on('focusin.ntbFadein', function (e) {
						if (!isKeyboardFocus(e.target)) {
							return;
						}
						settings.focused = true;
						refreshHold();
					})
					.on('focusout.ntbFadein', function () {
						setTimeout(syncFocus, 0);
					});
			}
         
			/* Function to get the size of an Object*/
			function countSize(obj) {
			    var size = 0, key;
			    for (key in obj) {
			        if (obj.hasOwnProperty(key)) size++;
			    }
			    return size;
			};

			/* This function populates news from the array to newsData div */
			function putNews()
			{
				debugError('in News putting :'+settings.count);
				if(settings.clearIntrvl == 1)
				{
					if(settings.interval)
						clearInterval(settings.interval);
						
				}
			
				$(options.newsData).fadeOut('slow',function(){
					var news = settings.newsArr[settings.count].content;
					
					$(options.newsData).html(news).fadeIn('slow');
					settings.count++;
					if (settings.count == countSize(settings.newsArr) ) {
						settings.count = 0;
					}

					// The focused link (if any) was just replaced: re-check keyboard focus.
					if (settings.focused) {
						syncFocus();
					}
				});
				
				if(settings.clearIntrvl == 1)
				{
					if (ntb_anims.autostart_fadein != 1) {
					runIntervals();
					}
				}
			}	
			
			/* This function populates news array from the UL list */
			function populateNews()
			{
				var tagType = $(newsID).get(0).tagName; 
				
				if (tagType != 'UL' ) {
					debugError('Cannot use <' + tagType.toLowerCase() + '> type of element for this plugin - must of type <ul> or <ol>');
					return false;
				}
				
				if($(newsID + ' LI').length > 0) {
					$(newsID + ' LI').each(function (i) {
						// Populating the news array from LI elements
						settings.newsArr[i] = { type: options.titleText, content: $(this).html()};
					});		
				}	
				else {
					debugError('There are no news in UL tag!');
					return false;
				}
				
				if (countSize(settings.newsArr) < 1) {
					debugError('Couldn\'t find any content from the UL news!');
					return false;
				}
				settings.contentLoaded = true;
			}
			
			/* Function for handling debug and error messages */ 
			function debugError(obj) {
				if (options.debugMode) {
					if (window.console && window.console.log) {
						window.console.log(obj);
					}
					else {
						alert(obj);			
					}
				}
			}
        });
    };

    $.fn.newsTicker.config = {
        // set values and custom functions
		interval: intervalFromSettings(),
		newsData: "#ntbne_five",
		prevBtnDiv: ntb_anims.is_ntb_rtl ? "#next-button-ntb" : "#prev-button-ntb",
		nextBtnDiv: ntb_anims.is_ntb_rtl ? "#prev-button-ntb" : "#next-button-ntb",
		playPauseID: "#play-pause",
		effect: "fadeIn",
		debugMode:0
    };
	
	$('#ntbne_five').newsTicker();

})(jQuery);

} else if (ntb_anims.animation === 'Scroll_Up_NTB' && ntb_anims.disable_anim == false) { // +++++++++++++++++++++++++++ Scroll_Up_NTB

	(function ($) {
		var ntb_scr_up = 'news_ticker_benaceur';

		var defaults = {
			max_rows: 3,
			speed: 500,
			duration: 4000,
			direction: 'up',
			autostart: 1,
			pauseOnHover: 1,
			nextButton: null,
			prevButton: null,
			startButton: null,
			stopButton: null,
			hasMoved: function () {},
			movingUp: function () {},
			movingDown: function () {},
			start: function () {},
			stop: function () {},
			pause: function () {},
			unpause: function () {}
		};

		function ntb_Plugin(element, options) {
			this.element = element;
			this.$el = $(element);
			this.options = $.extend({}, defaults, options);
			this._defaults = defaults;
			this._name = ntb_scr_up;

			this.moveInterval = null;
			this.state = 0;
			this.paused = 0;
			this.moving = 0;

			this.hovered = false;
			this.touched = false;
			this.held = false;
			this.pauseEventsBound = false;

			if (this.$el.is('ul')) {
				this.init();
			}
		}

		ntb_Plugin.prototype = {
			init: function () {
				var rowHeight;

				if (ntb_anims.enable_style_mobile) {
					rowHeight = window.innerWidth < ntb_anims.screen_min_width
						? ntb_anims.height_mobile - ntb_anims.bor
						: ntb_anims.height - ntb_anims.bor;
				} else {
					rowHeight = ntb_anims.height - ntb_anims.bor;
				}

				this.$el.height(rowHeight * this.options.max_rows).css({
					overflow: 'hidden'
				});

				this.checkSpeed();

				if (this.options.nextButton) {
					$(this.options.nextButton).click(function (event) {
						event.preventDefault();
						this.moveNext();
						this.resetInterval();
					}.bind(this));
				}

				if (this.options.prevButton) {
					$(this.options.prevButton).click(function (event) {
						event.preventDefault();
						this.movePrev();
						this.resetInterval();
					}.bind(this));
				}

				if (this.options.stopButton && typeof this.options.stopButton[0] !== 'undefined') {
					this.options.stopButton.click(function (event) {
						event.preventDefault();
						this.stop();
					}.bind(this));
				}

				if (this.options.startButton && typeof this.options.startButton[0] !== 'undefined') {
					this.options.startButton.click(function (event) {
						event.preventDefault();
						this.start();
					}.bind(this));
				}

				this.bindPauseEvents();

				if (this.options.autostart) {
					this.start();
				}
			},

			bindPauseEvents: function () {
				if (!this.options.pauseOnHover || this.pauseEventsBound) {
					return;
				}

				var plugin = this;
				var element = this.$el[0];
				var canHover = window.matchMedia
					? window.matchMedia('(hover: hover)').matches
					: true;

				if (!element) {
					return;
				}

				this.pauseEventsBound = true;

				if (canHover) {
					this.$el
						.on('mouseenter.ntbScrollUp', function () {
							plugin.hovered = true;
							plugin.refreshPause();
						})
						.on('mouseleave.ntbScrollUp', function () {
							plugin.hovered = false;
							plugin.refreshPause();
						});
				}

				element.addEventListener('touchstart', function () {
					plugin.touched = true;
					plugin.refreshPause();
				}, { passive: true });

				function releaseTouch(event) {
					if (!event.touches || event.touches.length === 0) {
						plugin.touched = false;
						plugin.refreshPause();
					}
				}

				element.addEventListener('touchend', releaseTouch, { passive: true });
				element.addEventListener('touchcancel', releaseTouch, { passive: true });

				// Android may open the link menu without delivering touchend.
				this.$el.on('contextmenu.ntbScrollUp', function (event) {
					if (
						plugin.touched
						&& event.target.closest
						&& event.target.closest('a')
					) {
						plugin.touched = false;
						plugin.refreshPause();
					}
				});
			},

			refreshPause: function () {
				var shouldPause = this.hovered || this.touched;

				if (shouldPause && !this.held) {
					this.held = true;

					if (this.state) {
						clearInterval(this.moveInterval);
						this.pause();
					}
				} else if (!shouldPause && this.held) {
					this.held = false;

					if (this.state) {
						this.unpause();
						this.resetInterval();
					}
				}
			},

			start: function () {
				if (!this.state) {
					this.state = 1;

					if (this.held) {
						this.pause();
					}

					this.resetInterval();
					this.options.start();
				}
			},

			stop: function () {
				if (this.state) {
					clearInterval(this.moveInterval);
					this.state = 0;
					this.options.stop();
				}
			},

			resetInterval: function () {
				if (this.state) {
					clearInterval(this.moveInterval);

					this.moveInterval = setInterval(function () {
						this.move();
					}.bind(this), this.options.duration);
				}
			},

			move: function () {
				if (!this.paused) {
					this.moveNext();
				}
			},

			moveNext: function () {
				if (this.options.direction === 'down') {
					this.moveDown();
				} else if (this.options.direction === 'up') {
					this.moveUp();
				}
			},

			movePrev: function () {
				if (this.options.direction === 'down') {
					this.moveUp();
				} else if (this.options.direction === 'up') {
					this.moveDown();
				}
			},

			pause: function () {
				if (!this.paused) {
					this.paused = 1;
				}

				this.options.pause();
			},

			unpause: function () {
				if (this.paused) {
					this.paused = 0;
				}

				this.options.unpause();
			},

			moveDown: function () {
				var rowHeight;

				if (ntb_anims.enable_style_mobile) {
					rowHeight = window.innerWidth < ntb_anims.screen_min_width
						? ntb_anims.height_mobile - ntb_anims.bor
						: ntb_anims.height - ntb_anims.bor;
				} else {
					rowHeight = ntb_anims.height - ntb_anims.bor;
				}

				if (this.moving) {
					return;
				}

				this.moving = 1;
				this.options.movingDown();

				this.$el.children('li:last')
					.detach()
					.prependTo(this.$el)
					.css('margin-top', '-' + rowHeight + 'px')
					.animate({
						marginTop: '0px'
					}, this.options.speed, function () {
						this.moving = 0;
						this.options.hasMoved();
					}.bind(this));
			},

			moveUp: function () {
				if (this.moving) {
					return;
				}

				this.moving = 1;
				this.options.movingUp();

				var $firstItem = this.$el.children('li:first');
				var rowHeight;

				if (ntb_anims.enable_style_mobile) {
					rowHeight = window.innerWidth < ntb_anims.screen_min_width
						? ntb_anims.height_mobile - ntb_anims.bor
						: ntb_anims.height - ntb_anims.bor;
				} else {
					rowHeight = ntb_anims.height - ntb_anims.bor;
				}

				$firstItem.animate({
					marginTop: '-' + rowHeight + 'px'
				}, this.options.speed, function () {
					$firstItem
						.detach()
						.css('margin-top', '0')
						.appendTo(this.$el);

					this.moving = 0;
					this.options.hasMoved();
				}.bind(this));
			},

			updateOption: function (key, value) {
				if (typeof this.options[key] !== 'undefined') {
					this.options[key] = value;

					if (key === 'duration' || key === 'speed') {
						this.checkSpeed();
						this.resetInterval();
					}
				}
			},

			getState: function () {
				return this.paused ? 2 : this.state;
			},

			checkSpeed: function () {
				if (this.options.duration < Number(this.options.speed) + 25) {
					this.options.speed = this.options.duration - 25;
				}
			},

			destroy: function () {
				this._destroy();
			}
		};

		$.fn[ntb_scr_up] = function (options) {
			var args = arguments;

			return this.each(function () {
				var $element = $(this);
				var instance = $.data(this, 'plugin_' + ntb_scr_up);
				var optionsObject = typeof options === 'object' && options;

				if (!instance) {
					$element.data(
						'plugin_' + ntb_scr_up,
						instance = new ntb_Plugin(this, optionsObject)
					);
				}

				if (typeof options === 'string') {
					instance[options].apply(
						instance,
						Array.prototype.slice.call(args, 1)
					);
				}
			});
		};

		$('#ntbne_five').news_ticker_benaceur({
			max_rows: 1,
			speed: ntb_anims.speed_slide_up_down,
			duration: ntb_anims.timeout_slide_up_down,
			direction: ntb_anims.updown_slide_up_down === 'up_slide_u_d'
				? 'up'
				: 'down',
			autostart: ntb_anims.autostart_slide_up_down != '' ? 0 : 1,
			pauseOnHover: ntb_anims.pause_slide_up_down != '' ? 1 : 0,
			prevButton: ntb_anims.is_ntb_rtl
				? '#next-button-ntb'
				: '#prev-button-ntb',
			nextButton: ntb_anims.is_ntb_rtl
				? '#prev-button-ntb'
				: '#next-button-ntb'
		});
	})(jQuery);

} else if (ntb_anims.animation === 'ScrollNTB') { // +++++++++++++++++++++++++++ Scroll-H (Scroll horizontally)

(function ($) {
	'use strict';

	function toBool(v) {
		return v === true || v === 1 || v === '1' || v === 'true';
	}

	$(function () {
		if (typeof window.ntb_anims === 'undefined') {
			return;
		}

		var cfg = window.ntb_anims;
		var $bimg = $('.n_t_ntb_bimg');

		// Animation disabled from the plugin settings.
		if (toBool(cfg.disable_anim)) {
			$('.ntb_img_post_t_scrollntb').hide();
			$bimg.css('margin', 'initial').show();
			return;
		}

		$bimg.show();

		var $container = $('#scroll-ntb');
		var $content = $('#scroll-ntb-elem');

		// No items: nothing to animate.
		if (!$container.length || !$content.length) {
			return;
		}

		var el = $content[0];

		// 'right' => starts at the right edge and moves to the left.
		var fromRight = cfg.ori_scr === 'right';

		// Saved speed option: a higher value means slower movement.
		var speed = parseFloat(cfg.speed_scr);
		if (!isFinite(speed) || speed <= 0) {
			speed = 5;
		}

		// Base speed in px/s before applying the viewport scaling factor.
		var basePxPerSec = 1000 / (speed * 4);  // speed 5 => base speed 50px/s
		var REF_WIDTH = 800;   // reference width for viewport scaling
		var MIN_FACTOR = 1.1;  // effective speed is at least 10% above the base speed
		var MAX_FACTOR = 1.6;  // effective speed is at most 60% above the base speed		
		var pxPerSec = basePxPerSec;

		var canHover = window.matchMedia
			? window.matchMedia('(hover: hover)').matches
			: true;
		var pauseOnHover = toBool(cfg.mouse);

		var hovered = false;
		var focused = false;
		var raf = null;
		var last = null;
		var pos = 0;
		var start = 0;
		var end = 0;
		var animatable = false;

		function log() {
			if (window.ntbDebug && window.console) {
				console.log.apply(console, ['[ntb]'].concat([].slice.call(arguments)));
			}
		}

		// Positioning math assumes the content starts at the container's left edge.
		// Force LTR on the container only, and keep the site's text direction on the content.
		var textDir = $container.css('direction');
		$container.css({ overflow: 'hidden', direction: 'ltr' });

		if ($container.css('position') === 'static') {
			$container.css('position', 'relative');
		}

		$content.css({
			position: $content.css('position') === 'static' ? 'relative' : $content.css('position'),
			left: 0,
			right: 'auto',
			display: 'inline-block',
			width: 'max-content',
			whiteSpace: 'nowrap',
			willChange: 'transform',
			direction: textDir
		});

		function setPos(x) {
			pos = x;
			el.style.transform = 'translate3d(' + x + 'px,0,0)';
		}

		function stop() {
			if (raf !== null) {
				cancelAnimationFrame(raf);
				raf = null;
			}
			last = null;
		}

		function tick(ts) {
			if (last !== null) {
				var dt = Math.min(ts - last, 100); // avoid jumps after a background tab
				var step = pxPerSec * dt / 1000;
				var forward = end > start;
				var next = pos + (forward ? step : -step);
				var done = forward ? next >= end : next <= end;

				setPos(done ? start : next);
			}

			last = ts;
			raf = requestAnimationFrame(tick);
		}

		function play() {
			if (raf === null && animatable && !hovered && !focused) {
				raf = requestAnimationFrame(tick);
			}
		}

		function refresh() {
			var cw = $container.innerWidth();
			var tw = Math.max($content.outerWidth(), el.scrollWidth || 0);
			var progress = (end !== start) ? (pos - start) / (end - start) : 0;

			stop();

			// Speed proportional to the container width (continuous, clamped),
			// so the time a word stays visible is roughly the same on any screen.
			pxPerSec = basePxPerSec * Math.max(MIN_FACTOR, Math.min(MAX_FACTOR, (cw || REF_WIDTH) / REF_WIDTH));

			log('refresh', {
				containerWidth: cw,
				contentWidth: tw,
				pxPerSec: Math.round(pxPerSec * 10) / 10
			});

			// Container or content empty / not measurable (no items, or hidden).
			if (!cw || !tw) {
				animatable = false;
				return;
			}

			start = fromRight ? cw : -tw;
			end = fromRight ? -tw : cw;
			animatable = true;

			// Keep the relative position when the size changes (no jump).
			setPos(start + Math.max(0, Math.min(1, progress)) * (end - start));
			play();
		}

		// Hover and focus are tracked separately, so one cannot cancel the other.
		if (pauseOnHover) {
			if (canHover) {
				$container
					.on('mouseenter.ntbScrollNTB', function () {
						hovered = true;
						stop();
					})
					.on('mouseleave.ntbScrollNTB', function () {
						hovered = false;
						play();
					});
			} else {
				// Touch devices: pause only while the finger is down (no stuck pause).
				var touchOn = function () { hovered = true; stop(); };
				var touchOff = function () { hovered = false; play(); };

				$container[0].addEventListener('touchstart', touchOn, { passive: true });
				$container[0].addEventListener('touchend', touchOff, { passive: true });
				$container[0].addEventListener('touchcancel', touchOff, { passive: true });

				// Long-press on a link opens the browser's link menu, which can swallow touchend/touchcancel.
				$container[0].addEventListener('contextmenu', function (e) {
					if (e.target.closest && e.target.closest('a')) {
						touchOff();
					}
				});
			}
		}

		// Only keyboard focus pauses the ticker (not focus left by a touch or a click).
		function isKeyboardFocus(node) {
			try {
				return node.matches(':focus-visible');
			} catch (err) {
				return true; // very old browsers: keep the previous behavior
			}
		}

		$container
			.on('focusin.ntbScrollNTB', function (e) {
				if (!isKeyboardFocus(e.target)) {
					return;
				}
				focused = true;
				stop();
			})
			.on('focusout.ntbScrollNTB', function () {
				setTimeout(function () {
					var active = document.activeElement;

					focused = !!active && $container[0].contains(active) && isKeyboardFocus(active);
					play();
				}, 0);
			});
	
		// Re-measure when the size changes (resize, images, fonts).
		if (window.ResizeObserver) {
			var ro = new ResizeObserver(refresh);
			ro.observe($container[0]);
			ro.observe(el);
		} else {
			$(window).on('resize.ntbScrollNTB load.ntbScrollNTB', refresh);
		}

		refresh();
	});
})(jQuery);

} else if (ntb_anims.animation === 'TickerNTB') { // +++++++++++++++++++++++++++ typing 1

(function($) {
	
	$.fn.ticker = function(options) { //$(settings.dom.revealElem).hide();
		// Extend our default options with those provided.
		// Note that the first arg to extend is an empty object -
		// this is to keep from overriding our "defaults" object.
		var opts = $.extend({}, $.fn.ticker.defaults, options); 

		// check that the passed element is actually in the DOM
		if ($(this).length == 0) {
			if (window.console && window.console.log) {
				window.console.log('Element does not exist in DOM!');
			}
			else {
				alert('Element does not exist in DOM!');		
			}
			return false;
		}
		
		/* Get the id of the UL to get our news content from */
		var newsID = '#' + $(this).attr('id');

		/* Get the tag type - we will check this later to makde sure it is a UL tag */
		var tagType = $(this).get(0).tagName; 	

		return this.each(function() {
			// get a unique id for this ticker
			var uniqID = getUniqID();
			
                var arrData_tp1 = {
					contentID: '#ticker-content-' + uniqID,
					titleID: '#ntb--title-' + uniqID,
					titleElem: '#ntb--title-' + uniqID + ' SPAN',
					tickerID : '#ticker',
					wrapperID: '#ticker-wrapper-' + uniqID,
					revealID: '#ticker-swipe-' + uniqID,
					revealElem: '#ticker-swipe-' + uniqID + ' SPAN',
					controlsID: '#ticker-controls-' + uniqID,
					playPauseID: '#play-pause-' + uniqID
                };
	
		        if(ntb_anims.np_img_no_scr_typ == 'enable') {
		        arrData_tp1.prevID = ntb_anims.is_ntb_rtl ? "#next-button-ntb" : "#prev-button-ntb"; // add to arrData_tp1 array
				arrData_tp1.nextID = ntb_anims.is_ntb_rtl ? "#prev-button-ntb" : "#next-button-ntb"; // add to arrData_tp1 array
		        } else {
		        arrData_tp1.prevID = ''; // add to arrData_tp1 array
				arrData_tp1.nextID = ''; // add to arrData_tp1 array
				}
				
			var pauseOnInteraction = ntb_anims.pause__typing == 1;	
			
			/* Internal vars */
			var settings = {				
				position: 0,
				time: 0,
				distance: 0,
				newsArr: {},
				play: ntb_anims.disable_anim ? false : true,
				paused: false,
				manualPaused: false,
				hovered: false,
				touched: false,
				interactionHeld: false,				
				contentLoaded: false,
				dom: arrData_tp1
			};

			// if we are not using a UL, display an error message and stop any further execution
			if (tagType != 'UL' && tagType != 'OL' && opts.htmlFeed === true) {
				debugError('Cannot use <' + tagType.toLowerCase() + '> type of element for this plugin - must of type <ul> or <ol>');
				return false;
			}

			// set the ticker direction
			opts.direction == 'rtl' ? opts.direction = 'right' : opts.direction = 'left';
			
			// lets go...
			initialisePage();
			/* Function to get the size of an Object*/
			function countSize(obj) {
			    var size = 0, key;
			    for (key in obj) {
			        if (obj.hasOwnProperty(key)) size++;
			    }
			    return size;
			};

			function getUniqID() {
				var newDate = new Date;
				return newDate.getTime();			
			}
			
			/* Function for handling debug and error messages */ 
			function debugError(obj) {
				if (opts.debugMode) {
					if (window.console && window.console.log) {
						window.console.log(obj);
					}
					else {
						alert(obj);			
					}
				}
			}
			
			function refreshInteractionPause() {
				var shouldHold = settings.hovered || settings.touched;

				if (shouldHold && !settings.interactionHeld) {
					settings.interactionHeld = true;

					if (!settings.manualPaused) {
						settings.paused = true;
						pauseTicker();
					}
				} else if (!shouldHold && settings.interactionHeld) {
					settings.interactionHeld = false;

					if (!settings.manualPaused) {
						settings.paused = false;
						restartTicker();
					}
				}
			}

			function bindPauseEvents() {
				if (!pauseOnInteraction) {
					return;
				}

				var $wrapper = $(settings.dom.wrapperID);
				var wrapper = $wrapper[0];

				if (!wrapper) {
					return;
				}

				var canHover = window.matchMedia
					? window.matchMedia('(hover: hover)').matches
					: true;

				if (canHover) {
					$wrapper
						.on('mouseenter.ntbTicker', function () {
							settings.hovered = true;
							refreshInteractionPause();
						})
						.on('mouseleave.ntbTicker', function () {
							settings.hovered = false;
							refreshInteractionPause();
						});
				}

				wrapper.addEventListener('touchstart', function () {
					settings.touched = true;
					refreshInteractionPause();
				}, { passive: true });

				function releaseTouch(event) {
					if (!event.touches || event.touches.length === 0) {
						settings.touched = false;
						refreshInteractionPause();
					}
				}

				wrapper.addEventListener('touchend', releaseTouch, { passive: true });
				wrapper.addEventListener('touchcancel', releaseTouch, { passive: true });

				// Android may open the link menu without delivering touchend.
				$wrapper.on('contextmenu.ntbTicker', function (event) {
					if (
						settings.touched
						&& event.target.closest
						&& event.target.closest('a')
					) {
						settings.touched = false;
						refreshInteractionPause();
					}
				});
			}
			
			pauseTicker(); // Show the first item without its reveal animation.

			if (
				ntb_anims.autostart_typ1 != 1
				&& !settings.manualPaused
				&& !settings.interactionHeld
			) {
				settings.paused = false;
				restartTicker();
			}

			/* Function to setup the page */
			function initialisePage() {
				// process the content for this ticker
				processContent();
				
				// add our HTML structure for the ticker to the DOM
				$(newsID).wrap('<div id="' + settings.dom.wrapperID.replace('#', '') + '"></div>');
				
				// remove any current content inside this ticker
				$(settings.dom.wrapperID).children().remove();
				
				$(settings.dom.wrapperID).append('<div id="' + settings.dom.tickerID.replace('#', '') + '" class="ticker"><p id="' + settings.dom.contentID.replace('#', '') + '" class="ticker-content"></p><div id="' + settings.dom.revealID.replace('#', '') + '" class="ticker-swipe"><span><!-- --></span></div></div>');
				$(settings.dom.wrapperID).removeClass('no-js').addClass('ticker-wrapper has-js ' + opts.direction);
				// hide the ticker
				$(settings.dom.tickerElem + ',' + settings.dom.contentID).hide();
				// add the controls to the DOM if required
				if (opts.controls) {
					// add related events - set functions to run on given event
					$(document).on(
						'click mouseover mousedown mouseout mouseup',
						settings.dom.controlsID,
						function (e) {
							var $control = $(e.target).closest('li.controls');
							var button = $control.attr('id');

							if (!button) {
								return;
							}

							if (e.type === 'click') {
								e.preventDefault();

								switch (button) {
									case settings.dom.prevID.replace('#', ''):
										manualChangeContent('prev');
										break;

									case settings.dom.nextID.replace('#', ''):
										manualChangeContent('next');
										break;

									case settings.dom.playPauseID.replace('#', ''):
										if (!settings.manualPaused) {
											settings.manualPaused = true;
											settings.paused = true;
											$control.addClass('paused');
											pauseTicker();
											} else {
												settings.manualPaused = false;
												$control.removeClass('paused');

												if (settings.interactionHeld) {
													settings.paused = true;
												} else {
													settings.paused = false;
													restartTicker();
												}
											}											
										break;
								}
							} else if (e.type === 'mouseover' && $control.hasClass('controls')) {
								$control.addClass('over');
							} else if (e.type === 'mousedown' && $control.hasClass('controls')) {
								$control.addClass('down');
							} else if (e.type === 'mouseup' && $control.hasClass('controls')) {
								$control.removeClass('down');
							} else if (e.type === 'mouseout' && $control.hasClass('controls')) {
								$control.removeClass('over');
							}
						}
					);

					// add controls HTML to DOM
					$(settings.dom.wrapperID).append('<ul id="' + settings.dom.controlsID.replace('#', '') + '" class="ticker-controls"><li id="' + settings.dom.playPauseID.replace('#', '') + '" class="jnt-play-pause controls"><a href=""><!-- --></a></li><li id="' + settings.dom.prevID.replace('#', '') + '" class="jnt-prev controls"><a href=""><!-- --></a></li><li id="' + settings.dom.nextID.replace('#', '') + '" class="jnt-next controls"><a href=""><!-- --></a></li></ul>');
				}
				
				bindPauseEvents();
				
				// we may have to wait for the ajax call to finish here
				if (!opts.ajaxFeed) {
					setupContentAndTriggerDisplay();
				}
			}

			/* Start to process the content for this ticker */
			function processContent() {
				// check to see if we need to load content
				if (settings.contentLoaded == false) {
					// construct content
					if (opts.ajaxFeed) {
						if (opts.feedType == 'xml') {							
							$.ajax({
								url: opts.feedUrl,
								cache: false,
								dataType: opts.feedType,
								async: true,
								success: function(data){
									count = 0;	
									// get the 'root' node
									for (var a = 0; a < data.childNodes.length; a++) {
										if (data.childNodes[a].nodeName == 'rss') {
											xmlContent = data.childNodes[a];
										}
									}
									// find the channel node
									for (var i = 0; i < xmlContent.childNodes.length; i++) {
										if (xmlContent.childNodes[i].nodeName == 'channel') {
											xmlChannel = xmlContent.childNodes[i];
										}		
									}
									// for each item create a link and add the article title as the link text
									for (var x = 0; x < xmlChannel.childNodes.length; x++) {
										if (xmlChannel.childNodes[x].nodeName == 'item') {
											xmlItems = xmlChannel.childNodes[x];
											var title, link = false;
											for (var y = 0; y < xmlItems.childNodes.length; y++) {
												if (xmlItems.childNodes[y].nodeName == 'title') {      												    
													title = xmlItems.childNodes[y].lastChild.nodeValue;
												}
												else if (xmlItems.childNodes[y].nodeName == 'link') {												    
													link = xmlItems.childNodes[y].lastChild.nodeValue; 
												}
												if ((title !== false && title != '') && link !== false) {
												    settings.newsArr['item-' + count] = { type: opts.titleText, content: '<a href="' + link + '">' + title + '</a>' };
												    count++;												    
													title = false;												    
													link = false;
												}
											}	
										}		
									}			
									// quick check here to see if we actually have any content - log error if not
									if (countSize(settings.newsArr < 1)) {
										debugError('Couldn\'t find any content from the XML feed for the ticker to use!');
										return false;
									}
									settings.contentLoaded = true;
									setupContentAndTriggerDisplay();
								}
							});							
						}
						else {
							debugError('Code Me!');	
						}						
					}
					else if (opts.htmlFeed) { 
						if($(newsID + ' LI').length > 0) {
							$(newsID + ' LI').each(function (i) {
								// maybe this could be one whole object and not an array of objects?
								settings.newsArr['item-' + i] = { type: opts.titleText, content: $(this).html()};
							});		
						}	
						else {
							debugError('Couldn\'t find HTML any content for the ticker to use!');
							return false;
						}
					}
					else {
						debugError('The ticker is set to not use any types of content! Check the settings for the ticker.');
						return false;
					}					
				}			
			}

			function setupContentAndTriggerDisplay() {

				settings.contentLoaded = true;

				// update the ticker content with the correct item
				// insert news content into DOM
				$(settings.dom.titleElem).html(settings.newsArr['item-' + settings.position].type);
				$(settings.dom.contentID).html(settings.newsArr['item-' + settings.position].content);

				// set the next content item to be used - loop round if we are at the end of the content
				if (settings.position == (countSize(settings.newsArr) -1)) {
					settings.position = 0;
				}
				else {		
					settings.position++;
				}			
				
				// start the ticker animation						
				revealContent();		

			}
			
			$(document).ready(NTBresizefunReveal);
			$(window).on('resize',NTBresizefunReveal);
			function NTBresizefunReveal() {

				var sw = $('.news-ticker-ntb').width();
				var swww = sw - ntb_anims.typ1_margin_mobile;
				var scr_typ = ntb_anims.np_img_no_scr_typ == 'enable' ? 54 : 0;
				var scr_typDT = ntb_anims.disable_title != '1' ? ntb_anims.width_title_background : 0;
				var sww = sw - (Number(scr_typDT) + Number(scr_typ) + 5);						
				
			if (ntb_anims.enable_style_mobile == 1) {
			if( window.innerWidth < ntb_anims.screen_min_width ) {
			$(settings.dom.revealID + ',' + settings.dom.revealElem).hide(); // show the first content without animatin (modified)
			$(settings.dom.contentID).css('max-width', swww + 'px');	
			} else {
			$(settings.dom.revealID + ',' + settings.dom.revealElem).hide(); // show the first content without animatin (modified)
			$(settings.dom.contentID).css('max-width', sww + 'px');	
			}
			} else {
			$(settings.dom.revealID + ',' + settings.dom.revealElem).hide(); // show the first content without animatin (modified)
			$(settings.dom.contentID).css('max-width', sww + 'px');	
			}

			}

			// slide back cover or fade in content
			function revealContent() {
						

				distance = $(settings.dom.contentID).width();
				//var distance = measureWidth(settings.dom.contentID);
				time = distance / opts.speed;

				$(settings.dom.contentID).css('opacity', '1');
				if(settings.play) {	

					// get the width of the title element to offset the content and reveal
					var offset = $(settings.dom.titleID).width();

					$(settings.dom.revealID).css(opts.direction, offset + 'px');
					// show the reveal element and start the animation
					if (opts.displayType == 'fade') {
						// fade in effect ticker
						$(settings.dom.revealID).hide(0, function () {
							$(settings.dom.contentID).css(opts.direction, offset + 'px').fadeIn(opts.fadeInSpeed, postReveal);
						});						
					}
					else if (opts.displayType == 'scroll') {
						// to code
					}
					else {
	
						// default bbc scroll effect
						$(settings.dom.revealElem).show(0, function () {
							$(settings.dom.contentID).show();
							// set our animation direction
							animationAction = opts.direction == 'right' ? { marginRight: distance + 'px'} : { marginLeft: distance + 'px' };
							$(settings.dom.revealID).css('margin-' + opts.direction, '0px').delay(0).animate(animationAction, time, 'linear', postReveal);
						});	
						
					}
				}
				else {
					return false;					
				}

			};


			// here we hide the current content and reset the ticker elements to a default state ready for the next ticker item
			function postReveal() {				
				if(settings.play) {

                    if(ntb_anims.autostart_typ1 == 1) {
                    $(settings.dom.revealElem).hide();
					} else {
					// we have to separately fade the content out here to get around an IE bug - needs further investigation
					$(settings.dom.contentID).delay(opts.pauseOnItems).fadeOut(opts.fadeOutSpeed);
					// deal with the rest of the content, prepare the DOM and trigger the next ticker
					if (opts.displayType == 'fade') {
						$(settings.dom.contentID).fadeOut(opts.fadeOutSpeed, function () {
							$(settings.dom.wrapperID)
								.find(settings.dom.revealElem + ',' + settings.dom.contentID)
									.hide()
								.end().find(settings.dom.tickerID + ',' + settings.dom.revealID)
									.show()
								.end().find(settings.dom.tickerID + ',' + settings.dom.revealID)
									.removeAttr('style');								
							setupContentAndTriggerDisplay();						
						});
					}
					else {
						$(settings.dom.revealID).hide(0, function () {
							$(settings.dom.contentID).fadeOut(opts.fadeOutSpeed, function () {
								$(settings.dom.wrapperID)
									.find(settings.dom.revealElem + ',' + settings.dom.contentID)
										.hide()
									.end().find(settings.dom.tickerID + ',' + settings.dom.revealID)
										.show()
									.end().find(settings.dom.tickerID + ',' + settings.dom.revealID)
										.removeAttr('style');								
								setupContentAndTriggerDisplay();						
							});
						});	
					}
					}
				}
				else {
					$(settings.dom.revealElem).hide();
				}
			}

			// pause ticker
			function pauseTicker() {
				settings.play = true;

				var $animatedElements = $(
					settings.dom.tickerID + ','
					+ settings.dom.revealID + ','
					+ settings.dom.titleID + ','
					+ settings.dom.titleElem + ','
					+ settings.dom.revealElem + ','
					+ settings.dom.contentID
				);

				// Stop the current animation and clear queued delays/animations
				// without running their completion callbacks.
				$animatedElements.stop(true, false);

				$(settings.dom.revealID + ',' + settings.dom.revealElem).hide();

				$(settings.dom.wrapperID)
					.find(settings.dom.titleID + ',' + settings.dom.titleElem)
						.show()
					.end()
					.find(settings.dom.contentID)
						.show();
			}

			// play ticker
			function restartTicker() {				
				settings.play = true;
				settings.paused = false;
				// start the ticker again
				postReveal();	
			}

			// change the content on user input
			function manualChangeContent(direction) {
				pauseTicker();
				switch (direction) {
					case 'prev':
						if (settings.position == 0) {
							settings.position = countSize(settings.newsArr) -2;
						}
						else if (settings.position == 1) {
							settings.position = countSize(settings.newsArr) -1;
						}
						else {
							settings.position = settings.position - 2;
						}
						$(settings.dom.titleElem).html(settings.newsArr['item-' + settings.position].type);
						$(settings.dom.contentID).html(settings.newsArr['item-' + settings.position].content);						
						break;
					case 'next':
						$(settings.dom.titleElem).html(settings.newsArr['item-' + settings.position].type);
						$(settings.dom.contentID).html(settings.newsArr['item-' + settings.position].content);
						break;
				}
				// set the next content item to be used - loop round if we are at the end of the content
				if (settings.position == (countSize(settings.newsArr) -1)) {
					settings.position = 0;
				}
				else {		
					settings.position++;
				}
				
				if (!settings.manualPaused && !settings.interactionHeld) {
					settings.paused = false;
					restartTicker();
				}
			}
		});  
		
	}; 
	
	// plugin defaults - added as a property on our plugin function
	$.fn.ticker.defaults = {
		speed: '0.' + ntb_anims.speed_no_scr_typ,			
		ajaxFeed: false,
		feedUrl: '',
		feedType: 'xml',
		displayType: 'reveal',
		htmlFeed: true,
		debugMode: true,
		controls: true,
		titleText: ntb_anims.titletext_tp1,	
		direction: ntb_anims.direction_tp1,	
		pauseOnItems: ntb_anims.pause_on_items_tp1,
		fadeInSpeed: 600,
		fadeOutSpeed: 300
	};	

	// start the ticker 
	$('#ntbne2').ticker();

	// hide the release history when the page loads
	$('#release-wrapper').css('margin-top', '-' + ($('#release-wrapper').height() + 20) + 'px');

	// show/hide the release history on click
	$('a[href="#release-history"]').toggle(function () {	
		$('#release-wrapper').animate({
			marginTop: '0px'
		}, 600, 'linear');
	}, function () {
		$('#release-wrapper').animate({
			marginTop: '-' + ($('#release-wrapper').height() + 20) + 'px'
		}, 600, 'linear');
	});	

					if (ntb_anims.is_ntb_rtl) {
                    $('#prev-button-ntb').prop('title', ntb_anims.next);	
                    $('#next-button-ntb').prop('title', ntb_anims.prev);	
					} else {
                    $('#prev-button-ntb').prop('title', ntb_anims.prev);	
                    $('#next-button-ntb').prop('title', ntb_anims.next);	
					}
	
})(jQuery);

} else if (ntb_anims.is_two == true && ntb_anims.disable_anim == false) { // +++++++++++++++++++++++++++ two

(function($) {
"use strict";

$(document).ready(NTBresizefun1);
$(window).on('resize',NTBresizefun1);
function NTBresizefun1() {
$("#ntbne_five").css({"overflow": "hidden"});
}

// Settings object or Cycle library missing: nothing to configure.
if (typeof window.ntb_anims === 'undefined' || !$.fn.cycle) {
	return;
}

switch (ntb_anims.animation) {
	
    case 'curtainY':

$.fn.cycle.transitions.curtainY = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false,true);
		opts.cssBefore.top = next.cycleH;
		opts.animIn.top = 0;
		opts.animIn.height = next.cycleH;
		opts.animOut.top = curr.cycleH;
		opts.animOut.height = 0;
	});
	opts.cssBefore.height = 0;
	opts.cssBefore[ntb_anims.rtl] = 0;
};
	
        break;
    case 'curtainX':

$.fn.cycle.transitions.curtainX = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true,true);
		opts.animIn[ntb_anims.rtl] = 0;
		opts.animIn.width = this.cycleW;
		opts.animOut[ntb_anims.rtl] = curr.cycleW
		opts.animOut.width = 0;
	});
	opts.cssBefore.top = 0;
	opts.cssBefore.width = 0;
};

        break;
    case 'curtainXRL':

$.fn.cycle.transitions.curtainXRL = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true,true);
		opts.cssBefore[ntb_anims.rtl] = next.cycleW;
		opts.animIn[ntb_anims.rtl] = 0;
		opts.animIn.width = this.cycleW;
		opts.animOut[ntb_anims.rtl] = curr.cycleW
		opts.animOut.width = 0;
	});
	opts.cssBefore.top = 0;
	opts.cssBefore.width = 0;
};
	
        break;
    case 'turnUp':

$.fn.cycle.transitions.turnUp = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.cssBefore.top = next.cycleH;
		opts.animIn.height = next.cycleH;
		opts.animOut.width = next.cycleW;
	});
	opts.cssFirst.top = 0;
	opts.cssBefore.left = 0;
	opts.cssBefore.height = 0;
	opts.animIn.top = 0;
	opts.animOut.height = 0;
};
	
        break;
    case 'turnDown':

$.fn.cycle.transitions.turnDown = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.animIn.height = next.cycleH;
		opts.animOut.top   = curr.cycleH;
	});
	opts.cssFirst.top = 0;
	opts.cssBefore.left = 0;
	opts.cssBefore.top = 0;
	opts.cssBefore.height = 0;
	opts.animOut.height = 0;
};
		
        break;
    case 'turnLeft':
	
$.fn.cycle.transitions.turnLeft = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = next.cycleW : opts.cssBefore.left = next.cycleW;
		cssBeforeO;
		opts.animIn.width = next.cycleW;
	});
	
		var animO = ntb_anims.isrtl ? opts.animIn.right = 0 : opts.animIn.left = 0;
	opts.cssBefore.top = 0;
	opts.cssBefore.width = 0;
	animO;
	opts.animOut.width = 0;
};
		
        break;
    case 'turnRight':

$.fn.cycle.transitions.turnRight = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.animIn.width = next.cycleW;
		var animOutO = ntb_anims.isrtl ? opts.animOut.right = next.cycleW : opts.animOut.left = next.cycleW;
		animOutO;
	});
	
	var animO = ntb_anims.isrtl ? opts.animIn.right = 0 : opts.animIn.left = 0;
		var arrData = { top: 0, width: 0 };
		if (ntb_anims.isrtl) {
		arrData.right = 0; 
		} else {
		arrData.left = 0;	
		}
	$.extend(opts.cssBefore, arrData);
	animO;
	opts.animOut.width = 0;
};
	
        break;
    case 'slideY':

$.fn.cycle.transitions.slideY = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$(opts.elements).not(curr).hide();
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.animIn.height = next.cycleH;
	});
	opts.cssBefore.left = 0;
	opts.cssBefore.top = 0;
	opts.cssBefore.height = 0;
	opts.animIn.height = 'show';
	opts.animOut.height = 0;
};
	
        break;
    case 'slideX':

$.fn.cycle.transitions.slideX = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$(opts.elements).not(curr).hide();
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.animIn.width = next.cycleW;
	});
	
	var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = 0 : opts.cssBefore.left = 0;
	cssBeforeO;
	opts.cssBefore.top = 0;
	opts.cssBefore.width = 0;
	opts.animIn.width = 'show';
	opts.animOut.width = 0;
};
	
        break;
    case 'growX':

$.fn.cycle.transitions.growX = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.cssBefore.left = this.cycleW/2;
		opts.animIn.left = 0;
		opts.animIn.width = this.cycleW;
		opts.animOut.left = 0;
	});
	opts.cssBefore.top = 0;
	opts.cssBefore.width = 0;
};
	
        break;
    case 'growY':

$.fn.cycle.transitions.growY = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.cssBefore.top = this.cycleH/2;
		opts.animIn.top = 0;
		opts.animIn.height = this.cycleH;
		opts.animOut.top = 0;
	});
	opts.cssBefore.height = 0;
	opts.cssBefore.left = 0;
};
	
        break;
    case 'scrollLeft':

$.fn.cycle.transitions.scrollLeft = function($cont, $slides, opts) {
    $cont.css({'z-index': '1'});
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push($.fn.cycle.commonReset);
	var w = $cont.width();
	var cssFirstO = ntb_anims.isrtl ? opts.cssFirst.right = 0 : opts.cssFirst.left = 0;
	var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = w : opts.cssBefore.left = w;
	var animInO = ntb_anims.isrtl ? opts.animIn.right = 0 : opts.animIn.left = 0;
	var animOutO = ntb_anims.isrtl ? opts.animOut.right = 0-w : opts.animOut.left = 0-w;
	
	cssFirstO;
	cssBeforeO;
	opts.cssBefore.top = 0;
	animInO;
	animOutO;
};
		
        break;
    case 'scrollRight':

$.fn.cycle.transitions.scrollRight = function($cont, $slides, opts) {
	$cont.css({'overflow': 'hidden'});
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push($.fn.cycle.commonReset);
	var w = $cont.width();
	var cssFirstO = ntb_anims.isrtl ? opts.cssFirst.right = 0 : opts.cssFirst.left = 0;
	var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = -w : opts.cssBefore.left = -w;
	var animInO = ntb_anims.isrtl ? opts.animIn.right = 0 : opts.animIn.left = 0;
	var animOutO = ntb_anims.isrtl ? opts.animOut.right = w : opts.animOut.left = w;
	
	cssFirstO;
	cssBeforeO;
	opts.cssBefore.top = 0;
	animInO;
	animOutO;
};
	
        break;
    case 'fadeUp':

$.fn.cycle.transitions.fadeUp = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,false);
		var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = next.cycleW/2 : opts.cssBefore.left = next.cycleW/2;
		cssBeforeO;
		opts.cssBefore.top = next.cycleH;
		var arrData = { top: 0, width: next.cycleW, height: next.cycleH };
		if (ntb_anims.isrtl) {
		arrData.right = 0; 
		} else {
		arrData.left = 0;	
		}
		$.extend(opts.animIn, arrData);
	});
	opts.cssBefore.width = 0;
	opts.cssBefore.height = 0;
	opts.animOut.opacity = 0;
};
		
        break;
    case 'fadeLR':

$.fn.cycle.transitions.fadeLR = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,false);
		var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = next.cycleW : opts.cssBefore.left = next.cycleW;
		cssBeforeO;
		opts.cssBefore.top = next.cycleH;
		var arrData = { top: 0, width: next.cycleW, height: next.cycleH };
		if (ntb_anims.isrtl) {
		arrData.right = 0; 
		} else {
		arrData.left = 0;	
		}
		$.extend(opts.animIn, arrData);
	});
	opts.cssBefore.width = 0;
	opts.cssBefore.height = 0;
	opts.animOut.opacity = 0;
};
	
        break;
    case 'fadeZoom':

$.fn.cycle.transitions.fadeZoom = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,false);
		var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = next.cycleW/2 : opts.cssBefore.left = next.cycleW/2;
		cssBeforeO;
		opts.cssBefore.top = next.cycleH/2;
		var arrData = { top: 0, width: next.cycleW, height: next.cycleH };
		if (ntb_anims.isrtl) {
		arrData.right = 0; 
		} else {
		arrData.left = 0;	
		}
		$.extend(opts.animIn, arrData);
	});
	opts.cssBefore.width = 0;
	opts.cssBefore.height = 0;
	opts.animOut.opacity = 0;
};
		
        break;
    case 'zoom':

$.fn.cycle.transitions.zoom = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,false,true);
		opts.cssBefore.top = next.cycleH/2;
		var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = next.cycleW/2 : opts.cssBefore.left = next.cycleW/2;
		cssBeforeO;
		
		var arrData1 = { top: 0, width: next.cycleW, height: next.cycleH };
		if (ntb_anims.isrtl) {
		arrData1.right = 0; 
		} else {
		arrData1.left = 0;	
		}
		
		var arrData2 = { width: 0, height: 0, top: curr.cycleH/2 };
		if (ntb_anims.isrtl) {
		arrData2.right = curr.cycleW/2; 
		} else {
		arrData2.left = curr.cycleW/2;	
		}
		
		$.extend(opts.animIn, arrData1);
		$.extend(opts.animOut, arrData2);
	});
	opts.cssFirst.top = 0;
	var cssFirstO = ntb_anims.isrtl ? opts.cssFirst.right = 0 : opts.cssFirst.left = 0;
	cssFirstO;
	opts.cssBefore.width = 0;
	opts.cssBefore.height = 0;
};
		
        break;
    case 'shuffle':

$.fn.cycle.transitions.shuffle = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	var i, w = $cont.css('overflow', 'visible').width();
	$slides.css({left: 0, top: 0});
	opts.before.push(function(curr,next,opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,true,true);
	});
	// only adjust speed once!
	if (!opts.speedAdjusted) {
		opts.speed = opts.speed / 2; // shuffle has 2 transitions
		opts.speedAdjusted = true;
	}
	opts.random = 0;
	opts.shuffle = opts.shuffle || {left:0, top:15};
	opts.els = [];
	for (i=0; i < $slides.length; i++)
		opts.els.push($slides[i]);

	for (i=0; i < opts.currSlide; i++)
		opts.els.push(opts.els.shift());

	// custom transition fn (hat tip to Benjamin Sterling for this bit of sweetness!)
	opts.fxFn = function(curr, next, opts, cb, fwd) {
		if (opts.rev)
			fwd = !fwd;
		var $el = fwd ? $(curr) : $(next);
		$(next).css(opts.cssBefore);
		var count = opts.slideCount;
		$el.animate(opts.shuffle, opts.speedIn, opts.easeIn, function() {
			var hops = $.fn.cycle.hopsFromLast(opts, fwd);
			for (var k=0; k < hops; k++) {
				if (fwd)
					opts.els.push(opts.els.shift());
				else
					opts.els.unshift(opts.els.pop());
			}
			if (fwd) {
				for (var i=0, len=opts.els.length; i < len; i++)
					$(opts.els[i]).css('z-index', len-i+count);
			}
			else {
				var z = $(curr).css('z-index');
				$el.css('z-index', parseInt(z,10)+1+count);
			}
			$el.animate({left:0, top:0}, opts.speedOut, opts.easeOut, function() {
				$(fwd ? this : curr).hide();
				if (cb) cb();
			});
		});
	};
	$.extend(opts.cssBefore, { display: 'block', opacity: 1, top: 0, left: 0 });
};

        break;
    case 'toss':

$.fn.cycle.transitions.toss = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	var w = $cont.css('overflow','visible').width();
	var h = $cont.height();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,true,true);
		// provide default toss settings if animOut not provided
		if (!opts.animOut.left && !opts.animOut.top)
			$.extend(opts.animOut, { left: 0, top: 0, opacity: 0 });
		else
			opts.animOut.opacity = 0;
	});
	opts.cssBefore.left = 0;
	opts.cssBefore.top = 0;
	opts.animIn.left = 0;
};
		
        break;
    case 'blindZ':

$.fn.cycle.transitions.blindZ = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	var h = $cont.css('overflow','hidden').height();
	var w = $cont.width();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts);
		opts.animIn.height = next.cycleH;
		opts.animOut.top   = curr.cycleH;
	});
	
	var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = w : opts.cssBefore.left = w;
	var animInO = ntb_anims.isrtl ? opts.animIn.right = 0 : opts.animIn.left = 0;
	var animOutO = ntb_anims.isrtl ? opts.animOut.right = w : opts.animOut.left = w;
	
	opts.cssBefore.top = h;
	cssBeforeO;
	opts.animIn.top = 0;
	animInO;
	opts.animOut.top = h;
	animOutO;
};
	
        break;
    case 'uncover':

$.fn.cycle.transitions.uncover = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	var w = $cont.css('z-index','1').width();
	var h = $cont.height();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,true,true);
		    var animOutO = ntb_anims.isrtl ? opts.animOut.right = -w : opts.animOut.left = -w;
			animOutO;
	});
	
	var animInO = ntb_anims.isrtl ? opts.animIn.right = 0 : opts.animIn.left = 0;
	var cssBeforeO = ntb_anims.isrtl ? opts.cssBefore.right = 0 : opts.cssBefore.left = 0;
	
	opts.animIn.top = 0;
	opts.cssBefore.top = 0;
	animInO;
	cssBeforeO;
};
	
        break;
    case 'simple':

$.fn.cycle.transitions.simple = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.fxFn = function(curr,next,opts,after){
		$(next).show();
		$(curr).hide();
		after();
	};
};

        break;
    case 'typing_2':

$.fn.cycle.transitions.typing_2 = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$(opts.elements).not(curr).hide();
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.animIn.width = next.cycleW;
	});
	opts.cssBefore.top = 0;
	opts.cssBefore.width = 0;
	opts.animIn.width = 'show';
};

        break;
    default:

$.fn.cycle.transitions.slideY = function($cont, $slides, opts) {
	$slides.css(ntb_anims.rtl , "0px");
	opts.before.push(function(curr, next, opts) {
		$(opts.elements).not(curr).hide();
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.animIn.height = next.cycleH;
	});
	opts.cssBefore.left = 0;
	opts.cssBefore.top = 0;
	opts.cssBefore.height = 0;
	opts.animIn.height = 'show';
	opts.animOut.height = 0;
};

}

})(jQuery);

(function($) {
	'use strict';

	// Settings object or Cycle library missing: nothing to run.
	if (typeof window.ntb_anims === 'undefined' || !$.fn.cycle) {
		return;
	}

	var sPlus = 0;
	var tPlus = 0;

	if (ntb_anims.animation === 'typing_2') {
		sPlus = 4000;
		tPlus = 2000;
	}

	var nextt;
	var prevv;

	if (ntb_anims.is_ntb_rtl) {
		nextt = '#prev-button-ntb';
		prevv = '#next-button-ntb';
	} else {
		nextt = '#next-button-ntb';
		prevv = '#prev-button-ntb';
	}

	var timeoutt = ntb_anims.autostart_animtwo ? 0 : ntb_anims.timeout_anms_two;

	// Same meaning as before: any truthy value enables pause.
	var pauseOpt = ntb_anims.pause_anms_two ? 1 : 0;

	var canHover = window.matchMedia
		? window.matchMedia('(hover: hover)').matches
		: true;

	// Invalid values fall back to Cycle's own defaults instead of NaN.
	function num(value, fallback) {
		var n = Number(value);
		return isFinite(n) ? n : fallback;
	}

	var arrData = {
		speed: num(ntb_anims.speed_anms_two, 1000) + sPlus,
		timeout: num(timeoutt, 4000) + tPlus,
		height: '100%',
		fx: $.isFunction($.fn.cycle.transitions[ntb_anims.animation]) ? ntb_anims.animation : 'slideY',
		// Touch devices: Cycle's hover pause would stay stuck after a tap, so it is handled below.
		pause: (pauseOpt && canHover) ? 1 : 0,
		containerResize: true,
		next: nextt,
		prev: prevv,
		fit: 1,
		width: '100%'
	};

	if (ntb_anims.anim_two__if != true) {
		arrData.sync = 0; // add to arrData array
	}

	// Wait for the DOM, so this works wherever the script is printed.
	$(function () {
		var $s = $('#ntbne_five');

		if (!$s.length) {
			return;
		}

		$s.cycle(arrData);

		/* ---- Pause handling: hover, touch and keyboard focus are tracked separately ---- */

		var el = $s[0];
		var hovered = false;
		var touched = false;
		var focused = false;

		function sync() {
			if (touched || focused) {
				$s.cycle('pause');
			} else if (!hovered) {
				$s.cycle('resume');
			}
		}

		// Only keyboard focus pauses the slideshow (not focus left by a touch or a click).
		function isKeyboardFocus(node) {
			try {
				return node.matches(':focus-visible');
			} catch (err) {
				return true; // very old browsers: keep the previous behavior
			}
		}

		if (pauseOpt) {
			if (canHover) {
				// Cycle pauses on hover by itself; this only keeps track of it.
				$s
					.on('mouseenter.ntbAnimTwo', function () {
						hovered = true;
					})
					.on('mouseleave.ntbAnimTwo', function () {
						hovered = false;
						// Cycle resumes first; pause again if keyboard focus is still inside.
						setTimeout(sync, 0);
					});
			} else {
				// Touch devices: pause only while the finger is down (no stuck pause).
				var touchOn = function () { touched = true; sync(); };
				var touchOff = function () { touched = false; sync(); };

				el.addEventListener('touchstart', touchOn, { passive: true });
				el.addEventListener('touchend', touchOff, { passive: true });
				el.addEventListener('touchcancel', touchOff, { passive: true });

				// Long-press on a link opens the browser's link menu, which can swallow touchend/touchcancel.
				el.addEventListener('contextmenu', function (e) {
					if (e.target.closest && e.target.closest('a')) {
						touchOff();
					}
				});
			}
		}

		$s
			.on('focusin.ntbAnimTwo', function (e) {
				if (!isKeyboardFocus(e.target)) {
					return;
				}
				focused = true;
				sync();
			})
			.on('focusout.ntbAnimTwo', function () {
				setTimeout(function () {
					var active = document.activeElement;

					focused = !!active && el.contains(active) && isKeyboardFocus(active);
					sync();
				}, 0);
			});
	});

})(jQuery);

}

// h f
(function($) {
	'use strict';

	var layoutQueued = false;

	function NTBresizefunAll() {
		// Settings object missing: nothing to lay out.
		if (typeof window.ntb_anims === 'undefined') {
			return;
		}

		var a = window.ntb_anims;

		// Mobile values apply only when the option is on and the window is narrower than the minimum width.
		// Number() keeps the old `== 1` meaning (values arrive as strings from wp_localize_script).
		var mobile = Number(a.enable_style_mobile) === 1 && window.innerWidth < a.screen_min_width;

		var boxHeight = mobile ? a.height_mobile : a.height;
		var lineHeight = mobile ? a.line_height_mobile : a.line_height;

		// Prev/next buttons: mobile uses the line height, desktop uses the box height (kept exactly as before).
		var buttonLine = mobile ? a.line_height_mobile : a.height;

		$(".news-ticker-ntb #ticker p").css({ "line-height": (lineHeight - a.bor_ticker) + "px" });
		$(".ticker-swipe,#ticker").css({ "height": (boxHeight - a.bor__) + "px", "line-height": (lineHeight - a.bor_ticker) + "px" });
		$("#ntbne_five li,#ntbne_five").css({ "height": (boxHeight - a.bor_) + "px", "line-height": (lineHeight - a.bor_li) + "px" });
		$("#scroll-ntb").css({ "height": (boxHeight - a.bor_) + "px", "line-height": (lineHeight - a.bor_scroll) + "px" });
		$("#next-button-ntb,#prev-button-ntb").css({ "line-height": (buttonLine - a.bor__pn) + "px" });
	}

	// At most once per frame while the window is being resized.
	function queueLayout() {
		if (layoutQueued) {
			return;
		}
		layoutQueued = true;

		var run = function () {
			layoutQueued = false;
			NTBresizefunAll();
		};

		if (window.requestAnimationFrame) {
			window.requestAnimationFrame(run);
		} else {
			run();
		}
	}

	$(document).ready(NTBresizefunAll);
	$(window).on('resize.ntbLayout', queueLayout);

	$(function () {
		$("#ntbne_five, #ticker p").css({ "display": "block" });
		$(".ticker-swipe span").css({ "display": "none" });
	});	
})(jQuery);

(function($) {
	'use strict';

	if (typeof window.ntb_anims === 'undefined' || !window.ntb_anims.top_600) {
		return;
	}

	var isFixed = false;
	var queued = false;

	function update() {
		queued = false;

		// The admin bar is printed after the scripts, so it is looked up here, not at load.
		var height = $('#wpadminbar').outerHeight();
		var shouldFix = $(window).scrollTop() > height;

		// Touch the DOM only when the state changes.
		if (shouldFix === isFixed) {
			return;
		}

		isFixed = shouldFix;
		$('.n_t_ntb_b, .news-ticker-ntb').toggleClass('fixed_news_ticker_600_ntb', shouldFix);
	}

	$(window).on('scroll.ntbTop600', function () {
		if (queued) {
			return;
		}
		queued = true;

		if (window.requestAnimationFrame) {
			window.requestAnimationFrame(update);
		} else {
			update();
		}
	});
})(jQuery);
// h f
	
	if (ntb_anims.arr_s_script) {
	console.log(eval(ntb_anims.s_script));
	}