<?php

namespace App\Exports;

use App\Models\RelatorioModel;
use App\Models\impressoes;
use App\Models\setores;
use App\Http\Controllers\relatorio;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class RelatorioExport2 implements WithMapping, WithHeadings, Fromquery, WithCustomCsvSettings
{
    use Exportable;


    public function __construct(int $id_setores, string $datainicial, string $datafinal)
    {
        $this->id_setores = $id_setores;
        $this->datainicial = $datainicial;
        $this->datafinal = $datafinal;
    }

    public function query()
    {

        $impresso = Impressoes::with('setores')->where('id_setores', $this->id_setores)
            ->whereBetween('created_at', [$this->datainicial . ' 00:00:00', $this->datafinal . ' 23:59:59']);

        return $impresso;
    }


    public function map($impressoes): array
    {
        return [
            $impressoes->setores->Nome,
            $impressoes->setores->Impressora,
            $impressoes->quant_impressoes,
            $impressoes->created_at->format('d/m/Y'),
            $impressoes->users->name,
            $impressoes->with('setores')->where('id_setores', $this->id_setores)
                ->whereBetween('created_at', [$this->datainicial . ' 00:00:00', $this->datafinal . ' 23:59:59'])
                ->sum('quant_impressoes'),
        ];
    }

    public function headings(): array
    {
        return [
            'Setor',
            'Impressora',
            'Quantidade de Impressão',
            'Data De Solicitação',
            'Usuario',
            'Total de Impressões'
        ];
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter'        => ',  ',
            'enclosure'        => '',
            'escape_character' => '\\',
            'contiguous'       => false,
            'use_bom'          => true,
            'input_encoding'   => 'UTF-8',
        ];
    }
}
