<section class="partners">
    <div class="container">
        <h2 class="partners__title">Учредители и партнеры</h2>

        <div class="partners__grid">
            @foreach ($partners as $item)
                <x-cards.partners :item="$item"></x-cards.partners>
            @endforeach
        </div>
    </div>
</section>
