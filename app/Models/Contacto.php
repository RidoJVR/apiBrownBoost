<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'Nombre',
        'Telefono',
        'Correo',
        'Mensaje'
    ];
}
