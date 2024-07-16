<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $pedido = [
        //     "fecha" => "2021-10-10 10:10:10",
        //     "cliente_id" => 1,
        // ];

        // DB::table('pedidos')->insert($pedido);

        Pedido::factory()->count(50)->create();
    }
}
