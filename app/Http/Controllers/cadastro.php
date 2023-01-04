<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Setores;


class cadastro extends Controller
{

    public function cadastro(Request $request){

        $setores = Setores::orderby('id')->get();

        return view ('cadastro', compact ('setores'));
    }
   
}
