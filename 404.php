<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body class="subpage">
    <?php get_template_part('templates/_l-header'); ?>
    <main class="l-main">
        <section class="l-hero" id="js-top">
            <div class="l-hero__main-wrapper">
                <div class="l-hero__heading-wrapper">
                    <!-- l-section-title -->
                    <h2 class="l-section__title js-title load">
                        <span class="l-section__titleTextWrap">
                            <span class="l-section__titleText">4</span>
                            <span class="l-section__titleText">0</span>
                            <span class="l-section__titleText">4</span>
                            <span class="l-section__titleText">&nbsp;</span>
                            <span class="l-section__titleText">N</span>
                            <span class="l-section__titleText">o</span>
                            <span class="l-section__titleText">t</span>
                            <span class="l-section__titleText">&nbsp;</span>
                            <span class="l-section__titleText">F</span>
                            <span class="l-section__titleText">o</span>
                            <span class="l-section__titleText">u</span>
                            <span class="l-section__titleText">n</span>
                            <span class="l-section__titleText">d</span>
                        </span>
                        <span class="-jp">ページが見つかりませんでした</span>
                    </h2>
                    <!-- l-section-title -->
                </div>
                <figure class="l-hero__image js-parallax-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/404/hero_404.webp"
                            media="(min-width: 769px)" type="image/webp" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/404/hero_404.jpg"
                            media="(min-width: 769px)" type="image/jpg" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/404/hero_404_sp.webp"
                            type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404/hero_404_sp.jpg"
                            alt="" />
                    </picture>
                </figure>
            </div>
            <div class="l-hero__breadcrumbs">
                <a href="">top</a>ページが見つかりませんでした
            </div>
        </section>
        <section class="p-notfound">
            <h3 class="p-notfound__heading">
                お探しのページが見つかりませんでした。
            </h3>
            <p class="p-notfound__desc">
                誠に申し訳ございません。
                <br />
                お探しのページはURLが変更になったか、削除された可能性がございます。
                <br />
                大変お手数ですが、もう一度ナビゲーションよりご希望のページをお探しください。
            </p>
            <button class="c-btn--back">トップへ戻る</button>
        </section>
    </main>




    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_template_part('templates/_script'); ?>
    <?php get_footer(); ?>

</body>

</html>