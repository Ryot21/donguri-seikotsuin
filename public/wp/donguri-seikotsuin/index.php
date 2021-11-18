
<?php
/*
Template Name: TOP template
*/
	get_header();
?>





<!-- ここからコンテンツ -->
<div id="area-3" class="page-index l-container">

	<!-- 院内のこだわり -->
	<section class="kodawari">
		<h2 class="page-kotei__title arch">どんぐり施術の特徴</h2>
		<p class="page-index__text">
			筋肉の深層に潜り込み<br>
			『ゆっくり、深く、持続した圧』を<br class="SP-br">ピンポイントで加える独自の技術。<br>
			「揉む」と筋肉を傷つけやすく、<br class="SP-br">早い圧では力積が少ないので<br class="SP-br">緩みません。<br>
			プロの施術をぜひご体感ください。<br>
		</p>
		<div class="c-btn">
			<a href="/about/" class="c-btn-link">詳しくはこちら</a>
		</div>
	</section>

	<!-- 院内／スタッフ紹介 -->
	<section class="top-shoukai">
		<h2 class="page-kotei__title arch">院内の紹介</h2>

		<div class="top-shoukai-inner display-f">
			<!-- 1つ目 -->
			<div class="p-card">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
					<img class="p-card__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-2.jpg" alt="院内紹介その1">
				</div>

			</div>
			<!-- 2つ目 -->
			<div class="p-card">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-2" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その２">
					<img class="p-card__thumbnail-2" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-2.jpg" alt="院内紹介その2">
				</div>
			</div>
			<!-- 3つ目 -->
			<div class="p-card">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-3" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その３">
					<img class="p-card__thumbnail-3" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-2.jpg" alt="院内紹介その3">
				</div>
			</div>
		</div>


		<div class="c-btn">
			<a href="/introduction/" class="c-btn-link">詳しくはこちら</a>
		</div>
	</section>


    <!-- 院内／スタッフ紹介 -->
    <section class="top-blog">
		<h2 class="page-kotei__title arch">最近のブログ</h2>

		<ul class="top-blog-inner blog-secbox display-f">

			<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			<?php if(wp_is_mobile()): ?><!-- モバイルサイト向けの記述 -->
				<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => '6', // 表示件数の指定
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
		</ul>

		<div class="c-btn">
			<a href="/blog/" class="c-btn-link">詳しくはこちら</a>
		</div>
    </section>
</div>



<!-- ここまでコンテンツ -->
<?php get_footer(); ?>