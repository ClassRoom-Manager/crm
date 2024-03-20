<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(3)->create();

        \App\Models\User::factory()->create([
            'id' => '1',
            'name' => 'admin',
            'last_name' => 'suport',
            'phone' => '1234567891',
            'email' => 'classroommanage.soporte@gmail.com',
            'password' => 'Admin2024#',
            'user_type' => 'administrador',
        ]);

        \App\Models\User::factory()->create([
            'id' => '2',
            'name' => 'Juan Pablo',
            'last_name' => 'Juan Pablo',
            'phone' => '00000',
            'email' => 'juan.diago.r@uniautonoma.edu.co',
            'password' => 'Decano2024#',
            'user_type' => 'decano',

        ]);

        \App\Models\User::factory()->create([
            'id' => '3',
            'name' => 'Zulema',
            'last_name' => 'Leon Escobar',
            'phone' => '00000',
            'email' => 'zulema.leon.e@uniautonoma.edu.co',
            'password' => 'Docente2024#',
            'user_type' => 'docente',

        ]);

        \App\Models\User::factory()->create([
            'id' => '4',
            'name' => 'Zulema',
            'last_name' => 'Leon Escobar',
            'phone' => '00000',
            'email' => 'coordinacion.software@uniautonoma.edu.co',
            'password' => 'Coordinador2024#',
            'user_type' => 'coordinador',

        ]);

        \App\Models\User::factory()->create([
            'id' => '5',
            'name' => 'Yeny Lucia',
            'last_name' => 'Erazo Hoyos',
            'phone' => '00000',
            'email' => 'desarrollo.profesoral@uniautonoma.edu.co',
            'password' => 'Secretaria2024#',
            'user_type' => 'secretaria',
        ]);

    }
}