<?php

namespace App\Exports;

use App\Models\RelatorioModel;
use App\Models\Solicitacao;
use App\Models\setores;
use App\Http\Controllers\relatorio;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class RelatorioExport implements WithMapping, WithHeadings, Fromquery, WithCustomCsvSettings
{
    use Exportable;


    public function __construct(int $id_setor, string $datainicial, string $datafinal)
    {
        $this->id_setor = $id_setor;
        $this->datainicial = $datainicial;
        $this->datafinal = $datafinal;
    }

    public function query()
    {

        $solic = Solicitacao::with('setores')->where('id_setor', $this->id_setor)
            ->whereBetween('created_at', [$this->datainicial . ' 00:00:00', $this->datafinal . ' 23:59:59']);

        return $solic;
    }


    public function map($solicitacoes): array
    {
        return [
            $solicitacoes->setores->Nome,
            $solicitacoes->quant_resmas,
            $solicitacoes->created_at->format('d/m/Y'),
            $solicitacoes->with('setores')->where('id_setor', $this->id_setor)
                ->whereBetween('created_at', [$this->datainicial . ' 00:00:00', $this->datafinal . ' 23:59:59'])
                ->sum('quant_resmas'),
        ];
    }

    public function headings(): array
    {
        return [
            'Setor',
            'Quantidade de Resmas',
            'Data De Solicitação',
            'Total de resmas'
        ];
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter'        => ',',
            'enclosure'        => null,
            'escape_character' => '\\',
            'contiguous'       => false,
            'use_bom'          => true,
            'input_encoding'   => 'UTF-8',
        ];
    }
}
