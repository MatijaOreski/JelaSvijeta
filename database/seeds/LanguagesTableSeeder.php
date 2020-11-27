<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'EN', 'DE', 'IT'
        ];

        foreach ($languages as $key => $language) 
        {
            $array2[] = ['lang' => $language];
        }
        
        DB::table('languages')->insert($array2);
    }
}
