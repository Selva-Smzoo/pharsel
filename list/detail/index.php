<?php $page = 'detail'; include "../../config/include.php"; ?>

<!-- *** stylesheet *** -->
<link href="../../css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">
<?php include "../../templates/common_css.php"; ?>
<link href="../../css/lower.css" rel="stylesheet" type="text/css" media="all">
<link href="../../css/tab.css" rel="stylesheet" type="text/css" media="all">
<link href="../../css/sp.css" rel="stylesheet" type="text/css" media="all">
<link href="../../js/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
<link href="../../js/textillate-master/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../../templates/common_js.php"; ?>
<script type="text/javascript" src="../../js/jquery-bgswitcher-master/jquery.bgswitcher.js"></script>
<script type="text/javascript" src="../../js/heightLine/jquery.heightLine.js"></script>
<script type="text/javascript" src="../../js/bxslider/jquery.bxslider.js"></script>
</head>

<body id="<?php echo $page; ?>" class="drawer drawer--left page-top lower">
<?php include "../../templates/header.php"; ?>

			<div class="wrp_box_fv">
				<div class="wrp_box_txt">
					<h1 class="font_min tl_fv">
						<span class="kana">求人詳細</span>
					</h1>
				</div>
			</div>
		</div>
	</section><!-- /#fv -->

	<section id="breadcomb">
		<ul class="cf">
			<li><a href="../../">HOME</a></li>
			<li><a href="../">求人一覧</a></li>
			<li>求人詳細</li>
		</ul>
	</section>

	<section id="sec_detail">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_lower round">
					<div class="wrap_tl_lower">
						<h2 class="tl_contens_lower"><img src="../../images/common/tl_detail.png" alt="検索詳細" class="tl_list" width="107"></h2>
					</div>
					<div class="bg_wave">
						<div class="inner_basic cf">

							<div class="wrp_photo">
								<div class="box_img">
									<p class="box_liquid">
										<img src="../../images/sample/sample_new01.jpg" alt="サンプルイメージ">
									</p>
								</div>
							</div>
							<div class="wrp_txt">
								<div class="box_txt_ex">
									<h3 class="tl_ex">高年収を実現！</h3>
									<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
									<div class="box_ic">
										<p class="ic_ex">時短勤務可</p>
										<p class="ic_ex">福利厚生充実</p>
									</div>
									<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>応募する</span></a></p>
									<div class="wrp_info">
										<h4 class="tl_name">株式会社アイセイ薬局</h4>
										<p class="txt_info en">350万～600万</p>
										<p class="txt_info pin">大阪府大阪市</p>
										<p class="txt_info train">JR新大阪駅</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="sec_req">
		<div class="bg_pattern_blue">

			<div class="bg_gray">
				<div class="inner_lower round">
					<div class="wrap_tl_lower">
						<h2 class="tl_contens_lower"><img src="../../images/common/tl_requirement.png" alt="募集要項" class="tl_list" width="107"></h2>
					</div>

					<div class="bg_wave">
						<div class="wrap_inner_basic">
							<div class="inner_basic">
								<div class="wrap_dl_detail">

								</div>
								<dl class="dl_detail">
									<dt class="gyou">業種</dt>
									<dd>ここにテキストが入ります。ここにテキストが入ります。</dd>
								</dl>
								<dl class="dl_detail">
									<dt class="shoku">職種</dt>
									<dd>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
								</dl>
								<dl class="dl_detail">
									<dt class="kyuu">給与</dt>
									<dd>ここにテキストが入ります。ここにテキストが入ります。</dd>
								</dl>
								<dl class="dl_detail">
									<dt class="shika">資格</dt>
									<dd>ここにテキストが入ります。ここにテキストが入ります。</dd>
								</dl>
								<dl class="dl_detail">
									<dt class="time">時間</dt>
									<dd>ここにテキストが入ります。ここにテキストが入ります。</dd>
								</dl>
								<dl class="dl_detail">
									<dt class="off">休み</dt>
									<dd>ここにテキストが入ります。ここにテキストが入ります。</dd>
								</dl>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="sec_interview">
		<div class="bg_pattern_blue">

			<div class="bg_gray">
				<div class="inner_lower round">
					<div class="wrap_tl_lower">
						<h2 class="tl_contens_lower"><img src="../../images/common/tl_intereview.png" alt="スタッフインタビュー" class="tl_list" width="157"></h2>
					</div>

					<div class="bg_wave">
						<div class="inner_basic">

							<article id="bottom" class="cf">
								<div class="box_content_bottom">
									<div class="inner_img">
										<img src="../../images/sample/sample_man.png" alt="サンプル人物イメージ" width="77">
									</div>
									<div class="inner_txt">
										<h3 class="tl_special sub"><img src="../../images/common/ic_special_small.png" class="ic">ここにコンテンツのタイトル</h3>
										<p class="txt_small">若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可能です。若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可能です。</p>
										<p class="txt_date"><a href="#">続きを読む</a></p>
									</div>
								</div>
								<div class="box_content_bottom cf">
									<div class="inner_img">
										<img src="../../images/sample/sample_man.png" alt="サンプル人物イメージ" width="77">
									</div>
									<div class="inner_txt">
										<h3 class="tl_special sub"><img src="../../images/common/ic_special_small.png" class="ic">ここにコンテンツのタイトル</h3>
										<p class="txt_small">若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可能です。若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可能です。</p>
										<p class="txt_date"><a href="#">続きを読む</a></p>
									</div>
								</div>
							</article>

						</div>
					</div>

				</div>
			</div>
		</div>

		<p class="imb_bottom">
		</p>
	</section>

	<?php include "../../templates/footer.php"; ?>
</div><!-- /#wrapper -->
</body>
</html>
