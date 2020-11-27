<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Farina;

class FarinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $farinas = [
            'Pizza margherita', 'Hamburger', 'Cheeseburger', 'Lasagne', 'Polenta',
            'Calzone farcito', 'Insalata di pollo', 'Pizza capricciosa', 'Sgombro al forno',
            'Panino vegano', 'Panino vegetariano al formaggio', 'Formaggio grigliato', 'Torta paradiso',
            'Tiramisù', 'Hot Dog', 'Caprese', 'Spaghetti al ragù', 'Penne all\'arrabbiata'
        ];

        foreach ($farinas as $key => $farina) 
        {
            $array2[] = ['title' => $farina];
        }
        
        DB::table('farinas')->insert($array2);
    }
}
