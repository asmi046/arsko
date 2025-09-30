<nav class="header__nav">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <img src="{{ asset('img/logo.svg') }}" alt="Логотип" class="header__logo-img">
                </a>
            </div>

            <div class="header__contacts">
                <div class="header__contact-item">
                    <a href="tel:+7{{ phone_format($contacts['phone']->value) }}" class="header__contact-link">{{ $contacts['phone']->value }}</a>
                </div>
                <div class="header__contact-item">
                    <a href="tel:+7{{ phone_format($contacts['phone_2']->value) }}" class="header__contact-link">{{ $contacts['phone_2']->value }}</a>
                </div>
                <div class="header__contact-item">
                    <a href="mailto:{{ $contacts['email']->value }}" class="header__contact-link">{{ $contacts['email']->value }}</a>
                </div>
                <a href="#showModal" class="button button-white header__contact-btn">Написать обращение</a>
            </div>

            {{-- <x-burger-icon></x-burger-icon> --}}
            <button class="header__burger show_menue_button_do" type="button" aria-label="Меню">
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
            </button>
</nav>
