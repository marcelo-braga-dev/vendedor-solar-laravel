<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kits extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'sku',
        'modelo',
        'margem',
        'potencia',
        'preco_cliente',
        'preco_fornecedor',
        'status',
        'status_fornecedor',
        'fornecedor',
        'tensao',
        'estrutura',
        'produtos',
        'complementos',
        'observacoes'
    ];
}
