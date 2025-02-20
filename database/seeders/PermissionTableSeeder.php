<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear permisos básicos para la aplicación
        Permission::create([
            'name' => 'view_courses', // Ver cursos
        ]);

        Permission::create([
            'name' => 'create_courses', // Crear cursos
        ]);

        Permission::create([
            'name' => 'edit_courses', // Editar cursos
        ]);

        Permission::create([
            'name' => 'delete_courses', // Eliminar cursos
        ]);

        Permission::create([
            'name' => 'view_assignments', // Ver tareas
        ]);

        Permission::create([
            'name' => 'create_assignments', // Crear tareas
        ]);

        Permission::create([
            'name' => 'edit_assignments', // Editar tareas
        ]);

        Permission::create([
            'name' => 'delete_assignments', // Eliminar tareas
        ]);

        Permission::create([
            'name' => 'view_users', // Ver usuarios
        ]);

        Permission::create([
            'name' => 'create_users', // Crear usuarios
        ]);

        Permission::create([
            'name' => 'edit_users', // Editar usuarios
        ]);

        Permission::create([
            'name' => 'delete_users', // Eliminar usuarios
        ]);
    }
}
