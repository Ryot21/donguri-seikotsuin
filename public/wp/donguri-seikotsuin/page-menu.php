
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
					<h1 class="c-header__pic__title">メニュー<br><span>MENU</span></h1>
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-huuhu-1-scaled.jpg" alt="メニューページ">
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

		<ul class="menu-lists">
			<!-- 投稿されているWORKSの全てを表示 -->
			<li class="menu-list">
				<a href="#menu1">深層指圧</a>
			</li>
			<li class="menu-list">
				<a href="#menu2">整体矯正</a>
			</li>
			<li class="menu-list">
				<a href="#menu3">鍼治療</a>
			</li>
			<li class="menu-list">
				<a href="#menu4">電気治療</a>
			</li>
		</ul>

		<div class="page-menu pd-btm">
		<!-- 深層指圧 -->
			<div id="menu1" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-sinsou-scaled-e1637744017827.jpg" alt="深層指圧">
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
					<!-- オススメ -->
					<p><strong>こんな方にお勧め</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						肩こり、腰痛、だるい、リラックス、日頃の疲れ<br class="PC-br">などの症状をお持ちの方<br>
					</p>
					<!-- 料金・テーブル -->
					<p><strong>料金プラン</strong></p>
					<table>
						<tbody>
							<tr>
							<td>30分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>60分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>90分</td>
							<td>000円～0,000円</td>
							</tr>
						</tbody>
					</table>
					<!--// オプションテーブル -->
					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>
			</div>
		<!-- 整体矯正 -->
			<div id="menu2" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-seitai-scaled-e1637743834598.jpg" alt="整体矯正">
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
					<!-- オススメ -->
					<p><strong>こんな方にお勧め</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						頑固な肩こり、腰痛、猫背、反り腰、左右差、歪みが気になる方<br>
						知り合いに方の位置が違うといわれたことがある方<br>
						スポーツ前、パフォーマンスを上げたい方<br>
						スポーツ後、日頃のメンテナンス等
					</p>
					<!-- 料金・テーブル -->
					<p><strong>料金プラン</strong></p>
					<table>
						<tbody>
							<tr>
							<td>30分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>60分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>90分</td>
							<td>000円～0,000円</td>
							</tr>
						</tbody>
					</table>
					<!--// オプションテーブル -->
					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>
			</div>
		<!-- 鍼治療 -->
			<div id="menu3" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-hari-scaled-e1637743383731.jpg" alt="鍼治療">
					<h3 class="page-menu-fristbox__pic__title">鍼治療</h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p class="page-menu-fristbox__menubox__text">
						日本製の細い鍼を使用しピンポイントの痛みや頑固なコリ、ハリにお勧めです。<br>
						また痛みの改善だけではなく体質改善（ストレス、生理不順自律神経の乱れなど）を促し、<br>
						体調を整えていくことも目的の一つにあります。<br>
						初めて鍼を受けられる方はまず最も細い鍼から施術を行います。<br>
						こちらもまた、深層指圧と併用することでより効果が得られますので<br>
						組み合わせていただくことをお勧めいたします。
					</p>
					<!-- オススメ -->
					<p><strong>こんな方にお勧め</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						頑固な肩こり、腰痛、頭痛、ぎっくり腰、寝違え、神経痛が気になる方<br>
						ストレスを日頃感じている方<br>
						長時間のデスクワークで眼精疲労が溜まった方<br>
						鍼に興味がある方
					</p>
					<!-- 料金・テーブル -->
					<p><strong>料金プラン</strong></p>
					<table>
						<tbody>
							<tr>
							<td>30分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>60分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>90分</td>
							<td>000円～0,000円</td>
							</tr>
						</tbody>
					</table>
					<!--// オプションテーブル -->
					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>
			</div>
		<!-- 電気治療 -->
			<div id="menu4" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-denki-scaled-e1637743587429.jpg" alt="電気治療">
					<h3 class="page-menu-fristbox__pic__title">電気治療</h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p class="page-menu-fristbox__menubox__text">
						イトーES5000という最新の立体動態波・ハイボルテージ・微弱電流機器を設置しています。<br>
						立体的な電流のうねりが生体深部を広範囲に刺激する<br>
						立体動態波モード、マイクロカレントが立体的に行える3D MENSモード、<br>
						筋肉に立体的な刺激を与える3D EMSモードを搭載。<br>
						その他にも、ハイボルテージモード、EMSモード、MCRモードを加え<br>
						神経性の痛みから、シビレ、筋疲労、炎症、外傷症状にも非常に効果が高いです。<br>
						大リーガーの投手でも使用している選手が多く評価もとても高い治療機械です。
					</p>

					<!-- 料金・テーブル -->
					<p><strong>料金プラン</strong></p>
					<table>
						<tbody>
							<tr>
							<td>30分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>60分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>90分</td>
							<td>000円～0,000円</td>
							</tr>
						</tbody>
					</table>
					<!--// オプションテーブル -->
					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>
				<!-- 料金・テーブル -->
				<p class="page-menu-secbox--strong"><strong>代表的な治療をご紹介！</strong></p>
				<div class="display-f">
					<div id="menu5" class="page-menu-secbox">

						<h3 class="page-menu-secbox__title">3D干渉電流刺激療法</h3>
						<div class="page-menu-secbox__menubox">
							<p class="page-menu-secbox__menubox__text">
								3対の異なる高い周波数の電流が生体内部で干渉し、立体的で複雑な電流のうねりを発生させます。6点の電極から流れる電流が3次元的に干渉することで、生体深部の筋や神経にも刺激を与えることができます。
							</p>
							<!-- オススメ -->
							<p><strong>こんな方にお勧め</strong></p>
							<p class="page-menu-fristbox__menubox__text">
								頸椎椎間板ヘルニアで手に痺しびれがある方<br>
								坐骨神経痛で足にしびれがある方<br>
								骨折や捻挫のリハビリをしたい方<br>
								ぎっくり腰を早く治したい<br>
								...etc
							</p>
						</div>
					</div>
					<div id="menu6" class="page-menu-secbox">

					<h3 class="page-menu-secbox__title">ハイボルテージ治療</h3>
					<div class="page-menu-secbox__menubox">
						<p class="page-menu-secbox__menubox__text">
							他の電気治療に比べ、身体の奥深い患部へのアプローチが出来るため、とても即効性が高く、変化をその場で体感しやすいのが特徴です。強い痛みを早くとりたい、症状の変化がみられない…とうでお悩みの方にお勧めです。
						</p>
						<!-- オススメ -->
						<p><strong>こんな方にお勧め</strong></p>
						<p class="page-menu-fristbox__menubox__text">
							ぎっくり腰、寝違え、捻挫、四十肩･五十肩、ひざの痛み、<br>
							足底筋膜炎、シンスプリントなどに効果的です。<br>
						</p>
					</div>
				</div>
			</div>
			</div>


		</div>
	</div>







<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>