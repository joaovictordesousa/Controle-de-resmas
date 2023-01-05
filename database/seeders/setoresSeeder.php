<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\setores;

class setoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setores::create([
            'nome'=> 'ASCOM', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRES_ASCOM_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIMAE', 
            'sigla'=> 'PRES',
            'impressora'=> 'DA_DIMAE2_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'AUDITORIA - PRESIDÊNCIA', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRES_AUDIT_EPSON_MONO'
        ]);
           
        setores::create([
            'nome'=> 'CORREDOR - PRESIDÊNCIA', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRES_CORREDOR_EPSON_MONO'
        ]); 

        setores::create([
            'nome'=> 'CPPAD', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRES_CPPAD_EPSON'
        ]);

        setores::create([
            'nome'=> 'A3 - PRESIDÊNCIA', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRES_EPSON_A3_COLOR'
        ]);
          
        setores::create([
            'nome'=> 'OUVIDORIA', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRES_OUVIDORIA_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'COOP', 
            'sigla'=> 'PRES',
            'impressora'=> 'PRESS_COOP_EPSON'
        ]);

        setores::create([
            'nome'=> 'GAB_DU', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'VIVEIRO 2', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_VIVEIRO2_EPSON'
        ]);

        setores::create([
            'nome'=> 'VIVEIRO 1', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_SETOP_EPSON'
        ]);
 

        // A impressora de sima e a de baixo estão com o mesmo nome
        setores::create([
            'nome'=> 'SETOP', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_SETOP_EPSON'
        ]);

        setores::create([
            'nome'=> 'NUASF', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_NUASF_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIPROJ', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_EPSON_A3_COLOR'
        ]);

        setores::create([
            'nome'=> 'DPJ', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DPJ_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIOD', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIOD_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIOB', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIOB_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIOB APOIO', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIOB_APOIO_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIMAVE', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIMAVE_EPSON_MONO
            '
        ]);
        
        setores::create([
            'nome'=> 'DIMAV', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIMAV_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIMAD', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIMAD_EPSON_MONO'
        ]);
        
        setores::create([
            'nome'=> 'DIAVE', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIAVE_EPSON_MONO'
        ]);
        
        setores::create([
            'nome'=> 'DIATEC', 
            'sigla'=> 'DU',
            'impressora'=> 'DU_DIATEC_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIAPO', 
            'sigla'=> 'DJ',
            'impressora'=> 'DJ_DIAPO_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DEJUT', 
            'sigla'=> 'DJ',
            'impressora'=> 'DJ_DEJUT_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DECONS', 
            'sigla'=> 'DJ',
            'impressora'=> 'DJ_DECONS_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DF', 
            'sigla'=> 'DF',
            'impressora'=> 'DF_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DILIQ', 
            'sigla'=> 'DF',
            'impressora'=> 'DF_DILIQ_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIFIN- 2', 
            'sigla'=> 'DF',
            'impressora'=> 'DF_DIFIN2_EPSON'
        ]);

        setores::create([
            'nome'=> 'DIFIN- 1', 
            'sigla'=> 'DF',
            'impressora'=> 'DF_DIFIN_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DECON - DF', 
            'sigla'=> 'DF',
            'impressora'=> 'DF_DECON_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DF - CORREDOR', 
            'sigla'=> 'DF',
            'impressora'=> 'DF_CORREDOR_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'MARCENARIA', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_MARCENARIA_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DE-GAB', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_EPSON_A3_COLOR'
        ]);

        setores::create([
            'nome'=> 'DIPRO', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_DIPRO_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DIPLO', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_DIPLO_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> ' DIFIS - 2', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_DIFIS2_EPSON_MONO'
        ]);

        setores::create([
            'nome'=> 'DICOR', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_DICOR_EPSON_MONO'
        ]);
        
        setores::create([
            'nome'=> 'DICOR', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_DICOR_EPSON_MONO'  // Na tabela tem dois iguais, 25 linha exel
        ]);

        setores::create([
            'nome'=> 'DE-ASSESSORIA', 
            'sigla'=> 'DE',
            'impressora'=> 'DE_ASSES_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'PROTOCOLO', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_PROTOCOLO_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'PREFEITURA', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_PREFEITURA_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'MONITORAMENTO', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_MONITORAMENTO_SG' 
        ]);

        setores::create([
            'nome'=> 'DA', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'TELEFONIA', 
            'sigla'=> 'DA',                  //A impressora da DA e a mesma dessa.//
            'impressora'=> 'DA_EPSON_MONO ' 
        ]);

        setores::create([
            'nome'=> 'DISMED', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DISMED_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DISEV', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DISEV_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DIOP - 2', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DIOP2_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DIOP - 1', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DIOP1_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DIMAE', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DIMAE_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DIGEP - 2', 
            'sigla'=> 'DA',
            'impressora'=> 'DA-DIGEP2-EPSON-MONO' 
        ]);

        setores::create([
            'nome'=> 'DIGEP - 1', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DIGEP1_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DEMAP', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DEMAP_EPSON' 
        ]);

        setores::create([
            'nome'=> 'DICOL', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DICOL_EPSON_MONO' 
        ]);
       
        setores::create([
            'nome'=> 'DIBEN', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DIBEN_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DETRA', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DETRA_EPSON_MONO' 
        ]);

        setores::create([
            'nome'=> 'DEMAP', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DEMAP_EPSON_MONO' 
        ]);

        
        setores::create([
            'nome'=> 'DEGEP', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DEGEP_EPSON' 
        ]);

        setores::create([
            'nome'=> 'DECOMP', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_DECOMP_EPSON_MONO' 
        ]);
        
        setores::create([
            'nome'=> 'BALANÇA', 
            'sigla'=> 'DA',
            'impressora'=> 'DA_BALANCA_EPSON' 
        ]); 

        // comecei aqui

