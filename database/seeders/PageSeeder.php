<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("files/zakon-kurskoy-oblasti-ot-22-06-2015-n-58-zko.rtf", file_get_contents(public_path('page_text/npas/zakon-kurskoy-oblasti-ot-22-06-2015-n-58-zko.rtf')), 'public');
        Storage::disk('public')->put("files/zakon-kurskoy-oblasti-ot-26-03-2025-n-9-zko.rtf", file_get_contents(public_path('page_text/npas/zakon-kurskoy-oblasti-ot-26-03-2025-n-9-zko.rtf')), 'public');
        Storage::disk('public')->put("files/postanovlenie-administracii-kurskoy-oblasti-ot-16-03-2022-n-241-pa.rtf", file_get_contents(public_path('page_text/npas/postanovlenie-administracii-kurskoy-oblasti-ot-16-03-2022-n-241-pa.rtf')), 'public');
        Storage::disk('public')->put("files/postanovlenie-gubernatora-kurskoy-oblasti-ot-06-05-2025-n-119-pg.rtf", file_get_contents(public_path('page_text/npas/postanovlenie-gubernatora-kurskoy-oblasti-ot-06-05-2025-n-119-pg.rtf')), 'public');
        Storage::disk('public')->put("files/postanovlenie-pravitelstva-kurskoy-oblasti-ot-07-08-2024-n-635-pp.docx", file_get_contents(public_path('page_text/npas/postanovlenie-pravitelstva-kurskoy-oblasti-ot-07-08-2024-n-635-pp.docx')), 'public');
        Storage::disk('public')->put("files/postanovlenie-pravitelstva-kurskoy-oblasti-ot-15-12-2023-n-1315-pp.docx", file_get_contents(public_path('page_text/npas/postanovlenie-pravitelstva-kurskoy-oblasti-ot-15-12-2023-n-1315-pp.docx')), 'public');
        Storage::disk('public')->put("files/postanovlenie-pravitelstva-rf-ot-31-12-2020-n-2459.rtf", file_get_contents(public_path('page_text/npas/postanovlenie-pravitelstva-rf-ot-31-12-2020-n-2459.rtf')), 'public');
        Storage::disk('public')->put("files/federalnyy-zakon-ot-30-12-2020-n-494-fz.rtf", file_get_contents(public_path('page_text/npas/federalnyy-zakon-ot-30-12-2020-n-494-fz.rtf')), 'public');
        Storage::disk('public')->put("files/stroy_rinok_ko.xlsx", file_get_contents(public_path('page_text/stroy_rinok_ko.xlsx')), 'public');

        $data = [
            [
                'title' => "Политика в области обработки персональных данных",
                'slug' => Str::slug("Политика в области обработки персональных данных"),
                'description' => file_get_contents(public_path('page_text/policy.html')),
            ],

            [
                'title' => "Согласие на обработку персональных данных",
                'slug' => Str::slug("Согласие на обработку персональных данных"),
                'description' => file_get_contents(public_path('page_text/accept.html')),
            ],

            [
                'title' => "О файлах Cookie",
                'slug' => Str::slug("О файлах Cookie"),
                'description' => file_get_contents(public_path('page_text/accept.html')),
            ],

            [
                'title' => 'НПА',
                'slug' => Str::slug("НПА"),
                'description' => file_get_contents(public_path('page_text/npa.html')),
            ],

            [
                'title' => 'Региональный оператор КРТ',
                'slug' => Str::slug("Региональный оператор КРТ"),
                'description' => file_get_contents(public_path('page_text/krt.html')),
            ],

            [
                'title' => 'О нас',
                'slug' => Str::slug("О нас"),
                'description' => file_get_contents(public_path('page_text/about.html')),
            ],

            [
                'title' => 'Участники строительного рынка',
                'slug' => Str::slug("Участники строительного рынка"),
                'description' => file_get_contents(public_path('page_text/sr_ko.html')),
            ],
        ];


        foreach ($data as $item) {
            $pageId = DB::table("pages")->insertGetId($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'page/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                    'seoable_id' => $pageId,
                    'seoable_type' => "App\Models\Page"
                ]
            );
        }



    }
}
