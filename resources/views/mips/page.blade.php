@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('main')
    <x-header-page
    :title="$mip->title"
    :subtitle="null"
    :img="Storage::url($mip->head_img)"
    ></x-header-page>

    <section>
        <div class="container text-styles news-page">
            <x-breadcrumbs.main :title="$mip->title"></x-breadcrumbs.main>

            <div class="mip-page">
                <div class="top">
                    <div class="text text_styles">
                        {!! $mip->description !!}
                    </div>
                    <div class="presentation_button_wrapper">
                        <a class="presentation_button" title="Скачать презентацию" href="{{ Storage::url($mip->presentation) }}" class="button_presentation">
                            <svg class="sprite_icon">
                                <use xlink:href="#btn_pdf_icon"></use>
                            </svg>
                            <svg class="sprite_icon">
                                <use xlink:href="#btn_download_icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="characteristics">
                    <h2>ХАРАКТЕРИСТИКИ ЗЕМЕЛЬНОГО УЧАСТКА</h2>
                    <div class="colls">
                        <div class="col cerecter_coll">
                            <x-cards.mip-cerecter :icon="'mip_pin'">
                                <p><strong>ПЛОЩАДЬ:</strong> {{ $mip->area }} га</p>
                                <p><strong>КАТЕГОРИЯ ЗЕМЕЛЬ:</strong> {{ $mip->land_category }}</p>
                                <p><strong>РАЗРЕШЕННОЕ ИСПОЛЬЗОВАНИЕ:</strong> {{ $mip->permitted_use }}</p>
                            </x-cards.mip-cerecter>

                            <x-cards.mip-cerecter :icon="'mip_list'">
                                <p><strong>КАТЕГОРИЯ ЗЕМЕЛЬ:</strong> {{ $mip->land_category }}</p>
                                <p><strong>ФУНКЦИОНАЛЬНАЯ ЗОНА:</strong> {{ $mip->functional_zone }}</p>
                                <p><strong>ВИД ИСПОЛЬЗОВАНИЯ:</strong> {{ $mip->permitted_use }}</p>
                            </x-cards.mip-cerecter>

                            <x-cards.mip-cerecter :icon="'mip_info'">
                                {!! $mip->special_usage !!}
                            </x-cards.mip-cerecter>
                        </div>
                        <div class="col galery_coll">
                                <div class="gallery-slider-wrapper">
                                    <script>
                                        document.addEventListener('DOMContentLoaded', () => {

                                            const swiper = document.getElementById('gallerySwiper');
                                            if (swiper) {

                                                const swiperParams = {
                                                    navigation: {
                                                        nextEl: '.slider-control--next',
                                                        prevEl: '.slider-control--prev'
                                                    },
                                                    pagination: false,
                                                    slidesPerView: 1
                                                };

                                                Object.assign(swiper, swiperParams);
                                                swiper.initialize();
                                            }
                                        });

                                    </script>
                                    <swiper-container
                                        id="gallerySwiper"
                                        class="gallery-swiper"
                                        init="false"
                                    >
                                        @foreach($mip->gallery as $img)
                                            <swiper-slide>
                                                <img src="{{ Storage::url($img['img']) }}" alt="gallery image" style="width:100%;border-radius:$border_rad;object-fit:cover;">
                                            </swiper-slide>
                                        @endforeach

                                    </swiper-container>
                                    <div class="gallery-slider-controls">
                                        <button class="slider-control slider-control--prev swiper-button-lock" type="button">
                                            <svg class="sprite_icon">
                                                <use xlink:href="#slider_arrow"></use>
                                            </svg>
                                        </button>
                                        <button class="slider-control slider-control--next swiper-button-lock" type="button">
                                            <svg class="sprite_icon">
                                                <use xlink:href="#slider_arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mip-area-block">
                                    <div class="mip-area-item">
                                        <svg class="sprite_icon">
                                        <use xlink:href="#mip_plan"></use>
                                        </svg>
                                        <div class="mip-area-value">{{ $mip->area }}</div>
                                        <div class="mip-area-unit">гектар</div>
                                        <div class="mip-area-desc">площадь земельного участка</div>
                                    </div>
                                    <div class="mip-area-item">
                                        <svg class="sprite_icon">
                                        <use xlink:href="#mip_home"></use>
                                        </svg>
                                        <div class="mip-area-value">{{ $mip->urban_potential }}</div>
                                        <div class="mip-area-unit">тыс. кв.м жилья</div>
                                        <div class="mip-area-desc">градо-строительный потенциал</div>
                                    </div>
                                    <div class="mip-area-item">
                                        <svg class="sprite_icon">
                                        <use xlink:href="#mip_build"></use>
                                        </svg>
                                        <div class="mip-area-value">{{ $mip->max_floors }}</div>
                                        <div class="mip-area-unit">этажей</div>
                                        <div class="mip-area-desc">max количество  этажей для ИЖС</div>
                                    </div>
                                    <div class="mip-area-item">
                                        <svg class="sprite_icon">
                                        <use xlink:href="#mip_calc"></use>
                                        </svg>
                                        <div class="mip-area-value">{{ $mip->build_percent }}</div>
                                        <div class="mip-area-unit">процентов</div>
                                        <div class="mip-area-desc">max процент  застройки</div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="characteristics">
                    <h2>Социальная инфраструктура</h2>
                    <div class="social_lnk">
                        @foreach ($mip->social_infrastructure as $item)
                            <div class="social_title">{{ $item['title'] }}</div>
                        @endforeach
                    </div>
                </div>


                <div class="mip_map">
                    <img src="{{ Storage::url($mip->map) }}" alt="{{ $mip->title }}">
                </div>
            </div>


        </div>
    </section>
@endsection

