<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SolicitacaoController;
use App\Models\setores;
use App\Models\user;

class Solicitacao extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes';

    protected $fillable = ['quant_resmas', 'id_setor', 'nome', 'matricula', 'id_users'];

    protected $with = ['users'];


    public function users(){

        return $this->belongsTo(user::class, 'id_users', 'id');
    }
    public function setores(){

        return $this->belongsTo(setores::class, 'id_setor' , 'id');
    }
}
