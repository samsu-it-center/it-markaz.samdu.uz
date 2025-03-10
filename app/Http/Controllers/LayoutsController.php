<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\CategorySoftware;
use App\Models\Course;
use App\Models\DinamicMenu;
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
        $menus = DinamicMenu::all();
        return view('pages.about', compact('about', 'menus'));
    }

    public function news(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $news = News::orderBy('id', 'desc')->paginate(6);
        $menus = DinamicMenu::all();
        return view('news.index', compact('news', 'menus'));
    }

    public function start_up(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $start_ups = StartUp::where('type', 2)
            ->orderBy('id', 'desc')->paginate(4);

        $projects = StartUp::where('type', 1)
            ->orderBy('id', 'desc')->paginate(4);


        $categories = Category::all();


        $tabs = [];
        foreach ($categories as $category) {
            $tabs[$category->id] = StartUp::where('type', $category->id)
                ->paginate(4, ['*'], $category->id . '_page');
        }
        $menus = DinamicMenu::all();

        return view('startup.index', compact('menus', 'categories', 'tabs'));
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


        $softwares = SoftwareProduct::paginate(4);


        $types = SoftwareProduct::select('type')->distinct()->get();

        $tabs = [];
        foreach ($types as $type) {
            $tabs[$type->type] = SoftwareProduct::where('type', $type->type)->paginate(4);
        }

        $menus = DinamicMenu::all();

        return view('software.index', compact('menus', 'tabs', 'types', 'aiSoftwares', 'educationalSoftwares', 'commericalSoftwares', 'buisaSoftwares', 'publicSoftwares', 'categories', 'softwares'));
    }

    public function course(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $courses = Course::orderBy('id', 'desc')->get();
        $menus = DinamicMenu::all();
        return view('course.index', compact('courses', 'menus'));
    }

    public function document(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $document = NormativeDocument::first();
        $menus = DinamicMenu::all();
        return view('pages.document', compact('document', 'menus'));
    }

    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $document = NormativeDocument::first();
        $menus = DinamicMenu::all();

        return view('pages.contact', compact('document', 'menus'));
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

        $menus = DinamicMenu::all();

        return view('welcome', compact('sliders', 'about', 'news', 'online', 'offline', 'faqs', 'courses', 'menus'));
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
