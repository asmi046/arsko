@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
<header class="header">
    <div class="container">
        <!-- Шапка навигации -->
        <nav class="header__nav">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <img src="{{ asset('img/logo.svg') }}" alt="Логотип" class="header__logo-img">
                </a>
            </div>

            <div class="header__contacts">
                <div class="header__contact-item">
                    <a href="tel:+79999999999" class="header__contact-link">+7 999 999 99 99</a>
                </div>
                <div class="header__contact-item">
                    <a href="mailto:email@mail.ru" class="header__contact-link">email@mail.ru</a>
                </div>
                <button class="button button-white header__contact-btn">Написать обращение</button>
            </div>

            {{-- <x-burger-icon></x-burger-icon> --}}
            <button class="header__burger show_menue_button_do" type="button" aria-label="Меню">
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
            </button>
        </nav>

        <!-- Основная часть -->
        <div class="header__main">
            <div class="header__content">
                <!-- Левая часть с заголовками -->
                <div class="header__text">
                    <p class="header__subtitle">Региональный оператор строительства ИЖС и МКД</p>
                    <h1 class="header__title">Агентство развития строительства Курской области</h1>
                </div>

                <!-- Правая часть с новостями -->
                <div class="header__news">
                    <h2 class="header__news-title">Новости</h2>
                    <div class="header__news-grid">
                        <article class="news-card">
                            <h3 class="news-card__title">Жилищное строительство в Курской области для обеспечения жителей приграничья</h3>
                            <time class="news-card__date" datetime="2025-04-03">03.04.2025</time>
                            <a href="#" class="news-card__link" aria-label="Читать новость">
                                <svg class="news-card__icon">
                                    <use xlink:href="#white_arrow"></use>
                                </svg>
                            </a>
                        </article>

                        <article class="news-card">
                            <h3 class="news-card__title">Жилищное строительство в Курской области для обеспечения жителей приграничья</h3>
                            <time class="news-card__date" datetime="2025-04-03">03.04.2025</time>
                            <a href="#" class="news-card__link" aria-label="Читать новость">
                                <svg class="news-card__icon">
                                    <use xlink:href="#white_arrow"></use>
                                </svg>
                            </a>
                        </article>

                        <article class="news-card">
                            <h3 class="news-card__title">Жилищное строительство в Курской области для обеспечения жителей приграничья</h3>
                            <time class="news-card__date" datetime="2025-04-03">03.04.2025</time>
                            <a href="#" class="news-card__link" aria-label="Читать новость">
                                <svg class="news-card__icon">
                                    <use xlink:href="#white_arrow"></use>
                                </svg>
                            </a>
                        </article>
                    </div>
                    <a href="#" class="header__news-all">Смотреть все новости</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about">
    <div class="container">
        <div class="about__wrapper">
            <h2 class="about__title">О нас</h2>
            <p class="about__subtitle">Реализация инфраструктурных проектов, строительство ИЖС и МКД, арендное жилье</p>
            <div class="about__description text_styles">
                100% акций АО "СЗ "АРСКО" находится в собственности Курской области в лице Министерства имущества Курской области. Регулирование деятельности общества в соответствующей отрасли осуществляет Министерство строительства Курской области в соответствии с постановлением Правительства Курской области от 15.12.2023 № 1315-пп «Об управлении акциями (долями участия) хозяйственных обществ, находящимися в собственности Курской области».
            </div>
        </div>
    </div>

    <div class="about__image">
        <img src="{{ asset('img/about.jpg') }}" alt="О нас" class="about__image-photo">
        <div class="about__promo">
            <p class="about__promo-text">Мы строим <br>будущее!</p>
            <button class="button button-white about__promo-btn">Задать вопрос</button>
        </div>
    </div>
</section>

