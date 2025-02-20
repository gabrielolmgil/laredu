<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos registros de asignaciones simuladas
        DB::table('assignments')->insert([
            [
                'title' => 'Tarea 1',
                'description' => 'Descripción de la tarea 1 para el curso de Matemáticas.',
                'due_date' => now()->addDays(7), // Fecha de entrega 7 días a partir de hoy
                'subject_id' => 1, // Asume que existe una asignatura con ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tarea 2',
                'description' => 'Descripción de la tarea 2 para el curso de Historia.',
                'due_date' => now()->addDays(10), // Fecha de entrega 10 días a partir de hoy
                'subject_id' => 2, // Asume que existe una asignatura con ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tarea 3',
                'description' => 'Descripción de la tarea 3 para el curso de Ciencias.',
                'due_date' => now()->addDays(14), // Fecha de entrega 14 días a partir de hoy
                'subject_id' => 3, // Asume que existe una asignatura con ID 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tarea 4',
                'description' => 'Descripción de la tarea 4 para el curso de Lengua y Literatura.',
                'due_date' => now()->addDays(5), // Fecha de entrega 5 días a partir de hoy
                'subject_id' => 4, // Asume que existe una asignatura con ID 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
