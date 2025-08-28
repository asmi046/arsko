<div class="header__news">
    <h2 class="header__news-title">Новости</h2>
    <div class="header__news-grid">
        @foreach ($news as $item)
            <x-cards.news-in-main :item="$item"></x-cards.news-in-main>
        @endforeach
    </div>
    <a href="{{ route('news') }}" class="header__news-all">Смотреть все новости</a>
</div>
