
<?php
/*
Template Name: TOP template
*/
	get_header();
?>





<!-- ここからコンテンツ -->
<div id="area-3" class="page-index l-container">

	<!-- 院内のこだわり -->
	<!-- <section class="kodawari">
		<h2 class="page-kotei__title arch">どんぐり整骨院とは</h2>
		<p class="page-index__text">
			どんぐりは夫婦２人で作り出す<br class="SP-br">
			あたたかな雰囲気でお迎えします。<br>
			地域の皆様の健康と笑顔を<br class="SP-br">
			サポートします。
		</p>

		<div class="c-btn">
			<a href="/about/" class="c-btn-link">詳しくはこちら</a>
		</div>
	</section> -->

	<!-- 院内／スタッフ紹介 -->

	<section class="kodawari">
		<h2 class="page-kotei__title arch">どんぐり整骨院とは</h2>
		<p class="page-index__text">
			どんぐりは夫婦２人で作り出す<br class="SP-br">
			あたたかな雰囲気でお迎えします。<br>
			地域の皆様の健康と笑顔を<br class="SP-br">
			サポートします。
		</p>
		<div class="top-shoukai-inner display-f">
			<div class="p-card p-card__1">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-1" src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-michi-2-scaled-e1637667264159.jpg" alt="下山口駅 駅前">
					<img class="p-card__thumbnail-1" src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-michi-1-scaled-e1637666963939.jpg" alt="下山口駅">
				</div>

			</div>
			<div class="p-card p-card__2">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-2" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その３">
					<img class="p-card__thumbnail-2" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-2.jpg" alt="院内紹介その3">
				</div>
			</div>
			<div class="p-card p-card__3">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-3" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="どんぐり整骨院 外観">
					<img class="p-card__thumbnail-3" src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-huuhu-scaled-e1637669783207.jpg" alt="佐藤夫婦">
				</div>
			</div>
		</div>


		<div class="c-btn">
			<a href="/introduction/" class="c-btn-link">詳しくはこちら</a>
		</div>
	</section>


	<!-- <section class="top-shoukai">
		<h2 class="page-kotei__title arch">院内の紹介</h2>

		<div class="top-shoukai-inner display-f">
			<div class="p-card">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-1" src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-michi-2-scaled-e1637667264159.jpg" alt="下山口駅 駅前">
					<img class="p-card__thumbnail-1" src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-michi-1-scaled-e1637666963939.jpg" alt="下山口駅">
				</div>

			</div>
			<div class="p-card">
				<div class="p-card__thumbnail">
					<img class="p-card__thumbnail-2" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その２">
					<img class="p-card__thumbnail-2" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-2.jpg" alt="院内紹介その2">
				</div>
			</div>
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
	</section> -->


    <!-- 院内／スタッフ紹介 -->
    <section class="top-blog kodawari">
		<h2 class="page-kotei__title arch">最近のブログ</h2>

		<ul class="top-blog-inner blog-secbox display-f">

			<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			<?php if(wp_is_mobile()): ?><!-- モバイルサイト向けの記述 -->
				<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => '3', // 表示件数の指定
						'category_name' => '', //表示したいカテゴリー名を入力
					);
				?>
			<?php else: ?><!-- PCサイト向けの記述 -->
				<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => '3', // 表示件数の指定
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