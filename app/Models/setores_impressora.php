<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setores_impressora extends Model
{
    use HasFactory;
    protected $table = 'impressoes';
    protected $fillable = ['impressora', setores];

    public function impressoes(){
        return $this->hasMany(Impressoes::class);
    }
}
