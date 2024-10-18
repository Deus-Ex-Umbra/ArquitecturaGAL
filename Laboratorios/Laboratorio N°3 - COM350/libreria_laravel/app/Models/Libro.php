<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['titulo', 'edicion', 'pais', 'precio', 'editorial_id'];
    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'editorial_id');
    }
}
