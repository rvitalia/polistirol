<footer class="footer">
        <div class="container container-main container-footer">
            <div class="footer__inner">
    
                <div class="footer__inner__column__logo__mobile" style="background-image: url(<?php the_field('logo_site',  'option') ?>);">
                </div>
    
                <div class="footer__inner__top">
                    <div class="footer__inner__top__columns">
                        <div class="footer__inner__column__logo"
                            style="background-image: url(<?php the_field('logo_site',  'option') ?>);"></div>
                    </div>
                    <div class="footer__inner__top__columns">
                        <div class="footer__inner__column">
                            <h5 class="footer__inner__column__title">Навигация</h5>
                            <nav class="nav__footer">
                                <div>
                                    <a href="<?php bloginfo('url'); ?>" class="nav__footer__item">Главная</a>
                                    <a href="<?php bloginfo('url'); ?>#catalog" class="nav__footer__item">Каталог</a>
                                </div>
                                <div>
                                    <a href="<?php bloginfo('url'); ?>#about__us" class="nav__footer__item">О нас</a>
                                    <a href="<?php bloginfo('url'); ?>#testing" class="nav__footer__item">Лицензии</a>
                                </div>
    
                            </nav>
                        </div>
                    </div>
                    <div class="footer__inner__top__columns">
                        <div class="footer__inner__column">
                            <h5 class="footer__inner__column__title">Контакты</h5>
                            <div class="footer__inner__column__items">
                                <div>
                                    <a class="footer__inner__column__links__item"> <?php the_field('city',  'option') ?> </a>
                                    <a class="footer__inner__column__links__item" href="tel:<?php the_field('footer_telcall',  'option') ?>"><?php the_field('footer_tel',  'option') ?>
                                    </a>
                                </div>
                                <a class="footer__inner__column__links__item"
                                    href="<?php the_field('email_footersend',  'option') ?>"><?php the_field('email_footer',  'option') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__inner__bottom">
                    <div class="footer__inner__bottm__social">
                        <a href="<?php the_field('href_vk',  'option') ?>" class="footer__inner__bottm__social__item">
                            <img src="<?php the_field('logo_vk',  'option') ?>" alt="free_vk">
                        </a>
                        <a href="<?php the_field('href_tg',  'option') ?>" class="footer__inner__bottm__social__item">
                            <img src="<?php the_field('logo_tg',  'option') ?>" alt="cib_telegram">
                        </a>
                        <a href="<?php the_field('href_inst',  'option') ?>" class="footer__inner__bottm__social__item">
                            <img src="<?php the_field('logo_inst',  'option') ?>" alt="basil_instagram">
                        </a>
                    </div>
                    <a href="" class="footer__inner__column__link">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <?php wp_footer(); ?>
    
</body>
</html>