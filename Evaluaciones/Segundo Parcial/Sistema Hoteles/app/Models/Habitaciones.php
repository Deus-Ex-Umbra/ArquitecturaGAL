<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'habitaciones';
    protected $fillable = ['numero_habitacion', 'precio_por_noche', 'estado', 'descripcion', 'id_tipo_habitacion'];
    public function tipo_habitacion(){
        return $this->belongsTo(TipoHabitaciones::class, 'id_tipo_habitacion');
    }
}
