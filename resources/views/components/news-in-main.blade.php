<div class="header__news">
    <h2 class="header__news-title">Новости</h2>
    <div class="header__news-grid">
        @foreach ($news as $item)
            <x-cards.news-in-main :item="$item"></x-cards.news-in-main>
        @endforeach
        {{-- <article class="news-card">
            <h3 class="news-card__title">Жилищное строительство в Курской области для обеспечения жителей приграничья</h3>
            <time class="news-card__date" datetime="2025-04-03">03.04.2025</time>
            <a href="#" class="news-card__link" aria-label="Читать новость">
                <svg class="news-card__icon">
                    <use xlink:href="#white_arrow"></use>
                </svg>
            </a>
        </article>
        <article class="news-card">
            <h3 class="news-card__title">Жилищное строительство в Курской области для обеспечения жителей приграничья</h3>
            <time class="news-card__date" datetime="2025-04-03">03.04.2025</time>
            <a href="#" class="news-card__link" aria-label="Читать новость">
                <svg class="news-card__icon">
                    <use xlink:href="#white_arrow"></use>
                </svg>
            </a>
        </article>
        <article class="news-card">
            <h3 class="news-card__title">Жилищное строительство в Курской области для обеспечения жителей приграничья</h3>
            <time class="news-card__date" datetime="2025-04-03">03.04.2025</time>
            <a href="#" class="news-card__link" aria-label="Читать новость">
                <svg class="news-card__icon">
                    <use xlink:href="#white_arrow"></use>
                </svg>
            </a>
        </article> --}}
    </div>
    <a href="#" class="header__news-all">Смотреть все новости</a>
</div>
