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
</head>

<body id="<?php echo $page; ?>" class="drawer drawer--left page-top">
<?php /* include "./templates/header.php"; */ ?>

<div class="wrp_header_sub">
	<img src="./images/common/logo_fotter_pharsel.png" alt="薬剤師のための求人サイト ファーセル" class="logo_drawer">
	<button type="button" class="drawer-toggle drawer-hamburger">
		<span class="drawer-hamburger-icon"></span>
	</button>

	<nav class="drawer-nav">
		<div class="nav_ttl">
			<div class="logo">
				<h2>
					<img src="./images/common/logo_fotter_pharsel.png" alt="薬剤師のための求人サイト ファーセル">
				</h2>
				<ul class="sns_fv cf">
					<li><a href="#"><img src="./images/common/ic_footer_facebook.png" alt="facebook" width="41" height="41"></a></li>
					<li><a href="#"><img src="./images/common/ic_footer_twitter.png" alt="twitter" width="41" height="41"></a></li>
				</ul>
			</div>
		</div>
		<ul class="drawer-menu">
			<li><a href="<?php echo location; ?>/">HOME</a></li>
			<li><a href="<?php echo location; ?>/search/">求人検索</a></li>
			<li><a href="<?php echo location; ?>/interview/">インタビュー</a></li>
			<li><a href="<?php echo location; ?>/special/">スペシャルコンテンツ</a></li>
			<li><a href="<?php echo location; ?>/entry/">会員登録</a></li>
			<li><a href="<?php echo location; ?>/login/">ログイン</a></li>
		</ul>
		<ul class="drawer-menu">
			<li><a href="/logout/">ログアウト</a></li>
		</ul>
	</nav>
</div>

<div id="wrapper">
	<section id="fv">
		<nav id="nav_main">
			<ul class="cf">
				<li><a href="<?php echo location; ?>search/"><span>求人検索</span></a></li>
				<li><a href="<?php echo location; ?>interview/"><span>インタビュー</span></a></li>
				<li><a href="<?php echo location; ?>contents/"><span>スペシャルコンテンツ</span></a></li>
				<li><a href="<?php echo location; ?>entry/"><span>会員登録</span></a></li>
				<li><a href="<?php echo location; ?>login/"><span>ログイン</span></a></li>
			</ul>
		</nav>
		<header>
			<nav id="nav_sub">
				<div class="inner_nav_sub cf">
					<p class="tl_pharsel">薬剤師のための求人サイト ファーセル</p>
					<ul class="nav_header_small cf">
						<li><a href="<?php echo location; ?>rule/">利用規約</a></li>
						<li><a href="<?php echo location; ?>privacy/">プライバシーポリシー</a></li>
						<li><a href="<?php echo location; ?>company/">運営会社</a></li>
						<li><a href="<?php echo location; ?>offer/">求人掲載のお申込み</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="inner_fv cf">
			<p class="logo_fv"><a href="<?php echo location; ?>"><img src="./images/common/logo_pharsel.png" alt="ファーセル" height="47" width="122"></a></p>

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
						<h3><img src="./images/common/tl_serchbox.png" alt="仕事を探す" width="97 "height="21"></h3>
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

						<p class="txt_more"><img src="./images/common/txt_more.png" alt="もっと詳しい条件で検索する" width="176"></p>

					</div>
					<p class="buttom_more"></p>
				</div>
			</div>
		</div>
	</section>

	<section id="sec_new">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_new">
					<h2 class="tl_ic"><img src="./images/common/ic_new.png" class="ic_large"><span>注目の新着求人</span></h2>
					<div class="wrp_box_ex cf">
						<article class="box_ex">
							<p class="box_liquid new boxLink">
								<a href="<?php echo location; ?>search/"><img src="./images/sample/sample_new01.jpg"></a>
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
								<a href="<?php echo location; ?>search/"><img src="./images/sample/sample_new02.jpg"></a>
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
								<a href="<?php echo location; ?>search/"><img src="./images/sample/sample_new03.jpg"></a>
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
	</section>

	<section id="sec_other">
		<div class="bg_gray">
			<div class="inner">
				<h2 class="tl_other"><span>その他の求人</span></h2>
				<div class="wrp_box_ex cf">
					<article class="box_ex boxLink popular">
						<p class="box_liquid">
							<img src="./images/sample/sample_other01.jpg" alt="人気の求人">
						</p>
						<div class="box_txt_ex">
							<h3 class="tl_ex ics col1"><img src="./images/common/ic_pop.png" class="img_ic">人気の求人</h3>
							<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
						</div>
					</article>
					<article class="box_ex boxLink recommend">
						<p class="box_liquid">
							<img src="./images/sample/sample_other02.jpg" alt="おすすめの求人">
						</p>
						<div class="box_txt_ex">
							<h3 class="tl_ex ics col2"><img src="./images/common/ic_reco.png" class="img_ic">おすすめの求人</h3>
							<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
						</div>
					</article>
					<article class="box_ex boxLink recent">
						<p class="box_liquid">
							<img src="./images/sample/sample_other03.jpg" alt="最近見た求人">
						</p>
						<div class="box_txt_ex">
							<h3 class="tl_ex ics col3"><img src="./images/common/ic_recent.png" class="img_ic">最近見た求人</h3>
							<p class="txt_ex">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section id="special">
		<div class="bg_special">
			<div class="inner_special cf">
				<img src="./images/common/ic_special.png" class="ic_special">
				<div class="box_img">
					<p class="box_liquid">
						<img src="./images/sample/sample_other03.jpg" alt="スペシャルコンテンツ">
					</p>
				</div>
				<div class="box_txt cf">
					<img src="./images/top/tl_special.png" alt="スペシャルコンテンツ">
					<p class="txt_small">《東大阪市》若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可...</p>
					<p class="btn_basic"><a href="#"><span>詳細を見る</span></a></p>
				</div>
			</div>
		</div>
	</section>

	<section id="entry">
		<h2 class="font_min tl_entry"><span>さっそく始めよう！</span><span>1分で登録が完了します。</span>
		<small>LET`S START!</small></h2>
		<p class="btn_basic"><a href="#"><span>無料会員登録</span></a></p>
	</section>

	<?php include "./templates/footer.php"; ?>
</div><!-- /#wrapper -->
</body>
</html>
