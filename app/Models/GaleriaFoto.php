<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaFoto extends Model
{
    use HasFactory;
    protected $table= "galeria_fotos";
    protected $fillable = ['foto'];
}
