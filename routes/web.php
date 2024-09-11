<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SoftWareController;
use App\Http\Controllers\StartUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseApplicationController;

Route::post('/apply', [CourseApplicationController::class, 'store'])->name('course.apply');
Route::post('/contact/apply', [ContactController::class, 'store'])->name('contact.apply');
// Source file
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
Route::resource('course',CourseController::class);
Route::resource('software',SoftWareController::class);
Route::get('/', [LayoutsController::class,'welcome'])->name('welcome');

Route::get('/lesson/{lesson}/{course}',[CourseController::class,'lesson'])->name('lesson.show');

// Language
Route::get('/language/{lang}',[LayoutsController::class,'lang'])->name('lang');

