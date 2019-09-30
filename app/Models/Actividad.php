<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';
    protected $fillable = ['nombre', 'descripcion'];
    protected $hidden = ['created_at', 'updated_at'];

    public function areas(){
    	return $this->belongsToMany('App\Models\Area');
    }
}
