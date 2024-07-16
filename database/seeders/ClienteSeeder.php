<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = [
            "nombre" => "Juan",
            "apellido" => "Perez",
            "telefono" => "12345678",
            "direccion" => "Calle 123",
            "user_id" => 2,
        ];

        DB::table('clientes')->insert($cliente);
    }
}
