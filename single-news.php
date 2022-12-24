<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body class="subpage">
    <?php get_template_part('templates/_l-header'); ?>
    <main>
        <section class="l-hero" id="js-top">
            <div class="l-hero__heading-wrapper">
                <h2 class="l-section__title js-title load">
                    <span class="l-section__titleTextWrap">
                        <span class="l-section__titleText">N</span>
                        <span class="l-section__titleText">e</span>
                        <span class="l-section__titleText">w</span>
                        <span class="l-section__titleText">s</span>
                    </span>
                    <span class="-jp">新着情報</span>
                </h2>
            </div>
            <div class="l-hero__breadcrumbs">
                <a href="<?php echo esc_url(home_url('')); ?>">top</a><a
                    href="<?php echo esc_url(home_url('news')); ?>">新着情報</a>
                <?php the_title() ?>
            </div>
        </section>

        <article class="p-news-detail">
            <div class="p-news-detail__inner">
                <div class="p-news-detail__heading">
                    <?php the_title() ?>
                </div>
                <div class="p-news-detail__tag-wrapper">
                    <time class="p-news-detail__date"><?php the_time('Y.m.d') ?></time>
                    <div class="p-news-detail__tag">
                        <?php
                        $terms = wp_get_object_terms($post->ID, 'news_category');
                        foreach ($terms as $term) {
                            echo  $term->name;
                        }
                        ?>
                    </div>
                </div>

                <figure class="p-news-detail__image">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('large'); ?>
                    <?php
                    else :
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                        alt="アイキャッチ画像がありません" />
                    <?php
                    endif; ?>
                </figure>
                <div class="p-news-detail__contents">
                    <?php the_content() ?>
                </div>

                <!-- <div class="p-news-detail__sub-heading">新着情報です</div>
                <div class="p-news-detail__block-title">新着情報です</div>
                <div class="p-news-detail__block">
                    <p>
                        これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。
                    </p>
                    <p>
                        私たちはこれまでお客様の安全を第一に考えて参りました。
                        <br />
                        建築事業では、そんな「安全」が「人」に伝えられるよう技術力を日々高めています。
                        <br />
                        自慢の技術を是非ご覧ください。
                    </p>
                </div>
                <div class="p-news-detail__block-title">新着情報です</div>
                <div class="p-news-detail__block">
                    <p>
                        これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。
                    </p>
                    <p>
                        私たちはこれまでお客様の安全を第一に考えて参りました。
                        <br />
                        建築事業では、そんな「安全」が「人」に伝えられるよう技術力を日々高めています。
                        <br />
                        自慢の技術を是非ご覧ください。
                    </p>
                </div> -->
                <div class="p-news-detail__sns">
                    <ul class="p-news-detail__socialList">
                        <li class="p-news-detail__socialItem">
                            <a href="https://twitter.com/share?url=" class="p-news-detail__socialLink --twitter"
                                target="_blank" rel="noreferrer noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/twitter_icon.svg"
                                    alt="" />
                                <span class="icon"></span>
                            </a>
                        </li>
                        <li class="p-news-detail__socialItem">
                            <a href="http://www.facebook.com/share.php?u=" class="p-news-detail__socialLink --facebook"
                                target="_blank" rel="noreferrer noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/facebook_icon.svg"
                                    alt="" />
                                <span class="icon"></span>
                            </a>
                        </li>
                        <li class="p-news-detail__socialItem">
                            <a title="クリップボードにURLをコピー" class="share-url p-news-detail__socialLink --copy"
                                href="javascript:void(0);"
                                data-clipboard-text="<?php the_title(); ?>｜藤原建設工業 <?php the_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/clipboard_icon.svg"
                                    alt="" />
                                <span class="icon"></span>
                            </a>
                            <span class="url-copied">
                                <span>URLをコピーしました！</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="p-news-detail__btn-wrapper">
                    <button class="p-news-detail__btn">
                        <a href="<?php echo esc_url(home_url('news')); ?>"> Back to List </a>
                    </button>
                </div>
                <div class="p-news-detail__related-news">
                    <div class="p-news-detail__related-news-heading">
                        Related News
                    </div>
                    <div class="p-news__card-wrapper">
                        <ul class="p-news__card-list">
                            <?php
                            global $post;
                            $term = array_shift(get_the_terms($post->ID, 'news_category')); //←ここが追加
                            $args = array(
                                'numberposts' => 3,
                                'post_type' => 'news',
                                'taxonomy' => 'news_category',
                                'term' => $term->slug,
                                'orderby' => 'rand',
                                'post__not_in' => array($post->ID)
                            );
                            ?>
                            <?php $myPosts = get_posts($args);
                            if ($myPosts) : ?>
                            <?php foreach ($myPosts as $post) : setup_postdata($post); ?>

                            <li class="p-news__card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="p-news__card-inner">
                                        <figure class="p-news__card-image">
                                            <?php if (has_post_thumbnail()) :
                                                        the_post_thumbnail('large'); ?>
                                            <?php
                                                    else :
                                                    ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                                alt="アイキャッチ画像がありません" />
                                            <?php
                                                    endif; ?>
                                        </figure>
                                        <time><?php the_time('Y.m.d') ?></time>
                                        <p class="p-news__card-tag">
                                            <?php
                                                    $terms = wp_get_object_terms($post->ID, 'news_category');
                                                    foreach ($terms as $term) {
                                                        echo  $term->name;
                                                    }
                                                    ?>
                                        </p>
                                        <div class="p-news__card-title">
                                            <?php the_title() ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </main>




    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_template_part('templates/_script'); ?>
    <?php get_template_part('templates/scripts/_script-newsdetail'); ?>
    <?php get_footer(); ?>

</body>

</html>