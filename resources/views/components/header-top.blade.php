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
