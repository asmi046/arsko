<a href="{{ route('news.page', $item->slug) }}" class="news-card">
    <h3 class="news-card__title">{{ $item->title }}</h3>
    <time class="news-card__date" datetime="{{ $item->created_at }}">{{ $item->created_at->format('d.m.Y') }}</time>
    <span class="news-card__link" aria-label="Читать новость">
        <svg class="news-card__icon">
            <use xlink:href="#white_arrow"></use>
        </svg>
    </span>
</a>
