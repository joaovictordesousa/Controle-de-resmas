<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setores;

class impressoes extends Model
{
    use HasFactory;
    protected $table = 'impressoes';

    protected $fillable = ['quant_impressoes','id_setores'];

<<<<<<< HEAD
    public function setores(){
    return $this->belongsTo(Setores::class, 'id_setores' , 'id');
    // return $this->belongsTo(Setores_impressora::class, 'id_setores_impressoras' , 'id');
    
=======
    public function setores_impressora(){

    return $this->belongsTo(Setores_impressora::class, 'id_setores_impressoras' , 'id');
>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b
    }



}
