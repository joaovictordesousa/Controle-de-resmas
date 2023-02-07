<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setores;
use App\Models\Solicitacao;
use App\Models\RelatorioModel;
use App\Models\Impressoes;
use PDF;
use Maatwebsite\Excel\Facades\CSV;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RelatorioExport;



class relatorio_impressaoController extends Controller
{

  public function relatorio(Request $request)
  {
    $setores = Setores::orderby('id')->get();

    $impressoes = Impressoes::where('id_setores', '=', $request->id_setores)
      ->whereBetween('created_at', [$request->datainicial . '00:00:00', $request->datafinal . '23:59:59']);

    /*if($request->datainicial && $request->datafinal){
         $solicitacao = Solicitacao::whereBetween('created_at', '=', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59'])->get();
        }*/

    return view('relatorio-impresao' , compact('setores'));
  }




  public function Docs(Request $request)
  {

    $option = $request->documentos;

    $id_setores = $request->input('id_setores');
    $datainicial = $request->input('datainicial');
    $datafinal = $request->input('datafinal');

    if ($option == 1) {

      //PDF

      $impressoes = Impressoes::where('id_setores', $id_setores)
        ->whereBetween('created_at', [$datainicial . ' 00:00:00', $datafinal . ' 23:59:59'])
        ->get();
      // $impressoes = Impressoes::where('id_setor', '=', $request->id_setor)
      // ->whereBetween('created_at', [$request->datainicial . '00:00:00', $request->datafinal . '23:59:59']);

      $total = Impressoes::where('id_setores', $id_setores)
        ->whereBetween('created_at', [$datainicial . ' 00:00:00', $datafinal . ' 23:59:59'])
        ->sum('quant_impressoes',);


      $relatorio = [
        'title' => 'Relatório',
        'date' => date('d/m/Y'),
        'impressoes' => $impressoes,
        'total' => $total,
        'id_setores' => $id_setores,
      ];

      //$solicitacao = Solicitacao::where('id_setor', $request->id_setor)
      //->whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

      $pdf = PDF::loadView('myPDF2', $relatorio);
      return $pdf->stream('relatorio.pdf');
    }
    if ($option == 2) {

      //XLS

      return Excel::download(new RelatorioExport($id_setores, $datainicial, $datafinal), 'relatorio.xlsx');
    }
    if ($option == 3) {

      //CVS

      return Excel::download(new RelatorioExport($id_setores, $datainicial, $datafinal), 'relatorio.csv');
    }
  }
}

        //public function buscar($id_setor)
        //{

          //$solicitacao = solicitacao::find($id_setor);
          //$data = RelatorioModel::whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);


        //}

     // function data(Request $request){

    //$data = RelatorioModel::whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

  //  }
