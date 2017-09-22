<?php $page = 'interview'; include "../config/include.php"; ?>

<!-- *** stylesheet *** -->
<link href="../css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">
<?php include "../templates/common_css.php"; ?>
<link href="../css/lower.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/detail.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/tab.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/sp.css" rel="stylesheet" type="text/css" media="all">
<link href="../js/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
<link href="../js/textillate-master/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
<script type="text/javascript" src="../js/jquery-bgswitcher-master/jquery.bgswitcher.js"></script>
<script type="text/javascript" src="../js/heightLine/jquery.heightLine.js"></script>
<script type="text/javascript" src="../js/bxslider/jquery.bxslider.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgBY_YTKeWFcHKz8MNzz2eZ-do2xw9VmM"></script>
<script>
function initialize() {
  var latlng = new google.maps.LatLng(34.693992, 135.507630);/*表示したい場所の経度、緯度*/
  var myOptions = {
    zoom: 15, /*拡大比率*/
    center: latlng, /*表示枠内の中心点*/
    mapTypeId: google.maps.MapTypeId.ROADMAP/*表示タイプの指定*/
  };
  var map = new google.maps.Map(document.getElementById('gmap_ct'), myOptions);
/*スタイルのカスタマイズ*/
 var styleOptions =
[
 {
 "featureType": "landscape.natural",
 "stylers": [
 { "color": "#f7efef" }
 ]
 },{
 "featureType": "road",
 "stylers": [
 { "gamma": 2.61 },
 { "color": "#ffffff" }
 ]
 },{
 "featureType": "transit.line",
 "stylers": [
 { "invert_lightness": true },
 { "visibility": "simplified" },
 { "color": "#e8e8e8" }
 ]
 },{
 "elementType": "labels.icon",
 "stylers": [
 { "visibility": "off" }
 ]
 },{
 "featureType": "landscape.man_made",
 "elementType": "geometry",
 "stylers": [
 { "visibility": "simplified" },
 { "color": "#f5f2ef" }
 ]
 },{
 "featureType": "poi",
 "elementType": "geometry",
 "stylers": [
 { "color": "#e9e2e2" }
 ]
 },{
 "featureType": "water",
 "stylers": [
 { "color": "#dbf0f3" }
 ]
 },{
 "featureType": "transit.station",
 "elementType": "geometry",
 "stylers": [
 { "color": "#e4e4df" }
 ]
 }
];

 var styledMapOptions = { name: 'サンプル' }
 var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
 map.mapTypes.set('sample', sampleType);
 map.setMapTypeId('sample');

/*オリジナルアイコンの取得*/
var icon = new google.maps.MarkerImage('../images/pin.png',/*アイコンの場所*/
 new google.maps.Size(44,44),/*アイコンのサイズ*/
 new google.maps.Point(0,0)/*アイコンの位置*/
);

/*マーカーの設置*/
var markerOptions = {
 position: latlng,/*表示場所と同じ位置に設置*/
 map: map,
 icon: icon,
 title: 'ここです'/*マーカーのtitle*/
};
var marker = new google.maps.Marker(markerOptions);

}
</script>
</head>

<body id="<?php echo $page; ?>" class="drawer drawer--left page-top lower" onload="initialize();">
	<?php include "../templates/header.php"; ?>

				<div class="wrp_box_fv">
					<div class="wrp_box_txt">
						<h1 class="font_min tl_fv">
							<span class="kana">インタビュー</span>
						</h1>
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

	<section id="sec_interview">
		<div class="bg_pattern_blue">

			<div class="bg_gray">
				<div class="inner_lower round">
					<div class="wrap_tl_lower">
						<h2 class="tl_contens_lower"><img src="../images/common/tl_intereview.png" alt="スタッフインタビュー" class="tl_list" width="157"></h2>
					</div>

					<div class="bg_wave">
						<div class="inner_basic">

							<article id="bottom" class="cf">
								<div class="box_content_bottom">
									<div class="inner_img">
										<img src="../images/sample/sample_man.png" alt="サンプル人物イメージ" width="77">
									</div>
									<div class="inner_txt">
										<h3 class="tl_special sub"><img src="../images/common/ic_special_small.png" class="ic">ここにコンテンツのタイトル</h3>
										<p class="txt_small">若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可能です。若江岩田駅 徒歩2分！通勤の負担が軽減！ラッシュは無縁のマイカー通勤♪年収600万円も可能です。</p>
										<p class="txt_date"><a href="#">続きを読む</a></p>
									</div>
								</div>
								<div class="box_content_bottom cf">
									<div class="inner_img">
										<img src="../images/sample/sample_man.png" alt="サンプル人物イメージ" width="77">
									</div>
									<div class="inner_txt">
										<h3 class="tl_special sub"><img src="../images/common/ic_special_small.png" class="ic">ここにコンテンツのタイトル</h3>
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
	</section>

	<section id="sec_detail">
		<div class="bg_pattern_blue">
			<div class="bg_gray">
				<div class="inner_lower round">
					<div class="wrap_tl_lower">
						<h2 class="tl_contens_lower"><img src="../images/common/tl_tenpo.png" alt="店舗情報" class="tl_list" width="108"></h2>
					</div>
					<div class="bg_wave">
						<div class="inner_basic cf">

							<div class="wrp_photo">
								<div class="box_img">
									<p class="box_liquid">
										<img src="../images/sample/sample_new01.jpg" alt="サンプルイメージ">
									</p>
								</div>
							</div>
							<div class="wrp_txt">
								<div class="box_txt_ex">
									<h3 class="tl_ex">株式会社アイセイ薬局</h3>
									<p class="txt_ex">大阪市北区西天満1丁目7番20号 JIN・ORIXビル6階</p>
									<div class="box_ic">
										<p class="ic_ex">時短勤務可</p>
										<p class="ic_ex">福利厚生充実</p>
									</div>
									<p class="btn_basic"><a href="<?php echo location; ?>search/"><span>応募する</span></a></p>
									<div class="wrp_info">
										<h4 class="tl_name">株式会社アイセイ薬局</h4>
										<p class="txt_info en">350万～600万</p>
										<p class="txt_info pin">大阪府大阪市</p>
										<p class="txt_info train">北新地駅より徒歩3分／大阪駅より徒歩6分</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap_map">
			<div class="inner">
				<div id="gmap_ct" style="width:100%;height:340px;"></div>
				<p class="buttom_more"><a href="https://www.google.co.jp/maps/place/34%C2%B041'38.4%22N+135%C2%B030'27.5%22E/@34.6939939,135.5067098,18z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d34.6939919!4d135.5076305" target="_blank"></a></p>
			</div>
		</div>

		<p class="imb_bottom">
		</p>
	</section>

	<?php include "../templates/footer.php"; ?>
</div><!-- /#wrapper -->
</body>
</html>
