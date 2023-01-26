@extends('layouts.main')
@section('title', 'Novacap - Histórico')
@section('content')

    <br><br>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <script type="text/javascript">
        var $rows = $('#table tr');
        $('#search').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
        </script>

    <div class="container">

        <a class="btn btn-outline-primary" href="/cadastro" role="button">NOVA SOLICITAÇÃO</a>

                        {{-- NOVA view --}}

        <a class="btn btn-outline-primary" href="/criar-impressao" role="button">NOVA IMPRESSÃO</a>
        <br><br>

        @if (session('msg'))
            <div class="alert alert-success" role="alert"style="width: 1200px;">
                <p class="msg">
                    {{ session('msg') }}
                </p>
            </div>
        @endif
        {{-- dd($solicitacao) --}}
        <div class="mh-100" style="width: 1200px; height: 1000px;">
            <div class="card border-dark" style="max-width: 700rem;">
                <div class="card-header text-white" style="background-color: #044f84;">Histórico de Impressões
                </div>
                <div class="card-body text-dark">
                    <p class="card-text">
                        <form class="d-flex" action="" method="GET">
                        <select class="form-control" name="" id="l">
                            <option>Selecione um setor</option>


                        </select>

                        <button class="btn btn-outline-success justify-content-md-end" type="submit"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>

                    <div class="d-flex">
                        <a class="btn btn-outline-danger" href="{{route('historico')}}" role="button">Limpar</a>
                    </div>

                    </form>

                    <br>
                    <br>
                    <table class="table table-hover" id="table">
                        <thead class="table-primary" style="background-color: 	#E1F5FE;">
                            <tr>
                                <th>Solicitação</th>
                                <th>Setor</th>
                                <th>Impressora</th>
                                <th>Impressões</th>
                                <th>Data da solicitação</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($impressoes as $impress)
                            <tr>
                                <td value="{{$impress->id }}">{{$impress->id}}</td>
                                <td value="{{$impress->id }}">{{$impress->setores->Nome}} - {{$impress->setores->Sigla}}</td>
                                <td value="{{$impress->id }}">{{$impress->setores->Impressora}}</td>
                                <td value="{{$impress->id }}">{{$impress->quant_impressoes}}</td>
                                <td value="{{$impress->id }}">{{$impress->created_at->format('d/m/Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <style>
                            #tessste{
                                background-color: #C2E7DA;
                            }
                        </style>
                        <tfoot id="tessste" >
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td>{{$quant_impressoes}}<td>
                            <td></td>
                        </tfoot>
                    </table>

                    <div>
                        {{-- {{$solicitacao->links()}} --}}

                    </div>
                    </p>
                </div>


            @endsection

