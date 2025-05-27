<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billete extends Model
{
    use HasFactory;

    // Si tu tabla se llama 'billetes' (plural del modelo), esto es opcional.
    // protected $table = 'billetes';

    // Si no usas los campos 'created_at' y 'updated_at' en tu tabla o los gestionas manualmente
    // protected $timestamps = false;

    protected $fillable = [
        'nombre',
        'pais',
        'denominacion',
        'anho_emision',
        'imagen',
        'descripcion',
        'material',
    ];
}