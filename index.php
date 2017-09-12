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
			
			var $el = $("#fv").bgswitcher({
			  images: [
					"images/top/top_bg_fv1.jpg", "images/top/top_bg_fv2.jpg", "images/top/top_bg_fv1.jpg"
				],
				effect: "fade",
				easing: "swing",
				interval: 4000,
				duration: 3000,
				loop: true
			});
			$("button.btn1").on("click", function() {
			  $el.bgswitcher("select", 0);
			});
			$("button.btn2").on("click", function() {
			  $el.bgswitcher("select", 1);
			});
			$("button.btn3").on("click", function() {
			  $el.bgswitcher("select", 0);
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

</script>


</head>

<body id="<?php echo $page; ?>">
	<?php /* include "./templates/header.php"; */ ?>
<div id="wrapper">
	<nav id="nav_main">
		<ul class="cf">
			<li><a href="<?php echo location; ?>search/"><span>求人検索</span></a></li>
			<li><a href="<?php echo location; ?>interview/"><span>インタビュー</span></a></li>
			<li><a href="<?php echo location; ?>contents/"><span>スペシャルコンテンツ</span></a></li>
			<li><a href="<?php echo location; ?>entry/"><span>会員登録</span></a></li>
			<li><a href="<?php echo location; ?>login/"><span>ログイン</span></a></li>
		</ul>
	</nav>
	<div id="fv">
		<header>
			<nav id="nav_sub">
				<div class="inner_nav_sub cf">
					<h1>薬剤師のための求人サイト ファーセル</h1>
					<ul class="cf">
						<li><a href="<?php echo location; ?>rule/">利用規約</a></li>
						<li><a href="<?php echo location; ?>privacy/">プライバシーポリシー</a></li>
						<li><a href="<?php echo location; ?>company/">運営会社</a></li>
						<li><a href="<?php echo location; ?>offer/">求人掲載のお申込み</a></li>
					</ul>
				</div>
			</nav>
		</header>
		
		<div class="inner_fv cf">
			<p class="logo_fv"><a href="<?php echo location; ?>"><img src="./images/common/logo_pharsel.png" alt="ファーセル" height="47"></a></p>
			
			<ul class="sns_fv cf">
				<li><a href="#"><img src="./images/common/ic_footer_facebook.png" alt="facebook" width="50" height="50"></a></li>
				<li><a href="#"><img src="./images/common/ic_footer_twitter.png" alt="twitter" width="50" height="50"></a></li>
			</ul>
			
			<div class="wrp_box_fv">
				<div class="wrp_box_txt">
					<h2 class="font_min tl_fv">
						<span class="kana">ファーセル</span>を使って、<br>
						<span class="kana">スマート</span>転職
					</h2>
					<ul class="pager_fv">
						<button type="button" name="0" class="btn1"></button>
						<button type="button" name="1" class="btn2"></button>
						<button type="button" name="2" class="btn3"></button>
					</ul>
				</div>
				<!-- 検索ボックス -->
				<div class="wrp_search_box">
					<div class="search_box_top">
						<h3><img src="./images/common/tl_serchbox.png" alt="仕事を探す" height="21"></h3>
					</div>
					<div class="search_box_bototm">
						aa
					</div>
				</div>
			</div>
			

		</div>
	</div>

	<section id="aa">
		contents
	</section>

	<?php include "./templates/footer.php"; ?>
</div>
</body>
</html>
