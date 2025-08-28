<section class="mip">
    <div class="container">
        <!-- Заголовок и описание -->
        <div class="mip__header">
            <h2 class="mip__title">{{ $parametrs['mip_title']->value }}</h2>
            <div class="mip__description text_styles">
                {{ $parametrs['mip_text']->value }}
            </div>
        </div>

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
                <a href="{{ route('mips') }}" class="button button-white">Смотреть все объекты</a>
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
