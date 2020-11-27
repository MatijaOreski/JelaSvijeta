<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Pizza', 'Burger', 'Sandwich', 'Gril'
        ];

        foreach ($categories as $key => $value) 
        {
            $array2[] = ['title' => $value];
        }
        
        DB::table('categories')->insert($array2);

    }
}
