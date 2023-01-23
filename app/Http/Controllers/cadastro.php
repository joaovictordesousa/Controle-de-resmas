<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Setores;
use App\Models\Setores_impressora;


class cadastro extends Controller
{

    public function cadastro(Request $request){

        $setores = Setores::orderby('id')->get();

        return view ('cadastro', compact ('setores'));
    }
    public function cadastro_impressao(Request $request){

        $id_setores_impressoras = Setores_impressora::orderby('id')->get();

        return view ('cadastro_impressao', compact ('id_setores_impressoras'));
    }
   
}
