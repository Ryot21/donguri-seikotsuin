<?php
/*
Template Name: INTRODUCTION template
*/
	get_header('page');
?>



<!-- 紙 -->
<div class="l-paper">
	<header id="header" class="l-header">
		<div class="l-header__wrap">
			<nav class="c-header">
				<!-- 固定ページ > ヘッダー -->
				<div class="c-header__pic">
					<h1 class="c-header__pic__title">院内紹介<br><span>INTRODUCTION</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
				</div>

				<!-- ヘッダーNavi -->
				<ul id="nav" class="c-header__gnav">
					<!-- 2.当院のこだわり -->
					<li class="c-header__menu">
					<a href="/about/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/donguri-kodawari.png" alt="当院のこだわり">
						当院の<br class="TB-br">こだわり
					</a>
					</li>
					<!-- 3.メニュー -->
					<li class="c-header__menu">
					<a href="/menu/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="メニュー"> -->
						<p style="padding-bottom:5px;"><i class="fas fa-yen-sign fa-3x"></i></p>
						メニュー
					</a>
					</li>
					<!-- 4.交通事故施術 -->
					<li class="c-header__menu">
					<a href="/accident/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="交通事故施術"> -->
						<p style="padding-bottom:5px;"><i class="fas fa-car-crash fa-3x"></i></p>
						交通事故<br class="TB-br">施術
					</a>
					</li>
					<!-- 5.訪問マッサージ -->
					<li class="c-header__menu">
					<a href="/visit/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="訪問マッサージ"> -->
						<p style="padding-bottom:5px;"><i class="fas fa-warehouse fa-3x"></i></p>
						訪問<br class="TB-br">マッサージ
					</a>
					</li>
					<!-- 6.ブログ -->
					<li class="c-header__menu">
					<a href="/blog/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="ブログ"> -->
						<p style="padding-bottom:5px;"><i class="fa fa-book fa-3x" aria-hidden="true"></i></p>
						ブログ
					</a>
					</li>
					<!-- 7.院内／スタッフ紹介 -->
					<li class="c-header__menu">
					<a href="/introduction/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="院内／スタッフ"> -->
						<p style="padding-bottom:5px;"><i class="far fa-hospital fa-3x" aria-hidden="true"></i></p>
						院内紹介
					</a>
					</li>
					<!-- 8.アクセス -->
					<li class="c-header__menu">
					<a href="/access/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="アクセス"> -->
						<p style="padding-bottom:5px;"><i class="far fa-map fa-3x" aria-hidden="true"></i></p>
						アクセス
					</a>
					</li>
					<!-- 9.よくあるご質問 -->
					<li class="c-header__menu">
					<a href="/faq/">
						<!-- <img src="images/icon/menu_icon1.svg" alt="よくある質問"> -->
						<p style="padding-bottom:5px;"><i class="far fa-question-circle fa-3x" aria-hidden="true"></i></p>
						よくある<br class="TB-br">質問
					</a>
					</li>

				</ul>

			</nav>
		</div>
	</header>



	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">

		<!-- 院内紹介文 -->
		<div class="page-introduction">
			<div class="page-introduction-fristbox mg-top">
			<p>テキストテキストテキストテキストテキストテキストテキスト<br>
				テキストテキストテキストテキストテキストテキストテキスト<br>
				テキストテキストテキストテキストテキストテキストテキスト<br>
				テキストテキストテキストテキストテキストテキストテキスト<br>
				テキストテキストテキストテキストテキストテキストテキスト。<br>
			</p>
			</div>
		</div>


		<!-- 写真 -->
		<section id="introduction" class="l-container pd-btm">
			<!-- <h2 class="page-introduction__title pd-btm">写真</h2> -->
			<div class="page-introduction-picbox pd-btm">
			<!-- 左側 -->
			<div class="left-box">
				<!-- 左/上 -->
				<div class="left-box_top">
					<div class="img-box">
					<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					</div>
					<div class="txt-box">
					<div class="txt">
						<div class="txt-ttl">写真①</div>
					</div>
					</div>
				</div>
				<!-- 左/下 -->
				<div class="left-box_bottom">
				<div class="left-box_flex">
					<div class="img-box">
						<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					</div>
					<div class="txt-box">
						<div class="txt">
						<div class="txt-ttl">写真②</div>
						</div>
					</div>
				</div>
				<div class="left-box_flex">
					<div class="img-box">
						<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					</div>
					<div class="txt-box">
						<div class="txt">
						<div class="txt-ttl">写真③</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<!-- 右側 -->
			<div class="right-box">
				<!-- 右・上 -->
				<div class="right-box_top">
				<div class="right-box_flex">
					<div class="img-box">
						<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					</div>
					<div class="txt-box">
						<div class="txt">
						<div class="txt-ttl">写真④</div>
						</div>
					</div>
				</div>
				<div class="right-box_flex">
					<div class="img-box">
						<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					</div>
					<div class="txt-box">
						<div class="txt">
						<div class="txt-ttl">写真⑤</div>
						</div>
					</div>
				</div>
				</div>
				<!-- 右・下 -->
				<div class="right-box_bottom">
					<div class="img-box">
					<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					</div>
					<div class="txt-box">
					<div class="txt">
						<div class="txt-ttl">写真⑥</div>
					</div>
					</div>
				</div>
			</div>
			</div>
		</section>

	</div>










<!-- ここまでコンテンツ -->
<?php get_footer(); ?>