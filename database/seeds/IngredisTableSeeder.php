<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Ingredi;

class IngredisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    

            $ingredis = [
                'Cipolla',
                'Aglio',
                'Pomodoro',
                'Patata',
                'Carota',
                'Peperone',
                'Broccoli',
                'Pannocchia',
                'Spinaci',
                'Funghi',
                'Peperoncino',
                'Lattuga',
                'Rosmarino',
                'Cocomero',
                'Zucchina',
                'Avocado',
                'Zucca',
            ];

            foreach ($ingredis as $key => $ingredi) 
            {
                $array2[] = ['title' => $ingredi];
            }
            
            DB::table('ingredis')->insert($array2);
    
    }
}
