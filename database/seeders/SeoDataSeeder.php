<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Агентство развития строительства Курской Области",
                'seo_description' => "Добро пожаловать на сайт Агентства развития строительства Курской области",
                'page_title' => "",
            ],
            [
                'url' => "contacts",
                'seo_title' => "Контакты нашей компании",
                'seo_description' => "Контактная информация Агентства развития строительства Курской области",
                'page_title' => "",
            ],
            [
                'url' => "news",
                'seo_title' => "Новости компании",
                'seo_description' => "Последние новости Агентства развития строительства Курской области",
                'page_title' => "",
            ],
            [
                'url' => "mips",
                'seo_title' => "Победители МИП в Курской области",
                'seo_description' => "Перечень проектов победивших в масштабном инвестиционном проекте в Курской области",
                'page_title' => "",
            ],
        ];

        DB::table("seo_data")->insert($data);
    }
}
