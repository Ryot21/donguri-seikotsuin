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
		<!-- お知らせ -->
		<section class="page-blog pd-btm">
			<div class="page-blog-header">
				<h2 class="page-blog-header__title">お知らせ</h2>
				<div class="archive-btn">
					<a href="#">
						一覧
					</a>
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

			<?php get_template_part('module/pagination'); ?>
			<?php wp_reset_postdata(); ?>

		</section>

		<!-- コラム -->
		<section class="page-blog pd-btm">
			<div class="page-blog-header">
				<h2 class="page-blog-header__title">コラム</h2>
				<div class="archive-btn">
					<a href="#">
						一覧
					</a>
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
							'posts_per_page' => '2', // 表示件数の指定
							'category_name' => '', //表示したいカテゴリー名を入力
						);
					?>
				<?php else: ?><!-- PCサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '2', // 表示件数の指定
							'category_name' => 'column,accident', //表示したいカテゴリー名を入力
						);
					?>
				<?php endif; ?>

				<?php
					$wp_query->query( $my_posts );
					if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>

				<?php get_template_part('module/blog'); ?>
				<?php endwhile; endif; ?>

				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>

			<?php get_template_part('module/pagination'); ?>
			<?php wp_reset_postdata(); ?>

		</section>

		<!-- 訪問マッサージ -->
		<section class="page-blog pd-btm">
			<div class="page-blog-header">
				<h2 class="page-blog-header__title">訪問マッサージ</h2>
				<div class="archive-btn">
					<a href="#">
						一覧
					</a>
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
							'posts_per_page' => '2', // 表示件数の指定
							'category_name' => '', //表示したいカテゴリー名を入力
						);
					?>
				<?php else: ?><!-- PCサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '2', // 表示件数の指定
							'category_name' => '', //表示したいカテゴリー名を入力
						);
					?>
				<?php endif; ?>

				<?php
					$wp_query->query( $my_posts );
					if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>

				<?php get_template_part('module/blog'); ?>
				<?php endwhile; endif; ?>

				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

				<?php get_template_part('module/pagination'); ?>
				<?php wp_reset_postdata(); ?>

			</ul>

		</section>
	</div>







<!-- ここまでコンテンツ -->
<?php get_footer(); ?>