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
                            <span class="l-section__titleText">C</span>
                            <span class="l-section__titleText">o</span>
                            <span class="l-section__titleText">n</span>
                            <span class="l-section__titleText">t</span>
                            <span class="l-section__titleText">a</span>
                            <span class="l-section__titleText">c</span>
                            <span class="l-section__titleText">t</span>
                        </span>
                        <span class="-jp">お問い合わせ</span>
                    </h2>
                    <!-- l-section-title -->
                </div>
                <figure class="l-hero__image">
                    <!-- <img src="<%= path %>assets/images/works/hero_works.jpg" alt="" /> -->
                </figure>
            </div>
            <div class="l-hero__breadcrumbs"><a href="">top</a>お問い合わせ</div>
        </section>
        <section class="l-form">
            <div class="l-form__inner">
                <div class="l-form__info">
                    <p class="l-form__info-desc">
                        弊社に興味を持って下さりありがとうございます。
                        <br />
                        藤原建設工業へのお問い合わせは、以下のフォームかお電話にて承っております。
                    </p>

                    <div class="c-cta">
                        <dt class="c-cta__dt">
                            tel
                            <span class="--sub">お電話でのお問い合わせ</span>
                        </dt>
                        <dd class="c-cta__dd">
                            00-0000-0000
                            <span class="--sub">受付時間：平日9:00〜17:00</span>
                        </dd>
                    </div>
                </div>
                <div class="l-form__sub-heading-wrapper">
                    <div class="c-sub-heading">
                        <h3 class="c-sub-heading__title">Form</h3>
                        <div class="c-sub-heading__subtitle">お問い合わせフォーム</div>
                    </div>
                </div>
                <p class="l-form__caution">
                    ※全て必須項目となっております。
                    <br />
                    ※最後まで入力した後、送信ボタンを押してください。
                </p>
                <div class="l-form__progress-wrapper">
                    <div class="l-form__progress">入力</div>
                    <div class="l-form__progress is-active">確認</div>
                    <div class="l-form__progress">完了</div>
                </div>

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile;
                else : ?>
                <?php endif; ?>
            </div>
        </section>
    </main>




    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_template_part('templates/_script'); ?>
    <?php get_template_part('templates/scripts/_script-contact'); ?>
    <?php get_footer(); ?>

</body>

</html>