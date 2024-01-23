<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        $trains = [
            [
                "Azienda" => "Trenitalia",
                "Stazione_di_partenza" => "Milano",
                "Stazione_di_arrivo" => "Napoli",
                "Orario_di_partenza" => "16:59",
                "Orario_di_arrivo" => "21:59",
                "Codice_Treno" => "adad352",
                "Numero_Carrozze" => "10",
                "In_orario" => true,
                "Cancellato" => false
            ],
            [
                "Azienda" => "TrenNord",
                "Stazione_di_partenza" => "Milano",
                "Stazione_di_arrivo" => "Bergamo",
                "Orario_di_partenza" => "13:59",
                "Orario_di_arrivo" => "21:59",
                "Codice_Treno" => "agraafea32",
                "Numero_Carrozze" => "12",
                "In_orario" => true,
                "Cancellato" => false
            ]
        ];

        foreach ($trains as $train) {
            $nuovoViaggio = new Train();
            $nuovoViaggio->Azienda = $train["Azienda"];
            $nuovoViaggio->Stazione_di_partenza = $train["Stazione_di_partenza"];
            $nuovoViaggio->Stazione_di_arrivo = $train["Stazione_di_arrivo"];
            $nuovoViaggio->Orario_di_partenza = $train["Orario_di_partenza"];
            $nuovoViaggio->Orario_di_arrivo = $train["Orario_di_arrivo"];
            $nuovoViaggio->Codice_Treno = $train["Codice_Treno"];
            $nuovoViaggio->Numero_Carrozze = $train["Numero_Carrozze"];
            $nuovoViaggio->In_orario = $train["In_orario"];
            $nuovoViaggio->Cancellato = $train["Cancellato"];
            $nuovoViaggio->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $nuovoViaggio = new Train();
            $nuovoViaggio->Azienda = $faker->word();
            $nuovoViaggio->Stazione_di_partenza = $faker->word();
            $nuovoViaggio->Stazione_di_arrivo = $faker->word();
            $nuovoViaggio->Orario_di_partenza = $faker->time('H:i');
            $nuovoViaggio->Orario_di_arrivo = $faker->time('H:i');
            $nuovoViaggio->Codice_Treno = $faker->ean8();
            $nuovoViaggio->Numero_Carrozze = $faker->randomNumber(2, true);
            $nuovoViaggio->In_orario = $faker->boolean();
            $nuovoViaggio->Cancellato = $faker->boolean();
            $nuovoViaggio->save();
        }
    }
}
