<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Solicitacao;
use App\Models\impressoes;

class setores extends Model
{
    use HasFactory;
    protected $table = 'setores';

    protected $fillable = ['Nome', 'Sigla', 'Impressora'];

    public function solicitacao(){

        return $this->hasMany(Solicitacao::class);
    }
    public function impressoes(){

        return $this->hasMany(Impressoes::class,'');
    }
}
