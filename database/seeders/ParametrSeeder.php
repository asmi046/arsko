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
                'value' => "Реализация инфраструктурных проектов, строительство ИЖС и МКД, арендное жилье",
                'img' => null,
            ],

            [
                'str_id' => 'about_text',
                'section' => "О нас",

                'title' => "",
                'value' => "100% акций АО «СЗ «АРСКО» находится в собственности Курской области в лице Министерства имущества Курской области. Регулирование деятельности общества в соответствующей отрасли осуществляет Министерство строительства Курской области в соответствии с постановлением Правительства Курской области от 15.12.2023 № 1315-пп «Об управлении акциями (долями участия) хозяйственных обществ, находящимися в собственности Курской области»",
                'img' => null,
            ],

            // -------------------------------

            [
                'str_id' => 'mip_title',
                'section' => "Участники МИП",

                'title' => "",
                'value' => "Участники МИП",
                'img' => null,
            ],
            [
                'str_id' => 'mip_text',
                'section' => "Участники МИП",

                'title' => "",
                'value' => "В данном разделе представлены проекты-победители масштабного инвестиционного проекта, проводимого в Курской области. Эти инициативы направлены на развитие региональной экономики и привлечение инвестиций.",
                'img' => null,
            ],

            // -------------------------------------

            [
                'str_id' => 'q_title',
                'section' => "Вопросы о жилье",

                'title' => "",
                'value' => "ОТВЕТИМ НА ВСЕ<br/>ВОПРОСЫ О ЖИЛЬЕ1",
                'img' => null,
            ],
            [
                'str_id' => 'q_text',
                'section' => "Вопросы о жилье",

                'title' => "",
                'value' => "Lorem Ipsum - это текст-рыба, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной рыбой для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах.",
                'img' => null,
            ],

        ];

        DB::table("parametrs")->insert($data);
    }
}
