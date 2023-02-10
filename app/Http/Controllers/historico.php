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

    //$solicitac =  Solicitacao::get('created_at');

    $setores = setores::orderby('id')->get();
//$order='desc';
    $solicitacao = Solicitacao::with('setores')->orderby('order', 'DESC');
    $search = $request->input('id_setor');

        //total

    $quant_resmas = Solicitacao::sum('quant_resmas');
    $id = Solicitacao::count('id');

    //$search = $request->get('search');
    //$solicitacao = Solicitacao::with('setores')->where('id_setor', 'LIKE', '%' . $search . '%')->paginate(10);
    if(!empty($search)){
        $solicitacao = Solicitacao::orderby('id','DESC')
            ->where('id_setor', '=',  $search)
            ->paginate(10)
            ->withQueryString();
        unset($quant_resmas);
        $quant_resmas = 0;
    }else{
        $solicitacao = Solicitacao::orderby('id','DESC')->with('setores')->paginate(10);
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
    return view('historico', [
      'solicitacao' => $solicitacao,
      'setores' => $setores ,
      //'created_at' => $solicitac,
      'quant_resmas' => $quant_resmas,
      'id' => $id,

    ]);
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

}
