<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    use HasFactory;
    protected $table = 'Detalles';
    protected $fillable = [
        'Cantidad',
        'Descripcion',
        'Precio',
        'idFactura'
    ];
}
