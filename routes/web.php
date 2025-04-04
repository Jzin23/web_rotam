<?php

use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdmHomeController;
use App\Http\Controllers\ArtigosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\AdmPerfilController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdmArtigosController;
use App\Http\Controllers\AdmGaleriaController;
use App\Http\Controllers\AdmParametroController;
use App\Http\Controllers\AdmPortfolioController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/portfolio', [PortfolioController::class, 'inicioPortfolio'])->name('site.portfolio');

Route::get('/artigos', [ArtigosController::class, 'inicioArtigos'])->name('site.artigos');
Route::get('/galeria', [GaleriaController::class, 'inicioGaleria'])->name('site.galeria');
Route::get('/register', [AuthController::class, 'index'])->name('site.register');
Route::get('/login', function() {return view('login');})->name('site.login');
Route::post('/login', [AuthController::class, 'login'])->name('site.login.post');


Route::middleware(['web'])->group(function () {
    route::prefix('/configAdmRotam')->group(function () {

        Route::get('/', [AdmHomeController::class, 'index'])->name('conf.home');
       
        Route::get('/confPortfolio', [AdmPortfolioController::class, 'inicioPortfolio'])->name('conf.portfolio');
        Route::post('/confPortfolio/salvar', [AdmPortfolioController::class, 'store'])->name('conf.portfolios.store');
        Route::put('/confPortfolio/update/{id_portfolio}', [AdmPortfolioController::class, 'update'])->name('conf.portfolios.update');
        Route::delete('/confPortfolio/excluir/{id_portfolio}', [AdmPortfolioController::class, 'destroy'])->name('conf.portfolios.destroy');


        Route::get('/confArtigos', [AdmArtigosController::class, 'inicioArtigo'])->name('conf.artigos.index');
        Route::post('/confArtigos/store', [AdmArtigosController::class, 'store'])->name('conf.artigos.store');
        Route::put('/confArtigos/update/{id}', [AdmArtigosController::class, 'update'])->name('conf.artigos.update');


       
        Route::get('/confGaleria', [AdmGaleriaController::class, 'index'])->name('conf.galeria');
        Route::post('confGaleria/salvar', [AdmGaleriaController::class, 'store'])->name('conf.galeria.store');
        Route::put('/confGaleria/update/{id}', [AdmGaleriaController::class, 'update'])->name('conf.galeria.update');
        Route::delete('confGaleria/excluir/{id}', [AdmGaleriaController::class, 'destroy'])->name('conf.galeria.destroy');

       
        Route::get('/confPerfil', [AdmPerfilController::class, 'index'])->name('conf.perfil');
       
        Route::get('/confParametros', [AdmParametroController::class, 'index'])->name('conf.parametros');
   

    });
});

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('index') . '" >Clique aqui</a> para ir para página inicial';
});
