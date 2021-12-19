<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inversores extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'potencia',
        'categoria',
        'produtos_id'
    ];

    public $timestamps = false;
}
