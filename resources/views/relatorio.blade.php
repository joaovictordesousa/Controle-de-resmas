@extends('layouts.main')
@section('title', 'Novacap - Relatório')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    {{-- dd($setores) --}}

    <div class="container">
        <div class="mh-100" style="width: 1000px; height: 1000px;">
            <div class="card border-dark" style="max-width: 700rem;">
                <div class="card-header text-white" style="background-color: #044f84;">Emissão de relatório</div>
                <div class="card-body text-dark">
                    <p class="card-text">

                        <!-- Setor-->
                    <form action="{{ route('gera-pdf') }}" method="GET">
                        @csrf
                        <div class="form-group">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Setor:</label>
                            <select class="form-control" name="id_setor" id="id_setor">
                                <option>Selecione um setor</option>

                                @foreach ($setores as $setor)
                                    <option value="{{ $setor->id }}">{{ $setor->Nome }} - {{ $setor->Sigla }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <br>

                        <!--Data inicial-->
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Data inicial:</label>
                        <div class="container">

                            <div class="container">
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                    inline="true">
                                    <input placeholder="Select date" type="date" id="created_at" name="datainicial"
                                        class="form-control">
                                    <i class="fas fa-calendar input-prefix"></i>
                                </div>

                            </div>
                        </div>
                        <br>

                        <!--Data final-->
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Data final:</label>
                        <div class="container">

                            <div class="container">
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                    inline="true">
                                    <input placeholder="Select date" type="date" id="created_at" name="datafinal"
                                        class="form-control">
                                    <i class="fas fa-calendar input-prefix"></i>
                                </div>

                            </div>

                        </div>
                        <br> 
                        <!--Documentos-->
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Documento:</label>
                        <div class="form-group">

                            <select class="form-control" name="documentos" required>

                                <option>Escolha uma opção de documento</option>
                                <option value="1">PDF</option>
                                <option value="2">XLS</option>
                                <option value="3">CSV</option>


                            </select>
                        </div>
                        <br>
                        </p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-primary me-md-2" type="submit">Gerar relatório</button>

                        </div>
                        <br>

                    @endsection
