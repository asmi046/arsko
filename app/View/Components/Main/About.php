<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class About extends Component
{
    public $parametrs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->parametrs = Cache::rememberForever('main_about_info', function () {
            return Parametr::where('section', 'О нас')->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.about');
    }
}
