<?php $page = 'copy'; include "../config/include.php"; ?>

<!-- *** stylesheet *** -->
<link href="../css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">
<?php include "../templates/common_css.php"; ?>
<link href="../css/lower.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/tab.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/sp.css" rel="stylesheet" type="text/css" media="all">
<link href="../js/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
<link href="../js/textillate-master/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
<script type="text/javascript" src="../js/jquery-bgswitcher-master/jquery.bgswitcher.js"></script>
<script type="text/javascript" src="../js/heightLine/jquery.heightLine.js"></script>
<script type="text/javascript" src="../js/bxslider/jquery.bxslider.js"></script>
</head>

<body id="<?php echo $page; ?>" class="drawer drawer--left page-top lower">
<?php include "../templates/header.php"; ?>

			<div class="wrp_box_fv">
				<div class="wrp_box_txt">
					<h2 class="font_min tl_fv">
						<!-- <span class="kana">スペシャルコンテンツ</span> -->
						<img src="../images/common/tl_special.png" alt="スペシャルコンテンツ" width="509">
					</h2>
				</div>
			</div>
		</div>
	</section><!-- /#fv -->

	<section id="breadcomb">
		<ul class="cf">
			<li><a href="../">HOME</a></li>
			<li>スペシャルコンテンツ</li>
		</ul>
	</section>
	<section id="sec_new">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_new">
					<h2 class="tl_ic"><img src="../images/common/ic_special.png" class="ic_large"><span>スペシャルコンテンツ</span></h2>
				</div>

				<div class="bg_wave">
					<div class="inner">
						<h3 class="tl_special">ここにコンテンツのタイトル</h3>
						<p class="wrp_img_special"><img src="../images/common/sample_special.png" alt="サンプルイメージ"></p>
						<p class="txt_small">若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "../templates/footer.php"; ?>
</div><!-- /#wrapper -->
</body>
</html>
