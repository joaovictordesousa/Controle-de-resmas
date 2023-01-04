<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setores;
use App\Models\Solicitacao;
use App\Models\RelatorioModel;
use PDF;
use Maatwebsite\Excel\Facades\CSV;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RelatorioExport;



class relatorio extends Controller
{

  public function relatorio(Request $request)
  {
    $setores = Setores::orderby('id')->get();


    $solicitacao = Solicitacao::where('id_setor', '=', $request->id_setor)
      ->whereBetween('created_at', [$request->datainicial . '00:00:00', $request->datafinal . '23:59:59']);


    /*if($request->datainicial && $request->datafinal){
         $solicitacao = Solicitacao::whereBetween('created_at', '=', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59'])->get();
        }*/



    return view('relatorio', compact('setores'));
  }



  public function Docs(Request $request)
  {

    $option = $request->documentos;

    $id_setor = $request->input('id_setor');
    $datainicial = $request->input('datainicial');
    $datafinal = $request->input('datafinal');

    if ($option == 1) {

      //PDF

      $solicitacao = Solicitacao::where('id_setor', $id_setor)
        ->whereBetween('created_at', [$datainicial . ' 00:00:00', $datafinal . ' 23:59:59'])
        ->get();

      $total = Solicitacao::where('id_setor', $id_setor)
        ->whereBetween('created_at', [$datainicial . ' 00:00:00', $datafinal . ' 23:59:59'])
        ->sum('quant_resmas');


      $relatorio = [
        'title' => 'Relatório',
        'date' => date('d/m/Y'),
        'solicitacao' => $solicitacao,
        'total' => $total,
      ];

      //$solicitacao = Solicitacao::where('id_setor', $request->id_setor)
      //->whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

      $pdf = PDF::loadView('myPDF', $relatorio);
      return $pdf->stream('relatorio.pdf');
    }
    if ($option == 2) {

      //XLS

      return Excel::download(new RelatorioExport($id_setor, $datainicial, $datafinal), 'relatorio.xlsx');
    }
    if ($option == 3) {

      //CVS

      return Excel::download(new RelatorioExport($id_setor, $datainicial, $datafinal), 'relatorio.csv');
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
