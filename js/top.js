
/* readyEvent
------------------------------------------------------------------------*/

var	speed = 950,
	easing = 'easeOutQuint';

$(function(){

	$w.on({
		//load
		'load' : function(){
			var targetOffset = $('#contents').offset().top;
			$('html,body').delay(1750).animate({scrollTop: targetOffset}, speed,easing);

		},
		//scroll
		'scroll' : function(){

		}
	}).superResize({
		//resize
		resizeAfter : function(){

		}
	}).firstLoad({
		//firstLoad
		pc_tab : function(){

		},
		sp : function(){

		}
	});
});
