<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\Models\User::create([
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "password"=>"nofndosiiods3"
        ]);
        \App\Models\Curso::create([
            "name"=>"Laravel",
            "cantidad_participantes"=>1,
            "precio"=>120.00,
            "tipo"=>"privado",
            "fecha_inicial"=>now()->toDateString(),
            "user_id"=>$user->id
        ]);
        \App\Models\Curso::create([
            "name"=>"CSS",
            "cantidad_participantes"=>10,
            "precio"=>10.00,
            "tipo"=>"publico",
            "fecha_inicial"=>now()->toDateString(),
            "user_id"=>$user->id
        ]);
        \App\Models\Curso::create([
            "name"=>"Javascript",
            "cantidad_participantes"=>11,
            "precio"=>20.00,
            "fecha_inicial"=>now()->toDateString(),
            "user_id"=>$user->id
        ]);
    }
}
