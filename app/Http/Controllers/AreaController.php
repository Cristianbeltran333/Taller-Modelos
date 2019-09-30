<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Proyecto;

class AreaController extends Controller
{
    public function index()
    {
       $area = Area::find(15);
        return csrf_token();
    }

  /*  public function store(Request $request){

    $area = Area::find(1); 
    $area->proyectos()->saveMany([

       new Proyecto(['nombre_proyecto'         =>'innovacion',
       	             'descripcion_proyecto'    =>'remodelacion',
       	             'fuente_recurso'          =>'publico',
       	             'valor_proyecto'          =>'120',
       	             'estado_proyecto'         =>'activo']),

       new Proyecto(['nombre_proyecto'         =>'inicializacion',
       	             'descripcion_proyecto'    =>'creacion',
       	             'fuente_recurso'          =>'mixto',
       	             'valor_proyecto'          =>'150',
       	             'estado_proyecto'         =>'activo']),

       new Proyecto(['nombre_proyecto'         =>'finalizacion',
       	             'descripcion_proyecto'    =>'intermedio',
       	             'fuente_recurso'          =>'privado',
       	             'valor_proyecto'          =>'180',
       	             'estado_proyecto'         =>'inactivo']),

    ]);

    } */
    
   /* public function store(){

    $area = Area::find(1); 
    $area->proyectos()->createMany([

    	            ['nombre_proyecto'         =>'obra',
       	             'descripcion_proyecto'    =>'ampliacion',
       	             'fuente_recurso'          =>'privado',
       	             'valor_proyecto'          =>'1200',
       	             'estado_proyecto'         =>'activo'],

       	            ['nombre_proyecto'         =>'inmobiliaria',
       	             'descripcion_proyecto'    =>'produccion',
       	             'fuente_recurso'          =>'publico',
       	             'valor_proyecto'          =>'4000',
       	             'estado_proyecto'         =>'inactivo'], 

    ]); 
  } */

   public function getAreas(){
    $area = Area::with('Contratistas_Contratos')->get();
        return $area;

   }


}
