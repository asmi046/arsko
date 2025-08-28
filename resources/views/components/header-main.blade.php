<header class="header">
    <div class="container">

        <x-header-top></x-header-top>

        <!-- Основная часть -->
        <div class="header__main">
            <div class="header__content">
                <!-- Левая часть с заголовками -->
                <div class="header__text">
                    <p class="header__subtitle">{{ $parametrs['bn_subtitle']->value }}</p>
                    <h1 class="header__title">{{ $parametrs['bn_title']->value }}</h1>
                </div>

               <x-news-in-main></x-news-in-main>

            </div>
        </div>
    </div>
</header>
