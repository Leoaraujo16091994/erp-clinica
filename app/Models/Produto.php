<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    protected  $fillable =[
        'codigo',
        'item',
        'descricao',
        'quantidade',
        'estoque_minimo',
        'valor_unitario',
        'data_compra',
        'observacao',
        'grupo'       
    ];
  
}
