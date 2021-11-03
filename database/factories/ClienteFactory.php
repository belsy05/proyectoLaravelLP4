<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreCliente'=> $this->faker->firstname,
            'primerApellido'=> $this->faker->lastname,
            'segundoApellido'=> $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=> $this->faker->phoneNumber,
            'direccion'=> $this->faker->address,
            'pais'=> $this->faker->country, 
            'ciudad'=>$this->faker->city
        ];
    }
}
