<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body class="subpage">
    <?php get_template_part('templates/_l-header'); ?>
    <main class="l-main">
        <section class="l-hero" id="js-top">
            <div class="l-hero__heading-wrapper">
                <h2 class="l-section__title js-title load">
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
            </div>
            <figure class="l-hero__image js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/hero_service.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/hero_service.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/hero_service_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/hero_service_sp.jpg"
                        alt="" />
                </picture>
            </figure>
            <div class="l-hero__breadcrumbs --service">
                <a href="">top</a>事業内容
            </div>
        </section>



        <section class="p-fixed-bg">
            <div class="p-fixed-bg__wrap">
                <!-- panel1 -->
                <div class="p-fixed-bg__area">
                    <figure class="p-fixed-bg__img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service01.webp"
                                media="(min-width: 769px)" type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service01.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service01_sp.webp"
                                type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service01_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-fixed-bg__inner">
                        <div class="p-fixed-bg__heading-wrapper">
                            <div class="c-sub-heading--service">
                                <h3 class="c-sub-heading--service__title">Architecture</h3>
                                <div class="c-sub-heading--service__subtitle">建築事業</div>
                            </div>
                        </div>
                        <div class="p-fixed-bg__contents-wrapper">
                            <div class="p-fixed-bg__contents-title">
                                安心して集える場を
                            </div>
                            <div class="p-fixed-bg__contents-desc">
                                私たちはこれまでお客様の安全を第一に考えて参りました。
                                <br />
                                建築事業では、そんな「安全」が「人」に伝えられるよう技術力を日々高めています。
                                <br />
                                自慢の技術を是非ご覧ください。
                            </div>
                            <div class="p-fixed-bg__link-wrapper">
                                <div class="c-desc--service__link">
                                    <a href="<?php echo esc_url(home_url('works_category/archi')); ?>">
                                        <div class="c-desc--service__link-text">View More</div>
                                        <div class="c-arrow c-arrow--round"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- panel1 -->
                <!-- panel2 -->
                <div class="p-fixed-bg__area">
                    <figure class="p-fixed-bg__img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service02.webp"
                                media="(min-width: 769px)" type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service02.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service02_sp.webp"
                                type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service02_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-fixed-bg__inner">
                        <div class="p-fixed-bg__heading-wrapper">
                            <div class="c-sub-heading--service">
                                <h3 class="c-sub-heading--service__title">
                                    Civil engineering
                                </h3>
                                <div class="c-sub-heading--service__subtitle">土木事業</div>
                            </div>
                        </div>
                        <div class="p-fixed-bg__contents-wrapper">
                            <div class="p-fixed-bg__contents-title">
                                自然と生活の橋渡しに
                            </div>
                            <div class="p-fixed-bg__contents-desc">
                                土木事業では、道路工事をはじめ、トンネル・高速道路の舗装工事や河川・ダムなどの工事など、私たちの生活の基盤の保護に努めております。
                                <br />
                                これからも、人々の社会をずっと支えてくれるように、守り続けて参ります。
                                <br />
                            </div>
                            <div class="p-fixed-bg__link-wrapper">
                                <div class="c-desc--service__link">
                                    <a href="<?php echo esc_url(home_url('works_category/civil')); ?>">
                                        <div class="c-desc--service__link-text">View More</div>
                                        <div class="c-arrow c-arrow--round"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- panel2 -->
                <!-- panel3 -->
                <div class="p-fixed-bg__area">
                    <figure class="p-fixed-bg__img">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service03.webp"
                                media="(min-width: 769px)" type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service03.jpg"
                                media="(min-width: 769px)" type="image/jpg" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service03_sp.webp"
                                type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/scroll_service03_sp.jpg"
                                alt="" />
                        </picture>
                    </figure>
                    <div class="p-fixed-bg__inner">
                        <div class="p-fixed-bg__heading-wrapper">
                            <div class="c-sub-heading--service">
                                <h3 class="c-sub-heading--service__title">Housing</h3>
                                <div class="c-sub-heading--service__subtitle">住宅事業</div>
                            </div>
                        </div>
                        <div class="p-fixed-bg__contents-wrapper">
                            <div class="p-fixed-bg__contents-title">
                                「安心」を提供します
                            </div>
                            <div class="p-fixed-bg__contents-desc">
                                心地よい生活を続けていくためには、安心感のある家づくりが必要になってきます。
                                <br />
                                藤原建設工業では、どんなに小さなことでも、何年先でもお客様の「安心」が続くよう技術力を提供させていただきます。
                            </div>
                            <div class="p-fixed-bg__link-wrapper">
                                <div class="c-desc--service__link">
                                    <a href="<?php echo esc_url(home_url('works_category/housing')); ?>">
                                        <div class="c-desc--service__link-text">View More</div>
                                        <div class="c-arrow c-arrow--round"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- panel3 -->
            </div>
        </section>
    </main>
    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_footer(); ?>
</body>

</html>