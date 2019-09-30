<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index(){
    	return csrf_token();
    }

   /* public function store(){

    	$actividad              = new Actividad;
    	$actividad->nombre      = 'analisis';
    	$actividad->descripcion = 'software';
    	$actividad->save();
	
        
    	$area = Area::find(1);
    	$area->actividades()->attach(1);
    	
    } */

        public function store(){
   
        $area = Area::find(3);
    	$area->actividades()->sync(array(1,5,6));

     }
}
