<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;
use App\Models\Impressoes;
use PhpParser\Node\Expr\Isset_;

class historico_impressaoController extends Controller
{

  public function show(Request $request, Solicitacao $solicitacao)
    {

    $impressoes = Impressoes::orderby('id')->get();

    $setores = setores::orderby('id')->get();
    $id_setores = setores::orderby('id')->get();

    $impressoes = Impressoes::with('setores')->get();
    $search = $request->input('id_setores');
    $id_setores = $request->input('id_setor');

    // soma das impressões
    $quant_impressoes = Impressoes::sum('quant_impressoes');
    $id = Impressoes::orderby('search');



    if(!empty($search)){
      $impressoes = impressoes::where('id_setores', '=', $search)->paginate(10)->withQueryString();
    }
    else{
      $impressoes = impressoes::with('setores')->paginate(10);
    }
    return view('historico-impressao',[
        'impressoes' => $impressoes,
        'quant_impressoes' => $quant_impressoes,
        'id' => $id,
        'setores' => $setores ,
        '' => $search
    ]);
  }
}
