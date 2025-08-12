@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header-page
    title="Контакты"
    subtitle="Свяжитесь с нами для получения дополнительной информации"
    ></x-header-page>

    <section>
        <div class="container">
                        <div class="page_content contacts_page_section">
                <div class="content">
                    <div class="colls">
                        <div class="col">
                            <h2>Юридическая информация</h2>
                            <p class="label">Наименование:</p>
                            <p class="param">{{ $contacts['company_name'] }}</p>

                            <p class="label">ИНН:</p>
                            <p class="param">{{ $contacts['inn'] }}</p>

                            <p class="label">ОГРНИП:</p>
                            <p class="param">{{ $contacts['ogrn'] }}</p>

                            <p class="label">Генеральный директор:</p>
                            <p class="param">{{ $contacts['person'] }}</p>
                        </div>

                        <div class="col">
                            <h2>Контакты</h2>
                            <p class="param">тел. <a class="phone" href="tel:+7{{ phone_format( $contacts['phone'] ) }}">{{ $contacts['phone'] }}</a></p>
                            <p class="param">тел. <a class="phone" href="tel:+7{{ phone_format( $contacts['phone_2'] ) }}">{{ $contacts['phone_2'] }}</a></p>
                            <p class="param">e-mail: <a class="email" href="mailto:{{ $contacts['email']}}">{{ $contacts['email'] }}</a></p>
                            <h2>Главный офис</h2>
                            <p class="param">Адрес: {{ $contacts['adress'] }}</p>
                            <p class="param">Режим работы: {{ $contacts['work_time'] }}</p>
                        </div>
                    </div>

                    <h2>Как добраться</h2>
                     <x-map.map-in-page :name="$contacts['company_name']" :geo="$contacts['geo']" :adres="$contacts['adress']" :phone="$contacts['phone']"></x-map.map-in-page>

                </div>
            </div>
        </div>
    </section>
@endsection

