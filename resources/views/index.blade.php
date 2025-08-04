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

@include('allicon')
@endsection

