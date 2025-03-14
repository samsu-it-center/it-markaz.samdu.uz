<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GraduatesController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SoftWareController;
use App\Http\Controllers\StartUpController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TalantedStudentsController;
use App\Http\Controllers\TelegramBotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseApplicationController;

Route::post('/apply', [CourseApplicationController::class, 'store'])->name('course.apply');
Route::post('/contact/apply', [ContactController::class, 'store'])->name('contact.apply');
// Source file
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::post('/news/{id}/like', [NewsController::class, 'like'])->name('news.like');
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/send-test-message', [TelegramBotController::class, 'sendTestMessage']);

//Pages
Route::get('/about', [LayoutsController::class, 'about'])->name('about');
Route::get('/news', [LayoutsController::class, 'news'])->name('news');
Route::get('/start-up/list', [LayoutsController::class, 'start_up'])->name('startup');
Route::get('/software/list', [LayoutsController::class, 'software'])->name('software');
Route::get('/course/list', [LayoutsController::class, 'course'])->name('course');
Route::get('/document/list', [LayoutsController::class, 'document'])->name('document');
Route::get('/contact', [LayoutsController::class, 'contact'])->name('contact');
Route::resource('start-up', StartUpController::class);
Route::resource('course', CourseController::class);
Route::resource('software', SoftWareController::class);
Route::resource('graduates', GraduatesController::class);
Route::resource('statistics', StatisticsController::class);
Route::resource('talantedstudents', TalantedStudentsController::class);
Route::get('/', [LayoutsController::class, 'welcome'])->name('welcome');

Route::get('/lesson/{lesson}/{course}', [CourseController::class, 'lesson'])->name('lesson.show');

// Language
Route::get('/language/{lang}', [LayoutsController::class, 'lang'])->name('lang');

