<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personamodels extends Model
{
    use HasFactory;


    protected $table = 'personas';
    protected $fillable = [
   
        'nombre',
        'apelido',
        'direccion',
        'telefono',
        
    ];
}
