<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Mahlzeit;

class MahlzeitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahlzeits = [
            'Pizza', 'Hamburger', 'Cheeseburger', 'Gegrillter Käse',  'Rostbraten', 'Käsespätzle', 'Elsässer Flammkuchen',
        'Dampfnudeln', 'Rheinischer Sauerbraten', 'Dicke Bohnen mit Speck', 'Miesmuscheln',
        'Schnitzerl', 'Weißwürste', 'Currywurst', 'Kasseler', 'Bulette', 'Hühnerflügel',
        'Hühnerbrust',
        ];

        foreach ($mahlzeits as $key => $mahlzeit) 
        {
            $array2[] = ['title' => $mahlzeit];
        }
        
        DB::table('mahlzeits')->insert($array2);
    }
}