<section class="mip">
    <div class="container">
        <!-- Заголовок и описание -->
        <div class="mip__header">
            <h2 class="mip__title">Участники МИП</h2>
            <div class="mip__description text_styles">
                В данном разделе представлены проекты-победители масштабного инвестиционного проекта, проводимого в Курской области. Эти инициативы направлены на развитие региональной экономики и привлечение инвестиций.
            </div>
        </div>

        <!-- Swiper слайдер -->
        <div class="mip__slider">
            <swiper-container class="mip-swiper" init="false">
                <swiper-slide>
                    <div class="mip-card">
                        <div class="mip-card__image">
                            <img src="{{ asset('img/card_tmp.jpg') }}" alt="Объект МИП" class="mip-card__photo">
                        </div>
                        <div class="mip-card__content">
                            <h3 class="mip-card__title">Инвестиционный проект развития территории</h3>
                            <ul class="mip-card__params">
                                <li class="mip-card__param">
                                    <strong>Кадастровый номер</strong> 46:31:010803:597
                                </li>
                                <li class="mip-card__param">
                                    <strong>Расположение</strong> г. Курчатов
                                </li>
                                <li class="mip-card__param">
                                    <strong>Собственность</strong> муниципальная
                                </li>
                            </ul>
                            <div class="mip-card__info">
                                <div class="mip-card__area">
                                    <p class="mip-card__area-label">Площадь</p>
                                    <p class="mip-card__area-value">14,1</p>
                                    <p class="mip-card__area-unit">гектар</p>
                                </div>
                                <button class="button mip-card__btn">Подробнее</button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="mip-card">
                        <div class="mip-card__image">
                            <img src="{{ asset('img/card_tmp.jpg') }}" alt="Объект МИП" class="mip-card__photo">
                        </div>
                        <div class="mip-card__content">
                            <h3 class="mip-card__title">Развитие промышленной зоны</h3>
                            <ul class="mip-card__params">
                                <li class="mip-card__param">
                                    <strong>Кадастровый номер</strong> 46:31:010803:598
                                </li>
                                <li class="mip-card__param">
                                    <strong>Расположение</strong> г. Курск
                                </li>
                                <li class="mip-card__param">
                                    <strong>Собственность</strong> региональная
                                </li>
                            </ul>
                            <div class="mip-card__info">
                                <div class="mip-card__area">
                                    <p class="mip-card__area-label">Площадь</p>
                                    <p class="mip-card__area-value">25,7</p>
                                    <p class="mip-card__area-unit">гектар</p>
                                </div>
                                <button class="button mip-card__btn">Подробнее</button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="mip-card">
                        <div class="mip-card__image">
                            <img src="{{ asset('img/card_tmp.jpg') }}" alt="Объект МИП" class="mip-card__photo">
                        </div>
                        <div class="mip-card__content">
                            <h3 class="mip-card__title">Строительство жилого комплекса</h3>
                            <ul class="mip-card__params">
                                <li class="mip-card__param">
                                    <strong>Кадастровый номер</strong> 46:31:010803:599
                                </li>
                                <li class="mip-card__param">
                                    <strong>Расположение</strong> г. Железногорск
                                </li>
                                <li class="mip-card__param">
                                    <strong>Собственность</strong> федеральная
                                </li>
                            </ul>
                            <div class="mip-card__info">
                                <div class="mip-card__area">
                                    <p class="mip-card__area-label">Площадь</p>
                                    <p class="mip-card__area-value">8,3</p>
                                    <p class="mip-card__area-unit">гектар</p>
                                </div>
                                <button class="button mip-card__btn">Подробнее</button>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>

        <!-- Управление слайдером -->
        <div class="mip__controls">
            <div class="mip__controls-left">
                <button class="button button-white">Смотреть все объекты</button>
            </div>
            <div class="mip__controls-right">
                <button class="slider-control slider-control--prev" type="button" aria-label="Предыдущий слайд">
                    <svg class="sprite_icon">
                        <use xlink:href="#slider_arrow"></use>
                    </svg>
                </button>
                <button class="slider-control slider-control--next" type="button" aria-label="Следующий слайд">
                    <svg class="sprite_icon">
                        <use xlink:href="#slider_arrow"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="all-questions">
    <div class="all-questions__content">
        <!-- Левая часть с изображением -->
        <div class="all-questions__left">
            <div class="all-questions__icon-block">
                <img src="{{ asset('img/ask.webp') }}" alt="Вопросы" class="all-questions__icon">
            </div>
        </div>

        <!-- Правая часть с контентом -->
        <div class="all-questions__right">
            <h2 class="all-questions__title">ОТВЕТИМ НА ВСЕ <br>ВОПРОСЫ О ЖИЛЬЕ</h2>
            <div class="all-questions__description text_styles">
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах.
            </div>
            <a href="#" class="button button-white all-questions__btn">Узнать подробнее</a>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <h2 class="partners__title">Учредители и партнеры</h2>
        
        <div class="partners__grid">
            <div class="partners__card">
                <div class="partners__card-logo">
                    <img src="{{ asset('img/adm.png') }}" alt="Администрация Курской области" class="partners__card-image">
                </div>
                <h3 class="partners__card-title">Администрация<br>Курской области</h3>
            </div>

            <div class="partners__card">
                <div class="partners__card-logo">
                    <img src="{{ asset('img/dom.png') }}" alt="Единый институт развития ДОМ.РФ" class="partners__card-image">
                </div>
                <h3 class="partners__card-title">Единый институт развития ДОМ.РФ</h3>
            </div>

            <div class="partners__card">
                <div class="partners__card-logo">
                    <img src="{{ asset('img/adm.png') }}" alt="Администрация Курской области" class="partners__card-image">
                </div>
                <h3 class="partners__card-title">Администрация<br>Курской области</h3>
            </div>

            <div class="partners__card">
                <div class="partners__card-logo">
                    <img src="{{ asset('img/dom.png') }}" alt="Единый институт развития ДОМ.РФ" class="partners__card-image">
                </div>
                <h3 class="partners__card-title">Единый институт развития ДОМ.РФ</h3>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta__wrapper">
            <!-- Левая часть с формой -->
            <div class="cta__content">
                <h2 class="cta__title">Обратная связь</h2>
                <p class="cta__description">
                    Здесь вы можете оставить обращение, задать интересующие вас вопросы или внести предложения по работе общества
                </p>
                
                <form class="cta__form" action="#" method="POST">
                    @csrf
                    <div class="cta__form-group">
                        <input type="text" name="name" placeholder="Имя" class="cta__form-input" required>
                    </div>
                    
                    <div class="cta__form-group">
                        <input type="tel" name="phone" placeholder="Телефон" class="cta__form-input" required>
                    </div>
                    
                    <div class="cta__form-group">
                        <input type="email" name="email" placeholder="E-mail" class="cta__form-input" required>
                    </div>
                    
                    <div class="cta__form-group">
                        <textarea name="message" placeholder="Сообщение" class="cta__form-textarea" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="button button-white cta__form-btn">Отправить</button>
                </form>
            </div>

            <!-- Правая часть с изображением -->
            <div class="cta__image">
                <img src="{{ asset('img/form.jpg') }}" alt="Обратная связь" class="cta__image-photo">
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <!-- Логотип -->
            <div class="footer__column footer__column--logo">
                <a href="/" class="footer__logo-link">
                    <img src="{{ asset('img/logo-color.svg') }}" alt="Логотип АРСКО" class="footer__logo-img">
                </a>
            </div>

            <!-- О нашей компании -->
            <div class="footer__column">
                <h3 class="footer__title">О нашей Компании</h3>
                <ul class="footer__menu">
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                </ul>
            </div>

            <!-- Региональный оператор -->
            <div class="footer__column">
                <h3 class="footer__title">Региональный оператор строительства ИЖС и МКД</h3>
                <ul class="footer__menu">
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                </ul>
            </div>

            <!-- Строительство объектов -->
            <div class="footer__column">
                <h3 class="footer__title">Строительство объектов инфраструктуры</h3>
                <ul class="footer__menu">
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                </ul>
            </div>

            <!-- Контакты -->
            <div class="footer__column footer__column--contacts">
                <div class="footer__contact-item">
                    <strong>Адрес:</strong> г. Курск, ул. Горького 50
                </div>
                <div class="footer__contact-item">
                    <strong>Тел.:</strong> <a href="tel:+79999999999">+7 999 999 99 99</a>
                </div>
                <div class="footer__contact-item">
                    <strong>Email:</strong> <a href="mailto:email@mail.ru">email@mail.ru</a>
                </div>
            </div>
        </div>
    </div>
</footer>

@include('allicon')
@endsection

