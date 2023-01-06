<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="subpage js-body">
    <?php get_template_part('templates/_l-header'); ?>
    <!-- cusor-pointer -->
    <div id="js-cursor-img" class="p-cursor-img"></div>
    <div id="js-chaser-img" class="p-chaser-img">
        <figure class="js-cursor-img01">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worksdetail/pointer_img01.jpg"
                width="240" height="280" loading="lazy" alt="リンク：建築事業" />
        </figure>
        <figure class="js-cursor-img02">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worksdetail/pointer_img02.jpg"
                width="240" height="280" loading="lazy" alt="リンク：土木事業" />
        </figure>
        <figure class="js-cursor-img03">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worksdetail/pointer_img03.jpg"
                width="240" height="280" loading="lazy" alt="リンク：住宅事業" />
        </figure>
    </div>
    <!-- /cusor-pointer -->
    <!-- main -->
    <main id="top" class="l-main">
        <section class="l-hero" id="js-top">
            <div class="l-hero__heading-wrapper">
                <h2 class="l-section__title js-title load">
                    <span class="l-section__titleTextWrap">
                        <span class="l-section__titleText">W</span>
                        <span class="l-section__titleText">o</span>
                        <span class="l-section__titleText">r</span>
                        <span class="l-section__titleText">k</span>
                        <span class="l-section__titleText">s</span>
                    </span>
                    <span class="-jp">施工実績</span>
                </h2>
            </div>
            <div class="l-hero__breadcrumbs">
                <a href="<?php echo esc_url(home_url('')); ?>">top</a><a
                    href="<?php echo esc_url(home_url('works')); ?>">施工実績</a>
                <?php the_title() ?>
            </div>
        </section>
        <article class="p-works-detail">
            <nav class="p-works-detail__nav">
                <ul class="p-works-detail__list">
                    <li class="p-works-detail__item">
                        <a href="#item01" class="p-works-detail__link js-link01 is-active">概要</a>
                    </li>
                    <li class="p-works-detail__item">
                        <a href="#item02" class="p-works-detail__link js-link02">ギャラリー</a>
                    </li>
                    <li class="p-works-detail__item">
                        <a href="#item03" class="p-works-detail__link js-link03">工事内容</a>
                    </li>
                </ul>
            </nav>
            <div class="p-works-detail__content">
                <h1 class="p-works-detail__title"><?php the_title() ?></h1>
                <div class="p-works-detail__info">
                    <time><?php the_time('Y.m.d') ?></time>
                    <!-- <time>2022.02.24</time> -->
                    <span class="p-works-detail__tag">
                        <?php
                        $terms = wp_get_object_terms($post->ID, 'works_category');
                        foreach ($terms as $term) {
                            echo  $term->name;
                        }
                        ?>
                    </span>
                </div>
                <figure class="p-works-detail__eyecatch">
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
                <div id="item01" class="p-works-detail__block js-block01">
                    <h2 class="p-works-detail__blockTitle">概要</h2>
                    <p class="p-works-detail__blockText">
                        <?php the_field('outline'); ?>
                    </p>
                </div>
                <div id="item02" class="p-works-detail__block js-block02">
                    <h2 class="p-works-detail__blockTitle">ギャラリー</h2>
                    <ul class="p-works-detail__gallery">
                        <?php if (get_field('gallery')) : ?>
                        <?php while (the_repeater_field('gallery')) : ?>
                        <li class="p-works-detail__galleryItem">
                            <a href="<?php the_sub_field('gallery_img'); ?>"
                                class="p-works-detail__galleryLink glightbox">
                                <figure><img src="<?php the_sub_field('gallery_img'); ?>" alt="" /></figure>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div id="item03" class="p-works-detail__block js-block03">
                    <h2 class="p-works-detail__blockTitle">工事内容</h2>

                    <dl class="c-definition__list">
                        <?php if (get_field('works_contents')) : ?>
                        <?php while (the_repeater_field('works_contents')) : ?>
                        <div class="c-definition__list-item">
                            <dt class="c-definition__term"><?php the_sub_field('works_contents_name'); ?></dt>
                            <dd class="c-definition__desc"><?php the_sub_field('works_contents_desc'); ?></dd>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </dl>
                </div>
            </div>
        </article>
        <section class="p-works-detail-otherlink">
            <div class="p-works-detail-otherlink__inner">
                <ul class="p-works-detail-otherlink__list">
                    <li class="p-works-detail-otherlink__item">
                        <a href="<?php echo esc_url(home_url('works_category/archi')); ?>"
                            class="p-works-detail-otherlink__link js-works-cursor01 -cursorNone -archi">
                            <div class="p-works-detail-otherlink__item-inner">
                                <div class="p-works-detail-otherlink__text-left">
                                    <h3 class="p-works-detail-otherlink__item-title">
                                        Architecture
                                        <br />
                                        <span>建築事業</span>
                                    </h3>
                                </div>
                                <div class="p-works-detail-otherlink__text-right">
                                    <div class="c-arrow c-arrow--round"></div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="p-works-detail-otherlink__item">
                        <a href="<?php echo esc_url(home_url('works_category/civil')); ?>"
                            class="p-works-detail-otherlink__link js-works-cursor02 -cursorNone -civil">
                            <div class="p-works-detail-otherlink__item-inner">
                                <div class="p-works-detail-otherlink__text-left">
                                    <h3 class="p-works-detail-otherlink__item-title">
                                        Civil engineering
                                        <br />
                                        <span>土木事業</span>
                                    </h3>
                                </div>
                                <div class="p-works-detail-otherlink__text-right">
                                    <div class="c-arrow c-arrow--round"></div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="p-works-detail-otherlink__item">
                        <a href="<?php echo esc_url(home_url('works_category/housing')); ?>"
                            class="p-works-detail-otherlink__link js-works-cursor03 -cursorNone -housing">
                            <div class="p-works-detail-otherlink__item-inner">
                                <div class="p-works-detail-otherlink__text-left">
                                    <h3 class="p-works-detail-otherlink__item-title">
                                        Housing
                                        <br />
                                        <span>住宅事業</span>
                                    </h3>
                                </div>
                                <div class="p-works-detail-otherlink__text-right">
                                    <div class="c-arrow c-arrow--round"></div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="p-works-detail-otherlink__btn-wrapper">
                <button class="p-works-detail-otherlink__btn">
                    <a href="<?php echo esc_url(home_url('works')); ?>"> 施工実績一覧へ </a>
                </button>
            </div>
        </section>
    </main>
    <!-- /main -->
    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <!-- TweenMax.min.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
    <!-- worksCursor.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/worksCursor.js"></script>
    <?php get_footer(); ?>
</body>

</html>