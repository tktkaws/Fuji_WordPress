<?php


/* アイキャッチ画像を使用 */
add_theme_support('post-thumbnails');

/*==============================================================
カスタム投稿
==============================================================*/
// add_action('init', function () {
//     register_post_type('item', [
//         'label' => '商品',
//         'public' => true,
//         'has_archive' => true,
//         'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
//         'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
//             'title',  //タイトル
//             'editor',  //本文の編集機能
//             'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
//             'excerpt',  //抜粋
//             'custom-fields', //カスタムフィールド
//             'revisions'  //リビジョンを保存
//         ),
//     ]);
// });

add_action('init', function () {
    register_post_type('news', [
        'label' => '新着情報',
        'public' => true, // パブリックにするかどうか。初期値: false
        'publicly_queryable' => true, // post_typeクエリが実行可能かどうか。初期値: public引数の値
        'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。初期値: public引数の値
        'query_var' => true, // query_varキーの名前。初期値: true - $post_typeの名前
        'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。初期値: true
        'capability_type' => 'post', // 権限の指定。初期値: 'post'
        'has_archive' => true, // アーカイブページを有効にするかどうか。初期値: false
        'hierarchical' => true, // 階層構造を持つかどうか。初期値: false
        'menu_position' => 5, // メニューの表示位置。初期値: null - コメントの下
        'supports' => ['title', 'thumbnail', 'editor'], // 投稿できる項目。初期値: titleとeditor
        'menu_icon' => 'dashicons-welcome-write-blog',
    ]);
});

// add_action('init', function () {
//     register_post_type('works', [
//         'label' => '施工実績',
//         'public' => true, // パブリックにするかどうか。初期値: false
//         'publicly_queryable' => true, // post_typeクエリが実行可能かどうか。初期値: public引数の値
//         'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。初期値: public引数の値
//         'query_var' => true, // query_varキーの名前。初期値: true - $post_typeの名前
//         'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。初期値: true
//         'capability_type' => 'post', // 権限の指定。初期値: 'post'
//         'has_archive' => true, // アーカイブページを有効にするかどうか。初期値: false
//         'hierarchical' => true, // 階層構造を持つかどうか。初期値: false
//         'menu_position' => 5, // メニューの表示位置。初期値: null - コメントの下
//         'supports' => ['title', 'thumbnail', 'editor'], // 投稿できる項目。初期値: titleとeditor
//         'menu_icon' => 'dashicons-hammer',
//     ]);
// });
add_action('init', 'create_works');
function create_works()
{
    register_post_type('works', [
        'labels' => [
            'name' => '施工実績',
            'singular_name' => '施工実績',
        ],
        'public' => true, // パブリックにするかどうか。初期値: false
        'publicly_queryable' => true, // post_typeクエリが実行可能かどうか。初期値: public引数の値
        'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。初期値: public引数の値
        'query_var' => true, // query_varキーの名前。初期値: true - $post_typeの名前
        'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。初期値: true
        'capability_type' => 'post', // 権限の指定。初期値: 'post'
        'has_archive' => true, // アーカイブページを有効にするかどうか。初期値: false
        'hierarchical' => true, // 階層構造を持つかどうか。初期値: false
        'menu_position' => 5, // メニューの表示位置。初期値: null - コメントの下
        'supports' => ['title', 'thumbnail'], // 投稿できる項目。初期値: titleとeditor
        'menu_icon' => 'dashicons-hammer',
    ]);
}



/*==============================================================
MW WP FORM validation
・お問い合わせフォームのエラー文カスタム
==============================================================*/
function my_contact_validation_rule($Validation, $data, $Data)
{
    $Validation->set_rule('type', 'required', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('company', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('name', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('kana', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('email', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('tel', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('zip', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('pref', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('city', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('town', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('chance', 'required', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('message', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    return $Validation;
}
add_filter(
    'mwform_validation_mw-wp-form-42',
    'my_contact_validation_rule',
    10,
    3
);

/*==============================================================
MW WP FORM validation
・エントリーフォームのエラー文カスタム
==============================================================*/
function my_entry_validation_rule($Validation, $data, $Data)
{
    $Validation->set_rule('name', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('kana', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('birthday', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('email', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('tel', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('zip', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('pref', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('city', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('town', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('position', 'required', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('file', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    $Validation->set_rule('message', 'noEmpty', [
        'message' => '必須項目となっています',
    ]);
    return $Validation;
}
add_filter(
    'mwform_validation_mw-wp-form-47',
    'my_entry_validation_rule',
    10,
    3
);


/*【管理画面】ACF Options Page の設定 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

/*==============================================================
Add ACF option page
・カスタムフィールドのオプションページ設定
==============================================================*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => '採用',
        'menu_title' => '採用',
        'menu_slug' => 'acfCustom',
        'capability' => 'edit_posts',
        'position' => 9,
        'redirect' => false,
        'icon_url' => 'dashicons-id'
    ));
}

/*==============================================================
カスタム投稿タイプのパーマリンクをIDに
・新着情報
==============================================================*/
function news_post_type_link($link, $post)
{
    if ($post->post_type === 'news') {
        return home_url('/news/' . $post->ID);
    } else {
        return $link;
    }
}
add_filter('post_type_link', 'news_post_type_link', 1, 2);

function news_rewrite_rules_array($rules)
{
    $new_rewrite_rules = array(
        'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
    );
    return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'news_rewrite_rules_array');


/*==============================================================
カスタム投稿タイプのパーマリンクをIDに
・施工実績
==============================================================*/
function works_post_type_link($link, $post)
{
    if ($post->post_type === 'works') {
        return home_url('/works/' . $post->ID);
    } else {
        return $link;
    }
}
add_filter('post_type_link', 'works_post_type_link', 1, 2);

function works_rewrite_rules_array($rules)
{
    $new_rewrite_rules = array(
        'works/([0-9]+)/?$' => 'index.php?post_type=works&p=$matches[1]',
    );
    return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'works_rewrite_rules_array');



/*==============================================================
Pagination
・News,Works一覧ページのページャー
==============================================================*/
function pagination($pages = '', $paged, $range = 1)
{
    $showitems = $range * 1 + 1;
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if (
        $pages == ''
    ) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (
        1 !== $pages
    ) {
        $img_pass = get_template_directory_uri();


        if (
            $paged > 1
        ) {
            echo '<a href="',
                get_pagenum_link($paged - 1),
                '" class="c-pagination__arrow -prev"><span class="arrow"></span>',


                '</a>';
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                if ($paged === $i) {
                    echo '<a href="" class="c-pagination__numbers -current">', $i, '</a>';
                } else {
                    echo '<a href="', get_pagenum_link($i), '" class="c-pagination__numbers">', $i, '</a>';
                }
            }
        }
        if ($paged + 2 < $pages) {
            echo '<a href="" class="c-pagination__numbers -ellipsis">...</a>';
            echo '<a href="', get_pagenum_link($pages), '" class="c-pagination__numbers">', $pages, '</a>';
        }
        if ($paged < $pages) {
            echo '<a href="', get_pagenum_link($paged + 1), '" class="c-pagination__arrow -next"><span class="arrow"></span>', '</a>';
        }
    }
}