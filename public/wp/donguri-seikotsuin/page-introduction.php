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

		<!-- 院内紹介文 -->
		<div class="page-introduction">
			<div class="page-introduction-fristbox">
			<p>当院では、お客様にリラックスして施術を受けていただけるよう、<br>
				清潔で安らげる空間づくりを徹底しています。<br>
				また最新治療器も導入しており、<br>
				極力お客様のお体にストレスのないよう、<br>
				効果的な施術が行えるように工夫しています。<br>
			</p>
			</div>
		</div>


		<!-- 写真 -->
		<section id="introduction" class="pd-btm">
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


		<!-- スタッフ紹介 -->
		<section class="page-kotei pd-btm">
			<h2 class="page-kotei__title arch">スタッフ紹介</h2>
			<!-- 画像説明 -->
			<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="page-kotei-fristbox">
				<div class="page-kotei-fristbox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="こだわりその１">
				</div>
				<div class="page-kotei-fristbox__textbox">
					<h3 class="staff-title">佐藤 翔吾（院長）</h3>

					<h4 class="staff-subtitle">得意な治療分野</h4>
					<p class="staff-text">スポーツ外傷、トレーニング指導、テ－ピング、トリガーポイント療法</p>

					<h4 class="staff-subtitle">趣味・特技</h4>
					<p class="staff-text">野球、バトミントン、競馬</p>

					<h4 class="staff-subtitle">メッセージ</h4>
					<p>患者様が楽になった、痛みが取れたと笑顔になる様な治療を目指していきます。辛い痛み、悩みなど些細なことでも良いので相談してください。一緒に解決していきましょう。</p>

				</div>
			</div>


		</section>
	</div>










<!-- ここまでコンテンツ -->
<?php get_footer(); ?>