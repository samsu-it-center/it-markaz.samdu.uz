<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id)
    {
        //dd(session('locale'));
        $news = News::findOrFail($id);
        $news->incrementViews();

        $course = Course::inRandomOrder()->first();
        return view('pages.show', compact('news','course'));
    }

    public function like($id)
    {
        $news = News::findOrFail($id);
        $news->incrementLikes();

        return back();
    }
}
