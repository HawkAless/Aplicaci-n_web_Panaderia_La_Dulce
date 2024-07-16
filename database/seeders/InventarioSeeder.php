<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Inventario;
use App\Models\Producto;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $inventario = [
        //     [
        //         'producto_id' => 1,
        //         'cantidad' => 100,
        //     ],
        //     [
        //         'producto_id' => 2,
        //         'cantidad' => 200,
        //     ],
        //     [
        //         'producto_id' => 3,
        //         'cantidad' => 300,
        //     ],
        //     [
        //         'producto_id' => 4,
        //         'cantidad' => 400,
        //     ],
        //     [
        //         'producto_id' => 5,
        //         'cantidad' => 500,
        //     ],
        //     [
        //         'producto_id' => 6,
        //         'cantidad' => 600,
        //     ],
        //     [
        //         'producto_id' => 7,
        //         'cantidad' => 700,
        //     ],
        //     [
        //         'producto_id' => 8,
        //         'cantidad' => 800,
        //     ],
        //     [
        //         'producto_id' => 9,
        //         'cantidad' => 900,
        //     ],
        //     [
        //         'producto_id' => 10,
        //         'cantidad' => 1000,
        //     ],
        // ];

        // DB::table('inventario')->insert($inventario);

        //Inventario::factory()->count(50)->create();

        Inventario::factory()->count(50)->has(Producto::factory())->create();
    }
}
