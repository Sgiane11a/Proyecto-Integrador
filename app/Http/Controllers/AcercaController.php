<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaController extends Controller
{
    function acerca(){
        return view('Estaticos.acerca');
    }
}
