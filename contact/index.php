<?php $page = 'contact'; include "../config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "../templates/common_css.php"; ?>
<link href="../css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
<!--メールフォーム用-->
<link rel="stylesheet" href="mailform/mailform.css" type="text/css">
<script type="text/javascript" src="mailform/mailform.js" charset="utf-8"></script>
<script type="text/javascript" src="mailform/postcodes/get.cgi?js" charset="utf-8"></script>
<!--メールフォーム用-->
<script>
// readyEvent
$(function(){
	$w.on({
		//load
		'load' : function(){

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

<body id="<?php echo $page; ?>">
<div id="wrapper">
	<div id="fv_lowpages">
		<?php include "../templates/header.php"; ?>
		<div class="inner_fv">
			<p class="logo_pharsel">
				<span class="font_maru">求人メディア構築・運営ファーセル</span>
				<a href="../"><img src="<?php echo location; ?>images/all_logo_pharsel.png" alt="ファーセル | Pharsel"></a>
			</p>
			<div class="wrap_txt">
				<h1 class="tl_fv font_maru">お問い合わせ</h1>
			</div>
		</div>
	</div>

	<div class="wrap_content_lowpages">
		<div id="wrap_braedcomb">
			<ul>
				<li><a href="../">トップページ</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>

		<section id="intro">
			<h2 class="tl_sec">
				<span class="st_sec">CONTACT</span>
				日本全国どちらからのご依頼にも対応可能です
			</h2>
			<p class="txt_normal des"><span class="wordbreak">下記お問い合わせフォームにて、お気軽にお問い合わせください。</span><span class="wordbreak">デモ画面もご用意しております。</span></p>
			<article class="wrap_form">
				<p class="note">※赤枠内は必須項目です。</p>
				<form id="mailform" method="post" action="mailform/send.cgi" onSubmit="return sendmail(this);">
					<ul class="li_form">
						<li><input type="text" name="御社名(必須)" placeholder="御社名" class="middle"></li>
						<li><input type="text" name="部署名" placeholder="部署名" class="small"></li>
						<li><input type="text" name="お名前(必須)" placeholder="お名前" class="middle"></li>
						<li><input type="text" name="ご住所(必須)" placeholder="ご住所" class="middle"></li>
						<li><input type="text" name="メールアドレス(必須)" placeholder="メールアドレス" class="small"></li>
						<li><input type="text" name="電話番号(必須)" placeholder="電話番号" class="small"></li>
						<li class="font_maru">
							<span class="txt_check">ご希望の内容</span>
							<input type="radio" name="お問い合せ内容の種別" value="詳しい話を聞きたい" checked id="radio01">
					    <label for="radio01" class="radio">詳しい話を聞きたい</label>
					    <input type="radio" name="お問い合せ内容の種別" value="デモ画面を試したい" id="radio02">
					    <label for="radio02" class="radio">デモ画面を試したい</label>
						</li>
						<li><textarea name="お問い合せ内容" rows="9" placeholder="お問い合せ内容をご記入ください"></textarea></li>
					</ul>

					<div class="box_privacy">
						<h3 class="tl_privacy font_maru">プライバシーポリシー</h3>
						<p class="txt_privacy font_maru">個人情報の取扱について<br>
						株式会社セルバ<br>
						１.個人情報保護管理者の氏名又は職名、所属及び連絡先<br>
						弊社は、次の者を個人情報の保護管理者として任命し、個人情報を適切かつ安全に管理し、個人情報の漏えい、滅失又はき損を防止する保護策を講じています。
						</p>
					</div>

					<ul class="li_form">
						<li class="font_maru">
							<input type="checkbox" name="上記の内容を確認し、御社に私の個人情報を提供することに同意します。(必須)" value="個人情報を提供することに同意" id="checkbox1">
							<label for="checkbox1" class="checkbox">上記の内容を確認し、御社に私の個人情報を提供することに同意します。</label>
						</li>
					</ul>

					<div class="wrap_btn">
						<button class="btn_green" type='submit' name='action' value='send'>
							送信する
						</button>
					</div>
				</form>
			</article>

		</section>

	</div>

	<?php include "../templates/footer.php"; ?>
</div>
</body>
</html>
