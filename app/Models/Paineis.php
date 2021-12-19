<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paineis extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'potencia',
        'produtos_id',
        'complementos'
    ];
    
    public $timestamps = false;
}
