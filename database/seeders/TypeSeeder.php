<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Habitación estándar',
            'Habitación superior',
            'Habitación de lujo',
            'Habitación Junior Suite',
            'Habitaciones Suite',
            'Suite presidencial',
            'Habitación individual',
            'Habitaciones dobles',
            'Habitación Familiar/Habitación Triple',

        ];

        $information = [
            'Como sugiere el nombre, el tipo de habitación estándar es el tipo más básico de habitación de hotel en un hotel',
            'Básicamente, una habitación superior es un tipo de habitación ligeramente mejor que una habitación estándar.',
            'Por encima del tipo de habitación superior está la habitación deluxe. Esta habitación ciertamente tiene una habitación más grande. Hay una selección de colchones que puede elegir, camas dobles o camas individuales.',
            'La habitación de hotel tipo suite junior se caracteriza por la presencia de una sala de estar. Sin embargo, la sala de estar sigue siendo una habitación con la cama. ',
            'La habitación suite está por encima del tipo de habitación junior suite del hotel. La sala de estar de esta habitación de hotel está separada del dormitorio.',
            'Las suites presidenciales son el mejor y más caro tipo de habitación de hotel. De hecho, no todos los hoteles cuentan con suites presidenciales.',
            'La habitación individual es el tipo más común de habitación de hotel. Este tipo de habitación de hotel consta de una cama individual, sofá y baño. El tamaño de la habitación tampoco es demasiado grande.',
            '¿Quieres una estancia más cómoda y mejores instalaciones? Puede reservar una habitación doble tipo habitación de hotel. Este tipo de habitación de hotel suele tener un tamaño de colchón grande, como un tamaño king. Esta habitación doble es perfecta para matrimonios que quieran ir de luna de miel.',
            '¿Te vas de viaje con familiares o amigos? Puede elegir el tipo de habitación de hotel, habitación familiar. En cuanto al tamaño de la habitación, sin duda es mucho más amplia que otros tipos de habitaciones de hotel. Este tipo de habitación de hotel de habitación familiar generalmente está disponible en un lugar con una cama tamaño king y una cama con un tamaño más pequeño.',

        ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i]
            ]);
        }
    }
}
