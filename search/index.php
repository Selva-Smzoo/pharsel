<?php $page = 'search'; include "../config/include.php"; ?>

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
				<span class="kana">求人検索</span>
			</h1>
		</div>
	</div>
	</div>
	</section><!-- /#fv -->

	<section id="breadcomb">
		<ul class="cf">
			<li><a href="../">HOME</a></li>
			<li>求人検索</li>
		</ul>
	</section>

	<section id="intro">
		<h2 class="font_min tl_entry"><span>あなたに合った仕事を探そう！</span>
		</h2>
		<p class="txt_small"><span class="wordbreak">『働く場所』、『業種』、『フリーワード』でお仕事の絞り込みができます。</span><span class="wordbreak">
下の検索窓からあなたに合ったお仕事を見つけましょう！</span></p>
	</section>

	<section id="sec_new">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_basic border_top">
					<!-- 検索ボックス -->
					<div class="wrp_search_box">
						<div class="search_box_top">
							<h3><img src="../images/common/tl_serchbox.png" alt="仕事を探す" width="97 "height="21"></h3>
						</div>
						<div class="search_box_bototm">

							<form>
								<div class="wrp_form cf">
									<div class="wrp_txt">
										<div class="wrp_area">
											<label for="select_1" class="select-1">
												<select name="select_1" id="select_1">
													<option value="1">大阪府</option>
													<option value="2">兵庫県</option>
													<option value="3">滋賀県</option>
													<option value="4">和歌山県</option>
													<option value="5">京都府</option>
												</select>
											</label>

											<label for="select_1" class="select-1">
												<select name="select_1" id="select_1">
													<option value="1">大阪市</option>
													<option value="2">堺市</option>
													<option value="3">富田林市</option>
													<option value="4">吹田市</option>
												</select>
											</label>
										</div>

										<div class="wrp_word">
											<input class="form-field word" type="text" name="word" placeholder="フリーワード">
										</div>

										<div class="wrp_cate">
											<ul class="bg_checkbox">
												<li><input type="checkbox" checked><label>調剤薬局</label></li>
												<li><input type="checkbox"><label>病院・クリニック</label></li>
												<li><input type="checkbox"><label>ドラックストア</label></li>
												<li><input type="checkbox"><label>企業（RCA/MR）</label></li>
											</ul>
										</div>
									</div>
									<div class="submit-container">
										<input class="btn_basic" type="submit" value="検索する"></input>
									</div>
								</div>
							</form>

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
