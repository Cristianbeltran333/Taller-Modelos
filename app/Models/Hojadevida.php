<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hojadevida extends Model
{
    
protected $table = 'hojadevida';
    
      protected $fillable = [
        'documento'
                
    ]; 

     public function contratista()
    {
        return $this->belongsTo('App\Models\Contratista');
    }

}
