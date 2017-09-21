<?php $page = 'list'; include "../config/include.php"; ?>

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
					<h1 class="font_min tl_fv">
						<span class="kana">求人一覧</span>
					</h1>
				</div>
			</div>
		</div>
	</section><!-- /#fv -->

	<section id="breadcomb">
		<ul class="cf">
			<li><a href="../">HOME</a></li>
			<li>求人一覧</li>
		</ul>
	</section>
	<section id="sec_new">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_lower round">
					<div class="wrap_tl_lower">
						<h2 class="tl_contens_lower"><img src="../images/common/tl_list.png" alt="検索結果" class="tl_list"></h2>
						<p class="tl_search"><span>100</span>件の求人が見つかりました</p>
					</div>

					<div class="bg_wave">
						<div class="inner_basic">
							<div class="wrp_box_ex cf">
								<article class="box_ex">
									<p class="box_liquid new boxLink">
										<a href="<?php echo location; ?>search/"><img src="../images/sample/sample_new01.jpg"></a>
									</p>
									<div class="box_txt_ex">
										<h3 class="tl_ex">高年収を実現！</h3>
										<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
										<div class="box_ic">
											<p class="ic_ex">時短勤務可</p>
											<p class="ic_ex">福利厚生充実</p>
										</div>
										<div class="wrp_info">
											<h4 class="tl_name">株式会社アイセイ薬局</h4>
											<p class="txt_info en">350万～600万</p>
											<p class="txt_info pin">大阪府大阪市</p>
											<p class="txt_info train">JR新大阪駅</p>
										</div>
										<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>詳細を見る</span></a></p>
									</div>
								</article>
								<article class="box_ex">
									<p class="box_liquid new boxLink">
										<a href="<?php echo location; ?>search/"><img src="../images/sample/sample_new02.jpg"></a>
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
										<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>詳細を見る</span></a></p>
									</div>
								</article>
								<article class="box_ex">
									<p class="box_liquid new boxLink">
										<a href="<?php echo location; ?>search/"><img src="../images/sample/sample_new03.jpg"></a>
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
										<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>詳細を見る</span></a></p>
									</div>
								</article>

								<article class="box_ex">
									<p class="box_liquid new boxLink">
										<a href="<?php echo location; ?>search/"><img src="../images/sample/sample_new01.jpg"></a>
									</p>
									<div class="box_txt_ex">
										<h3 class="tl_ex">高年収を実現！</h3>
										<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
										<div class="box_ic">
											<p class="ic_ex">時短勤務可</p>
											<p class="ic_ex">福利厚生充実</p>
										</div>
										<div class="wrp_info">
											<h4 class="tl_name">株式会社アイセイ薬局</h4>
											<p class="txt_info en">350万～600万</p>
											<p class="txt_info pin">大阪府大阪市</p>
											<p class="txt_info train">JR新大阪駅</p>
										</div>
										<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>詳細を見る</span></a></p>
									</div>
								</article>
								<article class="box_ex">
									<p class="box_liquid new boxLink">
										<a href="<?php echo location; ?>search/"><img src="../images/sample/sample_new02.jpg"></a>
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
										<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>詳細を見る</span></a></p>
									</div>
								</article>
								<article class="box_ex">
									<p class="box_liquid new boxLink">
										<a href="<?php echo location; ?>search/"><img src="../images/sample/sample_new03.jpg"></a>
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
										<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>詳細を見る</span></a></p>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "../templates/footer.php"; ?>
</div><!-- /#wrapper -->
</body>
</html>
