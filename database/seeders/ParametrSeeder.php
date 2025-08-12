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
                'str_id' => 'adv_1',
                'section' => "Почему выбирают нас",

                'title' => "Честная и фиксированная цена.",
                'value' => "Мы гарантируем прозрачность и стабильность стоимости наших услуг.",
                'img' => null,
            ],
            [
                'str_id' => 'adv_2',
                'section' => "Почему выбирают нас",

                'title' => "Надежность конструктивных решений",
                'value' => "Мы используем проверенные и надежные конструктивные решения, обеспечивающие долговечность и безопасность вашего дома.",
                'img' => null,
            ],
            [
                'str_id' => 'adv_3',
                'section' => "Почему выбирают нас",

                'title' => "Сдача в срок",
                'value' => "Мы ценим ваше время и обязуемся сдавать все проекты строго в оговоренные сроки.",
                'img' => null,
            ],
            [
                'str_id' => 'adv_4',
                'section' => "Почему выбирают нас",

                'title' => "Помогаем сэкономить",
                'value' => "Наши эффективные строительные методы и грамотное планирование помогают снизить общие затраты на строительство.",
                'img' => null,
            ],
            [
                'str_id' => 'adv_5',
                'section' => "Почему выбирают нас",

                'title' => "Человеческое отношение",
                'value' => "У нас вы найдете дружелюбное и понимающее отношение, а все ваши пожелания будут учтены",
                'img' => null,
            ],
            [
                'str_id' => 'adv_6',
                'section' => "Почему выбирают нас",

                'title' => "Квалифицированные кадры",
                'value' => "Наша команда состоит из высококвалифицированных специалистов с глубокими знаниями и богатым опытом в сфере строительства.",
                'img' => null,
            ],


        ];

        DB::table("parametrs")->insert($data);

        // $pay_var = [
        //     [
        //         'str_id' => 'pay_1',
        //         'section' => "Способы оплаты",
        //         'title' => "Наличные",
        //         'value' => "Оплата наличными",
        //         'img' => "parametr/pay_1.svg",
        //     ],

        //     [
        //         'str_id' => 'pay_2',
        //         'section' => "Способы оплаты",
        //         'title' => "Картой",
        //         'value' => "Оплата банковской картой",
        //         'img' => "parametr/pay_2.svg",
        //     ],

        //     [
        //         'str_id' => 'pay_3',
        //         'section' => "Способы оплаты",
        //         'title' => "Перевод",
        //         'value' => "Оплата переводом на карту",
        //         'img' => "parametr/pay_3.svg",
        //     ],

        //     [
        //         'str_id' => 'pay_4',
        //         'section' => "Способы оплаты",
        //         'title' => "Кредит",
        //         'value' => "Оплата кредитными средствами",
        //         'img' => "parametr/pay_4.svg",
        //     ],

        //     [
        //         'str_id' => 'pay_5',
        //         'section' => "Способы оплаты",
        //         'title' => "Рассрочка",
        //         'value' => "Оплата в рассрочку",
        //         'img' => "parametr/pay_5.svg",
        //     ],

        //     [
        //         'str_id' => 'pay_6',
        //         'section' => "Способы оплаты",
        //         'title' => "По счету",
        //         'value' => "Оплата на рассчетный счет",
        //         'img' => "parametr/pay_6.svg",
        //     ],
        // ];

        // DB::table("parametrs")->insert($pay_var);

    }
}
