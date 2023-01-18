<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\setoresimpressora;

class setoresimpressoraSeeder extends Seeder 
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setoresimpressora::create([
            'nome'=> 'BALANÇA',
            'sigla'=> 'DA',
            'impressora' => 'DA_BALANCA_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'DECOMP',
            'sigla'=> 'DA',
            'impressora' => 'DA_DECOMP_EPSON_MONO'
        ]);


        setoresimpressora::create([
            'nome'=> 'DEGEP',
            'sigla'=> 'DA',
            'impressora' => 'DA_DEGEP_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'DEMAP',
            'sigla'=> 'DA',
            'impressora' => 'DA_DEMAP_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DETRA',
            'sigla'=> 'DA',
            'impressora' => 'DA_DETRA_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIBEN',
            'sigla'=> 'DA',
            'impressora' => 'DA_DIBEN_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DICOL',
            'sigla'=> 'DA',
            'impressora' => 'DA_DICOL_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DEMAP',
            'sigla'=> 'DA',
            'impressora' => 'DA_DEMAP_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIGEP - 1',
            'sigla'=> 'DA',
            'impressora' => 'DA_DIGEP1_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIGEP - 2',
            'sigla'=> 'DA',
            'impressora' => 'DA-DIGEP2-EPSON-MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIMAE',
            'sigla'=> 'DA',
            'impressora' => 'DA_DIMAE_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIOP - 1',
            'sigla'=> 'DA',
            'impressora' => 'DA_DIOP1_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIOP - 2',
            'sigla'=> 'DA',
            'impressora' => 'DA_DIOP2_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DISEV',
            'sigla'=> 'DA',
            'impressora' => 'DA_DISEV_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DISMED',
            'sigla'=> 'DA',
            'impressora' => 'DA_DISMED_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'TELEFONIA',
            'sigla'=> 'DA',
            'impressora' => 'DA_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DA',
            'sigla'=> 'DA',
            'impressora' => 'DA_EPSON_MONO
            '
        ]);

        setoresimpressora::create([
            'nome'=> 'MONITORAMENTO',
            'sigla'=> 'DA',
            'impressora' => 'DA_MONITORAMENTO_SG'
        ]);

        setoresimpressora::create([
            'nome'=> 'PREFEITURA',
            'sigla'=> 'DA',
            'impressora' => 'DA_PREFEITURA_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'PROTOCOLO',
            'sigla'=> 'DA',
            'impressora' => 'DA_PROTOCOLO_EPSON_MONO
            '
        ]);

        setoresimpressora::create([
            'nome'=> 'DE-ASSESSORIA',
            'sigla'=> 'DE',
            'impressora' => 'DE_ASSES_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DICOR',
            'sigla'=> 'DE',
            'impressora' => 'DE_DICOR_EPSON_MONO' //mesmo do de baixo
        ]);

        setoresimpressora::create([
            'nome'=> 'DICOR',
            'sigla'=> 'DE',
            'impressora' => 'DE_DICOR_EPSON_MONO'//mesmo do de cima
        ]);

        setoresimpressora::create([
            'nome'=> ' DIFIS - 2',
            'sigla'=> 'DE',
            'impressora' => 'DE_DIFIS2_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIPLO',
            'sigla'=> 'DE',
            'impressora' => 'DE_DIPLO_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIPRO',
            'sigla'=> 'DE',
            'impressora' => 'DE_DIPRO_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DE-GAB',
            'sigla'=> 'DE',
            'impressora' => 'DE_EPSON_A3_COLOR'
        ]);

        setoresimpressora::create([
            'nome'=> 'MARCENARIA',
            'sigla'=> 'DE',
            'impressora' => 'DE_MARCENARIA_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DF - CORREDOR',
            'sigla'=> 'DF',
            'impressora' => 'DF_CORREDOR_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DECON - DF',
            'sigla'=> 'DF',
            'impressora' => 'DF_DECON_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIFIN- 1',
            'sigla'=> 'DF',
            'impressora' => 'DF_DIFIN_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIFIN- 2',
            'sigla'=> 'DF',
            'impressora' => 'DF_DIFIN2_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'DILIQ',
            'sigla'=> 'DF',
            'impressora' => 'DF_DILIQ_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DF',
            'sigla'=> 'DF',
            'impressora' => 'DF_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DECONS',
            'sigla'=> 'DJ',
            'impressora' => 'DJ_DECONS_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DEJUT',
            'sigla'=> 'DJ',
            'impressora' => 'DJ_DEJUT_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIAPO',
            'sigla'=> 'DJ',
            'impressora' => 'DJ_DIAPO_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIATEC',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIATEC_EPSON_MONO
            '
        ]);

        setoresimpressora::create([
            'nome'=> 'DIAVE',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIAVE_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIMAD',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIMAD_EPSON_MONO'
        ]);


        setoresimpressora::create([
            'nome'=> '',
            'sigla'=> 'DU',
            'impressora' => ''
        ]);

        setoresimpressora::create([
            'nome'=> 'DIMAV',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIMAV_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIMAVE',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIMAVE_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIOB APOIO',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIOB_APOIO_EPSON_MONO'
        ]);

        
        setoresimpressora::create([
            'nome'=> 'DIOB',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIOB_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIOD',
            'sigla'=> 'DU',
            'impressora' => 'DU_DIOD_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DPJ',
            'sigla'=> 'DU',
            'impressora' => 'DU_DPJ_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'DIPROJ',
            'sigla'=> 'DU',
            'impressora' => 'DU_EPSON_A3_COLOR'
        ]);

        setoresimpressora::create([
            'nome'=> 'NUASF',
            'sigla'=> 'DU',
            'impressora' => 'DU_NUASF_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'SETOP',
            'sigla'=> 'DU',
            'impressora' => 'DU_SETOP_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'VIVEIRO 1',
            'sigla'=> 'DU',
            'impressora' => 'DU_SETOP_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'VIVEIRO 2',
            'sigla'=> 'DU',
            'impressora' => 'DU_VIVEIRO2_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'GAB_DU',
            'sigla'=> 'DU',
            'impressora' => 'DU_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'ASCOM',
            'sigla'=> 'PRES',
            'impressora' => ''
        ]);

        setoresimpressora::create([
            'nome'=> 'ASCOM',
            'sigla'=> 'PRES',
            'impressora' => 'PRES_ASCOM_EPSON_MONO'
        ]);


        setoresimpressora::create([
            'nome'=> 'DIMAE',
            'sigla'=> 'PRES',
            'impressora' => 'DA_DIMAE2_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'AUDITORIA - PRESIDÊNCIA',
            'sigla'=> 'PRES',
            'impressora' => 'PRES_AUDIT_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'CORREDOR - PRESIDÊNCIA',
            'sigla'=> 'PRES',
            'impressora' => 'PRES_CORREDOR_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'CPPAD',
            'sigla'=> 'PRES',
            'impressora' => 'PRES_CPPAD_EPSON'
        ]);

        setoresimpressora::create([
            'nome'=> 'A3 - PRESIDÊNCIA',
            'sigla'=> 'PRES',
            'impressora' => 'PRES_EPSON_A3_COLOR'
        ]);

        setoresimpressora::create([
            'nome'=> 'OUVIDORIA',
            'sigla'=> 'PRES',
            'impressora' => 'PRES_OUVIDORIA_EPSON_MONO'
        ]);

        setoresimpressora::create([
            'nome'=> 'COOP',
            'sigla'=> 'PRES',
            'impressora' => 'PRESS_COOP_EPSON'
        ]);

    }
}