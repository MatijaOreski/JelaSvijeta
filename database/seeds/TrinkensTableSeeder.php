<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Trinken;

class TrinkensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trinkens = [
            'Bier', 'Weizenbier', 'Helles', 'Starkbier',
        'Milchshake', 'Tee', 'Süßer Tee', 'Kaffee', 'Heißer Tee',
        'Champagner', 'Wein', 'Limonade', 'Coca-Cola', 'Cola-Light',
        'Wasser', 'Sprite', 'Orangensaft', 'Eiskaffee'
        ];

        foreach ($trinkens as $key => $trinken) 
        {
            $array2[] = ['title' => $trinken];
        }
        
        DB::table('trinkens')->insert($array2);
    }
}
