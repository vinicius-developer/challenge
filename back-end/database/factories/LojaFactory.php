<?php

namespace Database\Factories;

use App\Models\Loja;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LojaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->name(),
            "cnpj" => Str::random(18),
        ];
    }
}
