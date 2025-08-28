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
            <h2 class="all-questions__title">{!! $parametrs['q_title']->value !!}</h2>
            <div class="all-questions__description text_styles">
                {!! $parametrs['q_text']->value !!}
            </div>
            <a href="#" class="button button-white all-questions__btn">Узнать подробнее</a>
        </div>
    </div>
</section>
