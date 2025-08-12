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
                'title' => 'Участники МИП',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Новости',
                'order' => 2,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 3,
                'lnk' => "/contacts",
            ],
        ];

        DB::table("menus")->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Фасадные работы',
                'order' => 1,
                'lnk' => "/services/fasadnye-raboty",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Строительство бань',
                'order' => 2,
                'lnk' => "/services/stroitelstvo-ban",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Сливовка бань и домов',
                'order' => 3,
                'lnk' => "/services/slifovka-ban-i-domov",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Кровельные работы',
                'order' => 4,
                'lnk' => "/services/krovelnye-raboty",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Внутренняя отделка',
                'order' => 7,
                'lnk' => "/services/vnutrenniaia-otdelka",
            ],

            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Строительство веранд и террас',
                'order' => 7,
                'lnk' => "/services/stroitelstvo-verand-i-terrass",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Строительство беседок',
                'order' => 7,
                'lnk' => "/services/stroitelstvo-besedok",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Ленточный фундамент',
                'order' => 7,
                'lnk' => "/services/lentocnyi-fundament",
            ],

            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Свайный фундамент',
                'order' => 7,
                'lnk' => "/services/svainyi-fundament",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Монолитный фундамент',
                'order' => 7,
                'lnk' => "/services/monolitnyi-fundament",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Строительство заборов',
                'order' => 7,
                'lnk' => "/services/stroitelstvo-zaborov",
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Строительство навесов',
                'order' => 7,
                'lnk' => "/services/stroitelstvo-navesov",
            ],
        ];

        DB::table("menus")->insert($footer_menu);


        $footer_menu_2 = [

            [
                'menu_name' => 'Проекты в подвале',
                'title' => 'Из газоблока',
                'order' => 10,
                'lnk' => "/materials/doma-iz-gazoblokov",
            ],
            [
                'menu_name' => 'Проекты в подвале',
                'title' => 'Из бруса',
                'order' => 20,
                'lnk' => "/materials/doma-iz-brusa",
            ],
            [
                'menu_name' => 'Проекты в подвале',
                'title' => 'Из профилированного бруса',
                'order' => 30,
                'lnk' => "/materials/doma-iz-profilirovannogo-brusa",
            ],
        ];

        DB::table("menus")->insert($footer_menu_2);

        $footer_menu_3 = [

            [
                'menu_name' => 'О компании в подвале',
                'title' => 'О нкас',
                'order' => 10,
                'lnk' => "/page/o-kompanii-russtroi",
            ],
            [
                'menu_name' => 'О компании в подвале',
                'title' => 'Способы оплаты',
                'order' => 20,
                'lnk' => "/page/sposoby-oplaty",
            ],
            [
                'menu_name' => 'О компании в подвале',
                'title' => 'Портфолио',
                'order' => 30,
                'lnk' => "/portfolio",
            ],
            [
                'menu_name' => 'О компании в подвале',
                'title' => 'Цены',
                'order' => 40,
                'lnk' => "/prices",
            ],
            [
                'menu_name' => 'О компании в подвале',
                'title' => 'Контакты',
                'order' => 40,
                'lnk' => "/contacts",
            ],

        ];

        DB::table("menus")->insert($footer_menu_3);

        $footer_menu_4 = [

            [
                'menu_name' => 'Информация в подвале',
                'title' => 'Политика конфиденциальности и обработки персональных данных',
                'order' => 10,
                'lnk' => "/page/politika-v-oblasti-obrabotki-personalnyx-dannyx",
            ],
            [
                'menu_name' => 'Информация в подвале',
                'title' => 'Согласие на обработку персональных данных',
                'order' => 20,
                'lnk' => "/page/soglasie-na-obrabotku-personalnyx-dannyx",
            ],
            [
                'menu_name' => 'Информация в подвале',
                'title' => 'FAQ',
                'order' => 30,
                'lnk' => "/faq",
            ],

        ];

        DB::table("menus")->insert($footer_menu_4);
    }
}
