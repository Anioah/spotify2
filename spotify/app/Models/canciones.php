<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canciones extends Model
{
protected $fillable = ['indice', 'nombre', 'album', 'artista', 'duracion', 'estado', 'rutacancion', 'rutaimagen','agregado'];
}