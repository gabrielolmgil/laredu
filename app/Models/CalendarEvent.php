<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'title',
        'description',
        'start',
        'end',
        'user_id',
    ];

    /**
     * Relación con el usuario (un evento pertenece a un usuario).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
