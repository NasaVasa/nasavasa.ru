<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PagesController::class, 'homepage']);
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/portfolio', [App\Http\Controllers\PagesController::class, 'portfolio']);
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);

Route::get('/site-card', [App\Http\Controllers\PagesController::class, 'siteCard']);
Route::get('/cs-go-server', [App\Http\Controllers\PagesController::class, 'CSGO']);
Route::get('/salary-calculator', [App\Http\Controllers\PagesController::class, 'salaryCalculator']);
Route::get('/tg-bot', [App\Http\Controllers\PagesController::class, 'tgBot']);
Route::get('/jupyter-hub', [App\Http\Controllers\PagesController::class, 'jupyterHub']);
