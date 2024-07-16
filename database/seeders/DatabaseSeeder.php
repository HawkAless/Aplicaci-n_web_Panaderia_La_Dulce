<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*Primera Versión*/

        /*User::factory()->count(50)->create();*/

        /*Segunda Versión: Crea registros de Clientes asociados a un Usuario*/
        //User::factory()->count(50)->has(Cliente::factory())->create();

        //  User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //      'type' => 'Recurrente'
        // ]);

        User::factory()->count(50)->has(Cliente::factory())->create();
        $this->call(PedidoSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(DetallesPedidoSeeder::class);
     
    }
}
