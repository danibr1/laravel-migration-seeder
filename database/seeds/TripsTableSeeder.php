<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            // Creazuione istanza (record, row)
            $new_trips = new Trip();

            // Popolazione colonne
            $new_trips->titolo = 'Title '. rand(1,10);
            $new_trips->citta = 'City'. rand(1,10);
            $new_trips->description = 'Descrizione del viaggio';
            $new_trips->prezzo = rand(500,5000);

            // Salvataggio records a db
            $new_trips->save();
        }
    }
}
