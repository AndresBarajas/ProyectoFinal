<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
   // protected $primaryKey = 'idCliente';
    protected $fillable = [
        'Name',
        'Ape1',
        'Ape2'
    ];
    use HasFactory;

}
