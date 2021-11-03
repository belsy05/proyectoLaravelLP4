<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreEmpleado'=> $this->faker->firstname,
            'primerApellido'=> $this->faker->lastname,
            'segundoApellido'=> $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=> $this->faker->phoneNumber,
            'direccion'=> $this->faker->address,
            'ciudad'=>$this->faker->city
            //
        ];
    }
}
