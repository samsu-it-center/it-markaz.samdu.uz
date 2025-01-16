<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\CategorySoftware;
use App\Models\Course;
use App\Models\News;
use App\Models\NormativeDocument;
use App\Models\Question;
use App\Models\Slider;
use App\Models\SoftwareProduct;
use App\Models\StartUp;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class LayoutsController extends Controller
{
    public function about(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $about = About::first();
        return view('pages.about', compact('about'));
    }

    public function news(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $news = News::orderBy('id', 'desc')->paginate(6);
        return view('pages.news', compact('news'));
    }

    public function start_up(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $start_ups = StartUp::where('type', 2)
            ->orderBy('id', 'desc')->paginate(4);

        $projects = StartUp::where('type', 1)
            ->orderBy('id', 'desc')->paginate(4);

//        $types = StartUp::select('type')->distinct()->get();
//
//        $tabs = [];
//        foreach ($types as $type) {
//            $tabs[$type->type] = StartUp::where('type', $type->type)->paginate(4);
//        }
//
//        return view('pages.start_up', compact('start_ups', 'projects','tabs','types'));



        $categories = Category::all();


        $tabs = [];
        foreach ($categories as $category) {
            $tabs[$category->id] = StartUp::where('type', $category->id)
                ->paginate(5, ['*'], $category->id . '_page');
        }

        return view('pages.start_up ', compact('categories', 'tabs'));
    }

    public function software(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $aiSoftwares = SoftwareProduct::where('type', 1)
            ->orderBy('id', 'desc')->paginate(4, ['*'], 'ai_page');

        $educationalSoftwares = SoftwareProduct::where('type', 2)
            ->orderBy('id', 'desc')->paginate(4, ['*'], 'educational_page');

        $commericalSoftwares = SoftwareProduct::where('type', 3)
            ->orderBy('id', 'desc')->paginate(4, ['*'], 'commerical_page');

        $buisaSoftwares = SoftwareProduct::where('type', 4)
            ->orderBy('id', 'desc')->paginate(4, ['*'], 'buisa_page');

        $publicSoftwares = SoftwareProduct::where('type', 5)
            ->orderBy('id', 'desc')->paginate(4, ['*'], 'public_page');

        $categories = CategorySoftware::all();


        $cid = $categories->pluck('id');


        $softwares = SoftwareProduct::paginate(10);


        $types = SoftwareProduct::select('type')->distinct()->get();

        $tabs = [];
        foreach ($types as $type) {
            $tabs[$type->type] = SoftwareProduct::where('type', $type->type)->paginate(4);
        }

        return view('pages.software', compact('tabs', 'types', 'aiSoftwares', 'educationalSoftwares', 'commericalSoftwares', 'buisaSoftwares', 'publicSoftwares', 'categories', 'softwares'));
    }

    public function course(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('pages.course', compact('courses'));
    }

    public function document(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $document = NormativeDocument::first();
        return view('pages.document', compact('document'));
    }

    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $document = NormativeDocument::first();

        return view('pages.contact', compact('document'));
    }


    public function welcome(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $faqs = Question::orderBy('id', 'desc')->get();
        $sliders = Slider::orderBy('id', 'desc')->get();
        $about = About::first();
        $online = Course::where('type', 'online')->get();
        $offline = Course::where('type', 'offline')->get();
        $courses = Course::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->skip(0)->take(4)->get();
        return view('welcome', compact('sliders', 'about', 'news', 'online', 'offline', 'faqs', 'courses'));
    }

    public function lang($lang)
    {
        $lang = strtolower($lang);
        if ($lang == 'ru' || $lang == 'uz' || $lang == 'en') {
            session([
                'locale' => $lang
            ]);
        }
        return redirect()->back();
    }
}
