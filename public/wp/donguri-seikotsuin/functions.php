<?php


// アイキャッチ画像 追加機能-----------------------------------------
		add_theme_support('post-thumbnails');
// グローバルナビ　カスタムナビ機能-----------------------------------------
		add_theme_support('menus');

// WPのバージョン情報表示を停止  -----------------------------------------------------------------
		//更新通知を管理者権限のみに表示
		function update_nag_admin_only() {
			if ( ! current_user_can( 'administrator' ) ) {
				remove_action( 'admin_notices', 'update_nag', 3 );
			}
		}
		add_action( 'admin_init', 'update_nag_admin_only' );



// グローバルナビで現在地にクラスを付与する-------------------------------------------
		function make_menu_current( $classes, $item ) {
			/*
			下記のパターンの時に'current-blog'を付与する。
			1.現在表示している投稿タイプ名が「post(スタッフブログ)かつ詳細ページ」の場合、
			2.現在表示している投稿タイプ名が「post(スタッフブログ)かつカテゴリー別の一覧ページ」の場合
			*/
			if( get_post_type() === 'post' && is_single() || 'post' && is_category() )  {
					$classes[] = 'current-blog';
			}
			$classes = array_unique( $classes );
			return $classes;
		}
		add_filter( 'nav_menu_css_class', 'make_menu_current', 10, 2 );


// ページタイトル　デフォルトで吐き出せれる『ー』から『 | 』に変更---------------------------
		function wp_document_title_separator( $separator ) {
			$separator = '|';
			return $separator;
		}
		add_filter( 'document_title_separator', 'wp_document_title_separator' );

//管理画面 「SVGをアップロード」-----------------------------------------------------
		function add_file_types_to_uploads($file_types){
			$new_filetypes = array();
			$new_filetypes['svg'] = 'image/svg+xml';
			$file_types = array_merge($file_types, $new_filetypes );
			return $file_types;
		}
		add_action('upload_mimes', 'add_file_types_to_uploads');


// jquery指定
		function my_scripts_method(){
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js');
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'my_scripts_method');

// WP PAGENAVI  -----------------------------------------------------------------------
		// change current class
		function custom_wp_pagenavi_class_current( $class_name ) {
			return 'p-pagination_count p-pagination_current';
		}
		add_filter( 'wp_pagenavi_class_current', 'custom_wp_pagenavi_class_current' );

		// change previous post links class
		function custom_wp_pagenavi_class_previouspostslink( $class_name ) {
			return 'p-pagination_arrow p-pagination_arrow__prev';
		}
		add_filter( 'wp_pagenavi_class_previouspostslink', 'custom_wp_pagenavi_class_previouspostslink' );

		// change next post links class
		function custom_wp_pagenavi_class_nextpostslink( $class_name ) {
			return 'p-pagination_arrow p-pagination_arrow__next';
		}
		add_filter( 'wp_pagenavi_class_nextpostslink', 'custom_wp_pagenavi_class_nextpostslink' );
		// change next post links class
		function custom_wp_pagenavi_class_page( $class_name ) {
			return 'p-pagination_count';
		}
		add_filter( 'wp_pagenavi_class_page', 'custom_wp_pagenavi_class_page' );

// アイキャッチ画像を管理画面に表示 ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
		// 列の追加
		if ( ! function_exists( 'add_custom_columns_for_thumb' ) ) {
			function add_custom_columns_for_thumb( $columns ) {
				$columns['thumbnail'] = 'アイキャッチ画像';
				return $columns;
			}
		}
		add_filter( 'manage_posts_columns', 'add_custom_columns_for_thumb');
		add_filter( 'manage_pages_columns', 'add_custom_columns_for_thumb' );
		// 内容の表示
		if ( ! function_exists( 'output_custom_columns_for_thumb' ) ) {
			function output_custom_columns_for_thumb( $column_name, $post_id ) {
				if ( 'thumbnail' === $column_name ) {
					$thumb_img = get_the_post_thumbnail( $post_id, 'thumbnail' );
					echo $thumb_img ?: 'アイキャッチ画像が設定されていません';
				}
			}
		}
		add_action( 'manage_posts_custom_column', 'output_custom_columns_for_thumb', 10, 2 );
		add_action( 'manage_pages_custom_column', 'output_custom_columns_for_thumb', 10, 2 );

