<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErrorLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos registros de logs de errores simulados
        DB::table('error_logs')->insert([
            [
                'error_message' => 'Error de conexión a la base de datos.',
                'stack_trace' => 'Stack trace completo de error en la conexión.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'error_message' => 'Error en la carga del archivo.',
                'stack_trace' => 'Stack trace completo de error en la carga del archivo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'error_message' => 'Error al enviar el correo.',
                'stack_trace' => 'Stack trace completo de error al enviar el correo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'error_message' => 'Error inesperado en el servidor.',
                'stack_trace' => 'Stack trace completo del error inesperado en el servidor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'error_message' => 'Error de validación de entrada de usuario.',
                'stack_trace' => 'Stack trace completo de error de validación.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
