<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\setores;
use App\Models\Solicitacao;
use PDF;
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

      $request->validate([
        'id_setor' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required'
      ],
      [
        'id_setor.required' => 'Campo setor é obrigatorio',
        'datainicial.required' => 'Campo data inicial é obrigatório ',
        'datafinal.required' => 'Campo data final é obrigatório',
        'documentos.required' => 'Campo documento é obrigatório'

   ]);
      //$solicitacao = Solicitacao::where('id_setor', $request->id_setor)
      //->whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

      $pdf = pdf::loadView('myPDF', $relatorio);
      return $pdf->stream('relatorio.pdf');
    }
    if ($option == 2) {

      //XLS
      $request->validate([
        'id_setor' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required'
      ],
      [
        'id_setor.required' => 'Campo setor é obrigatorio',
        'datainicial.required' => 'Campo data inicial é obrigatório ',
        'datafinal.required' => 'Campo data final é obrigatório',
        'documentos.required' => 'Campo documento é obrigatório'

   ]);

      return Excel::download(new RelatorioExport($id_setor, $datainicial, $datafinal), 'relatorio.xlsx');
    }
    if ($option == 3) {

      //CVS
      $request->validate([
        'id_setor' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required'
        
      ],
      [
        'id_setor.required' => 'Campo setor é obrigatorio',
        'datainicial.required' => 'Campo data inicial é obrigatório ',
        'datafinal.required' => 'Campo data final é obrigatório',
        'documentos.required' => 'Campo documento é obrigatório'

   ]);

      return Excel::download(new RelatorioExport($id_setor, $datainicial, $datafinal), 'relatorio.csv');
    }
    $request->validate([
        'id_setor' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required'
    ],
    [
        'id_setor.required' => 'Campo setor é obrigatório ',
        'datainicial.required' => 'Campo data inicial é obrigatório ',
        'datafinal.required' => 'Campo data final é obrigatório',
        'documentos.required' => 'Campo documento é obrigatório'
        
   ]);

   Solicitacao::Create($request->all());

   return redirect()->view('relatorio');
  }
}
