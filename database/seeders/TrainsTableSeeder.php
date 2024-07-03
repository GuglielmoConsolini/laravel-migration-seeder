<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frecciarossa = new Train();
        $frecciarossa->azienda = 'Italo';
        $frecciarossa->stazione_di_partenza = 'Venezia Santa Lucia';
        $frecciarossa->stazione_di_arrivo = 'Firenze Santa Maria Novella';
        $frecciarossa->orario_di_partenza = '10:00:00';
        $frecciarossa->orario_di_arrivo = '12:00:00';
        $frecciarossa->codice_treno = 'FR789';
        $frecciarossa->numero_carrozze = 12;
        $frecciarossa->in_orario = true;
        $frecciarossa->cancellato = false;
        $frecciarossa->save();
    }
}