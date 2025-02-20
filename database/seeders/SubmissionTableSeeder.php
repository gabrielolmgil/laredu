<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Submission;
use App\Models\Assignment;
use App\Models\User;
use Faker\Factory as Faker;

class SubmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todas las tareas y usuarios (estudiantes)
        $assignments = Assignment::all();
        $students = User::whereHas('roles', function($query) {
            $query->where('name', 'student'); // Filtrar por usuarios con el rol de "student"
        })->get();

        // Verificar si hay suficientes tareas y estudiantes
        if ($assignments->isEmpty() || $students->isEmpty()) {
            return;
        }

        // Crear entregas de tareas para estudiantes
        $faker = Faker::create();

        foreach ($assignments as $assignment) {
            foreach ($students as $student) {
                // Solo creamos una entrega de tarea para cada estudiante en cada tarea
                Submission::create([
                    'user_id' => $student->id, // Estudiante que entrega la tarea
                    'assignment_id' => $assignment->id, // Tarea asignada
                    'submitted_at' => $faker->dateTimeBetween('-1 month', 'now'), // Fecha aleatoria de entrega
                    'grade' => $faker->randomFloat(2, 0, 10), // Calificación aleatoria entre 0 y 10
                ]);
            }
        }
    }
}
