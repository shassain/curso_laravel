<?php

namespace Database\Factories;

use App\Models\Participante;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Participante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"=>$this->faker->name,
            "appaterno"=>$this->faker->lastName,
            "apmaterno"=>$this->faker->lastName,
            "fecha_nacimiento"=>now()->subYear(rand(15,25)),
            "ci"=>"84737393",
            "foto"=>"participante.png"
        ];
    }
}