//         setores::create([
//             'nome'=> 'Secretaria-Geral da Presidência ', 
//             'sigla'=> 'SECRE',
//           ]);
  
//           setores::create([
//           'nome'=> 'Subsecretaria-Geral ', 
//           'sigla'=> 'SUBSEC',
//           ]);
  
//           setores::create([
//               'nome'=> 'Subsecretaria dos Órgãos Colegiados ', 
//               'sigla'=> 'SUBSEO',
//           ]);
          
//           setores::create([
//                'nome'=> 'Subsecretaria de Governança ', 
//               'sigla'=> 'SUBGOV',
//           ]);
          
//           setores::create([
//               'nome'=> 'Coordenação de Planejamento ', 
//               'sigla'=> 'COOP',
//           ]);
  
//           setores::create([
//               'nome'=> 'Coordenação de Relações Instucionais ', 
//               'sigla'=> 'COORI',
//           ]);
  
//           setores::create([
//               'nome'=> 'Assessoria de Comunicação Social ', 
//               'sigla'=> 'ASCOM',
//           ]);
  
//           setores::create([
//               'nome'=> 'Ouvidoria Geral ', 
//               'sigla'=> 'OUVID',
//           ]);
  
//           setores::create([
//               'nome'=> 'Diretoria de Edificações', 
//               'sigla'=> 'DE',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Departamento de Edificações ', 
//               'sigla'=> 'DEDIF',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Divisão de Fiscalização ', 
//               'sigla'=> 'DIFIS',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Execução, Conservação e Reparos ', 
//               'sigla'=> 'DICOR',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Departamento Técnico ', 
//               'sigla'=> 'DETEC',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Planejamento e Orçamento ', 
//               'sigla'=> 'DIPLO',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Projetos ', 
//               'sigla'=> 'DIPRO',
//           ]);
          
//           setores::create([
//                'nome'=> 'Diretoria de Urbanização', 
//               'sigla'=> 'DU',
//           ]);
          
//           setores::create([
//               'nome'=> 'Departamento de Infraestrutura Urbana ', 
//               'sigla'=> 'DEINFRA',
//           ]);
  
//           setores::create([
//               'nome'=> 'Núcleo de Produção e Distribuição de Asfaltos ', 
//               'sigla'=> 'NUASF',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Projetos ', 
//               'sigla'=> 'DIPROJ',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Obras ', 
//               'sigla'=> 'DIOB',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Manutenção e Execução de Obras de Drenagem Pluvial ', 
//               'sigla'=> 'DIMAD',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Divisão de Manutenção e Conservação de Via ', 
//               'sigla'=> 'DIMAV',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Divisão de Obras Diretas de Pavimentação Asfáltica ', 
//               'sigla'=> 'DIOD',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Apoio Técnico ', 
//               'sigla'=> 'DIATEC',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Meio Ambiente ', 
//               'sigla'=> 'DIMAM',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Departamento de Parques e Jardins ', 
//               'sigla'=> 'DPJ',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Agronomia ', 
//               'sigla'=> 'DIAGRO',
//           ]);
          
