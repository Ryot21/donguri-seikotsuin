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
					<h1 class="c-header__pic__title">当院のこだわり<br><span>KODAWARI</span></h1>
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
	<section class="page-kodawari">
		<h2 class="page-kodawari__title">タイトルタイトル</h2>


		<div class="page-kodawari__bottombox">
		<div class="page-kodawari__bottombox__pic">
			<img src="<?php echo get_template_directory_uri(); ?>//images/pic/sample-pic.png" alt="">
		</div>
		<div class="page-kodawari__bottombox__text">
			<h3>見出し見出し</h3>
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
		</div>
		</div>

		<div class="page-kodawari__bottombox">
		<div class="page-kodawari__bottombox__pic">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="">
		</div>
		<div class="page-kodawari__bottombox__text">
			<h3>見出し見出し</h3>
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
		</div>
		</div>

	</section>



	<!-- こだわり -->
	<section class="page-kodawari pd-btm">
		<h2 class="page-kodawari__title">こだわりその１</h2>
		<!-- 画像説明 -->
		<div class="page-kodawari-fristbox">
		<div class="page-kodawari-fristbox__pic">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="こだわりその１">
			<h3 class="page-kodawari-fristbox__pic__title">大見出し</h3>
		</div>
		<div class="page-kodawari-fristbox__textbox">
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
		</div>
		</div>



		<div class="display-f">

		</div>

	</section>
	</div>




<!-- ここまでコンテンツ -->
<?php get_footer(); ?>