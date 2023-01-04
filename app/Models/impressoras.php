<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impressoras extends Model
{
    use HasFactory;

    // joao 

    protected $table = 'impressoras';

    protected $fillable = ['Nome', 'Sigla'];

    // public function solicitacao(){

    //     return $this->hasMany(Solicitacao::class);
    // }
}
