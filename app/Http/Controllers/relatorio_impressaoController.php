<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setores;
use App\Models\Solicitacao;
use App\Models\RelatorioModel;
use App\Models\Impressoes;
use PDF;
use Maatwebsite\Excel\Facades\CSV;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RelatorioExport2;



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
        ->sum('quant_impressoes');


      $relatorio = [
        'title' => 'Relatório',
        'date' => date('d/m/Y'),
        'impressoes' => $impressoes,
        'total' => $total,
      ];
      $request->validate([
        'id_setores' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required'
      ],
      [
          'id_setores.integer' => 'Campo setor é obrigatório ',
          'datainicial.required' => 'Campo data inicial é obrigatório ',
          'datafinal.required' => 'Campo data final é obrigatório',
          'documentos.required' => 'Campo documento é obrigatório'

   ]);

      //$solicitacao = Solicitacao::where('id_setor', $request->id_setor)
      //->whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

      $pdf = PDF::loadView('myPDF2', $relatorio);
      return $pdf->stream('relatorio.pdf');
    }
    if ($option == 2) {

      //XLS
      $request->validate([
        'id_setores' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required',
      ],
      [
          'id_setores.integer' => 'Campo setor é obrigatório ',
          'datainicial.required' => 'Campo data inicial é obrigatório ',
          'datafinal.required' => 'Campo data final é obrigatório',
          'documentos.required' => 'Campo documento é obrigatório'


   ]);

      return Excel::download(new RelatorioExport2($id_setores, $datainicial, $datafinal), 'relatorio2.xlsx');
    }
    if ($option == 3) {

      //CVS
      $request->validate([
        'id_setores' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required',
      ],
      [
          'id_setores.integer' => 'Campo setor é obrigatório ',
          'datainicial.required' => 'Campo data inicial é obrigatório ',
          'datafinal.required' => 'Campo data final é obrigatório',
          'documentos.required' => 'Campo documento é obrigatório'
   ]);

      return Excel::download(new RelatorioExport2($id_setores, $datainicial, $datafinal), 'relatorio2.csv');
    }
    $request->validate([
        'id_setores' => 'required|integer',
        'datainicial' => 'required',
        'datafinal' => 'required',
        'documentos' => 'required',
      ],
      [
          'id_setores.integer' => 'Campo setor é obrigatório ',
          'datainicial.required' => 'Campo data inicial é obrigatório ',
          'datafinal.required' => 'Campo data final é obrigatório',
          'documentos.required' => 'Campo documento é obrigatório'
   ]);

   Impressoes::Create($request->all());

   return redirect()->view('relatorio-impresao');
  }


}
