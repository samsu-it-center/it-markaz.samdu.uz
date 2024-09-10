<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\News;
use App\Models\StartUp;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class LayoutsController extends Controller
{
    public function about(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $about = About::first();
        return view('pages.about',compact('about'));
    }

    public function news(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $news = News::paginate(9);
        return view('pages.news',compact('news'));
    }

    public function start_up(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $start_ups = StartUp::paginate(9);
        return view('pages.start_up',compact('start_ups'));
    }
}
