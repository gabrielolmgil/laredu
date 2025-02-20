<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Log;
use App\Models\User;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener usuarios para asignar a los logs
        $users = User::all();

        // Crear logs de ejemplo
        foreach ($users as $user) {
            Log::create([
                'user_id' => $user->id, // Asignar el ID de un usuario
                'action' => 'User logged in', // Acción realizada
                'details' => 'User successfully logged in at ' . now()->toDateTimeString(), // Detalles de la acción
            ]);

            Log::create([
                'user_id' => $user->id,
                'action' => 'Profile updated', // Acción
                'details' => 'User updated profile at ' . now()->toDateTimeString(),
            ]);

            Log::create([
                'user_id' => $user->id,
                'action' => 'Created new post', // Acción
                'details' => 'User created a new post titled "My First Post" at ' . now()->toDateTimeString(),
            ]);
        }
    }
}
