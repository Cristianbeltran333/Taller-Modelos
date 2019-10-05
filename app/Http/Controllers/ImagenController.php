<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Proyecto;
use App\Models\Contrato;

class ImagenController extends Controller
{
     public function index()
    {
        $area = Area::find(1); 
       /* return csrf_token();*/
        return  $area->imagenes;
    }
    
    public function store()
    {

    $area = new Area;

    $area ->nombre = 'Cristian';

    $area->save();

    $area->imagenes()->createMany([

           ['picture' => 'imagenes1' ],
           ['picture' => 'imagenes2' ],
           ['picture' => 'imagenes3' ]
     ]);
    }

     public function indexproyecto()
    {
        $proyecto = Proyecto::find(1); 
       /* return csrf_token();*/
        return  $proyecto->imagenes;
    }
    
    public function storeproyecto()
    {

    $proyecto = new Proyecto;

    $proyecto ->nombre_proyecto       = 'Contrato';
    $proyecto ->descripcion_proyecto  = 'Actualizacion';
    $proyecto ->fuente_recurso        = 'publica';
    $proyecto ->valor_proyecto        = '50000';
    $proyecto ->estado_proyecto       = 'Activo';
    $proyecto ->area_id               =  1;

    $proyecto->save();

    $proyecto->imagenes()->createMany([

           ['picture' => 'imagenes4' ],
           ['picture' => 'imagenes5' ],
           ['picture' => 'imagenes6' ]
     ]);
    }

    
     public function indexcontrato()
    {
        $contrato = Contrato::find(1); 
       /* return csrf_token();*/
        return  $contrato->imagenes;
    }
    
    public function storecontrato()
    {

    $contrato = new Contrato;

    $contrato ->nombre_contrato           = 'Contrato';
    $contrato ->tipo_contrato             = 'Remodelacion';
    $contrato ->modalidad_contratacion    = 'Prestacion';
    
    $contrato->save();

    $contrato->imagenes()->createMany([

           ['picture' => 'imagenes7' ],
           ['picture' => 'imagenes8' ],
           ['picture' => 'imagenes9' ]
     ]);
    } 

  }



   


