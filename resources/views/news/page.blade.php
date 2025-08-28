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
        <div class="container">

        </div>
    </section>
@endsection

