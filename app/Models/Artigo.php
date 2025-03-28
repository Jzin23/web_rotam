<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    protected $table = 'artigos';
    protected $fillable = ['TITULO_ART', 'SUBTITULO_ART', 'CONTEUDO_ART', 'LINK_ART', 'CAMINHO_FOTO'];
}

