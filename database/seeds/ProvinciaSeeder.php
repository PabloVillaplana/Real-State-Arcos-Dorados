<?php

use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            'id' => '1',
            'provincia' => 'San Jose',
        ]);

        DB::table('provincias')->insert([
            'id' => '2',
            'provincia' => 'Alajuela',
        ]);

        DB::table('provincias')->insert([
            'id' => '3',
            'provincia' => 'Cartago',
        ]);

        DB::table('provincias')->insert([
            'id' => '4',
            'provincia' => 'Heredia',
        ]);

        DB::table('provincias')->insert([
            'id' => '5',
            'provincia' => 'Guanacaste',
        ]);

        DB::table('provincias')->insert([
            'id' => '6',
            'provincia' => 'Puntarenas',
        ]);

        DB::table('provincias')->insert([
            'id' => '7',
            'provincia' => 'Limon',
        ]);

    }
}
