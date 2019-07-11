<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Models\Canton;

class CantonesSeeder extends Seeder
{

     public function run()
     {
         Canton::create(['codigo' => 101, 'provincia_codigo' => 1, 'nombre' => 'San José']);
         Canton::create(['codigo' => 102, 'provincia_codigo' => 1, 'nombre' => 'Escazú']);
         Canton::create(['codigo' => 103, 'provincia_codigo' => 1, 'nombre' => 'Desamparados']);
         Canton::create(['codigo' => 104, 'provincia_codigo' => 1, 'nombre' => 'Puriscal']);
         Canton::create(['codigo' => 105, 'provincia_codigo' => 1, 'nombre' => 'Tarrazú']);
         Canton::create(['codigo' => 106, 'provincia_codigo' => 1, 'nombre' => 'Aserrí']);
         Canton::create(['codigo' => 107, 'provincia_codigo' => 1, 'nombre' => 'Mora']);
         Canton::create(['codigo' => 108, 'provincia_codigo' => 1, 'nombre' => 'Goicoechea']);
         Canton::create(['codigo' => 109, 'provincia_codigo' => 1, 'nombre' => 'Santa Ana']);
         Canton::create(['codigo' => 110, 'provincia_codigo' => 1, 'nombre' => 'Alajuelita']);
         Canton::create(['codigo' => 111, 'provincia_codigo' => 1, 'nombre' => 'Vázquez de Coronado']);
         Canton::create(['codigo' => 112, 'provincia_codigo' => 1, 'nombre' => 'Acosta']);
         Canton::create(['codigo' => 113, 'provincia_codigo' => 1, 'nombre' => 'Tibás']);
         Canton::create(['codigo' => 114, 'provincia_codigo' => 1, 'nombre' => 'Moravia']);
         Canton::create(['codigo' => 115, 'provincia_codigo' => 1, 'nombre' => 'Montes de Oca']);
         Canton::create(['codigo' => 116, 'provincia_codigo' => 1, 'nombre' => 'Turrubares']);
         Canton::create(['codigo' => 117, 'provincia_codigo' => 1, 'nombre' => 'Dota']);
         Canton::create(['codigo' => 118, 'provincia_codigo' => 1, 'nombre' => 'Curridabat']);
         Canton::create(['codigo' => 119, 'provincia_codigo' => 1, 'nombre' => 'Pérez Zeledón']);
         Canton::create(['codigo' => 120, 'provincia_codigo' => 1, 'nombre' => 'León Cortés']);

         Canton::create(['codigo' => 201, 'provincia_codigo' => 2, 'nombre' => 'Alajuela']);
         Canton::create(['codigo' => 202, 'provincia_codigo' => 2, 'nombre' => 'San Ramón']);
         Canton::create(['codigo' => 203, 'provincia_codigo' => 2, 'nombre' => 'Grecia']);
         Canton::create(['codigo' => 204, 'provincia_codigo' => 2, 'nombre' => 'San Mateo']);
         Canton::create(['codigo' => 205, 'provincia_codigo' => 2, 'nombre' => 'Atenas']);
         Canton::create(['codigo' => 206, 'provincia_codigo' => 2, 'nombre' => 'Naranjo']);
         Canton::create(['codigo' => 207, 'provincia_codigo' => 2, 'nombre' => 'Palmares']);
         Canton::create(['codigo' => 208, 'provincia_codigo' => 2, 'nombre' => 'Poás']);
         Canton::create(['codigo' => 209, 'provincia_codigo' => 2, 'nombre' => 'Orotina']);
         Canton::create(['codigo' => 210, 'provincia_codigo' => 2, 'nombre' => 'San Carlos']);
         Canton::create(['codigo' => 211, 'provincia_codigo' => 2, 'nombre' => 'Zarcero']);
         Canton::create(['codigo' => 212, 'provincia_codigo' => 2, 'nombre' => 'Valverde Vega']);
         Canton::create(['codigo' => 213, 'provincia_codigo' => 2, 'nombre' => 'Upala']);
         Canton::create(['codigo' => 214, 'provincia_codigo' => 2, 'nombre' => 'Los Chiles']);
         Canton::create(['codigo' => 215, 'provincia_codigo' => 2, 'nombre' => 'Guatuso']);

         Canton::create(['codigo' => 301, 'provincia_codigo' => 3, 'nombre' => 'Cartago']);
         Canton::create(['codigo' => 302, 'provincia_codigo' => 3, 'nombre' => 'Paraíso']);
         Canton::create(['codigo' => 303, 'provincia_codigo' => 3, 'nombre' => 'La Unión']);
         Canton::create(['codigo' => 304, 'provincia_codigo' => 3, 'nombre' => 'Jiménez']);
         Canton::create(['codigo' => 305, 'provincia_codigo' => 3, 'nombre' => 'Turrialba']);
         Canton::create(['codigo' => 306, 'provincia_codigo' => 3, 'nombre' => 'Alvarado']);
         Canton::create(['codigo' => 307, 'provincia_codigo' => 3, 'nombre' => 'Oreamuno']);
         Canton::create(['codigo' => 308, 'provincia_codigo' => 3, 'nombre' => 'El Guarco']);

         Canton::create(['codigo' => 401, 'provincia_codigo' => 4, 'nombre' => 'Heredia']);
         Canton::create(['codigo' => 402, 'provincia_codigo' => 4, 'nombre' => 'Barva']);
         Canton::create(['codigo' => 403, 'provincia_codigo' => 4, 'nombre' => 'Santo Domingo']);
         Canton::create(['codigo' => 404, 'provincia_codigo' => 4, 'nombre' => 'Santa Bárbara']);
         Canton::create(['codigo' => 405, 'provincia_codigo' => 4, 'nombre' => 'San Rafael']);
         Canton::create(['codigo' => 406, 'provincia_codigo' => 4, 'nombre' => 'San Isidro']);
         Canton::create(['codigo' => 407, 'provincia_codigo' => 4, 'nombre' => 'Belén']);
         Canton::create(['codigo' => 408, 'provincia_codigo' => 4, 'nombre' => 'Flores']);
         Canton::create(['codigo' => 409, 'provincia_codigo' => 4, 'nombre' => 'San Pablo']);
         Canton::create(['codigo' => 410, 'provincia_codigo' => 4, 'nombre' => 'Sarapiquí']);

         Canton::create(['codigo' => 501, 'provincia_codigo' => 5, 'nombre' => 'Liberia']);
         Canton::create(['codigo' => 502, 'provincia_codigo' => 5, 'nombre' => 'Nicoya']);
         Canton::create(['codigo' => 503, 'provincia_codigo' => 5, 'nombre' => 'Santa Cruz']);
         Canton::create(['codigo' => 504, 'provincia_codigo' => 5, 'nombre' => 'Bagaces']);
         Canton::create(['codigo' => 505, 'provincia_codigo' => 5, 'nombre' => 'Carrillo']);
         Canton::create(['codigo' => 506, 'provincia_codigo' => 5, 'nombre' => 'Cañas']);
         Canton::create(['codigo' => 507, 'provincia_codigo' => 5, 'nombre' => 'Abangares']);
         Canton::create(['codigo' => 508, 'provincia_codigo' => 5, 'nombre' => 'Tilarán']);
         Canton::create(['codigo' => 509, 'provincia_codigo' => 5, 'nombre' => 'Nandayure']);
         Canton::create(['codigo' => 510, 'provincia_codigo' => 5, 'nombre' => 'La Cruz']);
         Canton::create(['codigo' => 511, 'provincia_codigo' => 5, 'nombre' => 'Hojancha']);

         Canton::create(['codigo' => 601, 'provincia_codigo' => 6, 'nombre' => 'Puntarenas']);
         Canton::create(['codigo' => 602, 'provincia_codigo' => 6, 'nombre' => 'Esparza']);
         Canton::create(['codigo' => 603, 'provincia_codigo' => 6, 'nombre' => 'Buenos Aires']);
         Canton::create(['codigo' => 604, 'provincia_codigo' => 6, 'nombre' => 'Montes de Oro']);
         Canton::create(['codigo' => 605, 'provincia_codigo' => 6, 'nombre' => 'Osa']);
         Canton::create(['codigo' => 606, 'provincia_codigo' => 6, 'nombre' => 'Quepos']);
         Canton::create(['codigo' => 607, 'provincia_codigo' => 6, 'nombre' => 'Golfito']);
         Canton::create(['codigo' => 608, 'provincia_codigo' => 6, 'nombre' => 'Coto Brus']);
         Canton::create(['codigo' => 609, 'provincia_codigo' => 6, 'nombre' => 'Parrita']);
         Canton::create(['codigo' => 610, 'provincia_codigo' => 6, 'nombre' => 'Corredores']);
         Canton::create(['codigo' => 611, 'provincia_codigo' => 6, 'nombre' => 'Garabito']);

         Canton::create(['codigo' => 701, 'provincia_codigo' => 7, 'nombre' => 'Limón']);
         Canton::create(['codigo' => 702, 'provincia_codigo' => 7, 'nombre' => 'Pococí']);
         Canton::create(['codigo' => 703, 'provincia_codigo' => 7, 'nombre' => 'Siquirres']);
         Canton::create(['codigo' => 704, 'provincia_codigo' => 7, 'nombre' => 'Talamanca']);
         Canton::create(['codigo' => 705, 'provincia_codigo' => 7, 'nombre' => 'Matina']);
         Canton::create(['codigo' => 706, 'provincia_codigo' => 7, 'nombre' => 'Guácimo']);
     }
}
