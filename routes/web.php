<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\SettingsController ;
use App\Http\Controllers\Admin\ArticleController ;
use App\Http\Controllers\Admin\CvController ;
use App\Http\Controllers\Admin\MessageController ;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/'  ,  function(){
      return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('settings'  , [SettingsController::class , 'create'])->name('settings.create');
    Route::post('settings/save-home'  , [SettingsController::class , 'saveHome'])->name('settings.save-home');
    Route::post('settings/save-contact'  , [SettingsController::class , 'saveContact'])->name('settings.save-contact');
    Route::resource('articles', ArticleController::class);
    Route::resource('cvs' , CvController::class);
    Route::resource('messages' , MessageController::class);
});