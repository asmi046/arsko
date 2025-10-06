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
        Storage::disk('public')->put("news/n_1.jpg", file_get_contents(public_path('tmp_data/news/n_1.jpg')), 'public');
        Storage::disk('public')->put("news/n_2.jpg", file_get_contents(public_path('tmp_data/news/n_2.jpg')), 'public');
        Storage::disk('public')->put("news/n_3.jpg", file_get_contents(public_path('tmp_data/news/n_3.jpg')), 'public');
        Storage::disk('public')->put("news/n_4.jpg", file_get_contents(public_path('tmp_data/news/n_4.jpg')), 'public');
        Storage::disk('public')->put("news/n_5.jpg", file_get_contents(public_path('tmp_data/news/n_5.jpg')), 'public');
        Storage::disk('public')->put("news/n_6.jpg", file_get_contents(public_path('tmp_data/news/n_6.jpg')), 'public');

        $data = [
            [
                'title' => "За неделю в Курской области выдали жилищные сертификаты на 3,7 млрд рублей",
                'slug' => "za-nedelyu-v-kurskoy-oblasti-vydali-zhilishchnye-sertifikaty-na-3-7-mlrd-rubley",
                'text' => file_get_contents(public_path('tmp_data/news/news_1.html')),
                'img' => "news/n_1.jpg",
                'created_at' => '2025-09-22 00:00:00',
                'updated_at' => '2025-09-22 00:00:00',
            ],
            [
                'title' => "В Курской области вновь выдают жилищные сертификаты",
                'slug' => "v-kurskoy-oblasti-vnov-vydaut-zhilishchnye-sertifikaty",
                'text' => file_get_contents(public_path('tmp_data/news/news_2.html')),
                'img' => "news/n_2.jpg",
                'created_at' => '2025-08-12 00:00:00',
                'updated_at' => '2025-08-12 00:00:00',
            ],
            [
                'title' => "Куряне могут узнать о статусе своего заявления на получение сертификата различными способами",
                'slug' => "kuryane-mogut-uznat-o-statuse-svoego-zayavleniya-na-poluchenie-sertifikata-razlichnymi-sposobami",
                'text' => file_get_contents(public_path('tmp_data/news/news_3.html')),
                'img' => "news/n_3.jpg",
                'created_at' => '2025-06-20 00:00:00',
                'updated_at' => '2025-06-20 00:00:00',
            ],
            [
                'title' => "В Курской области продолжается работа по оказанию мер социальной поддержки гражданам, вынужденно покинувшим свои дома в приграничных районах",
                'slug' => "v-kurskoy-oblasti-prodolzhaetsya-rabota-po-okazaniyu-mer-sotsialnoy-podderzhki-grazhdanam-vynuzhdenno-pokinuvshim-svoi-doma-v-prigranichnykh-rayonakh",
                'text' => file_get_contents(public_path('tmp_data/news/news_4.html')),
                'img' => "news/n_4.jpg",
                'created_at' => '2025-08-11 00:00:00',
                'updated_at' => '2025-08-11 00:00:00',
            ],
            [
                'title' => "В Курской области продолжают работу над программой восстановления приграничья",
                'slug' => "v-kurskoy-oblasti-prodolzhaetsya-rabota-nad-programmoy-vosstanovleniya-prigranichya",
                'text' => file_get_contents(public_path('tmp_data/news/news_5.html')),
                'img' => "news/n_5.jpg",
                'created_at' => '2025-09-26 00:00:00',
                'updated_at' => '2025-09-26 00:00:00',
            ],
            [
                'title' => "Специалистов Курской области приглашают принять участие во II Международном форуме выставке жилищно-коммунального хозяйства и строительного комплекса UtiliCon 2025",
                'slug' => "spetsialistov-kurskoy-oblasti-priglashayut-prinyat-uchastie-vo-ii-mezhdunarodnom-forume-2025",
                'text' => file_get_contents(public_path('tmp_data/news/news_6.html')),
                'img' => "news/n_6.jpg",
                'created_at' => '2025-09-26 00:00:00',
                'updated_at' => '2025-09-26 00:00:00',
            ],
        ];

        foreach ($data as $item) {
            DB::table('news')->insert($item);


            DB::table("seo_data")->insert(
                [
                    'url' => 'news/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],

                ]
            );
        }
    }
}
