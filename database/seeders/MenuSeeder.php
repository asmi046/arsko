<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'Главная',
                'order' => 0,
                'lnk' => route('home'),
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'О нас',
                'order' => 1,
                'lnk' => route('home').'/#about',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Участки МИП',
                'order' => 2,
                'lnk' => "/mips",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Новости',
                'order' => 3,
                'lnk' => "/news",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 4,
                'lnk' => "/contacts",
            ],
        ];

        DB::table("menus")->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'О компании в подвале',
                'title' => 'О нас',
                'order' => 1,
                'lnk' => route('home').'/#about',
            ],
            [
                'menu_name' => 'О компании в подвале',
                'title' => 'Новости',
                'order' => 3,
                'lnk' => "/news",
            ],

            [
                'menu_name' => 'О компании в подвале',
                'title' => 'Контакты',
                'order' => 4,
                'lnk' => "/contacts",
            ],
        ];

        DB::table("menus")->insert($footer_menu);


        $footer_menu_2 = [

            [
                'menu_name' => 'Региональный оператор в подвале',
                'title' => 'Участки под строительство',
                'order' => 20,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Региональный оператор в подвале',
                'title' => 'Подрядные организации',
                'order' => 30,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Региональный оператор в подвале',
                'title' => 'Готовые объекты недвижимости',
                'order' => 40,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Региональный оператор в подвале',
                'title' => 'Льготная ипотека под 2%',
                'order' => 50,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Региональный оператор в подвале',
                'title' => 'Нормативно правовые акты',
                'order' => 60,
                'lnk' => "#",
            ],
        ];

        DB::table("menus")->insert($footer_menu_2);

        $footer_menu_3 = [

            [
                'menu_name' => 'Строительство в подвале',
                'title' => 'Региональный оператор КРТ',
                'order' => 10,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Строительство в подвале',
                'title' => 'Контакты',
                'order' => 20,
                'lnk' => "/contacts",
            ],
        ];

        DB::table("menus")->insert($footer_menu_3);

    }
}
