<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\relatorio;
use App\Http\Controllers\historico;
use App\Models\RelatorioModel;
use App\Models\setores;
use App\Models\SolicitacaoController ;
use App\Models\Solicitacao;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        //$solicitacao = Solicitacao::get();
      
        //$solicitacao = Solicitacao::with('setores')->find('')->get();

        //$solicitacao = setores::find('id')->solicitacao;

       
        $relatorio = [
            'title' => 'Relatório de',
            'date' => date('d/m/Y'),
            
        ]; 
            
        $pdf = PDF::loadView('myPDF', $relatorio);
     
        return $pdf->stream('relatorio.pdf');
    }
}