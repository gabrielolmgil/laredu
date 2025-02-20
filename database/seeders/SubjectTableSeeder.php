<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Course;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunas asignaturas para cursos existentes
        $courses = Course::all();
        
        foreach ($courses as $course) {
            Subject::create([
                'name' => $course->name . ' Asignatura',
                'course_id' => $course->id,
            ]);
        }
    }
}