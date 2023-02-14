@extends('layouts.main')
@section('title', 'Novacap - Cadastro')
@section('content')
<br>
<br>
<br>
<br>




<div class="container">

    
    <br><br>

    <div class="mh-100" style="width: 1000px; height: 1000px;">
        <div class="card border-dark" style="max-width: 700rem;">
            <div class="card-header text-white" style="background-color: #044f84; text-align: center;">GESTÃO DE IMPRESSÃO</div>
                  
            <div class="card-body text-dark">

                <a class="btn btn-outline-primary" href="/cadastro" role="button">SOLICITAÇÃO DE RESMAS</a>

                <p class="card-text">
               
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                 @endif


                {{-- cadastro de impressao --}}

                    <form  action="/criar-impressao" method="POST">
                    @csrf
                    <div class="form-group">

                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Setor e Impressoras:</label>
                        <select class="form-control" name="id_setores" id="id_setores">
                            <option>Selecione o Setor e a Impressora</option>

                            @foreach ($id_setores as $setor)
                            <option value="{{ $setor->id }}">{{ $setor->Sigla }} &nbsp  {{ $setor->Nome }} &nbsp  -  &nbsp {{$setor->Impressora}}
                            </option>
                            @endforeach

                        </select>
                    </div>

                   {{-- cadastro de Impressões --}}
                        <div class="form-group">
                                        
                            <br>
                            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Quantidade de Impressões:</label>
                            <br>
                            <input type="number" class="form-control" name="quant_impressoes" id="quant_impressoes" placeholder="Digite a quantidade" style="border-radius: 5px;">
                            
                        </div>
                        

                    {{-- Cadastrar quant. resmas --}}

                    <br><br>
                    <div class="container">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-outline-danger me-md-2" href="{{ route('historico2') }}" role="button"
                                style="margin: 0 15px;">Cancelar</a>
                            <button type="submit" class="btn btn-outline-primary">Salvar</button>

                        </div>
                    </div>
            </div>
            </form>
            </p>
        </div>
    </div>
</div>
@endsection
