<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon"src="/img/Logo_transparente.png" type="image/x-icon">
<link rel="stylesheet" href="style.css">
<title>Novacap - PDF</title>

<head>
    <style>
        * {
            font-family: 'Barlow', sans-serif;
        }





        h2 {
            font-family: 'Barlow', sans-serif;
            padding-top: 40px !important;
            padding-bottom: 25px !important;
            text-align: center;
        }

        h5 {
            font-family: 'Barlow', sans-serif;
            margin-top: 10px;
            margin-right: 0px;
            text-align: center;
        }

        a {
            color: white;
            text-decoration: none;
        }

        #logo {
            margin-top: 10px;
            margin-left: 10px;
        }

        tr.cab th {
            background-color: #a8daf2;

            font-weight: lighter;

            padding: 5px;
        }

        table.exe4 {
            border-collapse: collapse;
            width: 100%;

            font-weight: lighter;
        }

        table.exe4 tr:nth-child(even) {
            background-color: #EBF0FA;
            font-weight: lighter;
        }

        table.exe4 tr:nth-child(odd) {
            background-color: #bfbebe;

            font-weight: lighter;
        }
    </style>
    <div class="container-fluid">
        <div>
            <div style="float: left">
                <img src="{{ public_path('/img/novacapLogo.jpg') }}" style="width: 160px; height: 60px" />
            </div>
            <div>
                <h5>GOVERNO DO DISTRITO FEDERAL</h5>
                <h5>COMPANHIA URBANIZADORA DA NOVA CAPITAL DO BRASIL</h5>
            </div>
        </div>
    </div>
    <div>
        <h2>Controle de Resmas</h2>
    </div>

    <div>


    </div>
</head>

<body>


    <table class="exe4">
        <thead style="background-color: 	#E1F5FE;">
            <tr class="cab">
                <th style="border-style:solid;">Nome</th>
                <th style="border-style:solid;">Setor</th>
                <th style="border-style:solid;">Quantidade de Resmas</th>
                <th style="border-style:solid;">Data Solicitação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitacao as $solic)
                <tr>
                    <th>{{ $solic->nome }}</th>
                    <th>{{ $solic->setores->Nome }} - {{ $solic->setores->Sigla }}</th>
                    <th>{{ $solic->quant_resmas }}</th>
                    <th>{{ $solic->created_at->format('d/m/Y') }}</th>
                </tr>
            @endforeach

        </tbody>


    </table>
    <br>
    <h3>Total de resmas: {{ $total }}</h3>
</body>
