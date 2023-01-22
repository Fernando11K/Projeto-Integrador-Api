<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'idProduto';
    use HasFactory;

     protected $fillable = [
        'nome',
        'categoria',
        'quantidade',
        'foto',
        'ativo'
    ];
    

}
