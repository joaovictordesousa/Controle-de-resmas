@extends('layouts.main')
@section('title', 'Novacap - Cadastro')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
    <div class="mh-100" style="width: 1000px; height: 1000px;">
        <div class="card border-dark" style="max-width: 700rem;">
            <div class="card-header text-white" style="background-color: #044f84;">Cadastro de Impressão</div>
            <div class="card-body text-dark">
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

                <form action="{{ route('cadastro-de-impressao') }}" method="POST">
                    @csrf
                    <div class="form-group">

                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Impressora:</label>
                        <select class="form-control" name="impressora" id="impressora">
                            <option>Selecione a Impressora</option>

                            @foreach ($impress as $impressora)
                            <option value="{{ $impressora->id }}"> {{ $impressora->impressora }}
                            </option>
                            @endforeach
                            <option value="1">1</option>
                        </select>
                    </div>

                   {{-- cadastro de Impressões --}}

                            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Quantidade de Impressões:</label>
                            <input type="text" class="form-control" name="quant_impressoes" id="quant_impressoes"
                                placeholder="Digite a quantidade de impressões...">


                    {{-- Cadastrar quant. resmas --}}

                    <br><br>
                    <div class="container">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-outline-danger me-md-2" href="{{ route('historico') }}" role="button"
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
