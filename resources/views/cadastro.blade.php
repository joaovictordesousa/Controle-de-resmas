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
            <div class="card-header text-white" style="background-color: #044f84;">Cadastro de Solicitação</div>
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


                {{-- Cadastrar setores --}}

                <form action="{{ route('criar-solicitacao') }}" method="POST">
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
                    

                            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1"
                                placeholder="Digite aqui...">

                        
                    <br>
                        
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Matrícula:</label>
                            <input type="text" class="form-control" name="matricula" id="exampleFormControlInput1"
                                placeholder="Digite aqui...">

                    <br>
                    <br>


                    {{-- Cadastrar quant. resmas --}}

                    <div class="container">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="exampleInputEmail1" class="col-form-label col-form-label-lg">Quantidade de
                                    resmas:</label>
                            </div>

                            <div class="col-auto-lg-2">

                                <select class="form-control" name="quant_resmas" id="quant_resmas">
                                    <option>Selecione a quantidade...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>



                                </select>
                            </div>
                        </div>
                    </div>

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