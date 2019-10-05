<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
     protected $table = 'contratos';
    
     protected $fillable = [
        'nombre_contrato',
        'tipo_contrato',
        'modalidad_contratacion',
        
    ]; 

     public function Contratista_Contrato()
    {
        return $this->hasMany('App\Models\Contratista_Contrato');
    }

    public function imagenes()
    {
        return $this->morphMany('App\Models\Imagen', 'imageable');
    }
}
