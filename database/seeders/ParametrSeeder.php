<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParametrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Storage::disk('public')->put("parametr/main_top.webp", file_get_contents(public_path('tmp_data/main_banner.webp')), 'public');

        // Storage::disk('public')->put("parametr/adv_1.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_1.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_2.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_2.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_3.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_3.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_4.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_4.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_5.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_5.svg')), 'public');

        // Storage::disk('public')->put("parametr/pay_1.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_1.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_2.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_2.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_3.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_3.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_4.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_4.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_5.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_5.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_6.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_6.svg')), 'public');

        $data = [
            [
                'str_id' => 'bn_subtitle',
                'section' => "Баннер главной",

                'title' => "",
                'value' => "Региональный оператор строительства ИЖС и МКД",
                'img' => null,
            ],
            [
                'str_id' => 'bn_title',
                'section' => "Баннер главной",

                'title' => "",
                'value' => "Агентство развития строительства Курской области",
                'img' => null,
            ],

        ];

        DB::table("parametrs")->insert($data);
    }
}
