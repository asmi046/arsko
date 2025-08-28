<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("news/all_q.webp", file_get_contents(public_path('img/all_q.webp')), 'public');

        $data = [
            [
                'title' => "Жилищное строительство в Курской области для обеспечения жителей приграничья",
                'slug' => "zhilichnoe-stroitelstvo-v-kurskoy-oblasti",
                'text' => file_get_contents(public_path('tmp_data/news/news_1.html')),
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Новые социальные объекты открылись в приграничных районах",
                'slug' => "novye-socialnye-obekty-v-prigranichnyh-rayonah",
                'text' => file_get_contents(public_path('tmp_data/news/news_2.html')),
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Поддержка сельского хозяйства в Курской области",
                'slug' => "podderzhka-selskogo-hozyaystva-v-kurskoy-oblasti",
                'text' => file_get_contents(public_path('tmp_data/news/news_3.html')),
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Развитие транспортной инфраструктуры в регионе",
                'slug' => "razvitie-transportnoy-infrastruktury-v-regione",
                'text' => file_get_contents(public_path('tmp_data/news/news_4.html')),
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('news')->insert($data);
    }
}
