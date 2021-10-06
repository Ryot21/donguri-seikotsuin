
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
		<h2 class="page-index__title">お客様へのご案内</h2>
		<p class="page-index__text">テキストテキストテキストテキストテキストテキストテキストテキスト<br>
		テキストテキストテキストテキストテキストテキストテキストテキスト<br>
		テキストテキストテキストテキストテキストテキストテキストテキスト<br>
		テキストテキストテキストテキストテキストテキストテキストテキスト<br>
		テキストテキストテキストテキストテキストテキストテキストテキスト<br>
		テキストテキストテキストテキストテキストテキストテキスト。</p>
		<div class="c-btn">
			<a href="#" class="c-btn-link">詳しくはこちら</a>
		</div>
	</section>

	<!-- 院内／スタッフ紹介 -->
	<section class="shoukai">
		<h2 class="page-index__title">院内の紹介</h2>

		<div class="display-f">
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
			<a href="/about/" class="c-btn-link">詳しくはこちら</a>
		</div>
	</section>


    <!-- 院内／スタッフ紹介 -->
    <section class="blog">
		<h2 class="page-index__title">最近のブログ</h2>
		
		<div class="display-f">
			<!-- 1つ目 -->
			<div class="blog-box">
				<div class="blog-box__thumbnail">
					<img class="blog-box__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
				</div>
				<div class="blog-box__textbox">
					<p class="blog-box__day">2021.10.01</p>
					<h2 class="blog-box__title">タイトルタイトル</h2>
					<div class="blog-box__detail"></div>
				</div>
			</div>
			<!-- 2つ目 -->
			<div class="blog-box">
				<div class="blog-box__thumbnail">
					<img class="blog-box__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
				</div>
				<div class="blog-box__textbox">
					<p class="blog-box__day">2021.10.01</p>
					<h2 class="blog-box__title">タイトルタイトル</h2>
					<div class="blog-box__detail"></div>
				</div>
			</div>
			<!-- 3つ目 -->
			<div class="blog-box">
				<div class="blog-box__thumbnail">
					<img class="blog-box__thumbnail-1" src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
				</div>
				<div class="blog-box__textbox">
					<p class="blog-box__day">2021.10.01</p>
					<h2 class="blog-box__title">タイトルタイトル</h2>
					<div class="blog-box__detail"></div>
				</div>
			</div>
		</div>


		<div class="c-btn">
			<a href="#" class="c-btn-link">詳しくはこちら</a>
		</div>
    </section>
</div>



<!-- ここまでコンテンツ -->
<?php get_footer(); ?>