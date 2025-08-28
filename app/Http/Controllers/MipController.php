<?php

namespace App\Http\Controllers;

use App\Models\Mip;
use Illuminate\Http\Request;

class MipController extends Controller
{
    public function index()
    {
        $mips = Mip::latest()->paginate(15);
        return view('mips.index', compact('mips'));
    }

    public function page($slug)
    {
        $mip = Mip::where('slug', $slug)->firstOrFail();
        return view('mips.page', compact('mip'));
    }
}
