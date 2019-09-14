<?php

namespace App\Http\Controllers;
use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
       $area = Area::find(34);
       return $area;
    }
}