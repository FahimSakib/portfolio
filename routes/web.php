<?php

use App\Http\Controllers\Backend\ContactController as BackendContactController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\WorkController;
use App\Http\Controllers\Frontend\ContactController;
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
Route::post('send/msg',[ContactController::class, 'store'])->name('send.msg');
// frontend

// Backend
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('hero', HeroController::class)->except('show');
    Route::resource('work', WorkController::class)->except('show');
    Route::resource('skill', SkillController::class)->except('show');
    Route::resource('education', EducationController::class)->except('show');
    Route::resource('course', CourseController::class)->except('show');
    Route::resource('project', ProjectController::class)->except('show');
    Route::get('contact',[BackendContactController::class, 'index'])->name('contact.index');
    Route::delete('contact/delete/{id}',[BackendContactController::class, 'delete'])->name('contact.delete');
});
// Backend


// , 'middleware' => 'auth'