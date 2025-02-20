<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActivityLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos registros de actividad simulados
        DB::table('activity_logs')->insert([
            [
                'user_id' => 1, // Asume que hay un usuario con ID 1
                'table_name' => 'courses',
                'changes' => 'Se creó un nuevo curso llamado "Matemáticas"',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Asume que hay un usuario con ID 2
                'table_name' => 'users',
                'changes' => 'Se actualizó el perfil del usuario con ID 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Asume que hay un usuario con ID 3
                'table_name' => 'assignments',
                'changes' => 'Se asignó la tarea "Tarea 1" al curso "Matemáticas"',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // Asume que hay un usuario con ID 4
                'table_name' => 'calendar_events',
                'changes' => 'Se creó un evento de clase para el curso "Matemáticas" el 25 de febrero',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Asume que hay un usuario con ID 1
                'table_name' => 'messages',
                'changes' => 'Se envió un mensaje al usuario con ID 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
