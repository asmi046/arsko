<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Partners as PartnersModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Partners extends Component
{
    public $partners;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->partners = Cache::rememberForever('main_partners', function () {
            return PartnersModel::orderBy('sort_order')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.partners');
    }
}
