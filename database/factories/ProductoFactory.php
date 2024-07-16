<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categoria = Categoria::inRandomOrder()->first();
    
        return [
            "nombre_producto" => $this->faker->sentence(3),
            "descripcion" => $this->faker->text(),
            "precio" => $this->faker->randomFloat(2, 0, 999999.99),
            "categoria_id" => $categoria->id,
        ];
    }
}
