<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos registros de calificaciones simulados
        DB::table('grades')->insert([
            [
                'user_id' => 1, // Asume que hay un estudiante con ID 1
                'assignment_id' => 1, // Asume que hay una tarea con ID 1
                'grade' => 8.75, // Calificación asignada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Asume que hay un estudiante con ID 2
                'assignment_id' => 1, // Asume que hay una tarea con ID 1
                'grade' => 7.50, // Calificación asignada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Asume que hay un estudiante con ID 3
                'assignment_id' => 2, // Asume que hay una tarea con ID 2
                'grade' => 9.00, // Calificación asignada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // Asume que hay un estudiante con ID 4
                'assignment_id' => 3, // Asume que hay una tarea con ID 3
                'grade' => 10.00, // Calificación asignada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // Asume que hay un estudiante con ID 5
                'assignment_id' => 2, // Asume que hay una tarea con ID 2
                'grade' => 6.50, // Calificación asignada
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
