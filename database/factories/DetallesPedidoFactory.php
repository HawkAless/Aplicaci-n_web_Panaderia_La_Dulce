<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DetallesPedido;
use App\Models\Pedido;
use App\Models\Producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetallesPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pedido = Pedido::inRandomOrder()->first();
        $producto = Producto::inRandomOrder()->first();

        /*
        // Si no hay pedidos o productos disponibles, crear uno nuevo
        if (!$pedido) {
            $pedido = Pedido::factory()->create();
        }
        if (!$producto) {
            $producto = Producto::factory()->create();
        }
        */

        // Verificar si $pedido y $producto son null para manejar casos donde no haya datos en las tablas
        $pedido_id = $pedido ? $pedido->id : Pedido::factory()->create()->id;
        $producto_id = $producto ? $producto->id : Producto::factory()->create()->id;

        return [
            'pedido_id' => $pedido_id,
            'producto_id' => $producto_id,
            'cantidad' => $this->faker->numberBetween(1, 50),
        ];
    }
}
