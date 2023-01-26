<?php

namespace App\Http\Controllers;

use App\Models\Impressoes;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Setores;
=======
use App\Models\Setores_impressora;
use App\Models\Impressora;
use App\Models\Setores;

>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b

class ImpressoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        // declarar as variaveis passando para a view
        $id_setores = Setores::get();
            return view('cadastro_impressao', ['id_setores' => $id_setores]);
=======
        return view('cadastro_impressao');


>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b
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

<<<<<<< HEAD
            $impressoes->id_setores = $post['id_setores'];
            $impressoes->quant_impressoes = $post['quant_impressoes'];
            $impressoes->save();
=======
            $impressoes->setores_impressora = $post['id_setores_impressora'];
            $impressoes->quant_impressoes = $post['quant_impressoes'];
            $impressoes->save();



>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b
        // }
       // dd($request->all());

      // return view ('cadastro-impressao');
        }
    }
<<<<<<< HEAD
=======
    public function cadastro_impressao(Request $request){

        $impressoras = Impressora::orderby('id')->get();

        return view ('cadastro_impressao', compact ('impress'));
    }
>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'id_setores' => 'required|integer',
            'quant_impressoes' => 'required|integer'
=======


        $request->validate([
            'id_setores_impressora' => 'required|integer',
            'quant_impressoes' => 'required|integer',
>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b
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
