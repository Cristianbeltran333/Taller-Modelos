+<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    
    protected $fillable =[ 'nombre' ];
    
     
     public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto');
    }
    

   public function actividades(){
    	return $this->belongsToMany('App\Models\Actividad');
    }


    public function Contratistas_Contratos(){
       return $this->hasManyThrough('App\Models\Contratista_Contrato','App\Models\Proyecto');

    }


}
