<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contratista;
use App\Models\Hojadevida;

class ContratistaController extends Controller
{
    public function index()
    {
       $contratista = Contratista::find(10);
       return csrf_token();
    }


   public function store(Request $request){

   $contratista = new Contratista;
   $contratista->nombre   = 'cristian';
   $contratista->apellido = 'beltran';
   $contratista->celular  = '3148287251';
   
   $contratista->save();

   $hojadevidas = new Hojadevida;
   $hojadevidas->documento = 'informe';

   $contratista->hojadevida()->save($hojadevidas);
   
   }
}
