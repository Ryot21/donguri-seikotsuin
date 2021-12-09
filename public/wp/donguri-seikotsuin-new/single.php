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
						<h1 class="c-header__pic__title">ブログ<br><span>BLOG</span></h1>
						<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-contact.jpeg" alt="サイトヘッダー">
						<!-- パンくず -->
						<?php get_template_part('module/breadcrumb'); ?>
					</div>

					<?php get_template_part('module/nav-pc'); ?>

				</div>
			</div>
		</header>

		<!-- ここからコンテンツ -->
		<div id="area-3" class="page l-container">

			<?php if ( have_posts() ): while ( have_posts() ): the_post() ?> 
				<section class="page-blog pd-btm">
					<div class="page-blog-header">
						<h2 class="page-blog-header__ptitle"><?php the_title() ?></h2>
					</div>
					<div class="page-blog-body">
						<time class="page-blog-body__time">
							<?php the_time('Y/m/d') ?>
						<time> 
						<?php the_content() ?>
					</div>
				</section>
			<?php endwhile; endif ?> 

		</div>




<?php 
	get_footer('page');
?>