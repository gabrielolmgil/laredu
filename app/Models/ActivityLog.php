<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'user_id',
        'table_name',
        'changes',
    ];

    /**
     * Relación con el usuario (un registro de actividad puede estar asociado a un usuario).
     * Este campo es opcional, por lo que puede ser null.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}