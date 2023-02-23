<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SolicitacaoController;
use App\Models\setores;
use App\Models\users;

class Solicitacao extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes';

    protected $fillable = ['quant_resmas', 'id_setor', 'nome', 'matricula', 'id_users'];

    public function setores(){

    return $this->belongsTo(setores::class, 'id_setor' , 'id','name');
    }

    public function id_users(){

        return $this->belongsTo(users::class, 'id_users','id','name');
        }
}
