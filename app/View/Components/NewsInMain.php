<?php

namespace App\View\Components;

use Closure;
use App\Models\News;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class NewsInMain extends Component
{
    public $news;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->news = News::orderBy('created_at', 'desc')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-in-main');
    }
}
