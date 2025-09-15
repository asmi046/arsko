<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("mip/mip1.webp", file_get_contents(public_path('tmp_data/mip/mip1.webp')), 'public');
        Storage::disk('public')->put("mip/map_1.webp", file_get_contents(public_path('tmp_data/mip/map_1.webp')), 'public');
        Storage::disk('public')->put("mip/mip2.webp", file_get_contents(public_path('tmp_data/mip/mip2.webp')), 'public');
        Storage::disk('public')->put("mip/map_2.webp", file_get_contents(public_path('tmp_data/mip/map_2.webp')), 'public');

        Storage::disk('public')->put("mip/mip_1.pdf", file_get_contents(public_path('tmp_data/mip/mip_1.pdf')), 'public');
        Storage::disk('public')->put("mip/mip_2.pdf", file_get_contents(public_path('tmp_data/mip/mip_2.pdf')), 'public');

        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-000.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-000.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-001.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-001.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-002.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-002.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-012.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-012.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-013.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-013.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-014.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-014.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-015.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-015.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-016.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-016.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-017.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-017.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-018.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-018.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-019.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-019.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-020.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-020.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-021.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-021.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-022.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-022.jpg')), 'public');
        Storage::disk('public')->put("mip/m1_gal/mip_1.pdf-image-023.jpg", file_get_contents(public_path('tmp_data/mip/m1_gal/mip_1.pdf-image-023.jpg')), 'public');

        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-000.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-000.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-013.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-013.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-014.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-014.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-015.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-015.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-020.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-020.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-021.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-021.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-022.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-022.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-023.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-023.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-024.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-024.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-035.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-035.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-036.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-036.jpg')), 'public');
        Storage::disk('public')->put("mip/m2_gal/mip_2.pdf-image-037.jpg", file_get_contents(public_path('tmp_data/mip/m2_gal/mip_2.pdf-image-037.jpg')), 'public');

        $data = [
            [
                'title' => "Земельный участок в г. Курчатов",
                'slug' => "zemelnyy-uchastok-v-g-kurchatov",
                'cover' => "mip/mip1.webp",
                'map' => "mip/map_1.webp",
                'geo' => "51.664617, 35.688927",
                'description' => file_get_contents(public_path('tmp_data/mip/mip_1.html')),
                'presentation' => "mip/mip_1.pdf",
                'cadastral_number' => "46:31:010803:597",
                'address' => "г. Курчатов",
                'area' => 14.1,
                'urban_potential' => 103,
                'max_floors' => "4/8",
                'build_percent' => 50,
                'ownership' => "Муниципальная",
                'land_category' => "Земли населенных пунктов",
                'functional_zone' => "Ж1*",
                'usage_type' => "малоэтажная многоквартирная жилая застройка (основной ВРИ)  средне этажная жилая застройка (возможный  УВРИ)",
                'special_usage' => file_get_contents(public_path('tmp_data/mip/mip_1_z.html')),
                'encumbrance' => "не зарегистрированы",
                'gallery' => json_encode([
                    ['img' => "mip/m1_gal/mip_1.pdf-image-000.jpg", 'title' => "Галерея 1"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-001.jpg", 'title' => "Галерея 2"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-002.jpg", 'title' => "Галерея 3"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-012.jpg", 'title' => "Галерея 4"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-013.jpg", 'title' => "Галерея 5"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-014.jpg", 'title' => "Галерея 6"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-015.jpg", 'title' => "Галерея 7"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-016.jpg", 'title' => "Галерея 8"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-017.jpg", 'title' => "Галерея 9"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-018.jpg", 'title' => "Галерея 10"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-019.jpg", 'title' => "Галерея 11"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-020.jpg", 'title' => "Галерея 12"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-021.jpg", 'title' => "Галерея 13"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-022.jpg", 'title' => "Галерея 14"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-023.jpg", 'title' => "Галерея 15"],
                    ['img' => "mip/m1_gal/mip_1.pdf-image-024.jpg", 'title' => "Галерея 16"],
                ]),

                'social_infrastructure' => json_encode([
                    ['title' => "Библиотеки, дома культуры, школы искусств"],
                    ['title' => "Магазины, торговые центры"],
                    ['title' => "Парковая зона с местами отдыха, детскими площадками"],
                    ['title' => "Набережная, пляж"],
                    ['title' => "Спортивные площадки, спортивно-оздоровительные комплексы, бассейн"],
                    ['title' => "Кафе, рестораны"],
                ]),

                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => "Земельный участок Фатежском районе",
                'slug' => "zemelnyy-uchastok-fatezhskom-rayone",
                'cover' => "mip/mip2.webp",
                'map' => "mip/map_2.webp",
                'geo' => "51.664617, 35.688927",
                'description' => file_get_contents(public_path('tmp_data/mip/mip_2.html')),
                'presentation' => "mip/mip_2.pdf",
                'cadastral_number' => "46:25:130402:1",
                'address' => "Курская область, Фатежский район, Миленинский сельсовет",
                'area' => 18,
                'urban_potential' => 19,
                'max_floors' => "до 3",
                'build_percent' => 50,
                'ownership' => "Право собственности не разграничено",
                'land_category' => "Земли населенных пунктов",
                'functional_zone' => "Ж1*",
                'usage_type' => "для индивидуального жилищного строительства",
                'special_usage' => file_get_contents(public_path('tmp_data/mip/mip_1_z.html')),
                'encumbrance' => "не зарегистрированы",
                'gallery' => json_encode([
                    ['img' => "mip/m2_gal/mip_2.pdf-image-000.jpg", 'title' => "Галерея 1"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-013.jpg", 'title' => "Галерея 2"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-014.jpg", 'title' => "Галерея 3"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-015.jpg", 'title' => "Галерея 4"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-020.jpg", 'title' => "Галерея 5"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-021.jpg", 'title' => "Галерея 6"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-022.jpg", 'title' => "Галерея 7"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-023.jpg", 'title' => "Галерея 8"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-024.jpg", 'title' => "Галерея 9"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-035.jpg", 'title' => "Галерея 10"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-036.jpg", 'title' => "Галерея 11"],
                    ['img' => "mip/m2_gal/mip_2.pdf-image-037.jpg", 'title' => "Галерея 12"],
                ]),

                'social_infrastructure' => json_encode([
                    ['title' => "школа"],
                    ['title' => "детский сад"],
                    ['title' => "больница"],
                    ['title' => "автовокзал"],
                    ['title' => "физкультурно оздоровительный комплекс"],
                    ['title' => "Детская школа искусств"],
                    ['title' => "Городской пруд, Городской парк"],
                    ['title' => "Дом культуры, Кинотеатр, музей, Пешеходная улица"],
                ]),

                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($data as $item) {
            DB::table('mips')->insert($item);


            DB::table("seo_data")->insert(
                [
                    'url' => 'mips/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],

                ]
            );
        }
    }
}
