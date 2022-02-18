<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inspector;

class InspectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Inspector::class;

    public function definition()
    {
        return [

            'name' =>$this->faker->name(),
            'emailIntertek'=>$this->faker->email(),
            'disciplina'=>$this->faker->word(),
            'qualificacoes'=>$this->faker->word(),
            'rua'=>$this->faker->streetAddress(),
            'bairro'=>$this->faker->word(),
            'cpf'=>$this->faker->randomNumber(5, true),
            'telefone1'=>$this->faker->phoneNumber(),
            'telefone2'=>$this->faker->phoneNumber(),
            'cidade'=>$this->faker->city(),
            'UF'=>$this->faker->stateAbbr(),

        ];
    }
}
