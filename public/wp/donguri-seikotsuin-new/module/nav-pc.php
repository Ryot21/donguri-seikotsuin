

		<!-- ナビゲーション -->
		<nav class="pc-nav">

			<!-- ul -->
			<?php $args = array(
				'menu' => 'header-menu', //管理画面で作成したメニュー名
				'menu_class' => 'pc-nav__lists', //メニューを構成する<ul>タグのクラス名
				'container' => 'false', //<ul>タグを囲っている<div>タグについて
				'link_before'  => '<div class="pc-nav__lists__iconbox"></div><p class="pc-nav__lists__text">',//テキストの直前
				'link_after'      => '</p>',//テキストの直後
			);
				wp_nav_menu($args);
			?>
			<!-- // ul -->

		</nav>