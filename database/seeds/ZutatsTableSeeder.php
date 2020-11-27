<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Zutat;

class ZutatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zutats = [
            'Zwiebel',
        'Knoblauch',
        'Tomate',
        'Kartoffel',
        'Karotte',
        'Paprike',
        'Basilikum',
        'Petersilie',
        'Brokkoli',
        'Mais',
        'Spinat',
        'Ingwer',
        'Chilli',
        'Sellerie',
        'Rosmarie',
        'Gurke',
        'Essiggurke',
        'Avocado',
        'Kürbis',
        'Minze',
        'Aubergine',
        'Süßkartoffel',
        ];

        foreach ($zutats as $key => $zutat) 
        {
            $array2[] = ['title' => $zutat];
        }
        
        DB::table('zutats')->insert($array2);
    }
}
