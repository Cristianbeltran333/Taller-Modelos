<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contratista extends Model
{
      protected $table = 'contratistas';
    
      protected $fillable = [
        'nombre',
        'apellido',
        'celular'
                
    ]; 

    public function hojadevida()
    {
        return $this->hasOne('App\Models\Hojadevida');
    }   

       public function contratista_contrato()
    {
        return $this->hasMany('App\Models\Contratista_Contrato');
    } 
   
}
