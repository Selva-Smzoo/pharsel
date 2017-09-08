<?php $page = 'contact'; include "../config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "../templates/common_css.php"; ?>
<link href="../css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
<script src="../js/top.js" type="text/javascript"></script>
<script src="../js/heightLine/jquery.heightLine.js" type="text/javascript"></script>
<script src="../js/fontFlex/jQuery.fontFlex.js" type="text/javascript"></script>
<script src="../js/lazylinepainter-1.5.1/jquery.lazylinepainter-1.5.1.js" type="text/javascript"></script>

<!--メールフォーム用-->
<link rel="stylesheet" href="mailform/mailform.css" type="text/css">
<script type="text/javascript" src="mailform/mailform.js" charset="utf-8"></script>
<script type="text/javascript" src="mailform/postcodes/get.cgi?js" charset="utf-8"></script>
<!--メールフォーム用-->
<script>
var pathObj = {
    "ic_scrollcircle": {
        "strokepath": [
            {
                "path": "M47,23.25A23,23,0,1,1,8.35,6.39",
                "duration": 1750
            },
            {
                "path": "M 16.7 L 20.54 23.65 27.45 30.3 20.8",
                "duration": 1750
            }
        ],
        "dimensions": {
            "width": 48,
            "height": 48
        }
    }
};

