<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body class="subpage">
    <?php get_template_part('templates/_l-header'); ?>
    <main class="l-main">
        <section class="l-hero" id="js-top">
            <div class="l-hero__heading-wrapper">
                <h2 class="l-section__title js-title load">
                    <span class="l-section__titleTextWrap">
                        <span class="l-section__titleText">E</span>
                        <span class="l-section__titleText">n</span>
                        <span class="l-section__titleText">t</span>
                        <span class="l-section__titleText">r</span>
                        <span class="l-section__titleText">y</span>
                        <span class="l-section__titleText">&nbsp;</span>
                        <span class="l-section__titleText">F</span>
                        <span class="l-section__titleText">o</span>
                        <span class="l-section__titleText">r</span>
                        <span class="l-section__titleText">m</span>
                    </span>
                    <span class="-jp">エントリーフォーム</span>
                </h2>
            </div>
            <div class="l-hero__breadcrumbs">
                <a href="">top</a>ご応募ありがとうございました。
            </div>
        </section>

        <section class="l-thx">
            <p class="l-thx__title">ご応募ありがとうございました。</p>
            <p class="l-thx__desc">
                この度は、藤原建設工業へご応募いただきありがとうございます。
                <br />
                お送り頂いた内容を確認の上、2営業日以内に折り返しご連絡させていただきます。
                <br />
                ※ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。
            </p>
            <p class="l-thx__desc">
                しばらく経ってもメールが届かない場合は、ご入力頂いたメールアドレスが間違っているか、
                <br />
                迷惑メールフォルダに振り分けられている場合がございます。
                <br />
                以上の内容をご確認頂き、お手数ですが再度フォームよりお問合せ頂きますようお願い申し上げます。
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
            <div class="l-thx__btn-wrapper">
                <button class="c-btn--back">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        トップへ戻る
                    </a>
                </button>
            </div>
        </section>
    </main>
    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_footer(); ?>
</body>

</html>