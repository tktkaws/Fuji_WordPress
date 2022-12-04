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
                            <span class="l-section__titleText">m</span>
                            <span class="l-section__titleText">p</span>
                            <span class="l-section__titleText">a</span>
                            <span class="l-section__titleText">n</span>
                            <span class="l-section__titleText">y</span>
                        </span>
                        <span class="-jp">会社情報</span>
                    </h2>
                    <!-- l-section-title -->
                </div>
                <figure class="l-hero__image js-parallax-img">
                    <picture>
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/hero_company.webp"
                            media="(min-width: 769px)" type="image/webp" />
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/hero_company.jpg"
                            media="(min-width: 769px)" type="image/jpg" />
                        <source
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/hero_company_sp.webp"
                            type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/hero_company_sp.jpg"
                            alt="" />
                    </picture>
                </figure>
            </div>
            <div class="l-hero__breadcrumbs"><a href="">top</a>会社情報</div>
        </section>

        <section class="p-company-message">
            <div class="p-company-message__heading-wrapper">
                <div class="c-sub-heading">
                    <h3 class="c-sub-heading__title">Message</h3>
                    <div class="c-sub-heading__subtitle">メッセージ</div>
                </div>
            </div>

            <div class="p-company-message__text-wrapper">
                <p class="p-company-message__text-title">過去と未来を繋ぎ続ける</p>
                <p class="p-company-message__text">
                    これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。<br />
                    「過去と未来を繋ぎ続ける」そんな建設会社を目指す技術集団が、藤原建設工業株式会社です。
                </p>
                <p class="p-company-message__name">
                    藤原建設工業株式会社　代表取締役社長<br />
                    藤原 ◯◯
                </p>
            </div>
            <figure class="p-company-message__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/message.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/message.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/message_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/message_sp.jpg"
                        alt="" />
                </picture>
            </figure>
            <div class="p-company-message__deco">message</div>
        </section>
        <section class="p-company-info">
            <div class="p-company-info__heading-wrapper">
                <div class="c-sub-heading">
                    <h3 class="c-sub-heading__title">Infomation</h3>
                    <div class="c-sub-heading__subtitle">会社概要</div>
                </div>
            </div>

            <div class="p-company-info__dl-wrapper">
                <dl class="c-definition__list">
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">会社名</dt>
                        <dd class="c-definition__desc">藤原建設工業株式会社</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">設立</dt>
                        <dd class="c-definition__desc">昭和54年（1979年）4月12日</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">資本金</dt>
                        <dd class="c-definition__desc">2110万円</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">代表取締役</dt>
                        <dd class="c-definition__desc">藤原 ◯◯</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">本社</dt>
                        <dd class="c-definition__desc">千葉県</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">売上高</dt>
                        <dd class="c-definition__desc">21億1千万円</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">事業内容</dt>
                        <dd class="c-definition__desc">
                            土木工事業、建築工事業、住宅事業
                        </dd>
                    </div>
                </dl>
            </div>
        </section>
        <section class="p-company-access">
            <div class="p-company-access__heading-wrapper">
                <div class="c-sub-heading">
                    <h3 class="c-sub-heading__title">Access</h3>
                    <div class="c-sub-heading__subtitle">アクセス</div>
                </div>
            </div>
            <div class="p-company-access__container">
                <div id="maps"></div>
                <dl class="c-definition__list">
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">住所</dt>
                        <dd class="c-definition__desc">
                            〒000-0000<br />
                            千葉県◯◯市◯◯丁目◯◯番
                        </dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">電話番号</dt>
                        <dd class="c-definition__desc">00-0000-0000</dd>
                    </div>
                    <div class="c-definition__list-item">
                        <dt class="c-definition__term">アクセス</dt>
                        <dd class="c-definition__desc">幕張メッセから徒歩1分</dd>
                    </div>
                </dl>
            </div>
        </section>
    </main>


    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_template_part('templates/_script'); ?>
    <?php get_footer(); ?>
    <!-- APIを利用するためのライブラリ（CDN）の読み込み -->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDtqCTltRy0JWgDs68gDj8LA3CBcEwVdyM&callback=initMap" async>
    </script>

    <!-- マーカーをオリジナル画像にするためのスクリプト -->
    <script>
    if (window.matchMedia("(max-width: 767px)").matches) {
        //スマホ処理
        function initMap() {
            var mapPosition = {
                lat: 35.64828,
                lng: 140.03468
            };
            var mapArea = document.getElementById("maps");
            var mapOptions = {
                center: mapPosition,
                zoom: 14,
            };
            var map = new google.maps.Map(mapArea, mapOptions);

            var markerOptions = {
                map: map,
                position: mapPosition,

                icon: new google.maps.MarkerImage(
                    "/assets/images/common/map_icon_sp.png",
                    new google.maps.Size(100, 66),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(50, 50)
                ),
            };
            var marker = new google.maps.Marker(markerOptions);
        }
    } else if (window.matchMedia("(min-width:769px)").matches) {
        //PC処理
        function initMap() {
            var mapPosition = {
                lat: 35.64828,
                lng: 140.03468
            };
            var mapArea = document.getElementById("maps");
            var mapOptions = {
                center: mapPosition,
                zoom: 16,
            };
            var map = new google.maps.Map(mapArea, mapOptions);

            var markerOptions = {
                map: map,
                position: mapPosition,

                icon: new google.maps.MarkerImage(
                    "/assets/images/common/map_icon_pc.png",
                    new google.maps.Size(162, 107),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(80, 50)
                ),
            };
            var marker = new google.maps.Marker(markerOptions);
        }
    }
    </script>
</body>

</html>