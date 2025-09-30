<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Mip as Mips;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Mip extends Component
{
    public $parametrs;
    public $mips;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->parametrs = Cache::rememberForever('main_mip_info', function () {
            return Parametr::where('section', 'Участки МИП')->get()->keyBy('str_id');
        });

        $this->mips = Mips::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.mip');
    }
}
