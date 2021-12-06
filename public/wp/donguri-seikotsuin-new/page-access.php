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
			<div class="c-header">
				<!-- 固定ページ > ヘッダー -->
				<div class="c-header__pic">
					<h1 class="c-header__pic__title">アクセス<br><span>ACCESS</span></h1>
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-michi-2-1-scaled.jpg" alt="アクセスページ">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>
				<!-- ナビゲーション -->
				<nav class="pc-nav">
					<!-- ul -->
						<?php $args = array(
							'menu' => 'header-menu', //管理画面で作成したメニュー名
							'menu_class' => 'pc-nav__lists', //メニューを構成する<ul>タグのクラス名
							'container' => 'false', //<ul>タグを囲っている<div>タグについて
							'link_before'  => '<div class="pc-nav__lists__iconbox"></div><p class="pc-nav__lists__text">',//テキストの直前
							'link_after'      => '</p>',//テキストの直後
						);
							wp_nav_menu($args);
						?>
					<!-- // ul -->
				</nav>

			</div>
		</div>
	</header>



	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">
		<!-- 受付時間 -->
		<section class="page-access pd-btm">
			<!-- <h2 class="page-access__title">整骨院情報</h2> -->
			<h2 class="page-kotei__title">整骨院情報</h2>
			<div class="page-access-inforbox mg-top">
				<table class="border-table" style="height: 95px;">
					<tbody>
						<tr>
							<th>院名</th>
							<td>どんぐり整骨院<br class="SP-br">・鍼灸マッサージ院</td>
						</tr>
						<tr>
							<th>代表者</th>
							<td>佐藤翔吾</td>
						</tr>
						<tr>
							<th>住所</th>
							<td>埼玉県所沢市山口1439-8</td>
						</tr>
						<tr>
							<th>TEL</th>
							<td>04-2936-7744</td>
						</tr>
						<tr>
							<th>最寄駅</th>
							<td>西武狭山線下山口駅　<br class="SP-br">出口より徒歩1分</td>
						</tr>
					</tbody>
				</table>
			</div>

		</section>

		<!-- 受付時間 -->
		<section class="page-access pd-btm">
			<!-- <h2 class="page-access__title">受付時間について</h2> -->
			<h2 class="page-kotei__title">受付時間について</h2>
			<div class="page-access-timebox mg-top">
				<img src="<?php echo get_template_directory_uri(); ?>/images/
				calendar/donguri-seikotsuin-ink.png" alt="受付時間">
				<p>時間外の診断については、<br class="SP-br">ご相談ください。</p>
			</div>

		</section>
		<!-- 所在地 -->
		<section class="page-access pd-btm">
			<!-- <h2 class="page-access__title">整骨院の所在地</h2> -->
			<h2 class="page-kotei__title">整骨院の所在地</h2>
			<div class="page-access-mapbox mg-top">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.8374274704615!2d139.4381114514931!3d35.77936963209235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018de040cb0bfa3%3A0x48ec1c7212af83d!2z44CSMzU5LTExNDUg5Z-8546J55yM5omA5rKi5biC5bGx5Y-j77yR77yU77yT77yZ4oiS77yY!5e0!3m2!1sja!2sjp!4v1633338245412!5m2!1sja!2sjp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

		</section>
	</div>




<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>