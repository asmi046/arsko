
<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <!-- Логотип -->
            <div class="footer__column footer__column--logo">
                <a href="/" class="footer__logo-link">
                    <img src="{{ asset('img/logo-color.svg') }}" alt="Логотип АРСКО" class="footer__logo-img">
                </a>
            </div>

            <!-- О нашей компании -->
            <div class="footer__column">
                <h3 class="footer__title">О нашей Компании</h3>
                <ul class="footer__menu">
                    <x-menues.puncts name="О компании в подвале"></x-menues.puncts>
                </ul>
            </div>

            <!-- Региональный оператор -->
            <div class="footer__column">
                <h3 class="footer__title">Региональный оператор строительства жилья</h3>
                <ul class="footer__menu">
                    <x-menues.puncts name="Региональный оператор в подвале"></x-menues.puncts>
                </ul>
            </div>

            <!-- Строительство объектов -->
            <div class="footer__column">
                <h3 class="footer__title">Строительство объектов инфраструктуры</h3>
                <ul class="footer__menu">
                    <x-menues.puncts name="Строительство в подвале"></x-menues.puncts>
                </ul>
            </div>

            <!-- Контакты -->
            <div class="footer__column footer__column--contacts">
                <div class="footer__contact-item">
                    <strong>Адрес:</strong> {{ $contacts['adress']->value }}
                </div>
                <div class="footer__contact-item">
                    <strong>Тел.:</strong> <a href="tel:+7{{ phone_format($contacts['phone']->value) }}">{{ $contacts['phone']->value }}</a>
                </div>
                <div class="footer__contact-item">
                    <strong>Email:</strong> <a href="mailto:{{ $contacts['email']->value }}">{{ $contacts['email']->value }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
