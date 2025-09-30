<a href="{{ route('mips.page', $item->slug) }}" class="mip-card">
    <div class="mip-card__image">
        <img src="{{ Storage::url($item->cover) }}" alt="{{ $item->title }}" class="mip-card__photo">
    </div>
    <div class="mip-card__content">
        <h3 class="mip-card__title">{{ $item->title }}</h3>
        <ul class="mip-card__params">
            <li class="mip-card__param">
                <strong>Кадастровый номер</strong> {{ $item->cadastral_number }}
            </li>
            <li class="mip-card__param">
                <strong>Расположение</strong> {{ $item->address }}
            </li>
            <li class="mip-card__param">
                <strong>Собственность</strong> {{ $item->ownership }}
            </li>
            <li class="mip-card__param">
                <strong>Застройщик</strong> {{ $item->developer }}
            </li>
            <li class="mip-card__param">
                <strong>Тип застройки</strong> {{ $item->develop_type }}
            </li>
        </ul>
        <div class="mip-card__info">
            <div class="mip-card__area">
                <p class="mip-card__area-label">Площадь</p>
                <p class="mip-card__area-value">{{ $item->area }}</p>
                <p class="mip-card__area-unit">гектар</p>
            </div>
            <button class="button mip-card__btn">Подробнее</button>
        </div>
    </div>
</a>
