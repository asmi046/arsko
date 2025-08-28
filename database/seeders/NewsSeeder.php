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
                'text' => "В Курской области активно развивается жилищное строительство, направленное на обеспечение комфортными условиями жизни жителей приграничья.",
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Новые социальные объекты открылись в приграничных районах",
                'slug' => "novye-socialnye-obekty-v-prigranichnyh-rayonah",
                'text' => "В приграничных районах Курской области открылись новые школы и медицинские учреждения для повышения качества жизни населения.",
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Поддержка сельского хозяйства в Курской области",
                'slug' => "podderzhka-selskogo-hozyaystva-v-kurskoy-oblasti",
                'text' => "Власти региона реализуют программы поддержки фермеров и сельхозпредприятий для развития аграрного сектора.",
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Развитие транспортной инфраструктуры в регионе",
                'slug' => "razvitie-transportnoy-infrastruktury-v-regione",
                'text' => "В Курской области ведутся работы по модернизации дорог и транспортных узлов для улучшения логистики и безопасности.",
                'img' => "news/all_q.webp",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('news')->insert($data);
    }
}
