
<!-- コラム、訪問マッサージ -->

	<li class="page-blog-threebox-list">
		<a href="<?php the_permalink(); ?>">
			<div class="page-blog-threebox-list__pic">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('catthumb'); ?>
				<?php else: ?>
					<img src="<?php bloginfo('template_url'); ?>/images/image_450x450.gif" alt="画像がありません。">
				<?php endif; ?>
			</div>
			<div class="page-blog-threebox-list--text">
				<p class="page-blog-threebox-list--text__date">
					<?php the_time('Y.m.d'); ?>
					<?php categories_blog_label() ?><!-- カテゴリー表示 -->
				</p>
				<h3 class="page-blog-threebox-list--text__title">
					<?php the_title(); ?>

					<?php wp_reset_postdata(); ?>
				</h3>
			</div>
		</a>
	</li>