// 管理画面「投稿 ⇨ お知らせ＋ブログ」に変更　ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
		function Change_menulabel() {
			global $menu;
			global $submenu;
			$name = 'お知らせ+ブログ';
			$menu[5][0] = $name;
			$submenu['edit.php'][5][0] = $name.'一覧';
			$submenu['edit.php'][10][0] = '新しい'.$name;
		}
		function Change_objectlabel() {
			global $wp_post_types;
			$name = 'お知らせ+ブログ';
			$labels = &$wp_post_types['post']->labels;
			$labels->name = $name;
			$labels->singular_name = $name;
			$labels->add_new = _x('追加', $name);
			$labels->add_new_item = $name.'の新規追加';
			$labels->edit_item = $name.'の編集';
			$labels->new_item = '新規'.$name;
			$labels->view_item = $name.'を表示';
			$labels->search_items = $name.'を検索';
			$labels->not_found = $name.'が見つかりませんでした';
			$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
		}
		add_action( 'init', 'Change_objectlabel' );
		add_action( 'admin_menu', 'Change_menulabel' );


// お知らせ　カテゴリー [カラー+表示] 設定------------------
		function categories_news_label() {// 呼び出すためのラベルを設定
			$cats = get_the_category();
			if(!empty($cats)){
				if(!is_wp_error($cats)){
					foreach($cats as $cat){
						$cat_link = get_category_link($cat->term_id);
						$cat_name = $cat->name;
						$cat_id = $cat->cat_ID;
						$cat_color = 'category_'.$cat_id;
						$back_color = get_field('acf_taxonomy_color',$cat_color);// 背景色
						$txt_color = get_field('acf_taxonomy_text_color',$cat_color);// テキストカラー
						echo '<span class="category-news-tag" style="background-color:'.$back_color.';color:'.$txt_color.';">'.$cat_name.'</span>';
					}
				}
			}
		}

// ブログ　カテゴリー [カラー+表示] 設定------------------
		function categories_blog_label() {// 呼び出すためのラベルを設定
			$cats = get_the_category();
			if(!empty($cats)){
				if(!is_wp_error($cats)){
					foreach($cats as $cat){
						$cat_link = get_category_link($cat->term_id);
						$cat_name = $cat->name;
						$cat_id = $cat->cat_ID;
						$cat_color = 'category_'.$cat_id;
						$back_color = get_field('acf_taxonomy_color',$cat_color);// 背景色
						$txt_color = get_field('acf_taxonomy_text_color',$cat_color);// テキストカラー
						echo '<span class="category-blog-tag" style="background-color:'.$back_color.';color:'.$txt_color.';">'.$cat_name.'</span>';
					}
				}
			}
		}

// WordPressでデバイスにごとに表示内容を変更するーーーーーーーーーーーーーーーーーーーーーーーーーーーー
// <wp_is_mobile>が記述している部分を<is_mobile>に書き換えるだけで、タブレットをモバイル端末から除外する事ができる。
		function is_mobile() { //スマホを認識させる。
			$useragents = array(
				'iPhone',          // iPhone
				'iPod',            // iPod touch
				'^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
				'dream',           // Pre 1.5 Android
				'CUPCAKE',         // 1.5+ Android
				'blackberry9500',  // Storm
				'blackberry9530',  // Storm
				'blackberry9520',  // Storm v2
				'blackberry9550',  // Storm v2
				'blackberry9800',  // Torch
				'webOS',           // Palm Pre Experimental
				'incognito',       // Other iPhone browser
				'webmate'          // Other iPhone browser
			);
			$pattern = '/'.implode('|', $useragents).'/i';
			return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
		}

		
?>