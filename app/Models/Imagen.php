<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
     protected $table = 'imagenes';
    
      protected $fillable = ['picture']; 



     public function imageable()
    {
        return $this->morphTo();
    }

}


