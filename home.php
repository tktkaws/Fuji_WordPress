<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body id="js-body" class="home js-body">
    <?php get_template_part('templates/_l-header'); ?>


    <!-- mouse cursor -->
    <div id="js-cursor" class="p-cursor"></div>
    <div id="js-chaser" class="p-chaser">
        <p class="text">DRAG</p>
    </div>
    <!-- /mouse cursor -->
    <!-- main -->
    <main class="l-main">
        <!-- loading -->
        <div id="js-loading" class="p-loading">
            <div id="js-loading-bg" class="js-loading__bg p-loading__bg">
                <figure id="js-logo" class="p-loading__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/loading_logo.svg" alt="藤原建設工業" />
                </figure>
            </div>
        </div>
        <!-- /loading -->

        <section class="p-home-kv" id="js-top">
            <div class="p-home-kv__grid-wrapper">
                <div class="p-home-kv__text-wrapper">
                    <h2 id="js-catch" class="p-home-catch__eng js-catch">
                        <div class="p-home-catch__engWrap">
                            <span class="p-home-catch__engText">H</span>
                            <span class="p-home-catch__engText">o</span>
                            <span class="p-home-catch__engText">w</span>
                            <span class="p-home-catch__engText">&nbsp;</span>
                            <span class="p-home-catch__engText">F</span>
                            <span class="p-home-catch__engText">a</span>
                            <span class="p-home-catch__engText">r</span>
                        </div>
                        <div class="p-home-catch__engBlock">
                            <div class="p-home-catch__engWrap">
                                <span class="p-home-catch__engText">C</span>
                                <span class="p-home-catch__engText">a</span>
                                <span class="p-home-catch__engText">n</span>
                            </div>
                            <div class="p-home-catch__engWrap">
                                <span class="p-home-catch__engText u-only-pc">&nbsp;</span>
                                <span class="p-home-catch__engText">W</span>
                                <span class="p-home-catch__engText">e</span>
                                <span class="p-home-catch__engText">&nbsp;</span>
                                <span class="p-home-catch__engText">G</span>
                                <span class="p-home-catch__engText">o</span>
                                <span class="p-home-catch__engText">?</span>
                            </div>
                        </div>
                    </h2>
                    <p id="js-catch-text" class="p-home-catch__text">
                        「どこまでいけるか」<br />お客さまと挑戦し続ける未来を<br class="u-only-sp" />築いていきます。
                    </p>
                </div>

                <!-- swiper-container -->
                <div class="p-home-kv__swiper-container">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <figure>
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider01.webp" media="(min-width: 769px)" type="image/webp" />
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider01.jpg" media="(min-width: 769px)" type="image/jpg" />
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider01_sp.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider01_sp.jpg" alt="" />
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <figure>
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider02.webp" media="(min-width: 769px)" type="image/webp" />
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider02.jpg" media="(min-width: 769px)" type="image/jpg" />
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider02_sp.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider02_sp.jpg" alt="" />
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <figure>
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider03.webp" media="(min-width: 769px)" type="image/webp" />
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider03.jpg" media="(min-width: 769px)" type="image/jpg" />
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider03_sp.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider03_sp.jpg" alt="" />
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-container -->
                <!-- swiper-container-text -->
                <div class="p-home-kv__text-slider-container swiper-container-text">
                    <div class="p-home-kv__text-slider-wrapper swiper-wrapper">
                        <div class="p-home-kv__text-slider-slide swiper-slide">
                            <div class="p-home-kv__text-slider-text slide-img">
                                <div class="p-home-kv__text-slider-text-eng js-slider-text">
                                    <div class="p-home-kv__engWrap --archi">
                                        <span class="p-home-kv__engText">A</span>
                                        <span class="p-home-kv__engText">r</span>
                                        <span class="p-home-kv__engText">c</span>
                                        <span class="p-home-kv__engText">h</span>
                                        <span class="p-home-kv__engText">i</span>
                                        <span class="p-home-kv__engText">t</span>
                                        <span class="p-home-kv__engText">e</span>
                                        <span class="p-home-kv__engText">c</span>
                                        <span class="p-home-kv__engText">t</span>
                                        <span class="p-home-kv__engText">u</span>
                                        <span class="p-home-kv__engText">r</span>
                                        <span class="p-home-kv__engText">e</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-home-kv__text-slider-slide swiper-slide">
                            <div class="p-home-kv__text-slider-text slide-img">
                                <div class="p-home-kv__text-slider-text-eng js-slider-text">
                                    <div class="p-home-kv__engWrap --civil">
                                        <span class="p-home-kv__engText">C</span>
                                        <span class="p-home-kv__engText">i</span>
                                        <span class="p-home-kv__engText">v</span>
                                        <span class="p-home-kv__engText">i</span>
                                        <span class="p-home-kv__engText">l</span>
                                        <span class="p-home-kv__engText">&nbsp;</span>
                                        <span class="p-home-kv__engText">E</span>
                                        <span class="p-home-kv__engText">n</span>
                                        <span class="p-home-kv__engText">g</span>
                                        <span class="p-home-kv__engText">i</span>
                                        <span class="p-home-kv__engText">n</span>
                                        <span class="p-home-kv__engText">e</span>
                                        <span class="p-home-kv__engText">e</span>
                                        <span class="p-home-kv__engText">r</span>
                                        <span class="p-home-kv__engText">i</span>
                                        <span class="p-home-kv__engText">n</span>
                                        <span class="p-home-kv__engText">g</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-home-kv__text-slider-slide swiper-slide">
                            <div class="p-home-kv__text-slider-text slide-img">
                                <div class="p-home-kv__text-slider-text-eng js-slider-text">
                                    <div class="p-home-kv__engWrap -housing">
                                        <span class="p-home-kv__engText">H</span>
                                        <span class="p-home-kv__engText">o</span>
                                        <span class="p-home-kv__engText">u</span>
                                        <span class="p-home-kv__engText">s</span>
                                        <span class="p-home-kv__engText">i</span>
                                        <span class="p-home-kv__engText">n</span>
                                        <span class="p-home-kv__engText">g</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-container-text -->

                <!-- scroll-animation -->
                <div class="p-scroll" id="js-scroll"></div>
            </div>
        </section>
        <div class="l-overlay"></div>
        <div class="js-trigger-section">
            <section class="p-home-about">
                <div class="p-home-about__text-container">
                    <h2 class="l-section__title js-title inview">
                        <span class="l-section__titleTextWrap">
                            <span class="l-section__titleText">A</span>
                            <span class="l-section__titleText">b</span>
                            <span class="l-section__titleText">o</span>
                            <span class="l-section__titleText">u</span>
                            <span class="l-section__titleText">t</span>
                        </span>
                        <span class="-jp">会社情報</span>
                    </h2>
                    <!-- c-desc -->
                    <div class="c-desc">
                        <div class="c-desc__text">
                            これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。
                            <br />
                            「過去と未来を繋ぎ続ける」そんな会社を目指す技術集団が、藤原建設工業です。
                        </div>
                        <div class="c-desc__link">
                            <a href="<?php echo esc_url(home_url('company')); ?>">
                                <div class="c-desc__link-text">View More</div>
                                <div class="c-arrow c-arrow--round"></div>
                            </a>
                        </div>
                    </div>
                    <!-- c-desc -->
                </div>
                <figure class="p-home-about__image js-parallax-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_about.webp" media="(min-width: 769px)" type="image/webp" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_about.jpg" media="(min-width: 769px)" type="image/jpg" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_about_sp.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_about_sp.jpg" alt="" />
                    </picture>
                </figure>
            </section>

            <section class="p-home-movie">
                <video id="js-video" class="p-home-movie__video" src="<?php echo get_template_directory_uri(); ?>/assets/images/video/fujiwara_movie.mp4" poster="<?php echo get_template_directory_uri(); ?>/assets/images/video/video_poster.webp" width="100%" height="auto" loop autoplay muted playsinline></video>
            </section>
            <section class="p-home-service">

                <div class="p-home-service__heading">
                    <!-- l-section-title -->
                    <h2 class="l-section__title js-title inview">
                        <span class="l-section__titleTextWrap">
                            <span class="l-section__titleText">S</span>
                            <span class="l-section__titleText">e</span>
                            <span class="l-section__titleText">r</span>
                            <span class="l-section__titleText">v</span>
                            <span class="l-section__titleText">i</span>
                            <span class="l-section__titleText">c</span>
                            <span class="l-section__titleText">e</span>
                        </span>
                        <span class="-jp">事業内容</span>
                    </h2>
                    <!-- l-section-title -->
                    <!-- c-desc -->
                    <div class="c-desc">
                        <div class="c-desc__text">
                            藤原建設工業では「建築事業」「土木事業」「住宅事業」の3つの事業を通してお客さまのお手伝いをさせていただいております。
                            <br />
                            事業内容ページでは、3つの柱をより具体的にご紹介します。
                        </div>
                        <div class="c-desc__link">
                            <a href="">
                                <div class="c-desc__link-text">View More</div>
                                <div class="c-arrow c-arrow--round"></div>
                            </a>
                        </div>
                    </div>
                    <!-- c-desc -->
                </div>

                <ul class="p-home-service__cards">
                    <li class="p-home-service__card">
                        <a href="<?php echo esc_url(home_url('works_category/archi')); ?>" class="p-home-service__link">
                            <figure class="p-home-service__card-image">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service01.webp" media="(min-width: 769px)" type="image/webp" />
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service01.jpg" media="(min-width: 769px)" type="image/jpg" />
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service01_sp.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service01_sp.jpg" width="350" height="280" loading="lazy" alt="" />
                                </picture>
                            </figure>
                            <div class="p-home-service__card-title">
                                <span class="eng">Architecture</span><br />
                                <span>建築事業</span>
                            </div>
                            <div class="p-home-service__card-deco --archi">
                                <div class="p-home-service__card-deco-text">
                                    View more
                                </div>
                                <div class="c-arrow c-arrow--round"></div>
                            </div>
                        </a>
                    </li>

                    <li class="p-home-service__card">
                        <a href="<?php echo esc_url(home_url('works_category/civil')); ?>" class="p-home-service__link">
                            <figure class="p-home-service__card-image">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service02.webp" media="(min-width: 769px)" type="image/webp" />
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service02.jpg" media="(min-width: 769px)" type="image/jpg" />
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service02_sp.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service02_sp.jpg" width="350" height="280" loading="lazy" alt="" />
                                </picture>
                            </figure>
                            <div class="p-home-service__card-title">
                                <span class="eng">Civil engineering</span><br />
                                <span>土木事業</span>
                            </div>
                            <div class="p-home-service__card-deco --civil">
                                <div class="p-home-service__card-deco-text">
                                    View more
                                </div>
                                <div class="c-arrow c-arrow--round"></div>
                            </div>
                        </a>
                    </li>

                    <li class="p-home-service__card">
                        <a href="<?php echo esc_url(home_url('works_category/housing')); ?>" class="p-home-service__link">
                            <figure class="p-home-service__card-image">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service03.webp" media="(min-width: 769px)" type="image/webp" />
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service03.jpg" media="(min-width: 769px)" type="image/jpg" />
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/service03_sp.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service03_sp.jpg" width="350" height="280" loading="lazy" alt="" />
                                </picture>
                            </figure>
                            <div class="p-home-service__card-title">
                                <span class="eng">Housing</span><br />
                                <span>住宅事業</span>
                            </div>
                            <div class="p-home-service__card-deco --housing">
                                <div class="p-home-service__card-deco-text">
                                    View more
                                </div>
                                <div class="c-arrow c-arrow--round"></div>
                            </div>
                        </a>
                    </li>
                </ul>


            </section>
            <section class="p-home-loop">
                <div class="p-home-loop__list">
                    <ul class="p-home-loop__itemWrap">
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop01.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop01.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop02.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop02.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop03.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop03.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop04.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop04.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop05.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop05.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                    </ul>
                    <ul class="p-home-loop__itemWrap">
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop01.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop01.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop02.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop02.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop03.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop03.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop04.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop04.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                        <li class="p-home-loop__item">
                            <figure>
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop05.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/loop05.jpg" width="140" height="140" loading="lazy" alt="" />
                                </picture>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="p-home-works">
                <div class="p-home-works__inner">
                    <div class="p-home-works__title-wrapper">
                        <!-- l-section-title -->
                        <h2 class="l-section__title js-title inview">
                            <span class="l-section__titleTextWrap">
                                <span class="l-section__titleText">W</span>
                                <span class="l-section__titleText">o</span>
                                <span class="l-section__titleText">r</span>
                                <span class="l-section__titleText">k</span>
                                <span class="l-section__titleText">s</span>
                            </span>
                            <span class="-jp">施工実績</span>
                        </h2>
                        <!-- l-section-title -->
                    </div>

                    <!-- splide -->
                    <div id="js-slider-works" class="p-home-works__sliderContainer splide" aria-labelledby="施工実績">
                        <div class="p-home-works__sliderTrack splide__track">
                            <ul class="p-home-works__sliderWrapper splide__list">
                                <!-- スライダーのコンテンツ -->
                                <?php
                                $count = 1;
                                $args = [
                                    'post_type' => 'works',
                                    'taxonomy' => 'works_category',
                                    'posts_per_page' => 6
                                ];
                                $my_query = new WP_Query($args);
                                if ($my_query->have_posts()) :
                                    while ($my_query->have_posts()) :
                                        $my_query->the_post(); ?>
                                        <li class="p-works-category__card splide__slide <?php
                                                                                        $terms = wp_get_object_terms($post->ID, 'works_category');
                                                                                        foreach ($terms as $term) {
                                                                                            echo '--' . $term->slug . ' ';
                                                                                        }
                                                                                        ?>">
                                            <a href="<?php the_permalink(); ?>">
                                                <figure class="p-works-category__image">
                                                    <?php if (has_post_thumbnail()) :
                                                        the_post_thumbnail('large'); ?>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="アイキャッチ画像がありません" />
                                                    <?php
                                                    endif; ?>
                                                </figure>
                                                <div class="p-works-category__card-text-wrapper">
                                                    <p class="p-works-category__card-title"><?php the_title() ?></p>
                                                    <time class="p-works-category__card-date"><?php the_time('Y.m.d') ?></time>
                                                </div>
                                            </a>
                                        </li>

                                    <?php endwhile;
                                else : ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                                <!-- /スライダーのコンテンツ -->
                            </ul>
                        </div>
                    </div>

                    <!-- splide -->

                    <!-- c-text-loop -->
                    <div class="c-text-loop">
                        <div class="c-text-loop__textWrap">
                            <div class="c-text-loop__text">
                                <span>our works</span>
                            </div>
                        </div>
                        <div class="c-text-loop__link">
                            <a href="<?php echo esc_url(home_url('works')); ?>">
                                <div class="c-text-loop__link-text">View More</div>
                                <div class="c-arrow c-arrow--round"></div>
                            </a>
                        </div>
                    </div>
                    <!-- c-text-loop -->
                </div>
            </section>
            <section class="p-home-news">
                <div class="p-home-news__inner">
                    <!-- l-section-title -->
                    <h2 class="l-section__title js-title inview">
                        <span class="l-section__titleTextWrap">
                            <span class="l-section__titleText">N</span>
                            <span class="l-section__titleText">e</span>
                            <span class="l-section__titleText">w</span>
                            <span class="l-section__titleText">s</span>
                        </span>
                        <span class="-jp">新着情報</span>
                    </h2>
                    <!-- l-section-title -->
                    <div class="p-home-news__card-container">
                        <ul class="p-home-news__card-list">
                            <?php
                            $count = 1;
                            $args = [
                                'post_type' => 'news',
                                'taxonomy' => 'news_category',
                                'posts_per_page' => 4
                            ];
                            $my_query = new WP_Query($args);
                            if ($my_query->have_posts()) :
                                while ($my_query->have_posts()) :
                                    $my_query->the_post(); ?>

                                    <li class="p-news__card">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="p-news__card-inner">
                                                <figure class="p-news__card-image">
                                                    <?php if (has_post_thumbnail()) :
                                                        the_post_thumbnail('large'); ?>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="アイキャッチ画像がありません" />
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

                                <?php endwhile;
                            else : ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                        <div class="c-desc__link">
                            <a href="<?php echo esc_url(home_url('news')); ?>">
                                <div class="c-desc__link-text">View More</div>
                                <div class="c-arrow c-arrow--round"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-home-recruit">
                <figure class="js-parallax-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_recruit.webp" media="(min-width: 769px)" type="image/webp" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_recruit.jpg" media="(min-width: 769px)" type="image/jpg" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_recruit_sp.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_recruit_sp.jpg" width="390" height="245" loading="lazy" alt="" />
                    </picture>
                </figure>
                <div class="p-home-recruit__inner">
                    <!-- l-section-title -->
                    <h2 class="l-section__title js-title inview">
                        <span class="l-section__titleTextWrap">
                            <span class="l-section__titleText">R</span>
                            <span class="l-section__titleText">e</span>
                            <span class="l-section__titleText">c</span>
                            <span class="l-section__titleText">r</span>
                            <span class="l-section__titleText">u</span>
                            <span class="l-section__titleText">i</span>
                            <span class="l-section__titleText">t</span>
                        </span>
                        <span class="-jp">採用情報</span>
                    </h2>
                    <!-- l-section-title -->
                    <!-- c-desc -->
                    <div class="c-desc">
                        <div class="c-desc__text">
                            藤原建設工業では、各職種にて新卒採用と中途採用を通年行っています。
                            <br />
                            これまで「過去と未来を繋ぎ続ける」に共感していただける仲間たちと歩んできました。
                            <br />
                            一緒に未来を築いていける方とお会いできるのを楽しみにしています。
                        </div>
                        <div class="c-desc__link">
                            <a href="<?php echo esc_url(home_url('recruit')); ?>">
                                <div class="c-desc__link-text">View More</div>
                                <div class="c-arrow c-arrow--round"></div>
                            </a>
                        </div>
                    </div>
                    <!-- c-desc -->
                </div>
                <!-- c-text-loop -->
                <div class="c-text-loop">
                    <div class="c-text-loop__textWrap">
                        <div class="c-text-loop__text">
                            <span>get in touch</span>
                        </div>
                    </div>
                </div>
                <!-- c-text-loop -->
            </section>
        </div>
        <!-- only-mobile-footer -->
        <div class="p-fixed-button">
            <ul class="p-fixed-button__list">
                <li class="p-fixed-button__item">
                    <a href="<?php echo esc_url(home_url('/entry')); ?>" class="p-fixed-button__link -entry">ENTRY</a>
                </li>
                <li class="p-fixed-button__item">
                    <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-fixed-button__link -recruit">RECRUIT</a>
                </li>
                <li class="p-fixed-button__item">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-fixed-button__link -contact">CONTACT</a>
                </li>
            </ul>
        </div>
        <!-- only-mobile-footer -->
    </main>
    <!-- /main -->
    <?php get_template_part('templates/_l-footer'); ?>
    <!-- TweenMax.min.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
    <!-- sliderCursor.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sliderCursor.js"></script>
    <?php get_footer(); ?>
</body>

</html>
