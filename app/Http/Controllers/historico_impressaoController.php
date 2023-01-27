<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;
use App\Models\Impressoes;




class historico_impressaoController extends Controller
{

  public function show(Request $request, Solicitacao $solicitacao)
    {                              
           
    $impressoes = Impressoes::orderby('id')->get();

    $impressoes = Impressoes::with('setores')->get();
    $search = $request->input('id_setor');

    if(!empty($search)){
      $impressoes = Impressoes::where('id_setor', '=',  $search)->paginate(10)->withQueryString();
    }
    else{
      $impressoes = Impressoes::with('setores')->paginate(10);
    }   
    return view('historico-impressao', ['impressoes' => $impressoes]);

  }
}
    
