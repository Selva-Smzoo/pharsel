
$(function(){
	$w.on({
		'load' : function(){
			//fontFlex
			// $('.tl_fv').fontFlex(48, 59, 90);

			var navLink = $('.nav_page_view li a');
			var contentsArr = new Array();
			for (var i = 0; i < navLink.length; i++) {
				var targetContents = navLink.eq(i).attr('href');
				if(targetContents.charAt(0) == '#') {
					var targetContentsTop = $(targetContents).offset().top;
					var targetContentsBottom = targetContentsTop + $(targetContents).outerHeight(true) - 1;
					contentsArr[i] = [targetContentsTop - 40, targetContentsBottom]
				}
			};

			// var $el = $("#fv").bgswitcher({
			//   images: [
			// 		"images/top/top_bg_fv1.jpg", "images/top/top_bg_fv1.jpg", "images/top/top_bg_fv1.jpg"
			// 	],
			// 	effect: "fade",
			// 	easing: "swing",
			// 	interval: 4000,
			// 	duration: 3000,
			// 	loop: true
			// });

			$("button.btn1").on("click", function() {
			  $el.bgswitcher("select", 0);
			});
			$("button.btn2").on("click", function() {
			  $el.bgswitcher("select", 1);
			});
			$("button.btn3").on("click", function() {
			  $el.bgswitcher("select", 0);
			});

			//animation
			$('#feature .box_3colum').on('inview', function(event, isInView) {
				if (isInView) {
					$(this).addClass('bounceIn');
				} else {
					$(this).removeClass('bounceIn');
				}
			});

			$('.wrap_img_sample, article#feature').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
				if(isInView){
					$(this).stop().addClass('move_above');
				}
				else{
					$(this).stop().removeClass('move_above');
				}
			});

			$('.box_liquid').imgLiquid();

			$('.boxLink').click(function(e){
				if ($(this).find("a").attr('href').indexOf('http') == -1 ) {
				scrollToElement($(this).find("a").attr('href'));
			}
			});
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

	$('.box_ex.popular').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
		location.href = "<?php echo location; ?>popular/";
	});
	$('.box_ex.recommend').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
		location.href = "<?php echo location; ?>recommend/";
	});
	$('.box_ex.recent').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
		location.href = "<?php echo location; ?>recent/";
	});
});
