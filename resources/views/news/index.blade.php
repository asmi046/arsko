@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp


@section('main')
    <x-header-page
    title="Новости"
    subtitle="Все события в сфере строительства и готового жилья в Курской области"
    ></x-header-page>

    <section>
        <div class="container">
            <x-breadcrumbs.main title="Новости"></x-breadcrumbs.main>
                <div class="news-list">
                        @foreach($news as $item)
                            <x-cards.news-in-page :item="$item"></x-cards.news-in-page>
                        @endforeach
                </div>
            <x-pagination :tovars="$news"></x-pagination>
        </div>
    </section>
@endsection

