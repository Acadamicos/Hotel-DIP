<?php

namespace Database\Seeders;

use App\Models\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Vacante',
            'Ocupado',
            'Ocupado limpio',
            'Ocupado sucio',
            'Vacante limpio inspeccionado',
            'Vacante limpio',
            'Vacante sucio',
            'Cumplido',
            'Uso doméstico',
            'No molestar',

        ];

        $codes = [
            'V',
            'O',
            'OL',
            'OS',
            'VLI',
            'VL',
            'VS',
            'CU',
            'UD',
            'NM',

        ];

        $informations = [
            'Un nombre para una habitación vacía..',
            'Una habitación que está siendo ocupada por alguien legalmente y registrado como huésped del hotel..',
            'Una habitación está siendo ocupada por alguien legalmente y registrado como huésped del hotel en una habitación limpia.',
            'Una habitacion ocupado que esta listo para limpiarse.',
            'Una habitación vacante que ha sido limpiada y revisada por el supervisor de piso y está lista para recibir invitados.',
            'Habitación vacía con condición limpia.',
            'Las habitaciones pueden estar sucias debido a que los huéspedes se han marchado o al programa de limpieza del servicio de limpieza.',
            'Una habitación registrada por un huésped, pero la habitación es gratuita(gratis).',
            'Habitación registrada pero utilizada por la gerencia del hotel.',
            'Las habitaciones que tienen este letrero significan que los huéspedes no quieren que los molesten.',

        ];

        for ($i = 0; $i < count($codes); $i++) {
            RoomStatus::create([
                'name' => $names[$i],
                'code' => $codes[$i],
                'information' => $informations[$i]
            ]);
        }
    }
}
