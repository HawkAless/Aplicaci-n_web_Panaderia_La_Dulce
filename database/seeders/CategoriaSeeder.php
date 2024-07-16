<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $categorias = [
        //     [
        //         "nombre_categoria" => "Panadería",
        //         "descripcion" => "Productos de panadería",
        //     ],
        //     [
        //         "nombre_categoria" => "Pastelería",
        //         "descripcion" => "Productos de pastelería",
        //     ],
        //     [
        //         "nombre_categoria" => "Repostería",
        //         "descripcion" => "Productos de repostería",
        //     ],
        // ];

        // DB::table('categorias')->insert($categorias);

        //Categoria::factory()->count(30)->create(); // Registros individuales

        Categoria::factory()->count(10)->has(Producto::factory()->count(5))->create();
    }
}
