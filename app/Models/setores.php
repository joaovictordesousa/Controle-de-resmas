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
<<<<<<< HEAD
    public function impressoes(){

        return $this->hasMany(Impressoes::class,'');
=======
    public function impressora(){

        return $this->belongsToMany(impressora::class, 'setores_impressora');
>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b
    }
}
