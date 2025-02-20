<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;
use App\Models\User;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Verificar si hay al menos un usuario
        if ($users->isEmpty()) {
            return;
        }

        // Crear algunas notificaciones para cada usuario
        foreach ($users as $user) {
            Notification::create([
                'user_id' => $user->id, // Usuario que recibe la notificación
                'type' => 'new_assignment', // Tipo de notificación (puede ser cualquier valor)
                'data' => json_encode([
                    'assignment_title' => 'Math Homework', // Datos adicionales (título de tarea)
                    'due_date' => '2025-03-15 23:59:59', // Fecha de entrega
                ]), // Almacenamos los datos adicionales como JSON
                'is_read' => false, // El estado inicial es "no leído"
            ]);

            Notification::create([
                'user_id' => $user->id,
                'type' => 'event_reminder', // Recordatorio de evento
                'data' => json_encode([
                    'event_title' => 'Math Exam',
                    'event_date' => '2025-03-10 09:00:00',
                ]),
                'is_read' => false,
            ]);

            Notification::create([
                'user_id' => $user->id,
                'type' => 'profile_update', // Notificación de actualización de perfil
                'data' => json_encode([
                    'message' => 'Your profile was updated successfully.',
                ]),
                'is_read' => false,
            ]);
        }
    }
}
