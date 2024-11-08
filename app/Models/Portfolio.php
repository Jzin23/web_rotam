<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    use HasFactory;

    public function imagem()
    {
        return $this->belongsTo(GaleriaFoto::class, 'id_foto', 'id_foto');
    }

    protected $fillable = ['id_portfolio','nome_do_atleta', 'descricao_breve'];
}
