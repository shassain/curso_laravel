<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(11)->create();
        
        \App\Models\Curso::factory(8)->create();
        \App\Models\Participante::factory(5)->create();
        $this->call([
            CursoSeeder::class,
            InscripcionSeeder::class
        ]);
    }
}
