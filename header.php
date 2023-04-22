<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
    
    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title>Polistirol</title>

    <?php wp_head(); ?>

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