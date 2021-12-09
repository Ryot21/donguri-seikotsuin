<?php
	get_header('page');
?>








<!-- 紙 -->
<div class="l-paper">
	<header id="header" class="l-header">
		<div class="l-header__wrap">
			<div class="c-header">
				<!-- 固定ページ > ヘッダー -->
				<div class="c-header__pic">
					<h1 class="c-header__pic__title">訪問マッサージ<br><span>VISITMASSAGE</span></h1>
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
		<!-- コラム -->
		<section class="page-blog pd-btm">
			<!-- <div class="page-blog-header">
				<h2 class="page-blog-header__title">訪問マッサージ</h2>
			</div> -->
			
			<!-- 画像説明 -->
			<ul class="page-blog-secbox display-f">

				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				<?php if(wp_is_mobile()): ?><!-- モバイルサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '6', // 表示件数の指定
							'category_name' => 'visit', //表示したいカテゴリー名を入力
						);
					?>
				<?php else: ?><!-- PCサイト向けの記述 -->
					<?php
						$wp_query = new WP_Query();
						$my_posts = array(
							'post_type' => 'post',
							'posts_per_page' => '9', // 表示件数の指定
							'category_name' => 'visit', //表示したいカテゴリー名を入力
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

	</div>







<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>