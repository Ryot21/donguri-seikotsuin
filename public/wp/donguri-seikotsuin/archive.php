<?php
/*
Template Name: BLOG template
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
					<h1 class="c-header__pic__title">ブログ<br><span>BLOG</span></h1>
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
		<!-- お知らせ -->
		<section class="page-blog">
			<div class="page-blog-header">
				<h2 class="page-blog-header__title">お知らせ</h2>
				<div class="archive-btn">
					<a href="<?php echo get_category_link('4');?>">一覧</a>
				</div>
			</div>
			<!-- 画像説明 -->
			<ul class="page-blog-fristbox">

			<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => '3', // 表示件数の指定
						'category_name' => 'news', //表示したいカテゴリー名を入力
					);
					$wp_query->query( $my_posts );
					if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>

				<?php get_template_part('module/news'); ?>
				<?php endwhile; endif; ?>

			<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

			</ul>
			<?php wp_reset_postdata(); ?>

		</section>

		<!-- コラム -->
		<section class="page-blog">
			<div class="page-blog-header">
				<h2 class="page-blog-header__title">ブログ</h2>
				<div class="archive-btn">
					<a href="<?php echo get_category_link('1');?>">一覧</a>
				</div>
			</div>
			
			<!-- 画像説明 -->
			<ul class="page-blog-secbox display-f">

				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				<?php if(wp_is_mobile()): ?><!-- モバイルサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '3', // 表示件数の指定
							'category_name' => 'blog', //表示したいカテゴリー名を入力
						);
					?>
				<?php else: ?><!-- PCサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '3', // 表示件数の指定
							'category_name' => 'blog', //表示したいカテゴリー名を入力
						);
					?>
				<?php endif; ?>

				<?php
					$wp_query->query( $my_posts );
					if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>

				<?php get_template_part('module/blog-sec'); ?>
				<?php endwhile; endif; ?>

				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>

			<?php wp_reset_postdata(); ?>

		</section>

		<!-- 交通事故+訪問マッサージ -->
		<section class="page-blog pd-btm">
			<div class="page-blog-header">
				<h2 class="page-blog-header__title">交通事故施術<br class="SP-br"> ＆ 訪問マッサージ</h2>
				<div class="archive-btn">
					<a href="<?php echo get_category_link('3,4');?>">一覧</a>
				</div>
			</div>
			<!-- 画像説明 -->
			<ul class="page-blog-secbox">
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

				<?php if(wp_is_mobile()): ?><!-- モバイルサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '3', // 表示件数の指定
							'category_name' => 'accident,visit', //表示したいカテゴリー名を入力
						);
					?>
				<?php else: ?><!-- PCサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '3', // 表示件数の指定
							'category_name' => 'accident,visit', //表示したいカテゴリー名を入力
						);
					?>
				<?php endif; ?>

				<?php
					$wp_query->query( $my_posts );
					if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>

				<?php get_template_part('module/blog-sec'); ?>
				<?php endwhile; endif; ?>

				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

				<?php wp_reset_postdata(); ?>

			</ul>

		</section>

	</div>







<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>