<header>
	<nav id="nav_sub">
		<div class="inner_nav_sub cf">
			<h1>薬剤師のための求人サイト ファーセル</h1>
			<ul class="nav_header_small cf">
				<li><a href="<?php echo location; ?>rule/">利用規約</a></li>
				<li><a href="<?php echo location; ?>privacy/">プライバシーポリシー</a></li>
				<li><a href="<?php echo location; ?>company/">運営会社</a></li>
				<li><a href="<?php echo location; ?>offer/">求人掲載のお申込み</a></li>
			</ul>
		</div>
	</nav>
</header>
<nav id="nav_main">
	<ul class="cf">
		<li><a href="<?php echo location; ?>search/"><span>求人検索</span></a></li>
		<li><a href="<?php echo location; ?>interview/"><span>インタビュー</span></a></li>
		<li><a href="<?php echo location; ?>contents/"><span>スペシャルコンテンツ</span></a></li>
		<li><a href="<?php echo location; ?>entry/"><span>会員登録</span></a></li>
		<li><a href="<?php echo location; ?>login/"><span>ログイン</span></a></li>
	</ul>
</nav>


<p class="logo_top"><a href="<?php echo location; ?>"><img src="./images/top/logo_pharsel.png" alt="Pharsel"></a></p>



<button type="button" class="drawer-toggle drawer-hamburger">
	<!-- <span class="sr-only">toggle navigation</span> -->
	<span class="drawer-hamburger-icon"></span>
</button>

<nav class="drawer-nav">
	<div class="nav_ttl">
		<div class="logo">
			<h2>
				<img src="/img/common/logo_sidemenu.png" alt="NextLevel Online">
			</h2>
				<p class="text_username"><span>こんにちは、</span><{$memberAccountData.mbi_last_name}><{$memberAccountData.mbi_first_name}> さん</p>
				<p>メインメニュー</p>
		</div>
	</div>
	<ul class="drawer-menu">
		<li><a href="/">HOME</a></li>
		<li><a href="/mypage/">マイページ</a></li>
		<li><a href="/work/list">仕事を探す</a></li>
		<li><a href="/work/my-list">My 仕事一覧</a></li>
		<li><a href="/inquiry/form/">お問い合わせ</a></li>
	</ul>
	<ul class="drawer-menu">
		<li><a href="/req-payment/form/">給料の支払</a></li>
		<li><a href="/member/edit">会員情報の登録・変更</a></li>
		<li><a href="/logout/">ログアウト</a></li>
	</ul>
	<ul class="drawer-menu">
		<li><a href="/">HOME</a></li>
		<li><a href="#" data-target="#modal_staffEntry" data-toggle="modal">スタッフ登録</a></li>
	</ul>
	<ul class="drawer-menu">
		<li><a href="/login/">ログイン</a></li>
	</ul>
</nav>


<!--<div class="pagetop">
	<a href="#"><img src="<?php echo location; ?>images/ic_pagetop.png" alt="pagetop"></a>
</div>-->
