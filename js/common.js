
/* readyEvent
------------------------------------------------------------------------*/

$(function(){
  $('.effect div, .effect i').css("opacity","0");
  $(window).scroll(function (){
    $(".effect").each(function(){
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/10){
        $("div",this).css("opacity","1" );
      } else {
        $("div",this).css("opacity","0" );
      }
    });
  });

	//pagetop
	$(".pagetop").hide();

	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 100) {
			$('.pagetop').slideDown("normal");
		} else {
			$('.pagetop').slideUp("normal");
		}

		scrollHeight = $(document).height();
		scrollPosition = $(window).height() + $(window).scrollTop();
		//　ウィンドウの高さ+スクロールした高さ→　現在のトップからの位置
		footHeight = $("footer").innerHeight();

		if ( scrollHeight - scrollPosition  <= footHeight ) {
			$(".pagetop").css({
				"position":"fixed",
				"bottom": footHeight
			});
		} else {
			$(".pagetop").css({
				"position":"fixed",
				"bottom": "20px"
			});
		}
	});

	// トップへスムーススクロール
	$('.pagetop a').click(function () {
			$('body,html').animate({
			scrollTop: 0
			}, 500);
			return false;
	 });

	 jQuery('a[href^=#]').click(function() {
			var speed = 400;
			var href= jQuery(this).attr("href");
			var target = jQuery(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top;
			jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
			return false;
	 });

	 $('.boxLink').click(function() {
		 window.location = $(this).find('a').attr('href');
		 return false;
	 });

	 //ハンバーガーメニュー
	 $(".drawer").drawer();

	//active設定
	$(window).bind("load", function(){
	  if(document.URL.match("/searc/")) {
			$(".nav_header_main ul li:nth-child(1) a").addClass("active");
	  }
		if(document.URL.match("/function/")) {
			$(".nav_header_main ul li:nth-child(2) a").addClass("active");
		}
		if(document.URL.match("/price/")) {
			$(".nav_header_main ul li:nth-child(3) a").addClass("active");
		}
		if(document.URL.match("/cases/")) {
			$(".nav_header_main ul li:nth-child(4) a").addClass("active");
		}
		if(document.URL.match("/faq/")) {
			$(".nav_header_main ul li:nth-child(5) a").addClass("active");
		}
		if(document.URL.match("/advantage/")) {
			$(".nav_header_main ul li:nth-child(6) a").addClass("active");
		}
	});

	var $win = $(window),
	    $header = $('header'),
	    headerHeight = $header.outerHeight(),
	    startPos = 0;

	$win.on('load scroll', function() {
		var value = $(this).scrollTop();
		if ( value > startPos && value > headerHeight ) {
			$header.css('top', '-' + headerHeight + 'px');
		} else {
			$header.css('top', '0');
		}
		startPos = value;
	});

});

$(window).on('load', function () {
  var $body = $('body'),
      $navTypeA = $('#nav_main'),
      navTypeAOffsetTop = $navTypeA.offset().top;

  $(window).on('scroll', function () {
    if($(this).scrollTop() > navTypeAOffsetTop) {
      $body.addClass('is-fixed');
    } else {
      $body.removeClass('is-fixed');
    }
  });

	var menuHeight = $(".wrp_header_sub").height();
	var startPos = 0;
	$(window).scroll(function(){
	  var currentPos = $(this).scrollTop();
	  if (currentPos > startPos) {
	    if($(window).scrollTop() >= 200) {
	      $(".wrp_header_sub").css("top", "-" + menuHeight + "px");
				$(".drawer-toggle").css("top", "-" + menuHeight + "px");
	    }
	  } else {
	    $(".wrp_header_sub").css("top", 0 + "px");
			$(".drawer-toggle").css("top", 0 + "px");
	  }
	  startPos = currentPos;
	});

	$(".accordion").on("click",function(){
		$(this).next().slideToggle("fast");
		$(this).toggleClass("clicked");
	});

	$("input[type='radio']").change(function(){
			if($(this).is(":checked")){
					$('.radio_bg').removeClass("radio_on");
					$(this).parent().addClass("radio_on");
			}
	});
});
