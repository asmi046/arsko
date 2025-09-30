<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'АО "СЗ "АРСКО"',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 (471) 251-44-48',
                ],

                [
                    'name' => 'phone_2',
                    'title' => 'Телефон',
                    'value' => '+7 910 219 00 40',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => 'tg://resolve?domain=',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => 'https://wa.me/79102190040',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => '305000, Курская область, город Курск, ул. Горького, д.50 ',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'Пн-Пт 09:00 - 18:00',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'szarsko@yandex.ru',
                ],

                [
                    'name' => 'company_name',
                    'title' => 'Имя компании',
                    'value' => 'АО "СЗ "АРСКО"',
                ],

                [
                    'name' => 'inn',
                    'title' => 'ИНН',
                    'value' => '4629048371',
                ],

                [
                    'name' => 'ogrn',
                    'title' => 'ОГРН',
                    'value' => '1024600964134',
                ],

                [
                    'name' => 'rs',
                    'title' => 'Р/С',
                    'value' => '860249669343',
                ],

                [
                    'name' => 'person',
                    'title' => 'Контактное лицо',
                    'value' => 'Неугодова Ольга Григорьевна',
                ],

                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '51.73740007226499,36.19639249999999',
                ],

                [
                    'name' => '2gis',
                    'title' => 'Ссылка на 2gis',
                    'value' => '#',
                ],

                [
                    'name' => 'yandex',
                    'title' => 'Ссылка на yandex',
                    'value' => '#',
                ],

            ]
        );
    }
}
