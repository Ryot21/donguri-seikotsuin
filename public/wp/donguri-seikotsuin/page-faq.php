
<?php
/*
Template Name: FAQ template
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
				<h1 class="c-header__pic__title">よくある質問<br><span>F A Q</span></h1>
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

		<!-- お支払いについて -->
		<section id="faq01" class="page-faq">
			<h2 class="page-faq__title">お支払いについて</h2>
			<ul class="page-faq__wrap ">
			<!-- 一つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			<!-- 二つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			<!-- 三つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			</ul>
		</section>

		<!-- 交通事故施術について -->
		<section id="faq02" class="page-faq">
			<h2 class="page-faq__title">交通事故施術について</h2>
			<ul class="page-faq__wrap ">
			<!-- 一つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			<!-- 二つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			<!-- 三つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			</ul>
		</section>

		<!-- 訪問マッサージについて -->
		<section id="faq03" class="page-faq pd-btm">
			<h2 class="page-faq__title">訪問マッサージについて</h2>
			<ul class="page-faq__wrap ">
			<!-- 一つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			<!-- 二つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			<!-- 三つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">質問１</h3>
				<div class="page-faq-block__text">
					<p>用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明用語の説明。</p>

				</div>
				</section>
			</li>
			</ul>

		</section>
	</div>




<!-- ここまでコンテンツ -->
<?php get_footer(); ?>