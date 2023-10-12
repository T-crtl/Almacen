<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBaseController extends Controller
{
    public function dataBase()
    {
        // Lógica para mostrar la vista de base de datos
        return view('dataBase.index');
    }
}
