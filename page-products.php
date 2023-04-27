<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.min.css">
    
    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title>Document | Home</title>
</head>
<body>
    <div class="page">
    <svg display="none">
        <symbol id="search" viewBox="0 0 20 20">
    
            <path
                d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M19.0004 18.9999L14.6504 14.6499"  stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
    
    
        </symbol>
    </svg>
    <svg display="none">
        <symbol id="close" viewBox="0 0 24 24">
    
            <path d="M5 5L19 19M5 19L19 5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    
    
        </symbol>
    </svg>
    <svg display="none">
        <symbol id="favorites" viewBox="0 0 27 24">
    
            <path
                d="M24.0723 2.94496C23.4614 2.32835 22.7361 1.83921 21.9378 1.50549C21.1396 1.17177 20.2839 1 19.4199 1C18.5558 1 17.7001 1.17177 16.9019 1.50549C16.1036 1.83921 15.3783 2.32835 14.7674 2.94496L13.4997 4.22404L12.2319 2.94496C10.998 1.70004 9.3245 1.00065 7.57951 1.00065C5.83452 1.00065 4.16099 1.70004 2.92709 2.94496C1.6932 4.18988 1 5.87836 1 7.63895C1 9.39954 1.6932 11.088 2.92709 12.3329L4.19485 13.612L13.4997 23L22.8045 13.612L24.0723 12.3329C24.6834 11.7166 25.1682 10.9849 25.499 10.1794C25.8298 9.37403 26 8.51076 26 7.63895C26 6.76714 25.8298 5.90387 25.499 5.09846C25.1682 4.29305 24.6834 3.56128 24.0723 2.94496Z"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>
    </svg>
    <svg display="none">
        <symbol id="basket" viewBox="0 0 29 21">
    
            <path d="M1.20801 1.2085H6.04134L9.27967 17.3881C9.39017 17.9444 9.69281 18.4441 10.1346 18.7998C10.5764 19.1554 11.1293 19.3444 11.6963 19.3335H23.4413C24.0084 19.3444 24.5612 19.1554 25.0031 18.7998C25.4449 18.4441 25.7475 17.9444 25.858 17.3881L27.7913 7.25016H7.24967"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    
    
        </symbol>
    </svg>
    <header class="header">
        <div class="container container-main">
            <div class="header__inner">
                <a class="header__inner__logo__link" href="./index.html">
                    <div class="header__inner__logo" style="background-image: url(./assets/images/header/Logo.png);"></div>
                    <div class="header__inner__logomobile" style="background-image: url(./assets/images/header/logomobile.png);"></div>
                </a>
    
                <div class="header__inner__burger" id="burger" style="background-image: url(./assets/images/svg/burger.svg);"></div>
    
                <nav class="header__inner__nav">
                    <a href="./index.html" class="header__inner__nav__item">Главная</a>
                    <a href="./index.html#about__us" class="header__inner__nav__item">О нас</a>
                    <a href="./index.html#catalog" class="header__inner__nav__item">Каталог</a>
                    <a href="./index.html#adventages" class="header__inner__nav__item">Характеристики</a>
                    <a href="./index.html#testing" class="header__inner__nav__item">Документы</a>
                </nav>
                <div class="header__inner__widgets" id="widgets">
                    <div class="header__inner__widgets__item">
                        <input type="text" class="header__inner__widgets__search" placeholder="Поиск товара">
                        <svg class="header__inner__widgets__searchicon" id="header__search">
                            <use xlink:href="#search"></use>
                        </svg>
                    </div>
                    
                    <a href="./favourites.html" class="header__inner__widgets__icon">
                        <svg class="header__inner__widgets__favorites">
                            <use xlink:href="#favorites"></use>
                        </svg>
                    </a>
    
                    <a href="./basket.html" class="header__inner__widgets__icon">
                        <svg class="header__inner__widgets__basket">
                            <use xlink:href="#basket"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="menu__burger" id="menu__burger">
                <div class="menu__burger__wrapper">
                    <div class="burger__close">
                        <svg data-close>
                            <use xlink:href="#close"></use>
                        </svg>
                    </div>
                    <nav class="header__inner__nav__burger">
                        <a href="./index.html" class="header__inner__nav__burger__item" data-select>Главная</a>
                        <a href="#about__us" class="header__inner__nav__burger__item" data-select>О нас</a>
                        <a href="#catalog" class="header__inner__nav__burger__item" data-select>Каталог</a>
                        <a href="#adventages" class="header__inner__nav__burger__item" data-select>Характеристики</a>
                        <a href="#testing" class="header__inner__nav__burger__item" data-select>Лицензии</a>
                    </nav>
        
                    <div class="header__inner__nav__burger__widgets">
                        <a href="" >
                            <svg class="header__inner__widgets__burger" data-search="icon">
                                <use xlink:href="#search"></use>
                            </svg>
                        </a>
                        <a href="./favourites.html" >
                            <svg class="header__inner__widgets__burger">
                                <use xlink:href="#favorites"></use>
                            </svg>
                        </a>
        
                        <a href="./basket.html">
                            <svg class="header__inner__widgets__burger">
                                <use xlink:href="#basket"></use>
                            </svg>
                        </a>
                    </div>
                    <input type="text" class="header__inner__burger__widgets__searchblok" placeholder="Поиск товара" data-search="input">
                </div>
            </div> 
        </div>
    </header>    
   
    <div class="main">
        <section class="productinfo">
            <div class="container container-product">
        
                <div class="productinfo__wrapper">
                    <a href="" class="productinfo__inner__back">
                        <img src="./assets/images/products/Arrow 3.svg" alt="">Назад
                    </a>
                    <div class="productinfo__inner">
                        <div class="productinfo__inner__left">
                            <h2 class="productinfo__inner__right__title productinfo__inner__right__title__mobile">
                                Полистиролбетон</h2>
                            <div id="main-carousel" class="splide splide-main" aria-label="My Awesome Gallery">
                                <div class="splide__track">
                                    <ul class="splide__list splide__list__main">
                                        <li class="splide__slide splide__slide__main">
                                            <div class="splide__slide__main__wrapper">
                                                <svg class="header__inner__widgets__favorites productinfo__inner__right__buttons__favourites --mobile"
                                                    id="favourite">
                                                    <use xlink:href="#favorites"></use>
                                                </svg>
                                                <img src="./assets/images/products/blockbig.png" alt="">
                                            </div>
                                        </li>
                                        <li class="splide__slide splide__slide__main">
                                            <div class="splide__slide__main__wrapper">
                                                <svg class="header__inner__widgets__favorites productinfo__inner__right__buttons__favourites --mobile"
                                                    id="favourite">
                                                    <use xlink:href="#favorites"></use>
                                                </svg>
                                                <img src="./assets/images/products/blockbig.png" alt="">
                                            </div>
                                        </li>
                                        <li class="splide__slide splide__slide__main">
                                            <div class="splide__slide__main__wrapper">
                                                <svg class="header__inner__widgets__favorites productinfo__inner__right__buttons__favourites --mobile"
                                                    id="favourite">
                                                    <use xlink:href="#favorites"></use>
                                                </svg>
                                                <img src="./assets/images/products/blockbig.png" alt="">
                                            </div>
                                        </li>
                                        <li class="splide__slide splide__slide__main">
                                            <div class="splide__slide__main__wrapper">
                                                <svg class="header__inner__widgets__favorites productinfo__inner__right__buttons__favourites --mobile"
                                                    id="favourite">
                                                    <use xlink:href="#favorites"></use>
                                                </svg>
                                                <img src="./assets/images/products/blockbig.png" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <ul id="thumbnails" class="thumbnails">
                                <li class="thumbnail thumbnail__main">
                                    <img src="./assets/images/products/blocksmall1.png" alt="">
                                </li>
                                <li class="thumbnail thumbnail__main">
                                    <img src="./assets/images/products/blocksmall2.png" alt="">
                                </li>
                                <li class="thumbnail thumbnail__main">
                                    <img src="./assets/images/products/blocksmall3.png" alt="">
                                </li>
                                <li class="thumbnail thumbnail__main">
                                    <img src="./assets/images/products/blocksmall2.png" alt="">
                                </li>
                            </ul>
        
                            <div class="content__loaded" data-insert>
        
                            </div>
        
                            <h5 class="productinfo__inner__left__title">Технические особенности</h5>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Длина кабеля </span>
                                <span class="productinfo__inner__left__data__digit">250 см</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Количество скоростей </span>
                                <span class="productinfo__inner__left__data__digit">2 шт.</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Количество режимов работы </span>
                                <span class="productinfo__inner__left__data__digit">3</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Мощность устройства </span>
                                <span class="productinfo__inner__left__data__digit">2000 Вт</span>
                            </div>
                        </div>
                        <div class="productinfo__inner__right" data-content>
                            <h2 class="productinfo__inner__right__title">Полистиролбетон</h2>
                            <span class="productinfo__inner__right__data">Когда-то давно в мире строительства появился новый
                                материал - полистиролбетон. Это было что-то совершенно новое, потому что этот материал сочетал в
                                себе прочность бетона и изоляционные свойства полистирола.</span>
                            <div class="productinfo__inner__right__data__container">
                                <select name="" id="" class="productinfo__inner__right__size" size="1">
                                    <option disabled selected>Размер</option>
                                    <option value="size1">125х63х85</option>
                                    <option value="size2">125х63х85</option>
                                    <option value="size3">125х63х85</option>
                                </select>
                                <div class="productinfo__inner__right__availibility">
                                    В наличии <span class="productinfo__inner__right__availibility__count">есть</span>
                                </div>
                                <a class="productinfo__inner__right__availibility productinfo__inner__right__noneavailibility"
                                    href="">
                                    Предзаказ
                                </a>
                            </div>
        
                            <div class="productinfo__inner__right__parametrs">
                                <div class="productinfo__inner__right__parametrs__height"><b>Высота</b><input
                                        class="productinfo__inner__right__parametrs__input"></div>
                                <div class="productinfo__inner__right__parametrs__width"><b>Ширина</b><input
                                        class="productinfo__inner__right__parametrs__input"></div>
                            </div>
                            <div class="productinfo__inner__right__dataprice">
                                <div class="productinfo__inner__right__dataprice__minus" data-operation="minus">-</div>
                                <div class="productinfo__inner__right__dataprice__count">1</div>
                                <div class="productinfo__inner__right__dataprice__plus" data-operation="plus">+</div>
                                <div class="productinfo__inner__right__dataprice__price">9 990 р.</div>
                            </div>
                            <div class="productinfo__inner__right__buttons">
                                <button type="button" class="productinfo__inner__right__battons__addbasket">Добавить в
                                    корзину</button>
                                <svg class="header__inner__widgets__favorites productinfo__inner__right__buttons__favourites"
                                    id="favourite">
                                    <use xlink:href="#favorites"></use>
                                </svg>
                            </div>
                            <h5 class="productinfo__inner__left__title">Дополнительная информация</h5>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Длина упаковки</span>
                                <span class="productinfo__inner__left__data__digit">30 см</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Высота упаковки</span>
                                <span class="productinfo__inner__left__data__digit">10 см</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Глубина предмета </span>
                                <span class="productinfo__inner__left__data__digit">7.5 см</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Вес товара без упаковки (г)</span>
                                <span class="productinfo__inner__left__data__digit">660 г</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Страна производства </span>
                                <span class="productinfo__inner__left__data__digit">Китай</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Ширина предмета </span>
                                <span class="productinfo__inner__left__data__digit">7.5 см</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Вес товара с упаковкой (г)</span>
                                <span class="productinfo__inner__left__data__digit">900 г</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Вес товара с упаковкой (г)</span>
                                <span class="productinfo__inner__left__data__digit">900 г</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Вес товара с упаковкой (г)</span>
                                <span class="productinfo__inner__left__data__digit">900 г</span>
                            </div>
                            <div class="productinfo__inner__left__data">
                                <span class="productinfo__inner__left__data__item">Вес товара с упаковкой (г)</span>
                                <span class="productinfo__inner__left__data__digit">900 г</span>
                            </div>
        
                        </div>
                    </div>
                </div>
        
            </div>
        </section>
        
        <section class="similar">
            <div class="container  container-product">
                <div class="similar__inner">
                    <h1 class="similar__inner__title similar__inner__title--center">Похожие товары</h1>
                    <div class="similar__inner__wrapper similar__inner__wrapper--none">
                        <div class="similar__inner__wrapper__item">
                            <div class="similar__inner__wrapper__item_background">
                                <img src="./assets/images/similar/135843-PhotoRoom.png" alt="">
                            </div>
                            <h5 class="similar__inner__wrapper__item__subtitle">Полистиролбетон</h5>
                            <span class="similar__inner__wrapper__item__price">9 900 р.</span>
                        </div>
                        <div class="similar__inner__wrapper__item">
                            <div class="similar__inner__wrapper__item_background">
                                <img src="./assets/images/similar/466_original-PhotoRoom.png" alt="">
                            </div>
                            <h5 class="similar__inner__wrapper__item__subtitle">Полистиролбетон</h5>
                            <span class="similar__inner__wrapper__item__price">9 900 р.</span>
                        </div>
                        <div class="similar__inner__wrapper__item">
                            <div class="similar__inner__wrapper__item_background">
                                <img src="./assets/images/similar/135843-PhotoRoom.png" alt="">
                            </div>
                            <h5 class="similar__inner__wrapper__item__subtitle">Полистиролбетон</h5>
                            <span class="similar__inner__wrapper__item__price">9 900 р.</span>
                        </div>
                    </div>
        
                    <div class="swiper swiper__similar">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="similar__inner__wrapper__item similar__inner__wrapper__item--mobile">
                                    <div
                                        class="similar__inner__wrapper__item_background similar__inner__wrapper__item_background--mobile">
                                        <img src="./assets/images/similar/135843-PhotoRoom.png" alt="">
                                    </div>
                                    <h5 class="similar__inner__wrapper__item__subtitle">Полистиролбетон</h5>
                                    <span class="similar__inner__wrapper__item__price">9 900 р.</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="similar__inner__wrapper__item similar__inner__wrapper__item--mobile">
                                    <div
                                        class="similar__inner__wrapper__item_background similar__inner__wrapper__item_background--mobile">
                                        <img src="./assets/images/similar/135843-PhotoRoom.png" alt="">
                                    </div>
                                    <h5 class="similar__inner__wrapper__item__subtitle">Полистиролбетон</h5>
                                    <span class="similar__inner__wrapper__item__price">9 900 р.</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="similar__inner__wrapper__item similar__inner__wrapper__item--mobile">
                                    <div
                                        class="similar__inner__wrapper__item_background similar__inner__wrapper__item_background--mobile">
                                        <img src="./assets/images/similar/135843-PhotoRoom.png" alt="">
                                    </div>
                                    <h5 class="similar__inner__wrapper__item__subtitle">Полистиролбетон</h5>
                                    <span class="similar__inner__wrapper__item__price">9 900 р.</span>
                                </div>
                            </div>
        
                        </div>
        
        
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev button-prev-similar"></div>
                        <div class="swiper-button-next button-next-similar"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container container-main">
            <div class="footer__inner">
    
                <div class="footer__inner__column__logo__mobile" style="background-image: url(./assets/images/footer/Logo.png);">
                </div>
    
                <div class="footer__inner__top">
                    <div class="footer__inner__top__columns">
                        <div class="footer__inner__column__logo"
                            style="background-image: url(./assets/images/footer/Logo.png);"></div>
                    </div>
                    <div class="footer__inner__top__columns">
                        <div class="footer__inner__column">
                            <h5 class="footer__inner__column__title">Навигация</h5>
                            <nav class="nav__footer">
                                <div>
                                    <a href="./index.html" class="nav__footer__item">Главная</a>
                                    <a href="./index.html#catalog" class="nav__footer__item">Каталог</a>
                                </div>
                                <div>
                                    <a href="./index.html#about__us" class="nav__footer__item">О нас</a>
                                    <a href="./index.html#testing" class="nav__footer__item">Лицензии</a>
                                </div>
    
                            </nav>
                        </div>
                    </div>
                    <div class="footer__inner__top__columns">
                        <div class="footer__inner__column">
                            <h5 class="footer__inner__column__title">Контакты</h5>
                            <div class="footer__inner__column__items">
                                <div>
                                    <a class="footer__inner__column__links__item">г. Москва</a>
                                    <a class="footer__inner__column__links__item" href="tel:+71234567890">+71234567890
                                    </a>
                                </div>
                                <a class="footer__inner__column__links__item"
                                    href="mailto:alma.lawson@example.com">alma.lawson&shy;@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__inner__bottom">
                    <div class="footer__inner__bottm__social">
                        <a href="" class="footer__inner__bottm__social__item">
                            <img src="./assets/images/footer/icomoon-free_vk.svg" alt="free_vk">
                        </a>
                        <a href="" class="footer__inner__bottm__social__item">
                            <img src="./assets/images/footer/cib_telegram.svg" alt="cib_telegram">
                        </a>
                        <a href="" class="footer__inner__bottm__social__item">
                            <img src="./assets/images/footer/basil_instagram-solid.svg" alt="basil_instagram">
                        </a>
                    </div>
                    <a href="" class="footer__inner__column__link">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>