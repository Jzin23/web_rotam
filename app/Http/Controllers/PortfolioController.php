<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function inicioPortfolio ()
    {
        $portfolios = Portfolio::with('imagem')->get();
        
        return view('Portfolio', compact('portfolios'));
        
    }
}
