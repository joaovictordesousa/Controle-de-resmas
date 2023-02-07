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

  public function show(Request $request)
    {
    //definindo variaveis
    $impressoes = Impressoes::orderByDesc('id')->get();
    $setores = setores::orderby('id')->get();

    $impressoes = Impressoes::with('setores')->get();
    //inputs
    $search = $request->input('id_setores');

    //Somar
    $quant_impressoes = Impressoes::sum('quant_impressoes');



    if(!empty($search)){
      $impressoes = impressoes::where('id_setores', '=', $search)->paginate(10)->withQueryString();
        unset($quant_impressoes);
        $quant_impressoes = 0;
    }

    //  joao
    elseif (!empty($total)){
      $total = impressoes::where('id_setores', '=', $search);
    }
    // joao

    else{
      $impressoes = impressoes::with('setores')->paginate(10);


    }
    return view('historico-impressao',[
        'impressoes' => $impressoes,
        'quant_impressoes' => $quant_impressoes,
        'setores' => $setores ,

    ]);
  }
}
