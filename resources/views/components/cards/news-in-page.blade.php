<a href="{{ route('news.page', $item->slug) }}" class="news-card">
                                <div class="news-card__image">
                                    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
                                </div>
                                <div class="news-card__body">
                                    <h2 class="news-card__title">{{ $item->title }}</h2>
                                    <div class="news-card__date">{{ $item->created_at->format('d.m.Y') }}</div>
                                    <div class="news-card__text">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->text), 70, '...') }}
                                    </div>
                                    <span class="news-card__icon-wrap">
                                        <svg class="news-card__icon">
                                            <use xlink:href="#white_arrow"></use>
                                        </svg>
                                    </span>
                                </div>
                            </a>
