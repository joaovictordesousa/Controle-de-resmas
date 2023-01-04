<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SolicitacaoController;
use App\Models\setores;

class Solicitacao extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes';

    protected $fillable = ['quant_resmas', 'id_setor', 'nome', 'matricula'];

    public function setores(){

    return $this->belongsTo(setores::class, 'id_setor' , 'id');
    }
}

/*protected $fillable = ['id_setor', 'quant_resmas'];*/