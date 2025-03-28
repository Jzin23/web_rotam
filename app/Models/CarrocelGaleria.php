<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrocelGaleria extends Model
{
    use HasFactory;
    protected $table = 'carrocel_galerias';
    protected $primaryKey = 'ID_CARROCEL';
    protected $fillable = ['TITULO_CARROCEL', 'DESCRICAO_CARROCEL'];

    public function imagens()
    {
        return $this->hasMany(GaleriaFoto::class, 'CARROCEL_GALERIA_ID_CARROCEL', 'ID_CARROCEL');
    }
}
