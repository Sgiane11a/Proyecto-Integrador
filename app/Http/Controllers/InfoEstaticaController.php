<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoEstaticaController extends Controller
{
    function infoEstatica(){
        return view('Estaticos.infoEstatica');
    }
}
