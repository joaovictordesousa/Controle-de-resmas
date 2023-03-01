<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setores;
use App\Models\User;

class impressoes extends Model
{
    use HasFactory;
    protected $table = 'impressoes';

    protected $fillable = ['quant_impressoes','id_setores', 'id_users'];


    protected $with = ['users'];

    public function setores(){
    return $this->belongsTo(Setores::class, 'id_setores' , 'id');
    // return $this->belongsTo(Setores_impressora::class, 'id_setores_impressoras' , 'id');

    }

    public function users(){

        return $this->belongsTo(User::class,  'id_users', 'id');
        }
}

