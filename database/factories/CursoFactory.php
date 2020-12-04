<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "cantidad_participantes"=>rand(1,20),
            "precio"=>20.20,
            "tipo"=>"privado",
            "fecha_inicial"=>now()->addDay(rand(1,5))->toDateString(),
            "user_id"=>rand(1,11)
        ];
    }
}
