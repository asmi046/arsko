@props([
    'title' => 'Страница',
    'subtitle' => null,
    'img' => isset($img) ? $img : asset('img/page.jpg')
])

<header class="header __page" style="background-image: url({{ $img }});">
    <div class="container">

        <x-header-top></x-header-top>

        <div class="header__page">
            <h1>{{ $title }}</h1>
            @if ($subtitle)
                <p class="subtitle">{{ $subtitle }}</p>
            @endif

        </div>
    </div>
</header>
