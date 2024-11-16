<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitaciones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tipo_habitaciones';
    protected $fillable = ['nombre', 'descripcion', 'precio'];
}
