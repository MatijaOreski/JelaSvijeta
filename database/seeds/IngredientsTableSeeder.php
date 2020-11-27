<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Ingredients = [
            'Onion',
            'Garlic',
            'Tomato',
            'Potato',
            'Carrot',
            'Bell Pepper',
            'Bell Basil',
            'Parsley',
            'Broccoli',
            'Corn',
            'Spinach',
            'Ginger',
            'Chili',
            'Celery',
            'Rosemary',
            'Cucumber',
            'Pickle',
            'Avocado',
            'Pumpkin',
            'Mint',
            'Eggplant',
            'Yam',
        ];

        foreach ($Ingredients as $key => $value) 
        {
            $array2[] = ['title' => $value];
        }
        
        DB::table('Ingredients')->insert($array2);
    }
}
