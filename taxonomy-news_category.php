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
                        <span class="l-section__titleText">N</span>
                        <span class="l-section__titleText">e</span>
                        <span class="l-section__titleText">w</span>
                        <span class="l-section__titleText">s</span>
                    </span>
                    <span class="-jp">新着情報</span>
                </h2>
            </div>
            <figure class="l-hero__image js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/news/hero_news.webp"
                        media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/news/hero_news.jpg"
                        media="(min-width: 769px)" type="image/jpg" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/news/hero_news_sp.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/hero_news_sp.jpg" alt="" />
                </picture>
            </figure>
            <div class="l-hero__breadcrumbs"><a href="">top</a>新着情報</div>
        </section>

        <article class="p-news">
            <div class="p-news__header">
                <div class="p-news__heading">Category</div>
                <ul class="p-news__category-list">
                    <li class="p-news__category-item">
                        <a href="<?php echo esc_url(home_url('news')); ?>"> 全て </a>
                    </li>
                    <?php
                    $taxonomies = array(
                        'news_category'
                    );
                    $args = array(
                        'order' => 'DESC'
                    );
                    $taxonomy_terms = get_terms($taxonomies, $args);
                    if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {

                        foreach ($taxonomy_terms as $taxonomy_term) :
                    ?>
                    <li class="p-news__category-item <?php if ($taxonomy_term->slug === $term) {
                                                                    echo 'is-active';
                                                                } ?>">
                        <a href="<?php echo get_term_link($taxonomy_term); ?>">
                            <?php echo $taxonomy_term->name; ?>
                        </a>
                    </li>



                    <?php
                        endforeach;
                    }
                    ?>
                </ul>
            </div>

            <div class="p-news__card-wrapper">
                <ul class="p-news__card-list">
                    <?php
                    $type = get_query_var('news_category');
                    $args = array(
                        'post_type' => array('news'),
                        'tax_query' => array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'news_category',
                                'field' => 'slug',
                                'terms' => $type,
                            ),
                        ),
                        'paged' => $paged,
                        'posts_per_page' => '5'
                    );

                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
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

                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                </ul>
            </div>

            <aside class="p-news__archive">
                <div class="p-news__archive-heading">Archive</div>
                <ul class="p-news__archive-list">
                    <?php
                    $args = array(
                        'type' => 'monthly',
                        'limit' => '',
                        'format' => 'html',
                        'before' => '',
                        'after' => '',
                        'show_post_count' => true,
                        'echo' => 1,
                        'order' => 'DESC',
                        'post_type' => 'news'
                    );
                    wp_get_archives($args);
                    ?>
                </ul>

            </aside>

            <div class="p-news__pagenation">
                <?php
                if (function_exists('pagination')) :
                    pagination($my_query->max_num_pages, $paged);
                endif;
                ?>

                <?php wp_reset_postdata(); ?>
            </div>
        </article>
    </main>

    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_footer(); ?>

</body>

</html>