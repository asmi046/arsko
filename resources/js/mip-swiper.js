// Импортируем Swiper
import { register } from 'swiper/element/bundle';

// Регистрируем Swiper элементы
register();

// Инициализация Swiper слайдера для секции МИП
class MipSwiper {
    constructor() {
        this.init();
    }

    init() {
        // Ждем загрузки DOM
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                this.initSwiper();
            });
        } else {
            this.initSwiper();
        }
    }

    initSwiper() {
        const swiperContainer = document.querySelector('.mip-swiper');

        if (!swiperContainer) return;

        // Настройки Swiper
        const swiperParams = {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.slider-control--next',
                prevEl: '.slider-control--prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                }
            }
        };

        // Применяем настройки к swiper-container
        Object.assign(swiperContainer, swiperParams);

        // Инициализируем Swiper
        swiperContainer.initialize();
    }
}

// Экспортируем класс
export default MipSwiper;
