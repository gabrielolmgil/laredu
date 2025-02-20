<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'user_id',
        'type',
        'data',
        'is_read',
    ];

    // El campo 'data' se almacenará como un arreglo o JSON, por lo que se debe convertir automáticamente
    protected $casts = [
        'data' => 'array', // Convierte 'data' a un arreglo
    ];

    /**
     * Relación con el usuario (una notificación pertenece a un usuario).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
