<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaFoto extends Model
{
    use HasFactory;
    protected $table = "galeria_fotos";
    public $incrementing = true;
    protected $primaryKey = 'ID_FOTO';
    protected $fillable = [
        'CARROCEL_GALERIA_ID_CARROCEL',
        'CAMINHO_FOTO',
        'FORMATO_FOTO',
        'TAMANHO_FOTO',
        'GALERIA_FOTOS'];

    public function carrocel()
    {
        return $this->belongsTo(CarrocelGaleria::class,'CARROCEL_GALERIA_ID_CARROCEL', 'ID_CARROCEL');
    }
}
