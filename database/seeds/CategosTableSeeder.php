<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Catego;

class CategosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categos = [
            'Pizza', 'Hamburger', 'Panino', 'Griglia'
        ];

        foreach ($categos as $key => $catego) 
        {
            $array2[] = ['title' => $catego];
        }
        
        DB::table('categos')->insert($array2);
    }
}
