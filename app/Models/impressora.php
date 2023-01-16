<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impressora extends Model
{
    use HasFactory;
    protected $table = 'impressoras';
    protected $fillable = ['impressora'];

    public function setores_impressora(){

        return $this->hasMany(Setores_impressora::class);
    }
}
