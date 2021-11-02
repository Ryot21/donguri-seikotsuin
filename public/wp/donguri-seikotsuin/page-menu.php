
<?php
/*
Template Name: MENU template
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
					<h1 class="c-header__pic__title">メニュー / 料金表<br><span>MENU</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>

				<!-- ul -->
				<?php $args = array(
					'menu' => 'header-menu', //管理画面で作成したメニュー名
					'menu_class' => 'c-header__gnav', //メニューを構成する<ul>タグのクラス名
					'container' => 'false', //<ul>タグを囲っている<div>タグについて
					'link_before'  => '<div class="c-header__gnav__iconbox"></div><p class="c-header__gnav__text">',//テキストの直前
					'link_after'      => '</p>',//テキストの直後
				);
					wp_nav_menu($args);
				?>
				<!-- // ul -->


			</nav>
		</div>
	</header>



	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">
		<!-- メニュー１ -->
		<section class="page-menu pd-btm">
			<!-- <h2 class="page-menu__title">メニュー１</h2> -->
			<!-- 画像説明 -->
			<div class="page-menu-fristbox">
			<div class="page-menu-fristbox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="メニュー１">
				<h3 class="page-menu-fristbox__pic__title">深層指圧</h3>
			</div>
			<div class="page-menu-fristbox__menubox">
				<p class="page-menu-fristbox__menubox__text">
				どんぐりの施術でスタンダードな施術になります。<br class="PC-br">
				肩、腰、腕、足、身体中を独自の深い指圧で<br class="PC-br">
				通常のもみほぐしでは届かない深いところまでほぐします。<br class="PC-br">
				ゆっくり圧が入るのでもみ返しが起こりにくいのが特徴の一つにあります。<br class="PC-br">
				一度やってみると違いがわかるはずです。ぜひご実感ください。
				</p>
				<p class="page-menu-fristbox__menubox__text">
				こんな方にお勧め<br>
				<!-- &nbsp;<br> -->
				肩こり、腰痛、だるい、リラックス、日頃の疲れ、等の症状をお持ちの方<br>
				&nbsp;<br>
				</p>
				<!-- テーブル -->
				<table>
				<tbody>
					<tr>
					<td>施術（初回）</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<td>施術（2回目以降）</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<!-- <td></td>
					<td></td> -->
					</tr>
				</tbody>
				</table>
				<!--// テーブル -->
				<p>【 オプション 】</p>
				<!-- オプションテーブル -->
				<table>
				<tbody>
					<tr>
					<td>オプション１</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<td>オプション２</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<!-- <td></td>
					<td></td> -->
					</tr>
				</tbody>
				</table>
				<!--// オプションテーブル -->
				<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
			</div>
			</div>
			<!-- <h2 class="page-menu__title">メニュー１</h2> -->
			<!-- 画像説明 -->
			<div class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="メニュー１">
					<h3 class="page-menu-fristbox__pic__title">整体矯正</h3>
				</div>
			<div class="page-menu-fristbox__menubox">
				<p class="page-menu-fristbox__menubox__text">
				背骨、骨盤を中心に身体のバランスを調整し、身体本来の機能を引き出します。<br>
				スポーツ前後の調整や日頃のメンテナンスに効果的です。<br>
				身体のバランスを整えると筋肉も緩んでいきます。<br>
				深層指圧と併用することでより効果が得られますので<br>
				組み合わせていただくことをお勧めいたします。
				</p>
				<p class="page-menu-fristbox__menubox__text">
				こんな方にお勧め<br>
				<!-- &nbsp;<br> -->
				頑固な肩こり、腰痛、猫背、反り腰、左右差、歪みが気になる方<br>
				知り合いに方の位置が違うといわれたことがある方<br>
				スポーツ前、パフォーマンスを上げたい方<br>
				スポーツ後、日頃のメンテナンス等
				</p>
				<!-- テーブル -->
				<table>
				<tbody>
					<tr>
					<td>施術（初回）</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<td>施術（2回目以降）</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<!-- <td></td>
					<td></td> -->
					</tr>
				</tbody>
				</table>
				<!--// テーブル -->
				<p>【 オプション 】</p>
				<!-- オプションテーブル -->
				<table>
				<tbody>
					<tr>
					<td>オプション１</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<td>オプション２</td>
					<td>000円～0,000円</td>
					</tr>
					<tr>
					<!-- <td></td>
					<td></td> -->
					</tr>
				</tbody>
				</table>
				<!--// オプションテーブル -->
				<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
			</div>
			</div>


			<div class="display-f">

			</div>

		</section>
	</div>







<!-- ここまでコンテンツ -->
<?php get_footer(); ?>