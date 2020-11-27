<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Bevanda;

class BevandasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $bevandas = [
            'Birra', 'Birra Radler', 'Vino bianco', 'Cioccolata calda',
            'Milk Shake', 'Camomilla', 'Tè freddo', 'Caffè', 'Tè caldo',
            'Champagne', 'Vino rosso', 'Limonata', 'Cola', 'Coca Zero',
            'Acqua naturale', 'Gazzosa', 'Succo d\'arancia', 'Acqua frizzante'
        ];

        foreach ($bevandas as $key => $bevanda) 
        {
            $array2[] = ['title' => $bevanda];
        }
        
        DB::table('bevandas')->insert($array2);
    }
}
