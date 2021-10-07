
<!-- どんぐり整骨院からのお知らせ -->

	<li class="page-blog-fristbox-list">
		<a href="<?php the_permalink(); ?>">
			<div class="page-blog-fristbox-list--text">
				<p class="page-blog-fristbox-list--text__date"><?php the_time('Y.m.d'); ?></p>
				<h2 class="page-blog-fristbox-list--text__title">
					<?php the_title(); ?>
					<?php categories_news_label() ?><!-- カテゴリー表示 -->

				</h2>
			</div>
		</a>
	</li>