<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DetallesPedido;

class DetallesPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $detallesPedido = [
        //     [   
        //         "pedido_id" => 1,
        //         "producto_id" => 1,
        //         "cantidad" => 2,
        //     ],
        //     [
        //         "pedido_id" => 2,
        //         "producto_id" => 2,
        //         "cantidad" => 3,
        //     ],
        //     [
        //         "pedido_id" => 3,
        //         "producto_id" => 3,
        //         "cantidad" => 4,
        //     ],
        //     [
        //         "pedido_id" => 4,
        //         "producto_id" => 4,
        //         "cantidad" => 5,
        //     ],
        //     [
        //         "pedido_id" => 5,
        //         "producto_id" => 5,
        //         "cantidad" => 6,
        //     ],
        // ];

        // DB::table('detalles_pedido')->insert($detallesPedido);

        DetallesPedido::factory()->count(50)->create();
    }
}
