<?php

use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtigosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/portfolio', [PortfolioController::class, 'inicioPortfolio'])->name('site.portfolio');
Route::get('/artigos', [ArtigosController::class, 'inicioArtigos'])->name('site.artigos');
Route::get('/galeria', [GaleriaController::class, 'inicioGaleria'])->name('site.galeria');
Route::get('/login', [LoginController::class, 'logar'])->name('site.login');


route::prefix('/configAdmRotam')->group(function () {
    Route::get('/confHome', [HomeController::class, 'index'])->name('site.home');
    Route::get('/confPortfolio', [PortfolioController::class, 'inicioPortfolio'])->name('site.portfolio');
    Route::get('/confArtigos', [ArtigosController::class, 'inicioArtigos'])->name('site.artigos');
    Route::get('/confGaleria', [GaleriaController::class, 'inicioGaleria'])->name('site.galeria');
});

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '" >Clique aqui</a> para ir para página inicial';
});