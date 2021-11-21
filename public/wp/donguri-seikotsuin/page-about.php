<?php
/*
Template Name: ABOUT template
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
					<h1 class="c-header__pic__title">こだわり<br><span>KODAWARI</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>

				<!-- ul -->
				<?php $args = array(
					'menu' => 'header-menu', //管理画面で作成したメニュー名
					'menu_class' => 'c-header__gnav', //メニューを構成する<ul>タグのクラス名
					'container' => 'false', //<ul>タグを囲っている<div>タグについて
					'link_before'  => '<div class="c-header__gnav__iconbox"></div><p class="c-header__gnav__text">',//テキストの直前
					'link_after'      => '</p>',//テキストの直後
				);
					wp_nav_menu($args);
				?>
				<!-- // ul -->


			</nav>
		</div>
	</header>




	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">

		<!-- タイトルタイトル -->
		<section class="page-kotei">
			<h2 class="page-kotei__title arch">お客様に寄り添う施術</h2>


			<div class="page-kotei__bottombox">
				<div class="page-kotei__bottombox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>//images/pic/sample-pic.png" alt="">
				</div>
				<div class="page-kotei__bottombox__text">
					<h3>お客様の小さな声に耳を傾けて的確な施術を行います。</h3>
					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
				</div>
			</div>

			<div class="page-kotei__bottombox">
				<div class="page-kotei__bottombox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="">
				</div>
				<div class="page-kotei__bottombox__text">
					<h3>治すだけではなく、『アフター施術』が大事！！</h3>
					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
				</div>
			</div>

		</section>

		<!-- スタッフ紹介 -->
		<section class="page-kotei pd-btm">
			<h2 class="page-kotei__title arch">スタッフ紹介</h2>
			<!-- 画像説明 -->
			<div class="page-kotei-fristbox">
				<div class="page-kotei-fristbox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="こだわりその１">
				</div>
				<div class="page-kotei-fristbox__textbox">
					<h3 class="staff-title">佐藤 翔吾（院長）</h3>

					<h4 class="staff-subtitle">得意な治療分野</h4>
					<p class="staff-text">スポーツ外傷、トレーニング指導、テ－ピング、トリガーポイント療法</p>

					<h4 class="staff-subtitle">趣味・特技</h4>
					<p class="staff-text">野球、バトミントン、子育て</p>

					<h4 class="staff-subtitle">メッセージ</h4>
					<p>患者様が楽になった、痛みが取れたと笑顔になる様な治療を目指していきます。辛い痛み、悩みなど些細なことでも良いので相談してください。一緒に解決していきましょう。</p>

				</div>
			</div>


		</section>
		
	</div>




<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>