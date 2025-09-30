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
                @foreach ($mips as $item)
                    <swiper-slide>
                        <x-cards.mip :item="$item"></x-cards.mip>
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>

        <!-- Управление слайдером -->
        <div class="mip__controls">
            <div class="mip__controls-left">
                <a href="https://xn--i1ajfdf.xn--j1aarei.xn--p1ai/page-419485.html" class="button button-white">Смотреть все объекты</a>
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
