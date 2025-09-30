@extends('layouts.all')

@section('main')
    <x-header-page
    :title="$page->title"
    ></x-header-page>

    <section>
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>
            {!! $page->description !!}
        </div>
    </section>
@endsection

