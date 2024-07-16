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

        //Verificar que existan registros de categoria, sino crearlos
        $categoriaId = $categoria ? $categoria->id : Categoria::factory()->create()->id;
        
        return [
            "nombre_producto" => $this->faker->sentence(3),
            "descripcion" => $this->faker->text(),
            "precio" => $this->faker->randomFloat(2, 0, 999999.99),
            "foto" => $this->faker->imageUrl(150, 130),
            "categoria_id" => $categoriaId,
        ];
    }
}
