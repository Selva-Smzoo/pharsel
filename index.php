<?php $page = 'top'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>
<link href="./css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">
<link href="./js/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
<link href="./js/textillate-master/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
<script type="text/javascript" src="./js/jquery-bgswitcher-master/jquery.bgswitcher.js"></script>
<script type="text/javascript" src="./js/heightLine/jquery.heightLine.js"></script>
<script type="text/javascript" src="./js/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="./js/textillate-master/jquery.lettering.js"></script>
<script type="text/javascript" src="./js/textillate-master/jquery.fittext.js"></script>
<script type="text/javascript" src="./js/textillate-master/jquery.textillate.js"></script>

<script>
// readyEvent
$(function(){
	$w.on({
		//load
		'load' : function(){
			//fontFlex
			$('.tl_fv').fontFlex(50, 50, 90);

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

			function currentCheck() {
				var windowScrolltop = $(window).scrollTop();
				for (var i = 0; i < contentsArr.length; i++) {
					if(contentsArr[i][0] <= windowScrolltop && contentsArr[i][1] >= windowScrolltop) {
						navLink.removeClass('current');
						navLink.eq(i).addClass('current');
						i == contentsArr.length;
					}
				};
			}

			$(window).on('load scroll', function() {
					currentCheck();
			});

			$("#fv").bgswitcher({
				images: [
				"images/top_bg_fv.jpg",
				"images/top_bg_fv2.jpg",
				"images/top_bg_fv.jpg"
				],
				effect: "fade",
				easing: "swing",
				interval: 4000,
				duration: 3000,
				loop: true
			});

			setTimeout(function(){
				$('.tlt').css('opacity', '1');
			},1000);
			$('.tlt').textillate();

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

			$('.wrap_demo .txt_baloon').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
				if(isInView){
					$(this).stop().addClass('bounce');
				}
				else{
					$(this).stop().removeClass('bounce');
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
});

$(document).ready(function(){
	//機能紹介スライド
	$('.bxslider01').bxSlider({
	pager:false,
	auto: true,
	infiniteLoop: true,
	nextSelector: '#NextIcon',
	prevSelector: '#PrevIcon',
	controls:true,
	nextText: '',
	prevText: '',
	});

	//事例スライド
	$('.bxslider10').bxSlider({
	auto: true,
	infiniteLoop: true,
	nextSelector: '#NextIcon1',
	prevSelector: '#PrevIcon1',
	controls:true,
	nextText: '',
	prevText: '',
	pager:true,
	pagerCustom: '#bx-pager'
	});

	//サムネイル
	$('.bxslider11').bxSlider({
	pager:false,
	minSlides: 3,
	maxSlides: 3,
	infiniteLoop: true,
	auto: true,
	slideMargin: 10
	});
});
</script>

</head>

<body id="<?php echo $page; ?>">
	<?php include "./templates/header.php"; ?>
<div id="wrapper">
	<div id="fv">
		fv
	</div>

	<section id="aa">
		contents
	</section>

	<?php include "./templates/footer.php"; ?>
</div>
</body>
</html>
