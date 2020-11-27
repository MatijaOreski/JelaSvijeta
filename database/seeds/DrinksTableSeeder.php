<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Drink;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinks = [
            'Beer', 'Bud Light', 'Budweiser', 'Miller Lite',
            'Milk Shake', 'Tea', 'Sweet Tea', 'Coffee', 'Hot Tea',
            'Champagne', 'Wine', 'Lemonade', 'Coca-Cola', 'Diet Coke',
            'Water', 'Sprite', 'Orange Juice', 'Iced Coffee'
        ];

        foreach ($drinks as $key => $value) 
        {
            $array2[] = ['title' => $value];
        }
        
        DB::table('drinks')->insert($array2);

    }
}
