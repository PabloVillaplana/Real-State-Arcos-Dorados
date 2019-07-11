<?php

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['codigo' => '1', 'nombre' => 'San José']);
        Provincia::create(['codigo' => '2', 'nombre' => 'Alajuela']);
        Provincia::create(['codigo' => '3', 'nombre' => 'Cartago']);
        Provincia::create(['codigo' => '4', 'nombre' => 'Heredia']);
        Provincia::create(['codigo' => '5', 'nombre' => 'Guancaste']);
        Provincia::create(['codigo' => '6', 'nombre' => 'Puntarenas']);
        Provincia::create(['codigo' => '7', 'nombre' => 'Limón']);
    }
}
