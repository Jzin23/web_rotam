<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';
    protected $fillable = ['nome_atleta', 'descricao_breve', 'caminho_curriculo_atleta', 'caminho_foto_exibicao'];

}
