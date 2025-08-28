<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function page($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news.page', compact('news'));
    }
}
