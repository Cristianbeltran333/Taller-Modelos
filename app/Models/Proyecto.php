<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
     protected $table = 'proyectos';
    
     protected $fillable = [
        'nombre_proyecto',
        'descripcion_proyecto',
        'fuente_recurso',
        'valor_proyecto',
        'estado_proyecto',
        'area_id'
    ]; 

    public function areas()
    {
        return $this->belongsTo('App\Models\Area');
    }

}
