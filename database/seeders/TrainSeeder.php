<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Trains= [
            [
                'azienda' => 'trenitalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Torino',
                'orario_di_partenza' => '10:00:00',
                'orario_di_arrivo' => '12:00:00',
                'codice_treno' => '44464757',
                'numero_carrozze' => 8,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
        ];
            
    }
}
