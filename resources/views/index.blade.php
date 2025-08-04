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

@include('allicon')
@endsection

