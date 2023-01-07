<?php

/* style.min.cssを無効化 */
function mytheme_enqueue()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

add_action('wp_enqueue_scripts', 'remove_classic_theme_style');
function remove_classic_theme_style()
{
    wp_dequeue_style('classic-theme-styles');
}


/* アイキャッチ画像を使用 */
add_theme_support('post-thumbnails');

/*==============================================================
カスタム投稿
==============================================================*/

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
  CSS/JS
  ・css/javascriptファイルの読み込み
==============================================================*/
function add_files()
{

    /* WordPress提供のjquery.jsを読み込まない */
    wp_deregister_script('jquery');

    /* jQueryの読み込み */
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        '',
        '',
        false
    );

    /* gsap.min.js */
    wp_enqueue_script(
        'gsap',
        get_stylesheet_directory_uri() . '/assets/js/gsap.min.js',
        ['jquery'],
        '1.0.0',
        true
    );

    /* ScrollTrigger.min.js */
    wp_enqueue_script(
        'scrollTrigger',
        get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js',
        ['jquery'],
        '1.0.0',
        true
    );

    /* 共通のJSファイル */
    wp_enqueue_script(
        'main',
        get_stylesheet_directory_uri() . '/assets/js/common.bundle.js',
        ['jquery'],
        '1.0.0',
        true
    );

    /* IEでobject-fitプロパティを機能させる */
    wp_enqueue_script(
        'ofi',
        'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js',
        ['jquery'],
        '1.0.0',
        true
    );

    /* IEでpictureタグを機能させる */
    wp_enqueue_script(
        'polyfill',
        'https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement',
        ['jquery'],
        '1.0.0',
        true
    );

    /* トップページで読み込ませるJSファイル */
    if (is_home() || is_front_page()) {
        wp_enqueue_script(
            'swiper',
            get_stylesheet_directory_uri() . '/assets/js/swiper.min.js',
            ['jquery'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'splide',
            get_stylesheet_directory_uri() . '/assets/js/splide.min.js',
            ['jquery'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'home',
            get_stylesheet_directory_uri() . '/assets/js/top.bundle.js',
            ['jquery'],
            '1.0.0',
            true
        );
        /* News詳細ページで読み込むJSファイル */
    } elseif (is_singular('news')) {
        wp_enqueue_script(
            'clipboard',
            'https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js',
            ['jquery'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'news',
            get_stylesheet_directory_uri() . '/assets/js/newsdetail.bundle.js',
            ['jquery'],
            '1.0.0',
            true
        );
        /* Recruitページで読み込むJSファイル */
    } elseif (is_page('recruit')) {
        wp_enqueue_script(
            'recruit',
            get_stylesheet_directory_uri() . '/assets/js/recruit.bundle.js',
            ['jquery'],
            '1.0.0',
            true
        );
        /* Serviceページで読み込むJSファイル */
    } elseif (is_page('service')) {
        wp_enqueue_script(
            'service',
            get_stylesheet_directory_uri() . '/assets/js/service.bundle.js',
            ['jquery'],
            '1.0.0',
            true
        );
        /* Companyページで読み込むJSファイル */
    } elseif (is_page('company')) {
        wp_enqueue_script(
            'googleapi',
            get_stylesheet_directory_uri() . '/assets/js/mapMarker.js',
            ['jquery'],
            '1.0.0',
            true
        );
        /* Contactページで読み込むJSファイル */
    } elseif (is_page('contact')) {
        wp_enqueue_script(
            'contactAjax',
            'https://ajaxzip3.github.io/ajaxzip3.js',
            ['jquery'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'autoZip',
            get_stylesheet_directory_uri() . '/assets/js/autoZip.js',
            ['jquery'],
            '1.0.0',
            true
        );

        /* Entryページで読み込むJSファイル */
    } elseif (is_page('entry')) {
        wp_enqueue_script(
            'entryAjax',
            'https://ajaxzip3.github.io/ajaxzip3.js',
            ['jquery'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'autoZip',
            get_stylesheet_directory_uri() . '/assets/js/autoZip.js',
            ['jquery'],
            '1.0.0',
            true
        );

        /* Worksページで読み込むJSファイル */
        // } elseif (is_archive('works')) {
        //     wp_enqueue_script(
        //         'works',
        //         get_stylesheet_directory_uri() . '/assets/js/works.bundle.js',
        //         ['jquery'],
        //         '1.0.0',
        //         true
        //     );
        /* Works詳細ページで読み込むJSファイル */
    } elseif (is_singular('works')) {
        wp_enqueue_script(
            'glightbox',
            get_stylesheet_directory_uri() . '/assets/js/glightbox.min.js',
            ['jquery'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'works-detail',
            get_stylesheet_directory_uri() . '/assets/js/worksdetail.bundle.js',
            ['jquery'],
            '1.0.0',
            true
        );
    }

    /* 共通のCSSファイル */
    wp_enqueue_style(
        'home',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'add_files');


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

/*==============================================================
MW WP Form 問い合わせデータのカラム名称変更
==============================================================*/

// お問い合わせ
function my_mwform_inquiry_data_columns($columns)
{
    $columns = array(
        'type' => 'お問い合わせの種別',
        'company' => '会社名',
        'name' => 'お名前',
        'furigana' => 'フリガナ',
        'email' => 'メールアドレス',
        'tel' => '電話番号',
        'zip' => '郵便番号',
        'pref' => '都道府県',
        'city' => '市区町村',
        'town' => '番地／マンション名など',
        'chance' => '弊社を知ったきっかけ',
        'message' => 'お問い合わせ内容',
    );
    return $columns;
}
add_filter('mwform_inquiry_data_columns-mwf_42', 'my_mwform_inquiry_data_columns');

// エントリーフォーム
function my_mwformentry_inquiry_data_columns($columns)
{
    $columns = array(
        'name' => 'お名前',
        'kana' => 'フリガナ',
        'birthday' => '生年月日',
        'email' => 'メールアドレス',
        'tel' => '電話番号',
        'zip' => '郵便番号',
        'pref' => '都道府県',
        'city' => '市区町村',
        'town' => '番地／マンション名など',
        'position' => '希望職種',
        'file' => '職務履歴書',
        'message' => 'その他ご質問',
    );
    return $columns;
}
add_filter('mwform_inquiry_data_columns-mwf_47', 'my_mwformentry_inquiry_data_columns');


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