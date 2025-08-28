@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('main')
    <x-header-page
    :title="$news->title"
    :subtitle="null"
    ></x-header-page>

    <section>
        <div class="container text-styles news-page">
            <x-breadcrumbs.main :title="$news->title"></x-breadcrumbs.main>
            @if ($news->img)
                <div class="news-image">
                    <img src="{{ Storage::url($news->img) }}" alt="{{ $news->title }}">
                </div>
            @endif
            {!! $news->text !!}
        </div>
    </section>
@endsection

