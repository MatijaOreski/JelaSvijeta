<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Meal;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Meal::class, 10)->create();

       $meals = [
        'Cheese Pizza', 'Hamburger', 'Cheeseburger', 'Bacon Burger', 'Bacon Cheeseburger',
        'Little Hamburger', 'Little Cheeseburger', 'Little Bacon Burger', 'Little Bacon Cheeseburger',
        'Veggie Sandwich', 'Cheese Veggie Sandwich', 'Grilled Cheese',
        'Cheese Dog', 'Bacon Dog', 'Bacon Cheese Dog', 'Pasta', 'Chicken wing',
        'Chicken breast'
    ];

        foreach ($meals as $key => $value) 
        {
            $array2[] = ['title' => $value];
        }
        
        DB::table('meals')->insert($array2);
    }
}
