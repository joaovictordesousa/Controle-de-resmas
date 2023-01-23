<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;
use App\Models\Impressoes;



class historico extends Controller
{

  public function show(Request $request, Solicitacao $solicitacao)
  {                                                                                                                                                                                                                                                                                                                    
    
    $impressoes = Impressoes::get();

    $setores = setores::orderby('id')->get();

    $solicitacao = Solicitacao::with('setores')->get();
    $search = $request->input('id_setor');

    //$search = $request->get('search');
    //$solicitacao = Solicitacao::with('setores')->where('id_setor', 'LIKE', '%' . $search . '%')->paginate(10);
    if(!empty($search)){
      $solicitacao = Solicitacao::where('id_setor', '=',  $search)->paginate(10)->withQueryString();
    }else{
      $solicitacao = Solicitacao::with('setores')->paginate(10);
    }
    
    
    //$solicitacao = setores::where('Nome', 'LIKE', '%' . $search . '%')->paginate(10);
    
    //$solicitacao = Solicitacao::paginate(10);
    
     //if ($request->ajax()) {
      //$buscar = $solicitacao->where(function($query){
        //  $query->where('id_setor', $request->id_setor); 
     // });

     // return view('historico', compact('solicitacao'));
  

  //$setor = $solicitacao->paginate(10);

    //return view('historico', ['solicitacao' => $solicitacao], ['setores' => $setores], ['search' => $search]);
    return view('historico', ['solicitacao' => $solicitacao], ['setores' => $setores] , ['impressoes' => $impressoes]);
  }
  /*public function search(Request $request)
    {
      $id_setor = $request->input('id_setor');
      $solicitacao = Solicitacao::where('id_setor', '=', $request->id_setor)->get();
      


    $buscar = [
      'solicitacao' => $solicitacao,
    ];
    return view('historico', $buscar);
    }*/


  public function index(Request $request)
  {
  }

}
