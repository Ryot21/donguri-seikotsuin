<?php
	get_header('page');
?>








<!-- 紙 -->
<div class="l-paper pd-btm">
	<header id="header" class="l-header">
		<div class="l-header__wrap">
			<div class="c-header">
				<!-- 固定ページ > ヘッダー -->
				<div class="c-header__pic">
					<h1 class="c-header__pic__title">お知らせ<br><span>NEWS</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>


				<?php get_template_part('module/nav-pc'); ?>

			</div>
		</div>
	</header>

	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">
		<!-- お知らせ -->
		<section class="page-blog">
			<!-- <div class="page-blog-header">
				<h2 class="page-blog-header__title">お知らせ</h2>
			</div> -->
			<!-- 画像説明 -->
			<ul class="page-blog-fristbox">

			<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => '10', // 表示件数の指定
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

	</div>







<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>