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
	<section id="fv">
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
						<img src="./images/top/tl_fv.png" alt="ファーセルを使ってスマート転職" width="600" class="img_tl_fv">
						<!-- <span class="kana">ファーセル</span>を使って、<br>
						<span class="kana">スマート</span>転職 -->
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
					<!-- <p class="ic_more"><img src="./images/common/ic_more.png" alt="more"></p> -->
					<p class="buttom_more"></p>
				</div>
			</div>


		</div>
	</section>

	<section id="sec_new">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_new">

					<h3 class="tl_ic"><img src="./images/common/ic_new.png" class="ic_large"><span>注目の新着求人</span><!--<img src="./images/top/tl_new.png" alt="注目の新着求人" height="27">--></h3>
					<div class="wrp_box_ex cf">
						<article class="box_ex">
							<p class="box_liquid new">
								<img src="./images/sample/sample_new01.jpg">
							</p>
							<div class="box_txt_ex">
								<h4 class="tl_ex">高年収を実現！</h4>
								<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
								<div class="box_ic">
									<p class="ic_ex">時短勤務可</p>
									<p class="ic_ex">福利厚生充実</p>
								</div>
								<div class="wrp_info">
									<h5 class="tl_name">株式会社アイセイ薬局</h5>
									<p class="txt_info en">350万～600万</p>
									<p class="txt_info pin">大阪府大阪市</p>
									<p class="txt_info train">JR新大阪駅</p>
								</div>
								<p class="btn_basic"><a href="#"><span>詳細を見る</span></a></p>
							</div>
						</article>
						<article class="box_ex">
							<p class="box_liquid new">
								<img src="./images/sample/sample_new02.jpg">
							</p>
							<div class="box_txt_ex">
								<h4 class="tl_ex">高年収を実現！</h4>
								<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
								<div class="box_ic">
									<p class="ic_ex">時短勤務可</p>
									<p class="ic_ex">福利厚生充実</p>
								</div>
								<div class="wrp_info">
									<h5 class="tl_name">株式会社アイセイ薬局</h5>
									<p class="txt_info en">350万～600万</p>
									<p class="txt_info pin">大阪府大阪市</p>
									<p class="txt_info train">JR新大阪駅</p>
								</div>
								<p class="btn_basic"><a href="#"><span>詳細を見る</span></a></p>
							</div>
						</article>
						<article class="box_ex">
							<p class="box_liquid">
								<img src="./images/sample/sample_new03.jpg">
							</p>
							<div class="box_txt_ex">
								<h4 class="tl_ex">高年収を実現！</h4>
								<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
								<div class="box_ic">
									<p class="ic_ex">時短勤務可</p>
									<p class="ic_ex">福利厚生充実</p>
								</div>
								<div class="wrp_info">
									<h5 class="tl_name">株式会社アイセイ薬局</h5>
									<p class="txt_info en">350万～600万</p>
									<p class="txt_info pin">大阪府大阪市</p>
									<p class="txt_info train">JR新大阪駅</p>
								</div>
								<p class="btn_basic"><a href="#"><span>詳細を見る</span></a></p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="sec_other">

	</section>

	<?php include "./templates/footer.php"; ?>
</div>
</body>
</html>
