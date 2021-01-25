<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PseudoController extends Controller
{
    public function element(){
        return view('pseudo.element');
    }

    public function class(){
        return view('pseudo.class');
    }

    public function modal(){
        return view('pseudo.modal');
    }

    public function position(){
        return view('pseudo.position');
    }
    
    public function pointer(){
        return view('pseudo.pointer');
    }
    
    public function selection(){
        return view('pseudo.selection');
    }
}
