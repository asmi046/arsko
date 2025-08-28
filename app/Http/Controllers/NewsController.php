<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(15);
        return view('news.index', compact('news'));
    }

    public function page($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news.page', compact('news'));
    }
}
