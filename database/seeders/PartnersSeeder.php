<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("partners/adm_ko.svg", file_get_contents(public_path('tmp_data/partners/adm_ko.svg')), 'public');
        Storage::disk('public')->put("partners/dom_rf.svg", file_get_contents(public_path('tmp_data/partners/dom_rf.svg')), 'public');

        DB::table('partners')->insert([
            [
                'name' => 'Администрация Курской области',
                'logo' => 'partners/adm_ko.svg',
                'sort_order' => 1,
            ],
            [
                'name' => 'Единый институт развития ДОМ.РФ',
                'logo' => 'partners/dom_rf.svg',
                'sort_order' => 2,
            ],
            [
                'name' => 'Администрация Курской области',
                'logo' => 'partners/adm_ko.svg',
                'sort_order' => 3,
            ],
            [
                'name' => 'Единый институт развития ДОМ.РФ',
                'logo' => 'partners/dom_rf.svg',
                'sort_order' => 4,
            ],
        ]);
    }
}
