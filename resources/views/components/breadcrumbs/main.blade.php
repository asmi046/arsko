<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" >
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>



            @if (Request::route()->named('news.page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Новости" itemprop="item" href="{{route('news')}}">
                        <span itemprop="name">Новости</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('mips.page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Участки МИП" itemprop="item" href="{{route('mips')}}">
                        <span itemprop="name">Участки МИП</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @else (isset($title))
                <span class="sep"> / </span>
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                        <span title="{{ $title }}" itemprop="item">
                            <span itemprop="name">{{ $title }}</span>
                            <meta itemprop="position" content="1">
                        </span>
                    </span>
            @endif

         </div>
    </div>
</div>
