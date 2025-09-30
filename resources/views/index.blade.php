@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header-main></x-header-main>

<x-main.about></x-main.about>

<x-main.mip></x-main.mip>

<x-main.faq></x-main.faq>

<x-main.partners></x-main.partners>

<section class="cta">
    <div class="container">
        <div class="cta__wrapper">
            <!-- Левая часть с формой -->
            <div class="cta__content">
                <h2 class="cta__title">Обратная связь</h2>
                <p class="cta__description">
                    Здесь вы можете оставить обращение, задать интересующие вас вопросы или внести предложения по работе общества
                </p>

                <form class="cta__form" action="{{ route('send_consultation') }}" method="POST">
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

                    <x-consultation-form.policy prefix="tow_"></x-consultation-form.policy>

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

@endsection

