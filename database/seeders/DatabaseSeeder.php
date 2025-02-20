<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\CourseTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Llamamos a nuestros seeders
    $this->call([
    RoleTableSeeder::class,
    UserTableSeeder::class,
    CourseTableSeeder::class,
    // Agrega más seeders si los tienes...
    ]);
    }
}
