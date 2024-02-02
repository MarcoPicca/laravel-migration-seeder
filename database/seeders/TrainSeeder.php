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
                'id' => 1,
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
            [
                'id' => 2,
                'azienda' => 'frecciarossa',
                'stazione_di_partenza' => 'Genova',
                'stazione_di_arrivo' => 'Torino',
                'orario_di_partenza' => '12:00:00',
                'orario_di_arrivo' => '14:00:00',
                'codice_treno' => '46475858',
                'numero_carrozze' => 7,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 3,
                'azienda' => 'italo',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Brandizzo',
                'orario_di_partenza' => '09:00:00',
                'orario_di_arrivo' => '13:00:00',
                'codice_treno' => '7373449',
                'numero_carrozze' => 4,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 4,
                'azienda' => 'trenitalia',
                'stazione_di_partenza' => 'Monza',
                'stazione_di_arrivo' => 'Torino',
                'orario_di_partenza' => '15:00:00',
                'orario_di_arrivo' => '19:00:00',
                'codice_treno' => '43535',
                'numero_carrozze' => 10,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 5,
                'azienda' => 'trenitalia',
                'stazione_di_partenza' => 'Mantova',
                'stazione_di_arrivo' => 'Savona',
                'orario_di_partenza' => '07:00:00',
                'orario_di_arrivo' => '14:00:00',
                'codice_treno' => '363647',
                'numero_carrozze' => 12,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 6,
                'azienda' => 'italo',
                'stazione_di_partenza' => 'Utòpia',
                'stazione_di_arrivo' => 'Topolinia',
                'orario_di_partenza' => '08:00:00',
                'orario_di_arrivo' => '11:00:00',
                'codice_treno' => '328238474',
                'numero_carrozze' => 24,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 7,
                'azienda' => 'italo',
                'stazione_di_partenza' => 'Sangiovese',
                'stazione_di_arrivo' => 'Mittorello',
                'orario_di_partenza' => '16:00:00',
                'orario_di_arrivo' => '18:00:00',
                'codice_treno' => '2327377373',
                'numero_carrozze' => 56,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 8,
                'azienda' => 'frecciarossa',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Gallarate',
                'orario_di_partenza' => '06:13:00',
                'orario_di_arrivo' => '12:00:00',
                'codice_treno' => '577760',
                'numero_carrozze' => 9,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 9,
                'azienda' => 'TJV',
                'stazione_di_partenza' => 'Lione',
                'stazione_di_arrivo' => 'Torino',
                'orario_di_partenza' => '11:37:00',
                'orario_di_arrivo' => '16:00:00',
                'codice_treno' => '7328784',
                'numero_carrozze' => 114,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
            [
                'id' => 10,
                'azienda' => 'italo',
                'stazione_di_partenza' => 'Sassari',
                'stazione_di_arrivo' => 'Udine',
                'orario_di_partenza' => '07:56:00',
                'orario_di_arrivo' => '18:44:00',
                'codice_treno' => '8963637',
                'numero_carrozze' => 17,
                'in_orario' => 'true',
                'cancellato' => 'false',
            ],
        ];
            
    }
}
