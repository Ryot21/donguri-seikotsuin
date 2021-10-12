<?php
/*
Template Name: ACCESS template
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
				<h1 class="c-header__pic__title">アクセス<br><span>ACCESS</span></h1>
				<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
				<!-- パンくず -->
				<?php get_template_part('module/breadcrumb'); ?>
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
		<!-- 受付時間 -->
		<section class="page-access pd-btm">
			<h2 class="page-access__title">院情報</h2>
			<div class="page-access-inforbox mg-top">
			<table class="border-table" style="height: 95px;">
				<tbody>
				<tr style="height: 19px;">
				<th style="height: 19px; width: 402px;">院名</th>
				<td style="height: 19px; width: 954px;">どんぐり整骨院</td>
				</tr>
				<tr style="height: 38px;">
				<th style="height: 38px; width: 402px;">住所</th>
				<td style="height: 38px; width: 954px;">〒359-1145 <span>埼玉県所沢市山口1439-8</span></td>
				</tr>
				<tr style="height: 19px;">
				<th style="height: 19px; width: 402px;">TEL</th>
				<td style="height: 19px; width: 954px;">00-0000-0000</td>
				</tr>
				<tr style="height: 19px;">
				<th style="height: 19px; width: 402px;">最寄り駅</th>
				<td style="height: 19px; width: 954px;"><span>西武狭山線下山口駅　出口より徒歩1分</span></td>
				</tr>
				</tbody>
				</table>
			</div>

		</section>

		<!-- 受付時間 -->
		<section class="page-access pd-btm">
			<h2 class="page-access__title">受付時間</h2>
			<div class="page-access-timebox mg-top">
			<img src="<?php echo get_template_directory_uri(); ?>/images/donguri-calendar2.png" alt="受付時間">
			</div>

		</section>
		<!-- 所在地 -->
		<section class="page-access pd-btm">
			<h2 class="page-access__title">所在地</h2>
			<div class="page-access-mapbox mg-top">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.8374274704615!2d139.4381114514931!3d35.77936963209235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018de040cb0bfa3%3A0x48ec1c7212af83d!2z44CSMzU5LTExNDUg5Z-8546J55yM5omA5rKi5biC5bGx5Y-j77yR77yU77yT77yZ4oiS77yY!5e0!3m2!1sja!2sjp!4v1633338245412!5m2!1sja!2sjp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

		</section>
	</div>




<!-- ここまでコンテンツ -->
<?php get_footer(); ?>