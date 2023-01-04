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
            'nome'=> 'DIMAE', 
            'sigla'=> 'PRES',
            'impressora'=> 'DA_DIMAE2_EPSON_MONO'
           ]);   

        // comecei aqui

        setores::create([
            'nome'=> 'Secretaria-Geral da Presidência ', 
            'sigla'=> 'SECRE',
          ]);
  
          setores::create([
          'nome'=> 'Subsecretaria-Geral ', 
          'sigla'=> 'SUBSEC',
          ]);
  
          setores::create([
              'nome'=> 'Subsecretaria dos Órgãos Colegiados ', 
              'sigla'=> 'SUBSEO',
          ]);
          
          setores::create([
               'nome'=> 'Subsecretaria de Governança ', 
              'sigla'=> 'SUBGOV',
          ]);
          
          setores::create([
              'nome'=> 'Coordenação de Planejamento ', 
              'sigla'=> 'COOP',
          ]);
  
          setores::create([
              'nome'=> 'Coordenação de Relações Instucionais ', 
              'sigla'=> 'COORI',
          ]);
  
          setores::create([
              'nome'=> 'Assessoria de Comunicação Social ', 
              'sigla'=> 'ASCOM',
          ]);
  
          setores::create([
              'nome'=> 'Ouvidoria Geral ', 
              'sigla'=> 'OUVID',
          ]);
  
          setores::create([
              'nome'=> 'Diretoria de Edificações', 
              'sigla'=> 'DE',
          ]);
                                  
          setores::create([
              'nome'=> 'Departamento de Edificações ', 
              'sigla'=> 'DEDIF',
          ]);
                                  
          setores::create([
              'nome'=> 'Divisão de Fiscalização ', 
              'sigla'=> 'DIFIS',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Execução, Conservação e Reparos ', 
              'sigla'=> 'DICOR',
          ]);
                          
          setores::create([
              'nome'=> 'Departamento Técnico ', 
              'sigla'=> 'DETEC',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Planejamento e Orçamento ', 
              'sigla'=> 'DIPLO',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Projetos ', 
              'sigla'=> 'DIPRO',
          ]);
          
          setores::create([
               'nome'=> 'Diretoria de Urbanização', 
              'sigla'=> 'DU',
          ]);
          
          setores::create([
              'nome'=> 'Departamento de Infraestrutura Urbana ', 
              'sigla'=> 'DEINFRA',
          ]);
  
          setores::create([
              'nome'=> 'Núcleo de Produção e Distribuição de Asfaltos ', 
              'sigla'=> 'NUASF',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Projetos ', 
              'sigla'=> 'DIPROJ',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Obras ', 
              'sigla'=> 'DIOB',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Manutenção e Execução de Obras de Drenagem Pluvial ', 
              'sigla'=> 'DIMAD',
          ]);
                                  
          setores::create([
              'nome'=> 'Divisão de Manutenção e Conservação de Via ', 
              'sigla'=> 'DIMAV',
          ]);
                                  
          setores::create([
              'nome'=> 'Divisão de Obras Diretas de Pavimentação Asfáltica ', 
              'sigla'=> 'DIOD',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Apoio Técnico ', 
              'sigla'=> 'DIATEC',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Meio Ambiente ', 
              'sigla'=> 'DIMAM',
          ]);
                          
          setores::create([
              'nome'=> 'Departamento de Parques e Jardins ', 
              'sigla'=> 'DPJ',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Agronomia ', 
              'sigla'=> 'DIAGRO',
          ]);
          
          setores::create([
               'nome'=> 'Divisão de Projetos de Paisagismo ', 
              'sigla'=> 'DIPROP',
          ]);
          
          setores::create([
              'nome'=> 'Divisão de Implantação de Áreas Verdes ', 
              'sigla'=> 'DIAVE',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Manutenção de Áreas Verdes ', 
              'sigla'=> 'DIMAVE',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Orçamento e Controle ', 
              'sigla'=> 'DIOC',
          ]);
  
          setores::create([
              'nome'=> 'Diretoria Administrativa', 
              'sigla'=> 'DA',
          ]);
  
          setores::create([
              'nome'=> 'Coordenação de Monitoramento ', 
              'sigla'=> 'COMON',
          ]);
                                  
          setores::create([
              'nome'=> 'Departamento de Gestão de Pessoas ', 
              'sigla'=> 'DEGEP',
          ]);
                                  
          setores::create([
              'nome'=> ' Divisão de Gestão de Pessoas ', 
              'sigla'=> 'DIGEP',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Segurança, Medicina e Assistência ', 
              'sigla'=> 'DISMED',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Recrutamento, Capacitação e Benefícios ', 
              'sigla'=> 'DIBEN',
          ]);
                          
          setores::create([
              'nome'=> 'Departamento de Materiais, Patrimônio e Gestão de Documentos ', 
              'sigla'=> 'DEMAP',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Patrimônio e Acervo Documental ', 
              'sigla'=> 'DIPAD',
          ]);
          
          setores::create([
               'nome'=> 'Divisão de Material, Almoxarifado e Controle de Estoque ', 
              'sigla'=> 'DIMAE',
          ]);
          
          setores::create([
              'nome'=> 'Divisão de Segurança e Eventos ', 
              'sigla'=> 'DISEV',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Conservação, Limpeza e Manutenção Interna', 
              'sigla'=> 'DICOL',
          ]);
  
          setores::create([
              'nome'=> 'Departamento de Compras ', 
              'sigla'=> 'DECOMP',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Compras ', 
              'sigla'=> 'DICOM',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Licitações e Contratos ', 
              'sigla'=> 'DILIC',
          ]);
                                  
          setores::create([
              'nome'=> 'Departamento de Transporte e Manutenção ', 
              'sigla'=> 'DETRA',
          ]);
                                  
          setores::create([
              'nome'=> 'Divisão de Operações ', 
              'sigla'=> 'DIOP',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Manutenção ', 
              'sigla'=> 'DIMAN',
          ]);
                          
          setores::create([
              'nome'=> 'Departamento de Informática ', 
              'sigla'=> 'DEINF',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Redes ', 
              'sigla'=> 'DIRED',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Desenvolvimento ', 
              'sigla'=> 'DIDES',
          ]);
          
          setores::create([
               'nome'=> 'Diretoria Financeira', 
              'sigla'=> 'DF',
          ]);
          
          setores::create([
              'nome'=> 'Departamento Financeiro ', 
              'sigla'=> 'DEFIN',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Finanças ', 
              'sigla'=> 'DIFIN',
          ]);
  
          setores::create([
              'nome'=> ' Divisão de Liquidação ', 
              'sigla'=> 'DILIQ',
          ]);
  
          setores::create([
              'nome'=> 'Divisão Elaboração e Controle Orçamentário ', 
              'sigla'=> 'DIECO',
          ]);
  
          setores::create([
              'nome'=> 'Departamento de Contabilidade ', 
              'sigla'=> 'DECON',
          ]);
                                  
          setores::create([
              'nome'=> 'Divisão de Contabilidade Orçamentária e Financeira ', 
              'sigla'=> 'DICON',
          ]);
                                  
          setores::create([
              'nome'=> 'Divisão de Contabilidade Patrimonial ', 
              'sigla'=> 'DICOP',
          ]);
                          
          setores::create([
              'nome'=> 'Diretoria Jurídica', 
              'sigla'=> 'DJ',
          ]);
                          
          setores::create([
              'nome'=> 'Departamento Jurídico Trabalhista ', 
              'sigla'=> 'DEJUT',
          ]);
                          
          setores::create([
              'nome'=> 'Divisão de Cálculo ', 
              'sigla'=> 'DICAL',
          ]);
  
          setores::create([
              'nome'=> 'Departamento Jurídico Cível ', 
              'sigla'=> 'DEJUC',
          ]);
          
          setores::create([
               'nome'=> 'Departamento Jurídico Consultivo ', 
              'sigla'=> 'DECONS',
          ]);
          
          setores::create([
              'nome'=> 'Divisão de Apoio Administrativo ', 
              'sigla'=> 'DIAPO',
          ]);
  
          setores::create([
              'nome'=> 'Divisão de Elaboração de Contratos ', 
              'sigla'=> 'DIELC',
          ]);
  
  
         }
  }
