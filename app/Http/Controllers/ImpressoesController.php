<?php

namespace App\Http\Controllers;

use App\Models\Impressoes;
use Illuminate\Http\Request;
use App\Models\Setores_impressora;
use App\Models\Impressora;
use App\Models\Setores;


class ImpressoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastro_impressao');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function impressorateste(){
    //     $impressora = Impressora::find(1);

    // foreach ($impressora->setores as $setores) {
    //     echo $setores->pivot->created_at;
    // }
    // dd( $impressora);
    // }
    public function create(Request $request)
    {

        $post = $request->all();
        if($post){
            $impressoes = new Impressoes();

            $impressoes->impressora = $post['impressora'];
            $impressoes->quant_impressoes = $post['quant_impressoes'];
            $impressoes->save();



        // }
       // dd($request->all());

      // return view ('cadastro-impressao');
        }
    }
    public function cadastro_impressao(Request $request){

        $impressoras = Impressora::orderby('id')->get();

        return view ('cadastro_impressao', compact ('impress'));
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
            'impressora' => 'required|integer',
            'quant_impressoes' => 'required|integer',
        ]);

        Impressoes::create($request->all());

        return redirect()->route('historico')->with('msg','Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function show(Impressoes $impressoes)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Impressoes $impressoes)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impressoes $impressoes)
    {
        //
    }
}
