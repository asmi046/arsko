@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp


@section('main')
    <x-header-page
    title="Победители МИП"
    subtitle="Проекты прошедшие в масштабный инвестиционный проект (МИП)"
    ></x-header-page>

    <section>
        <div class="container">
            <x-breadcrumbs.main title="Победители МИП"></x-breadcrumbs.main>
                <div class="news-list">
                        @foreach($mips as $item)
                            <x-cards.mip :item="$item"></x-cards.mip>
                        @endforeach
                </div>
            <x-pagination :tovars="$mips"></x-pagination>
        </div>
    </section>
@endsection

