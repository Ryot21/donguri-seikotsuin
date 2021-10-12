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