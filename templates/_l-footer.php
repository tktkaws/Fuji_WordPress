<!-- footer -->
<footer class="l-footer">
    <figure class="l-footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer_logo.svg" alt="ロゴ" />
        </a>
    </figure>

    <address class="l-footer__address">
        <span>Access</span><br />
        <span>藤原建設工業株式会社 本社 </span><br />
        <span>〒000-0000 東京都◯区◯◯町0-00-00</span><br />
        <a href="tel:00-0000-0000">TEL 00-0000-0000</a>
    </address>

    <div class="l-footer__menu">
        <ul class="l-footer__list">
            <li class="l-footer__item">
                <a href="<?php echo esc_url(home_url('/company')); ?>">
                    <span class="l-footer__menu-text">company</span>
                </a>
            </li>
            <li class="l-footer__item">
                <a href="<?php echo esc_url(home_url('/service')); ?>">
                    <span class="l-footer__menu-text">service</span>
                </a>
            </li>
            <li class="l-footer__item">
                <a href="<?php echo esc_url(home_url('/works')); ?>">
                    <span class="l-footer__menu-text">works</span>
                </a>
            </li>
            <li class="l-footer__item">
                <a href="<?php echo esc_url(home_url('/news')); ?>">
                    <span class="l-footer__menu-text">news</span>
                </a>
            </li>
            <li class="l-footer__item">
                <a href="<?php echo esc_url(home_url('/contact')); ?>">
                    <span class="l-footer__menu-text">contact</span>
                </a>
            </li>
            <li class="l-footer__item">
                <a href="<?php echo esc_url(home_url('/recruit')); ?>">
                    <span class="l-footer__menu-text">recruit</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="l-footer__arrow">
        <a href="#" class="c-arrow c-arrow--round-top"></a>
    </div>
    <div class="l-footer__policy">
        <a href="<?php echo esc_url(home_url('/privacy')); ?>">
            <span> Privacy Policy </span>
        </a>
        <small>© 1995 Fujiwara Construction Industry. Co., Ltd.</small>
    </div>
</footer>
<!-- /footer -->