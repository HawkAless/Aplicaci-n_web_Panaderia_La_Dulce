<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $productos = [
        //     [
        //         "nombre_producto" => "Pan de muerto",
        //         "descripcion" => "Pan de muerto tradicional",
        //         "precio" => 50.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de caja",
        //         "descripcion" => "Pan de caja tradicional",
        //         "precio" => 30.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de dulce",
        //         "descripcion" => "Pan de dulce tradicional",
        //         "precio" => 20.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de nata",
        //         "descripcion" => "Pan de nata tradicional",
        //         "precio" => 25.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de chocolate",
        //         "descripcion" => "Pan de chocolate tradicional",
        //         "precio" => 35.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de queso",
        //         "descripcion" => "Pan de queso tradicional",
        //         "precio" => 40.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de elote",
        //         "descripcion" => "Pan de elote tradicional",
        //         "precio" => 45.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de zanahoria",
        //         "descripcion" => "Pan de zanahoria tradicional",
        //         "precio" => 50.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de plátano",
        //         "descripcion" => "Pan de plátano tradicional",
        //         "precio" => 55.00,
        //         "categoria_id" => 1,
        //     ],
        //     [
        //         "nombre_producto" => "Pan de nuez",
        //         "descripcion" => "Pan de nuez tradicional",
        //         "precio" => 60.00,
        //         "categoria_id" => 1,
        //     ]
        // ];

        // DB::table('productos')->insert($productos);

        Producto::factory()->count(30)->create();
    }
}
