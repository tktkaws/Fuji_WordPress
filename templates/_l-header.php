<header id="js-header" class="l-header">
    <div class="l-header__inner" id="top">
        <figure class="l-header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ" />
            </a>
        </figure>
        <nav class="l-header__nav">
            <ul class="l-header__menu js-hide">
                <li class="l-header__menu-item">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__menu-link"> top </a>
                </li>
                <li class="l-header__menu-item">
                    <a href="<?php echo esc_url(home_url('/company')); ?>" class="l-header__menu-link"> company </a>
                </li>
                <li class="l-header__menu-item">
                    <a href="<?php echo esc_url(home_url('/service')); ?>" class="l-header__menu-link"> service </a>
                </li>

                <li class="l-header__menu-item js-submenu-trigger">
                    <!-- <li class="l-header__menu-item"> -->
                    <a href="<?php echo esc_url(home_url('/works')); ?>" class="l-header__menu-link">
                        works<span class="c-arrow-bottom"> </span>
                    </a>

                    <!-- submenu -->
                    <div class="l-header__submenu js-submenu is-none">
                        <div class="l-header__submenu-inner">
                            <figure class="l-header__submenu-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/submenu.jpg"
                                    alt="サブメニュー" />
                            </figure>
                            <ul class="l-header__submenu-list">
                                <li class="l-header__submenu-item">
                                    <a href="<?php echo esc_url(home_url('works_category/archi')); ?>"
                                        class="l-header__submenu-link">
                                        <div class="l-header__submenu-title">
                                            <span class="eng">Architecture</span><br />
                                            <span>建築事業</span>
                                        </div>
                                        <div class="c-arrow c-arrow--round"></div>
                                    </a>
                                </li>
                                <li class="l-header__submenu-item">
                                    <a href="<?php echo esc_url(home_url('works_category/civil')); ?>"
                                        class="l-header__submenu-link">
                                        <div class="l-header__submenu-title">
                                            <span class="eng">Civil engineering</span><br />
                                            <span>土木事業</span>
                                        </div>
                                        <div class="c-arrow c-arrow--round"></div>
                                    </a>
                                </li>

                                <li class="l-header__submenu-item">
                                    <a href="<?php echo esc_url(home_url('works_category/housing')); ?>"
                                        class="l-header__submenu-link">
                                        <div class="l-header__submenu-title">
                                            <span class="eng">Housing</span><br />
                                            <span>住宅事業</span>
                                        </div>
                                        <div class="c-arrow c-arrow--round"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- submenu -->
                <li class="l-header__menu-item">
                    <a href="<?php echo esc_url(home_url('/news')); ?>" class="l-header__menu-link"> news </a>
                </li>
            </ul>
            <!-- btn -->
            <button class="c-btn">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-btn__link"> recruit </a>
            </button>
            <button class="c-btn--accent">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-btn__link"> contact </a>
            </button>
            <!-- btn -->
        </nav>
        <!-- hamburger-btn -->
        <button class="l-header__hamburger-btn" onClick="document.querySelector('body').classList.toggle('open')">
            <span class="l-header__hamburger-btn-bar"></span>
            <span class="l-header__sr-only">MENU</span>
        </button>
        <!-- hamburger-btn -->
    </div>
    <!-- mobile-nav -->
    <nav class="l-mobile-nav">
        <ul class="l-mobile-nav__menu">
            <li class="l-mobile-nav__menu-item">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="l-mobile-nav__link">top </a>
            </li>
            <li class="l-mobile-nav__menu-item">
                <a href="<?php echo esc_url(home_url('/company')); ?>" class="l-mobile-nav__link">company </a>
            </li>
            <li class="l-mobile-nav__menu-item">
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="l-mobile-nav__link">service </a>
            </li>
            <li class="l-mobile-nav__menu-item">
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="l-mobile-nav__link">works </a>
                <ul class="l-mobile-nav__submenu">
                    <li class="l-mobile-nav__submenu-item">
                        <a href="<?php echo esc_url(home_url('works_category/archi')); ?>"
                            class="l-mobile-nav__link">建築事業 </a>
                    </li>
                    <li class="l-mobile-nav__submenu-item">
                        <a href="<?php echo esc_url(home_url('works_category/civil')); ?>"
                            class="l-mobile-nav__link">土木事業 </a>
                    </li>
                    <li class="l-mobile-nav__submenu-item">
                        <a href="<?php echo esc_url(home_url('works_category/housing')); ?>"
                            class="l-mobile-nav__link">住宅事業 </a>
                    </li>
                </ul>
            </li>
            <li class="l-mobile-nav__menu-item">
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="l-mobile-nav__link">news </a>
            </li>
        </ul>

        <div class="l-mobile-nav__btn-wrapper">
            <button class="c-btn">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-btn__link"> recruit </a>
            </button>
            <button class="c-btn--accent">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-btn__link"> contact </a>
            </button>
        </div>

        <div class="l-mobile-nav__info">
            <div class="l-mobile-nav__subtitle">Access</div>
            <address class="l-mobile-nav__address">
                藤原建設工業株式会社 本社<br />
                〒000-0000 千葉県◯◯市◯◯丁目◯◯番<br />
                TEL 00-0000-0000
            </address>
        </div>
        <div class="l-mobile-nav__info">
            <div class="l-mobile-nav__subtitle">Privacy Policy</div>
            <small class="l-mobile-nav__policy">
                © 1995 Fujiwara Construction Industry. Co., Ltd.
            </small>
        </div>
    </nav>
    <!-- mobile-nav -->
</header>