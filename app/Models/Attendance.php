<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'user_id',
        'calendar_event_id',
        'status',
    ];

    /**
     * Relación con el estudiante (una asistencia pertenece a un estudiante).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con el evento de calendario (una asistencia está asociada a un evento).
     */
    public function calendarEvent()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_id');
    }
}
