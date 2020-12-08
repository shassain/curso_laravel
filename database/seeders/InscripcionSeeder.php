<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1=\App\Models\Participante::find(1);
        $p2=\App\Models\Participante::find(2);
        $p3=\App\Models\Participante::find(3);
        $p4=\App\Models\Participante::find(4);
        $p5=\App\Models\Participante::find(5);

        $p1->cursos()->attach([1,3,4,5],["fecha_de_inscripcion"=>now()->toDateString()]);
        $p2->cursos()->attach([1,2,7,8],["fecha_de_inscripcion"=>now()->toDateString()]);
        $p3->cursos()->attach([3,1,6,8],["fecha_de_inscripcion"=>now()->toDateString()]);
        $p4->cursos()->attach([1,2,3,4],["fecha_de_inscripcion"=>now()->toDateString()]);
        $p5->cursos()->attach([1,5,6,8],["fecha_de_inscripcion"=>now()->toDateString()]);
    }
}