//           setores::create([
//                'nome'=> 'Divisão de Projetos de Paisagismo ', 
//               'sigla'=> 'DIPROP',
//           ]);
          
//           setores::create([
//               'nome'=> 'Divisão de Implantação de Áreas Verdes ', 
//               'sigla'=> 'DIAVE',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Manutenção de Áreas Verdes ', 
//               'sigla'=> 'DIMAVE',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Orçamento e Controle ', 
//               'sigla'=> 'DIOC',
//           ]);
  
//           setores::create([
//               'nome'=> 'Diretoria Administrativa', 
//               'sigla'=> 'DA',
//           ]);
  
//           setores::create([
//               'nome'=> 'Coordenação de Monitoramento ', 
//               'sigla'=> 'COMON',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Departamento de Gestão de Pessoas ', 
//               'sigla'=> 'DEGEP',
//           ]);
                                  
//           setores::create([
//               'nome'=> ' Divisão de Gestão de Pessoas ', 
//               'sigla'=> 'DIGEP',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Segurança, Medicina e Assistência ', 
//               'sigla'=> 'DISMED',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Recrutamento, Capacitação e Benefícios ', 
//               'sigla'=> 'DIBEN',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Departamento de Materiais, Patrimônio e Gestão de Documentos ', 
//               'sigla'=> 'DEMAP',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Patrimônio e Acervo Documental ', 
//               'sigla'=> 'DIPAD',
//           ]);
          
//           setores::create([
//                'nome'=> 'Divisão de Material, Almoxarifado e Controle de Estoque ', 
//               'sigla'=> 'DIMAE',
//           ]);
          
//           setores::create([
//               'nome'=> 'Divisão de Segurança e Eventos ', 
//               'sigla'=> 'DISEV',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Conservação, Limpeza e Manutenção Interna', 
//               'sigla'=> 'DICOL',
//           ]);
  
//           setores::create([
//               'nome'=> 'Departamento de Compras ', 
//               'sigla'=> 'DECOMP',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Compras ', 
//               'sigla'=> 'DICOM',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Licitações e Contratos ', 
//               'sigla'=> 'DILIC',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Departamento de Transporte e Manutenção ', 
//               'sigla'=> 'DETRA',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Divisão de Operações ', 
//               'sigla'=> 'DIOP',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Manutenção ', 
//               'sigla'=> 'DIMAN',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Departamento de Informática ', 
//               'sigla'=> 'DEINF',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Redes ', 
//               'sigla'=> 'DIRED',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Desenvolvimento ', 
//               'sigla'=> 'DIDES',
//           ]);
          
//           setores::create([
//                'nome'=> 'Diretoria Financeira', 
//               'sigla'=> 'DF',
//           ]);
          
//           setores::create([
//               'nome'=> 'Departamento Financeiro ', 
//               'sigla'=> 'DEFIN',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Finanças ', 
//               'sigla'=> 'DIFIN',
//           ]);
  
//           setores::create([
//               'nome'=> ' Divisão de Liquidação ', 
//               'sigla'=> 'DILIQ',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão Elaboração e Controle Orçamentário ', 
//               'sigla'=> 'DIECO',
//           ]);
  
//           setores::create([
//               'nome'=> 'Departamento de Contabilidade ', 
//               'sigla'=> 'DECON',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Divisão de Contabilidade Orçamentária e Financeira ', 
//               'sigla'=> 'DICON',
//           ]);
                                  
//           setores::create([
//               'nome'=> 'Divisão de Contabilidade Patrimonial ', 
//               'sigla'=> 'DICOP',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Diretoria Jurídica', 
//               'sigla'=> 'DJ',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Departamento Jurídico Trabalhista ', 
//               'sigla'=> 'DEJUT',
//           ]);
                          
//           setores::create([
//               'nome'=> 'Divisão de Cálculo ', 
//               'sigla'=> 'DICAL',
//           ]);
  
//           setores::create([
//               'nome'=> 'Departamento Jurídico Cível ', 
//               'sigla'=> 'DEJUC',
//           ]);
          
//           setores::create([
//                'nome'=> 'Departamento Jurídico Consultivo ', 
//               'sigla'=> 'DECONS',
//           ]);
          
//           setores::create([
//               'nome'=> 'Divisão de Apoio Administrativo ', 
//               'sigla'=> 'DIAPO',
//           ]);
  
//           setores::create([
//               'nome'=> 'Divisão de Elaboração de Contratos ', 
//               'sigla'=> 'DIELC',
//           ]);
  
  
    }  
}
