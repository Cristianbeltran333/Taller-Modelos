<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contratista_Contrato extends Model
{
    protected $table = 'contratistas_contratos';
    
    protected $fillable = [
        'objeto_contrato',
        'sueldo',
        'regimen:contratacion',
        'fecha_inicio',
        'fecha_final',
        'periodo_pago',
        'estado_contrato',
        'contratista_id',
        'contrato_id',
        'poyecto_id'
    ];

     public function contratista()
    {
        return $this->belongsTo('App\Models\contratista');
    }

      public function contrato()
    {
        return $this->belongsTo('App\Models\contrato');
    }

      public function proyecto()
    {
        return $this->belongsTo('App\Models\proyecto');
    }
}
