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
            </div>
            <figure class="l-hero__image js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/hero_img.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/hero_img.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/hero_img_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/hero_img_sp.jpg"
                        alt="" />
                </picture>
            </figure>
            <div class="l-hero__breadcrumbs"><a href="">top</a>採用情報</div>
        </section>


        <section class="p-recruit-hero">
            <h3 class="p-recruit-hero__heading">過去と未来を繋ぎ続ける</h3>
            <div class="p-recruit-hero__animation">
                <div class="c-text-loop --recruit">
                    <div class="c-text-loop__textWrap">
                        <div class="c-text-loop__text --recruit">
                            <span>fujiwara recruit</span>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="p-recruit-hero__image-left js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img02.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img02.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img02_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img02_sp.jpg"
                        alt="" />
                </picture>
            </figure>
            <figure class="p-recruit-hero__image-right js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img01.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img01.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img01_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/head_img01_sp.jpg"
                        alt="" />
                </picture>
            </figure>
        </section>
        <section class="p-recruit-message">
            <div class="p-recruit-message__text-wrapper">
                <div class="c-sub-heading">
                    <h3 class="c-sub-heading__title">Message</h3>
                    <div class="c-sub-heading__subtitle">メッセージ</div>
                </div>
                <p class="p-recruit-message__text-title">地域の皆様へ恩返しを</p>
                <p class="p-recruit-message__text">
                    私たちは、これまでたくさんの実績を残してきました。自慢の技術力も企業全体で向上してきており、私たちの誇りの一つです。
                    <br />
                    そんな誇りに思えるモノたちですが、地域の皆様のご協力や声援がなければ、積み上げることが出来なかったのは間違いありません。
                </p>
                <p class="p-recruit-message__text">
                    私たちは、これからも「地域の皆様へ恩返しを」を第一に、社会へ貢献していきます。
                    <br />
                    藤原建設工業では、地域へ貢献したいと強く思っている方を求めています。
                </p>
            </div>

            <figure class="p-recruit-message__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message_img.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message_img.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message_img_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message_img_sp.jpg"
                        alt="" />
                </picture>
            </figure>
        </section>

        <secton class="p-recruit-parallax">
            <figure class="p-recruit-parallax__image js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/parallax_img.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/parallax_img.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/parallax_img_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/parallax_img_sp.jpg"
                        alt="" />
                </picture>
            </figure>
        </secton>

        <section class="p-recruit-faq">
            <div class="p-recruit-faq__heading-wrapper">
                <div class="c-sub-heading">
                    <h3 class="c-sub-heading__title">FAQ</h3>
                    <div class="c-sub-heading__subtitle">よくある質問</div>
                </div>
            </div>

            <div class="p-recruit-faq__list-wrapper">
                <ul class="p-recruit-faq__list">
                    <?php if (get_field('faq', 'option')) : ?>
                    <?php while (the_repeater_field('faq', 'option')) : ?>
                    <li class="p-recruit-faq__item">
                        <h2 class="p-recruit-faq__title close">
                            <?php the_sub_field('question', 'option'); ?><span class="toggle"></span></h2>
                        <p class="p-recruit-faq__text"><?php the_sub_field('answer', 'option'); ?></p>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </section>

        <section class="p-recruit-desc">
            <div class="p-recruit-desc__heading-wrapper">
                <div class="c-sub-heading">
                    <h3 class="c-sub-heading__title">Job description</h3>
                    <div class="c-sub-heading__subtitle">募集要項</div>
                </div>
            </div>
            <div class="p-recruit-desc__menu-wrapper">
                <ul class="p-recruit-desc__menu">
                    <li class="p-recruit-desc__item">
                        <a href="#" data-id="menuId01" class="p-recruit-desc__link is-select">建設業務</a>
                    </li>
                    <li class="p-recruit-desc__item">
                        <a href="#" data-id="menuId02" class="p-recruit-desc__link">事務業務</a>
                    </li>
                    <li class="p-recruit-desc__item">
                        <a href="#" data-id="menuId03" class="p-recruit-desc__link">営業業務</a>
                    </li>
                </ul>
            </div>

            <div id="menuId01" class="p-recruit-desc__content is-select">
                <div class="p-recruit-desc__content-title">
                    <h2 class="c-heading__title">建設業務</h2>
                </div>
                <div class="p-recruit-desc__dl-wrapper">
                    <dl class="c-definition__list">
                        <?php if (get_field('archi', 'option')) : ?>
                        <?php while (the_repeater_field('archi', 'option')) : ?>
                        <div class="c-definition__list-item">
                            <dt class="c-definition__term"><?php the_sub_field('item', 'option'); ?></dt>
                            <dd class="c-definition__desc"><?php the_sub_field('content', 'option'); ?></dd>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </dl>
                </div>
                <div class="p-recruit-desc__btn-wrapper">
                    <button class="p-recruit-desc__btn">
                        <a href="<?php echo esc_url(home_url('entry')); ?>"> エントリー </a>
                    </button>
                </div>
            </div>
            <div id="menuId02" class="p-recruit-desc__content">
                <div class="p-recruit-desc__content-title">
                    <h2 class="c-heading__title">事務業務</h2>
                </div>
                <div class="p-recruit-desc__dl-wrapper">
                    <dl class="c-definition__list">
                        <?php if (get_field('office', 'option')) : ?>
                        <?php while (the_repeater_field('office', 'option')) : ?>
                        <div class="c-definition__list-item">
                            <dt class="c-definition__term"><?php the_sub_field('item', 'option'); ?></dt>
                            <dd class="c-definition__desc"><?php the_sub_field('content', 'option'); ?></dd>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </dl>
                </div>
                <div class="p-recruit-desc__btn-wrapper">
                    <button class="p-recruit-desc__btn">
                        <a href="<?php echo esc_url(home_url('entry')); ?>"> エントリー </a>
                    </button>
                </div>
            </div>
            <div id="menuId03" class="p-recruit-desc__content">
                <div class="p-recruit-desc__content-title">
                    <h2 class="c-heading__title">営業業務</h2>
                </div>
                <div class="p-recruit-desc__dl-wrapper">
                    <dl class="c-definition__list">
                        <?php if (get_field('sales', 'option')) : ?>
                        <?php while (the_repeater_field('sales', 'option')) : ?>
                        <div class="c-definition__list-item">
                            <dt class="c-definition__term"><?php the_sub_field('item', 'option'); ?></dt>
                            <dd class="c-definition__desc"><?php the_sub_field('content', 'option'); ?></dd>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </dl>
                </div>
                <div class="p-recruit-desc__btn-wrapper">
                    <button class="p-recruit-desc__btn">
                        <a href="<?php echo esc_url(home_url('entry')); ?>"> エントリー </a>
                    </button>
                </div>
            </div>
        </section>
        <section class="p-recruit-form">
            <div class="p-recruit-form__container">
                <a href="<?php echo esc_url(home_url('entry')); ?>" class="p-recruit-form__link">
                    <div class="p-recruit-form__inner">
                        <div class="p-recruit-form__text-left">
                            <h3 class="p-recruit-form__title">
                                Entry form
                                <br />
                                <span>エントリーフォーム</span>
                            </h3>
                        </div>
                        <div class="p-recruit-form__text-right">
                            <div class="c-desc__link-text">View More</div>
                            <div class="c-arrow c-arrow--round"></div>
                        </div>
                    </div>
                </a>
            </div>
            <figure class="p-recruit-form__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/form_bg.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/form_bg.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/form_bg_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/form_bg_sp.jpg"
                        width="390" height="182" loading="lazy" alt="" />
                </picture>
            </figure>
        </section>
    </main>
    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_footer(); ?>
</body>

</html>