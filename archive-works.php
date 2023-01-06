<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body class="subpage">
    <?php get_template_part('templates/_l-header'); ?>
    <!-- main -->
    <main class="l-main">
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
            <figure class="l-hero__image js-parallax-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/hero_works.webp" media="(min-width: 769px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/hero_works.jpg" media="(min-width: 769px)" type="image/jpg" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/hero_works_sp.webp" type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/hero_works_sp.jpg" alt="" />
                </picture>
            </figure>
            <div class="l-hero__breadcrumbs"><a href="">top</a>施工実績</div>
        </section>

        <section class="p-works-category">
            <div class="p-works-category__title-wrapper">
                <div class="p-works-category__heading">Category</div>
                <ul class="p-works-category__titles">
                    <li class="p-works-category__title is-active">
                        <a href="<?php echo esc_url(home_url('works')); ?>"> 全て </a>
                    </li>
                    <?php
                    $taxonomies = array(
                        'works_category'
                    );
                    $args = array(
                        'order' => 'DESC'
                    );
                    $taxonomy_terms = get_terms($taxonomies, $args);
                    if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {

                        foreach ($taxonomy_terms as $taxonomy_term) :
                    ?>
                            <li class="p-news__category-item">
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
            <div class="p-works-category__card-wrapper">
                <ul class="p-works-category__cards">
                    <?php
                    $count = 1;
                    $args = [
                        'post_type' =>
                        array('works'),
                        'posts_per_page' => 15,
                        'paged' => get_query_var('paged'),
                    ];

                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) :
                        while ($my_query->have_posts()) :
                            $my_query->the_post(); ?>

                            <li class="p-works-category__card <?php
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

                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div class="p-works-category__btn-wrapper">
                <button class="p-works-category__btn">View More</button>
            </div>
            <!-- pagination -->
            <div class="c-pagination">
                <div class="c-pagination__inner">
                    <?php if (function_exists('pagination')) :
                        pagination($my_query->max_num_pages, $paged);
                    endif; ?>
                </div>
            </div>
            <!-- /pagination -->
        </section>
    </main>
    <!-- /main -->
    <?php get_template_part('templates/_l-subFooter'); ?>
    <?php get_template_part('templates/_l-footer'); ?>
    <?php get_footer(); ?>

</body>

</html>
