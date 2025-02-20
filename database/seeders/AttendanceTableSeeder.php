<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos registros de asistencia simulados
        DB::table('attendance')->insert([
            [
                'user_id' => 1, // Asume que hay un estudiante con ID 1
                'calendar_event_id' => 1, // Asume que hay un evento con ID 1
                'status' => 'present', // Estudiante presente
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Asume que hay un estudiante con ID 2
                'calendar_event_id' => 1, // Asume que hay un evento con ID 1
                'status' => 'absent', // Estudiante ausente
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Asume que hay un estudiante con ID 3
                'calendar_event_id' => 2, // Asume que hay un evento con ID 2
                'status' => 'late', // Estudiante tarde
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // Asume que hay un estudiante con ID 4
                'calendar_event_id' => 3, // Asume que hay un evento con ID 3
                'status' => 'present', // Estudiante presente
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // Asume que hay un estudiante con ID 5
                'calendar_event_id' => 2, // Asume que hay un evento con ID 2
                'status' => 'absent', // Estudiante ausente
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
