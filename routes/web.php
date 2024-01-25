<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Mail\UserMessages;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'welcome'])->name('welcome');

Route::get('/lang/{lang}', [LangController::class,'change'])->name('lang');

Route::post('/sendmail', [MailController::class,'sendmail'])->name('sendmail');


Route::middleware('auth')->group(function () {

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/dashboard/home',[DashboardController::class,'home'])->name('dashboard.home');
Route::post('/dashboard/save/home',[DashboardController::class,'save_home'])->name('home.save');
Route::get('/dashboard/about',[DashboardController::class,'about'])->name('dashboard.about');
Route::post('/dashboard/save/about',[DashboardController::class,'save_about'])->name('about.save');

Route::resource('/dashboard/services', ServicesController::class)->except(['show']);
Route::resource('/dashboard/team', TeamController::class)->except(['show']);
Route::resource('/dashboard/portfolio', PortfolioController::class)->except(['show']);
Route::resource('/dashboard/contact', ContactController::class)->only(['index','update']);


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
