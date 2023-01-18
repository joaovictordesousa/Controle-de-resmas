<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impressora extends Model
{
    use HasFactory;
    protected $table = 'impressoras';
    protected $fillable = ['impressora'];

    public function setores(){

        return $this->belongsToMany(Setores::class, 'setores_impressora','id_setor','id_impressora');
    }



}
