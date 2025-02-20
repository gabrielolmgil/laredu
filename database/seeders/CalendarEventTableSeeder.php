<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos registros de eventos simulados en el calendario
        DB::table('calendar_events')->insert([
            [
                'title' => 'Clase de Matemáticas',
                'description' => 'Clase de matemáticas para el curso de álgebra.',
                'start' => now()->addDays(2)->setTime(9, 0), // 2 días a partir de hoy, a las 9:00 AM
                'end' => now()->addDays(2)->setTime(11, 0), // 2 días a partir de hoy, a las 11:00 AM
                'user_id' => 1, // Asume que el usuario con ID 1 es el profesor
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clase de Historia',
                'description' => 'Clase de historia para el curso de historia moderna.',
                'start' => now()->addDays(3)->setTime(10, 0), // 3 días a partir de hoy, a las 10:00 AM
                'end' => now()->addDays(3)->setTime(12, 0), // 3 días a partir de hoy, a las 12:00 PM
                'user_id' => 2, // Asume que el usuario con ID 2 es el profesor
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clase de Ciencias',
                'description' => 'Clase de ciencias para el curso de biología.',
                'start' => now()->addDays(4)->setTime(8, 30), // 4 días a partir de hoy, a las 8:30 AM
                'end' => now()->addDays(4)->setTime(10, 30), // 4 días a partir de hoy, a las 10:30 AM
                'user_id' => 3, // Asume que el usuario con ID 3 es el profesor
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clase de Lengua y Literatura',
                'description' => 'Clase de lengua y literatura para el curso de literatura universal.',
                'start' => now()->addDays(5)->setTime(14, 0), // 5 días a partir de hoy, a las 2:00 PM
                'end' => now()->addDays(5)->setTime(16, 0), // 5 días a partir de hoy, a las 4:00 PM
                'user_id' => 4, // Asume que el usuario con ID 4 es el profesor
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
