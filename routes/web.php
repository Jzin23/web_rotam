<?php

use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdmHomeController;
use App\Http\Controllers\ArtigosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdmArtigosController;
use App\Http\Controllers\AdmGaleriaController;
use App\Http\Controllers\AdmPortfolioController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/portfolio', [PortfolioController::class, 'inicioPortfolio'])->name('site.portfolio');
Route::get('/artigos', [ArtigosController::class, 'inicioArtigos'])->name('site.artigos');
Route::get('/galeria', [GaleriaController::class, 'inicioGaleria'])->name('site.galeria');
Route::get('/login', [LoginController::class, 'logar'])->name('site.login');


route::prefix('/configAdmRotam')->group(function () {
    
    Route::get('/', [AdmHomeController::class, 'index'])->name('conf.home');
    Route::get('/confPortfolio', [AdmPortfolioController::class, 'inicioPortfolio'])->name('conf.portfolio');
    Route::get('/confArtigos', [AdmArtigosController::class, 'inicioArtigos'])->name('conf.artigos');
    Route::get('/confGaleria', [AdmGaleriaController::class, 'inicioGaleria'])->name('conf.galeria');
});

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('index') . '" >Clique aqui</a> para ir para página inicial';
});
