<?php

use App\Http\Controllers\Backend\CoursesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\WorkController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// frontend
Route::get('/',[IndexController::class, 'index'])->name('frontend.index');
// frontend

// Backend
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('hero', HeroController::class)->except('show');
    Route::resource('work', WorkController::class)->except('show');
    Route::resource('skill', SkillController::class)->except('show');
    Route::resource('education', EducationController::class)->except('show');
    Route::resource('course', CoursesController::class)->except('show');
});
// Backend


// , 'middleware' => 'auth'