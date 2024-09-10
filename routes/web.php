<?php

use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StartUpController;
use App\Models\About;
use App\Models\Course;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;


Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::post('/news/{id}/like', [NewsController::class, 'like'])->name('news.like');
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');

//Pages

Route::get('/center/about',[LayoutsController::class,'about'])->name('about');
Route::get('/center/news',[LayoutsController::class,'news'])->name('news');
Route::get('/center/start_up',[LayoutsController::class,'start_up'])->name('startup');
Route::get('/center/software',[LayoutsController::class,'software'])->name('software');
Route::get('/center/course',[LayoutsController::class,'course'])->name('course');
Route::get('/center/document',[LayoutsController::class,'document'])->name('document');

Route::resource('start_up',StartUpController::class);


Route::get('/', function () {
    $sliders = Slider::all();
    $about = About::first();
    $online = Course::where('type','online')->get();
    $offline = Course::where('type','offline')->get();
    $news = News::orderBy('id', 'desc')->skip(0)->take(4)->get();
    return view('welcome',compact('sliders','about','news','online','offline'));
})->name('welcome');


Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz' || $lang == 'en')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
})->name('lang');

