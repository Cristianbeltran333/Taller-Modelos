<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     protected $table = 'areas';
    
      protected $fillable = [
        'nombre',
        'dato'
                
    ]; 

     protected $casts = [
        'dato' => 'array',

    ];
    
     protected $appends = ['nombre_area', 'list_proyecto'];    


     public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto');
    }


     public function getNombreAreaAttribute()
    {
        return "{$this->nombre} {$this->id}";
    }


    public function getListProyectoAttribute()
    {
        return $this->proyectos;
    }

      public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = strtolower($value);
    }

}