// readyEvent
$(function(){
	$w.on({
		//load
		'load' : function(){
			$(".bg_arrow").animate({
				backgroundPosition:'-200px',
				opacity:'0.3'
			}, 1500, 'easeInOutCirc' );
			$(".bg_logo").animate({
				opacity:'1'
			}, 4000 );

			//heightLine
			$(".part_services .inner").heightLine({minWidth:480});

			//ic_scrollcircle
			$('#ic_scrollcircle').lazylinepainter(
			 {
				"svgData": pathObj,
				"strokeWidth": 2,
				"strokeColor": "#fff"
			}).lazylinepainter('paint');

			//fontFlex
			$('.tl_intro_m').fontFlex(19, 23, 50);

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
	<div class="wrapper">
		<?php include "../templates/header.php"; ?>

		<div id="fv">
			<div class="bg_arrow">
			</div>

			<div class="bg_logo contact tl_page">
			</div>

			<div class="nav_recent_works">
				<img src="../images/top_img_side-menu.png">
			</div>

			<div class="news_list">
			</div>

			<div class="wrp_ic_scrollcircle">
					<div class="box_ic_scrollcircle">
						<div id="ic_scrollcircle" class="lazy-line">
							<svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M47,23.25A23,23,0,1,1,8.35,6.39" stroke="#fff" fill-opacity="0" stroke-opacity="1" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 91.1719, 91.1719; stroke-dashoffset: 0; display: none;"></path>
								<path d="M 16.7 L 20.54 23.65 27.45 30.3 20.8" stroke="#fff" fill-opacity="0" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 0, 0; stroke-dashoffset: 0; display: block;"></path>
							</svg>
						</div>
					</div>
					<a href="#contents">
						<p class="ic_scroll_inner"><img src="../images/ic_scroll_inner.png"></p>
					</a>
			</div>

		</div><!-- /#fv -->

		<div class="content" id="contents">

			<!-- ここから -->
			<div class="con_intro">
				<h2 class="tl_s blue"><img src="../images/contact_tl_contact.png" alt="outline">
					<span>お問い合せ</span>
				</h2>
				<h3 class="tl_intro">
					<span class="rwd">各種お問い合せ・</span><span class="rwd">ご相談はこちら</span>
				</h3>
				<p class="txt_read_l">
					<span class="rwd">お探しの情報や</span><span class="rwd">土地の活用法など、</span><span class="rwd">お問い合せ・</span><span class="rwd">ご相談は</span><span class="rwd">下記フォームより</span><span class="rwd">ご連絡ください。</span><br class="sp_break">
					<span class="rwd">ご要望に対し、</span><span class="rwd">迅速に</span><span class="rwd">サポートいたします。</span>
				</p>

			</div>

			<div class="part_cases">
				<div class="bg_base">
					<div class="inner effect">
						<div class="bg_upper bg_service">
						</div>
						<h2 class="tl_s blue"><img src="../images/contact_tl_form.png" alt="news">
							<span>ご相談・お申込み内容の入力</span>
						</h2>

						<p class="txt_read_l col_blue contact">
							<span class="rwd">各種情報提供・</span><span class="rwd">ご相談をご希望の方は、</span><span class="rwd">以下からお選びください。</span>
						</p>

						<div class="wrp_form">
							<form id="mailform" method="post" action="mailform/send.cgi" onSubmit="return sendmail(this);">
								<table class="tbl_basic">
									<tbody>
										<tr>
											<td>
												<input type="checkbox" name="お問い合せ内容の種別" value="投資物件情報（L SELECT）を探している"><span class="txt_check">投資物件情報（L SELECT）を探している</span><br>
												<textarea name="投資物件情報（L SELECT）についてのお問い合せ内容" rows="5" cols="40" placeholder="投資物件情報（L SELECT）についてお問い合せ内容をご記入ください"></textarea><br>

												<input type="checkbox" name="お問い合せ内容の種別" value="出店情報（R MAP）を探している"><span class="txt_check">出店情報（R MAP）を探している</span><br>
												<textarea name="出店情報（R MAP）についてのお問い合せ内容" rows="5" cols="40" placeholder="出店情報（R MAP）についてお問い合せ内容をご記入ください"></textarea><br>

												<input type="checkbox" name="お問い合せ内容の種別" value="投資家情報（I SELECT）を探している"><span class="txt_check">投資家情報（I SELECT）を探している</span>
												<textarea name="投資家情報（I SELECT）についてのお問い合せ内容" rows="5" cols="40" placeholder="投資家情報（I SELECT）についてお問い合せ内容をご記入ください"></textarea>

												<input type="checkbox" name="お問い合せ内容の種別" value="土地活用について相談したい"><span class="txt_check">土地活用について相談したい</span>
												<textarea name="土地活用についてのお問い合せ内容" rows="5" cols="40" placeholder="土地活用についてお問い合せ内容をご記入ください"></textarea>
											</td>
										</tr>
									</tbody>
								</table>

								<p class="txt_read_l col_blue">
									ご検討中の物件情報をご入力ください（任意）
								</p>

								<table class="tbl_basic">
									<tbody>
										<tr>
											<th>物件所在地（都道府県）</th>
											<td>
												<select name="物件所在地（都道府県）">
													<option value="大阪府">大阪府</option>
													<option value="兵庫県">兵庫県</option>
													<option value="京都府">京都府</option>
													<option value="奈良県">奈良県</option>
													<option value="滋賀県">滋賀県</option>
													<option value="和歌山県">和歌山県</option>
												</select>
											</td>
										</tr>
										<tr>
											<th>市区町村</th>
											<td>
												<input type="text" name="市区町村" placeholder="大阪市中央区伏見町" class="middle">
											</td>
										</tr>
										<tr>
											<th>丁目・番地</th>
											<td>
												<input type="text" name="丁目・番地" placeholder="4丁目4-10新伏見町ビル3F" class="middle">
											</td>
										</tr>
										<tr>
											<th>敷地面積</th>
											<td>
												<input type="text" name="敷地面積" placeholder="100㎡" class="small">
											</td>
										</tr>
									</tbody>
								</table>

								<h2 class="tl_s blue"><img src="../images/contact_tl_form.png" alt="news">
									<span>お客様情報の入力</span>
								</h2>
								<p class="txt_read_l col_blue">
									お客様の情報をご入力ください。
								</p>

								<table class="tbl_basic">
									<tbody>
										<tr>
											<th>お名前(必須)</th>
											<td>
												<input type="text" name="お名前(必須)" placeholder="山田太郎" class="middle">
											</td>
										</tr>
										<tr>
											<th>フリガナ(必須)</th>
											<td>
												<input type="text" name="フリガナ(必須)" placeholder="ヤマダタロウ" class="middle">
											</td>
										</tr>
										<tr>
											<th>会社名</th>
											<td>
												<input type="text" name="会社名" placeholder="ルーシック株式会社" class="middle">
											</td>
										</tr>
										<tr>
											<th>電話番号</th>
											<td>
												<input type="text" name="電話番号(必須)" placeholder="06-6484-7067" class="middle">
											</td>
										</tr>
										<tr>
											<th>郵便番号</th>
											<td>
												<input type="text" name="郵便番号" class="small">
												<!-- <input type="button" value="〒から住所を自動入力" onClick="mfpc('mailform','郵便番号','住所(必須)');" class="small btn_area"> -->
											</td>
										</tr>
										<tr>
											<th>住所(必須)</th>
											<td>
												<input type="text" name="住所(必須)" placeholder="大阪市中央区伏見町4丁目4-10新伏見町ビル3F" class="large">
											</td>
										</tr>
										<tr>
										<tr>
											<th>メールアドレス(必須)</th>
											<td>
												<input type="text" name="メールアドレス(必須)" placeholder="xxx@gmail.com" class="middle">
											</td>
										</tr>
									</tbody>
								</table>

								<div class="wrp_btn_center">
									<button class="btn_center" type='submit' name='action' value='send'>
										送信する
										<!-- <img src="../images/contact_btn_send.png" alt="お問い合せ"> -->
									</button>
								</div>

							</form>
						</div><!-- /.wrp_form -->

						<div class="wrp_privacy" id="sec_privacy">
							<h2 class="tl_s blue"><img src="../images/contact_tl_privacy.png" alt="privacy">
								<span>プライバシーポリシー</span>
							</h2>

							<p class="txt_read_l">
								LUSIC株式会社（以下、「当社」といいます。）は、個人情報の保護に関してその重要性を認識し、「個人情報の取り扱いに関する方針」を以下のとおり定め、業務に従事するすべての者は、個人情報を正確かつ安全に取り扱うことに努めます。
							</p>

							<div class="box_txt">
								<ul>
									<li>
										<h3 class="tl_privacy">■個人情報取扱いに関する方針</h3>
										<p>当社は、個人情報保護に関する法令を遵守し、企業活動の上で取り扱う個人情報について、これを適切に管理、保護し、お客様が安心できる個人情報保護体制の運用・向上を目的として、プライバシーポリシーを以下のように定めます。</p>
									</li>
									<li>
										<h3 class="tl_privacy">1.個人情報の定義</h3>
										<p>当社は、個人情報とは、「個人情報の保護に関する法律」に規定される生存する個人に関する情報であって、氏名、生年月日その他の記述等により特定の個人を識別することができるものと認識しております。</p>
									</li>
									<li>
										<h3 class="tl_privacy">2.個人情報の収集、利用、提供</h3>
										<p>当社は、個人情報の収集・利用にあたり、お客様等に対し事前に目的を明らかにし、収集した個人情報の使用範囲を限定し、適切に取扱います。また、お客様等の同意を事前に得た場合、又は法令により許された場合を除き、お客様等の個人情報を第三者に提供しません。尚、お客様の個人情報を第三者に提供する場合、提供する情報は必要な範囲のみに限定し、提供先に対して契約等により個人情報の管理を義務付けるとともに、適切な監督を行います。</p>
									</li>

									<li>
										<h3 class="tl_privacy">3.プライバシー尊重</h3>
										<p>当社は、プライバシーを尊重し、当社が収集した個人情報に対し、開示、訂正、削除、利用停止を求められた時には、合理的な期間、妥当な範囲内でこれに応じます。</p>
									</li>
									<li>
										<h3 class="tl_privacy">4.法令等の遵守</h3>
										<p>当社は、お客様等の個人情報の取得、利用その他一切の取り扱いについて、個人情報の保護に関する法律、その他の関連法令、及びこのプライバシーポリシーを遵守します。</p>
									</li>
									<li>
										<h3 class="tl_privacy">5.安全管理措置</h3>
										<p>当社は、お客様等の個人情報を正確かつ最新の内容に保つよう努めるとともに、不正なアクセス、改ざん、漏えい、滅失及び毀損から保護する為、必要な安全管理措置を講じます。</p>
									</li>
									<li>
										<h3 class="tl_privacy">6.継続的改善</h3>
										<p>当社は、個人情報保護に関する内部規定の整備、従業員教育の実施などを通じて、社内における個人情報の取扱いについて継続的な改善に努めます。</p>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ここまで -->

		</div><!-- /#contents -->
		<?php include "../templates/footer.php"; ?>
	</div>
</body>
</html>
