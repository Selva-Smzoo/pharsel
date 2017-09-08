<?php
/*

	meta.php
	メタ情報を管理するファイルです

	$meta['title'] →　title
	$meta['keywords'] →　keywords
	$meta['description'] →　description


*/


/*--	Settings
--------------------------------------------------*/

//共通文言
define('TITLE', '｜株式会社セルバ【東京・大阪】| WEB・アプリの制作、集客', true);
define('KEYWORDS', '', true);
define('DESCRIPTION', '', true);


//初期文言
$meta = array(
	'title' => TITLE,
	'keywords' => KEYWORDS,
	'description' => DESCRIPTION
);


/*--	Main page
--------------------------------------------------*/

#トップページ
if($page == 'top') {
	$meta['title'] = 'Pharsel(ファーセル)'.TITLE;
	$meta['keywords'] = '自社求人,人材紹介,求人,広告,代理店,派遣,システム,パッケージ,大阪,東京';
	$meta['description'] = 'ファーセルは、求人広告代理店、人材紹介、派遣会社様に向けて、早く、低価格で自社求人メディアを構築できるWEBシステムパッケージです。';
}

#製品特徴
if($page == 'page_feature') {
	$meta['title'] = '製品特徴'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = DESCRIPTION;
}

#機能紹介
if($page == 'page_function') {
	$meta['title'] = '機能紹介'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = DESCRIPTION;
}

#価格・導入フロー
if($page == 'page_prices') {
	$meta['title'] = '価格・導入フロー'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = '';
}
#活用事例
if($page == 'page_cases') {
	$meta['title'] = '活用事例'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = '';
}

#よくあるご質問
if($page == 'page_faq') {
	$meta['title'] = 'よくあるご質問'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = '';
}

#セルバの強みと選ばれる理由
if($page == 'page_advantage') {
	$meta['title'] = 'セルバの強みと選ばれる理由'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = '';
}

#お問い合せ
if($page == 'page_contact') {
	$meta['title'] = 'お問い合せ'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = '';
}

#デモ画面
if($page == 'page_demo') {
	$meta['title'] = 'デモ画面'.TITLE;
	$meta['keywords'] = '';
	$meta['description'] = '';
}



/*--    Error page
--------------------------------------------------*/

#error - 403
if($page == 'misc_403') $meta['title'] = 'Error 403 Forbidden アクセスが制限されています | '.title;

#error - 404
if($page == 'misc_404') $meta['title'] = 'Error 404 Page Not Found ページが見つかりません | '.title;

#error - 500
if($page == 'misc_500') $meta['title'] = 'Error 500 Internal Server Error サーバーエラーが出ています | '.title;


?>
