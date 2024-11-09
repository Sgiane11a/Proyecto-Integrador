<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReglamentoController extends Controller
{
    public function reglamento(){
        return view("Estaticos.reglamento");
    }
}
