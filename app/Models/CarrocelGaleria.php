<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrocelGaleria extends Model
{
    use HasFactory;
    protected $table = 'carrocel_galerias';
    protected $fillable = ['descricao'];

}
