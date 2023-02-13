<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;
use App\Models\Impressoes;
use PhpParser\Node\Expr\Isset_;
use Illuminate\Support\Facades\Auth;

class historico_impressaoController extends Controller
{

  public function show(Request $request)
    {
    //Definindo variaveis
    $impressoes = Impressoes::orderby('id','DESC')->get();
    // dd($impressoes);
    $setores = setores::orderby('id')->get();

    $impressoes = Impressoes::with('setores')->orderby('id','DESC')->get();
    //Inputs
    $search = $request->input('id_setores');
    $users = Auth::user('name');

    //Somar
    $quant_impressoes = Impressoes::sum('quant_impressoes');



    if(!empty($search)){
      $impressoes = impressoes::orderby('id','DESC')
        ->where('id_setores', '=', $search)
        ->paginate(10)
        ->withQueryString();
        unset($quant_impressoes);
        $quant_impressoes = 0;
    }
    else{
      $impressoes = impressoes::orderby('id','DESC')->with('setores')->paginate(10);
    }
    //dd($impressoes);
    return view('historico-impressao',[
        'impressoes' => $impressoes,

        'quant_impressoes' => $quant_impressoes,
        'setores' => $setores ,
        'name' => $users,
    ]);
  }

  public function index()
  {

      $post = Impressoes::orderBy('id', 'desc')->get();

        return view('historico-impressao', compact('posts'));
  }

}
