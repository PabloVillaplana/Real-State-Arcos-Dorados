<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Models\Distrito;

class DistritosSeeder extends Seeder
{
    public function run()
    {
        Distrito::create(['codigo'  => 10101, 'canton_codigo' => 101, 'nombre' => 'Carmen']);
        Distrito::create(['codigo'  => 10102, 'canton_codigo' => 101, 'nombre' => 'Merced']);
        Distrito::create(['codigo'  => 10103, 'canton_codigo' => 101, 'nombre' => 'Hospital']);
        Distrito::create(['codigo'  => 10104, 'canton_codigo' => 101, 'nombre' => 'Catedral']);
        Distrito::create(['codigo'  => 10105, 'canton_codigo' => 101, 'nombre' => 'Zapote']);
        Distrito::create(['codigo'  => 10106, 'canton_codigo' => 101, 'nombre' => 'San Francisco de Dos Ríos']);
        Distrito::create(['codigo'  => 10107, 'canton_codigo' => 101, 'nombre' => 'Uruca']);
        Distrito::create(['codigo'  => 10108, 'canton_codigo' => 101, 'nombre' => 'Mata Redonda']);
        Distrito::create(['codigo'  => 10109, 'canton_codigo' => 101, 'nombre' => 'Pavas']);
        Distrito::create(['codigo'  => 10110, 'canton_codigo' => 101, 'nombre' => 'Hatillo']);
        Distrito::create(['codigo'  => 10111, 'canton_codigo' => 101, 'nombre' => 'San Sebastián']);
        Distrito::create(['codigo'  => 10201, 'canton_codigo' => 102, 'nombre' => 'Escazú']);
        Distrito::create(['codigo'  => 10202, 'canton_codigo' => 102, 'nombre' => 'San Antonio']);
        Distrito::create(['codigo'  => 10203, 'canton_codigo' => 102, 'nombre' => 'San Rafael']);
        Distrito::create(['codigo'  => 10301, 'canton_codigo' => 103, 'nombre' => 'Desamparados']);
        Distrito::create(['codigo'  => 10302, 'canton_codigo' => 103, 'nombre' => 'San Miguel']);
        Distrito::create(['codigo'  => 10303, 'canton_codigo' => 103, 'nombre' => 'San Juan de Dios']);
        Distrito::create(['codigo'  => 10304, 'canton_codigo' => 103, 'nombre' => 'San Rafael Arriba']);
        Distrito::create(['codigo'  => 10305, 'canton_codigo' => 103, 'nombre' => 'San Antonio']);
        Distrito::create(['codigo'  => 10306, 'canton_codigo' => 103, 'nombre' => 'Frailes']);
        Distrito::create(['codigo'  => 10307, 'canton_codigo' => 103, 'nombre' => 'Patarrá']);
        Distrito::create(['codigo'  => 10308, 'canton_codigo' => 103, 'nombre' => 'San Cristóbal']);
        Distrito::create(['codigo'  => 10309, 'canton_codigo' => 103, 'nombre' => 'Rosario']);
        Distrito::create(['codigo'  => 10310, 'canton_codigo' => 103, 'nombre' => 'Damas']);
        Distrito::create(['codigo'  => 10311, 'canton_codigo' => 103, 'nombre' => 'San Rafael Abajo']);
        Distrito::create(['codigo'  => 10312, 'canton_codigo' => 103, 'nombre' => 'Gravilias']);
        Distrito::create(['codigo'  => 10313, 'canton_codigo' => 103, 'nombre' => 'Los Guido']);
        Distrito::create(['codigo'  => 10401, 'canton_codigo' => 104, 'nombre' => 'Santiago']);
        Distrito::create(['codigo'  => 10402, 'canton_codigo' => 104, 'nombre' => 'Mercedes Sur']);
        Distrito::create(['codigo'  => 10403, 'canton_codigo' => 104, 'nombre' => 'Barbacoas']);
        Distrito::create(['codigo'  => 10404, 'canton_codigo' => 104, 'nombre' => 'Grifo Alto']);
        Distrito::create(['codigo'  => 10405, 'canton_codigo' => 104, 'nombre' => 'San Rafael']);
        Distrito::create(['codigo'  => 10406, 'canton_codigo' => 104, 'nombre' => 'Candelarita']);
        Distrito::create(['codigo'  => 10407, 'canton_codigo' => 104, 'nombre' => 'Desamparaditos']);
        Distrito::create(['codigo'  => 10408, 'canton_codigo' => 104, 'nombre' => 'San Antonio']);
        Distrito::create(['codigo'  => 10409, 'canton_codigo' => 104, 'nombre' => 'Chires']);
        Distrito::create(['codigo'  => 10501, 'canton_codigo' => 105, 'nombre' => 'San Marcos']);
        Distrito::create(['codigo'  => 10502, 'canton_codigo' => 105, 'nombre' => 'San Lorenzo']);
        Distrito::create(['codigo'  => 10503, 'canton_codigo' => 105, 'nombre' => 'San Carlos']);
        Distrito::create(['codigo'  => 10601, 'canton_codigo' => 106, 'nombre' => 'Aserrí']);
        Distrito::create(['codigo'  => 10602, 'canton_codigo' => 106, 'nombre' => 'Tarbaca']);
        Distrito::create(['codigo'  => 10603, 'canton_codigo' => 106, 'nombre' => 'Vuelta de Jorco']);
        Distrito::create(['codigo'  => 10604, 'canton_codigo' => 106, 'nombre' => 'San Gabriel']);
        Distrito::create(['codigo'  => 10605, 'canton_codigo' => 106, 'nombre' => 'Legua']);
        Distrito::create(['codigo'  => 10606, 'canton_codigo' => 106, 'nombre' => 'Monterrey']);
        Distrito::create(['codigo'  => 10607, 'canton_codigo' => 106, 'nombre' => 'Salitrillos']);
        Distrito::create(['codigo'  => 10701, 'canton_codigo' => 107, 'nombre' => 'Colón']);
        Distrito::create(['codigo'  => 10702, 'canton_codigo' => 107, 'nombre' => 'Guayabo']);
        Distrito::create(['codigo'  => 10703, 'canton_codigo' => 107, 'nombre' => 'Tabarcia']);
        Distrito::create(['codigo'  => 10704, 'canton_codigo' => 107, 'nombre' => 'Piedras Negras']);
        Distrito::create(['codigo'  => 10705, 'canton_codigo' => 107, 'nombre' => 'Picagres']);
        Distrito::create(['codigo'  => 10706, 'canton_codigo' => 107, 'nombre' => 'Jaris']);
        Distrito::create(['codigo'  => 10801, 'canton_codigo' => 108, 'nombre' => 'Guadalupe']);
        Distrito::create(['codigo'  => 10802, 'canton_codigo' => 108, 'nombre' => 'San Francisco']);
        Distrito::create(['codigo'  => 10803, 'canton_codigo' => 108, 'nombre' => 'Calle Blancos']);
        Distrito::create(['codigo'  => 10804, 'canton_codigo' => 108, 'nombre' => 'Mata de Plátano']);
        Distrito::create(['codigo'  => 10805, 'canton_codigo' => 108, 'nombre' => 'Ipís']);
        Distrito::create(['codigo'  => 10806, 'canton_codigo' => 108, 'nombre' => 'Rancho Redondo']);
        Distrito::create(['codigo'  => 10807, 'canton_codigo' => 108, 'nombre' => 'Purral']);
        Distrito::create(['codigo'  => 10901, 'canton_codigo' => 109, 'nombre' => 'Santa Ana']);
        Distrito::create(['codigo'  => 10902, 'canton_codigo' => 109, 'nombre' => 'Salitral']);
        Distrito::create(['codigo'  => 10903, 'canton_codigo' => 109, 'nombre' => 'Pozos']);
        Distrito::create(['codigo'  => 10904, 'canton_codigo' => 109, 'nombre' => 'Uruca']);
        Distrito::create(['codigo'  => 10905, 'canton_codigo' => 109, 'nombre' => 'Piedades']);
        Distrito::create(['codigo'  => 10906, 'canton_codigo' => 109, 'nombre' => 'Brasil']);
        Distrito::create(['codigo'  => 11001, 'canton_codigo' => 110, 'nombre' => 'Alajuelita']);
        Distrito::create(['codigo'  => 11002, 'canton_codigo' => 110, 'nombre' => 'San Josecito']);
        Distrito::create(['codigo'  => 11003, 'canton_codigo' => 110, 'nombre' => 'San Antonio']);
        Distrito::create(['codigo'  => 11004, 'canton_codigo' => 110, 'nombre' => 'Concepción']);
        Distrito::create(['codigo'  => 11005, 'canton_codigo' => 110, 'nombre' => 'San Felipe']);
        Distrito::create(['codigo'  => 11101, 'canton_codigo' => 111, 'nombre' => 'San Isidro']);
        Distrito::create(['codigo'  => 11102, 'canton_codigo' => 111, 'nombre' => 'San Rafael']);
        Distrito::create(['codigo'  => 11103, 'canton_codigo' => 111, 'nombre' => 'Dulce Nombre de Jesús']);
        Distrito::create(['codigo'  => 11104, 'canton_codigo' => 111, 'nombre' => 'Patalillo']);
        Distrito::create(['codigo'  => 11105, 'canton_codigo' => 111, 'nombre' => 'Cascajal']);
        Distrito::create(['codigo'  => 11201, 'canton_codigo' => 112, 'nombre' => 'San Ignacio']);
        Distrito::create(['codigo'  => 11202, 'canton_codigo' => 112, 'nombre' => 'Guaitil']);
        Distrito::create(['codigo'  => 11203, 'canton_codigo' => 112, 'nombre' => 'Palmichal']);
        Distrito::create(['codigo'  => 11204, 'canton_codigo' => 112, 'nombre' => 'Cangrejal']);
        Distrito::create(['codigo'  => 11205, 'canton_codigo' => 112, 'nombre' => 'Sabanillas']);
        Distrito::create(['codigo'  => 11301, 'canton_codigo' => 113, 'nombre' => 'San Juan']);
        Distrito::create(['codigo'  => 11302, 'canton_codigo' => 113, 'nombre' => 'Cinco Esquinas']);
        Distrito::create(['codigo'  => 11303, 'canton_codigo' => 113, 'nombre' => 'Anselmo Llorente']);
        Distrito::create(['codigo'  => 11304, 'canton_codigo' => 113, 'nombre' => 'León XIII']);
        Distrito::create(['codigo'  => 11305, 'canton_codigo' => 113, 'nombre' => 'Colima']);
        Distrito::create(['codigo'  => 11401, 'canton_codigo' => 114, 'nombre' => 'San Vicente']);
        Distrito::create(['codigo'  => 11402, 'canton_codigo' => 114, 'nombre' => 'San Jerónimo']);
        Distrito::create(['codigo'  => 11403, 'canton_codigo' => 114, 'nombre' => 'La Trinidad']);
        Distrito::create(['codigo'  => 11501, 'canton_codigo' => 115, 'nombre' => 'San Pedro']);
        Distrito::create(['codigo'  => 11502, 'canton_codigo' => 115, 'nombre' => 'Sabanilla']);
        Distrito::create(['codigo'  => 11503, 'canton_codigo' => 115, 'nombre' => 'Mercedes']);
        Distrito::create(['codigo'  => 11504, 'canton_codigo' => 115, 'nombre' => 'San Rafael']);
        Distrito::create(['codigo'  => 11601, 'canton_codigo' => 116, 'nombre' => 'San Pablo']);
        Distrito::create(['codigo'  => 11602, 'canton_codigo' => 116, 'nombre' => 'San Pedro']);
        Distrito::create(['codigo'  => 11603, 'canton_codigo' => 116, 'nombre' => 'San Juan de Mata']);
        Distrito::create(['codigo'  => 11604, 'canton_codigo' => 116, 'nombre' => 'San Luis']);
        Distrito::create(['codigo'  => 11605, 'canton_codigo' => 116, 'nombre' => 'Carara']);
        Distrito::create(['codigo'  => 11701, 'canton_codigo' => 117, 'nombre' => 'Santa María']);
        Distrito::create(['codigo'  => 11702, 'canton_codigo' => 117, 'nombre' => 'Jardín']);
        Distrito::create(['codigo'  => 11703, 'canton_codigo' => 117, 'nombre' => 'Copey']);
        Distrito::create(['codigo'  => 11801, 'canton_codigo' => 118, 'nombre' => 'Curridabat']);
        Distrito::create(['codigo'  => 11802, 'canton_codigo' => 118, 'nombre' => 'Granadilla']);
        Distrito::create(['codigo'  => 11803, 'canton_codigo' => 118, 'nombre' => 'Sánchez']);
        Distrito::create(['codigo'  => 11804, 'canton_codigo' => 118, 'nombre' => 'Tirrases']);
        Distrito::create(['codigo'  => 11901, 'canton_codigo' => 119, 'nombre' => 'San Isidro de El General']);
        Distrito::create(['codigo'  => 11902, 'canton_codigo' => 119, 'nombre' => 'General']);
        Distrito::create(['codigo'  => 11903, 'canton_codigo' => 119, 'nombre' => 'Daniel Flores']);
        Distrito::create(['codigo'  => 11904, 'canton_codigo' => 119, 'nombre' => 'Rivas']);
        Distrito::create(['codigo'  => 11905, 'canton_codigo' => 119, 'nombre' => 'San Pedro']);
        Distrito::create(['codigo'  => 11906, 'canton_codigo' => 119, 'nombre' => 'Platanares']);
        Distrito::create(['codigo'  => 11907, 'canton_codigo' => 119, 'nombre' => 'Pejibaye']);
        Distrito::create(['codigo'  => 11908, 'canton_codigo' => 119, 'nombre' => 'Cajón']);
        Distrito::create(['codigo'  => 11909, 'canton_codigo' => 119, 'nombre' => 'Barú']);
        Distrito::create(['codigo'  => 11910, 'canton_codigo' => 119, 'nombre' => 'Río Nuevo']);
        Distrito::create(['codigo'  => 11911, 'canton_codigo' => 119, 'nombre' => 'Páramo']);
        Distrito::create(['codigo'  => 12001, 'canton_codigo' => 120, 'nombre' => 'San Pablo']);
        Distrito::create(['codigo'  => 12002, 'canton_codigo' => 120, 'nombre' => 'San Andrés']);
        Distrito::create(['codigo'  => 12003, 'canton_codigo' => 120, 'nombre' => 'Llano Bonito']);    }
}
