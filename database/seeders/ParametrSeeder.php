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
                'value' => "Специализированный застройщик",
                'img' => null,
            ],
            [
                'str_id' => 'bn_title',
                'section' => "Баннер главной",

                'title' => "",
                'value' => "Агентство развития строительства Курской области",
                'img' => null,
            ],
            // --------------------------------------
            [
                'str_id' => 'about_title',
                'section' => "О нас",

                'title' => "",
                'value' => "О нас",
                'img' => null,
            ],
            [
                'str_id' => 'about_subtitle',
                'section' => "О нас",

                'title' => "",
                'value' => "Реализация инфраструктурных проектов, строительство ИЖС и МКД",
                'img' => null,
            ],

            [
                'str_id' => 'about_text',
                'section' => "О нас",

                'title' => "",
                'value' => "100% акций АО «СЗ «АРСКО» находится в собственности Курской области. Регулирование деятельности общества в соответствующей отрасли осуществляет Министерство строительства Курской области в соответствии с постановлением Правительства Курской области от 15.12.2023 № 1315-пп «Об управлении акциями (долями участия) хозяйственных обществ, находящимися в собственности Курской области»",
                'img' => null,
            ],

            // -------------------------------

            [
                'str_id' => 'mip_title',
                'section' => "Участки МИП",

                'title' => "",
                'value' => "Участки МИП",
                'img' => null,
            ],
            [
                'str_id' => 'mip_text',
                'section' => "Участки МИП",

                'title' => "",
                'value' => "Проведены отборы лучших масштабных инвестиционных проектов, с застройщиками заключены соглашения о реализации МИП.",
                'img' => null,
            ],

            // -------------------------------------

            [
                'str_id' => 'q_title',
                'section' => "Вопросы о жилье",

                'title' => "",
                'value' => "ОТВЕТИМ НА ВСЕ <br/>ВОПРОСЫ О ЖИЛЬЕ",
                'img' => null,
            ],
            [
                'str_id' => 'q_text',
                'section' => "Вопросы о жилье",

                'title' => "",
                'value' => "<p>ДОМ.РФ – крупнейший финансовый институт, который с 1997 года занимается развитием жилищной сферы.</p> <p>Консультационный центр ДОМ.РФ помогает находить ответы на вопросы о мерах поддержки для жителей Курского приграничья.</p>",
                'img' => null,
            ],

        ];

        DB::table("parametrs")->insert($data);
    }
}
