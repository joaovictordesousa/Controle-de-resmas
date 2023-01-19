<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impressoes extends Model
{
    use HasFactory;
    protected $table = 'impressoes';

    protected $fillable = ['quant_impressoes'];

    public function setores_impressora(){

    return $this->belongsTo(Setores_impressora::class, 'id_setores_impressoras' , 'id');
    }



}
