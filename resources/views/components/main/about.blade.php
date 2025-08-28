<section id="about" class="about">
    <div class="container">
        <div class="about__wrapper">
            <h2 class="about__title">{{ $parametrs['about_title']->value }}</h2>
            <p class="about__subtitle">{{ $parametrs['about_subtitle']->value }}</p>
            <div class="about__description text_styles">
                {{ $parametrs['about_text']->value }}
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
