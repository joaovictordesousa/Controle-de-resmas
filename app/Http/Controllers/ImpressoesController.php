<?php

namespace App\Http\Controllers;

use App\Models\Impressoes;
use Illuminate\Http\Request;
use App\Models\Setores;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ImpressoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // declarar as variaveis passando para a view

        $id_setores = Setores::get();
            return view('cadastro_impressao', ['id_setores' => $id_setores]);

    }

    /**
     * Show the form for creating a new resource.
     *@param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = $request->all();
        if($post){
            $impressoes = new Impressoes();
            $impressoes->id_users = $post['id_users'];
            $impressoes->id_setores = $post['id_setores'];
            $impressoes->quant_impressoes = $post['quant_impressoes'];
            $impressoes->save();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_setores' => 'required|integer',
            'quant_impressoes' => 'required|integer',
            'id_users' => 'required',
        ],
        [
            'id_setores.integer' => 'O campo setor é obrigatório',
            'quant_impressoes.integer' => 'O campo quantidade de impressões é obrigatório'
        ]);

        Impressoes::create($request->all());

        return redirect()->route('historico2')->with('msg','Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function show(Impressoes $impressoes,$id)
    {
        // $teste = Impressoes::findOrFail($id);
        // recuperando id do usuario ashuashuas
        // $testeOwner = User::where('id', $teste->id_users)->first()->toArray();

        // return view('historico2', ['id' => $teste, 'id' =>$testeOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Impressoes $impressoes)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impressoes $impressoes)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impressoes $impressoes)
    {

    }
}
