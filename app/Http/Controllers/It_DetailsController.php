<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Farina;
use App\Catego;
use App\Bevanda;
use App\Ingredi;
use\App\ItTable;

class It_DetailsController extends Controller
{
    public function show($id)
    {
        $meal_id = Farina::find($id);

        $mealTitle = DB::table('farinas')
                        ->join('it_tables', 'farinas.id', '=', 'it_tables.farinas_id')
                        ->select('farinas.title', 'title')
                        ->where('farinas.id', $meal_id->id)
                        ->limit(1)
                        ->get();

        $inTitle = DB::table('it_tables')
                        ->join('farinas', 'farinas_id', '=', 'farinas.id')
                        ->join('ingredis', 'ingredis_id', '=', 'ingredis.id')
                        ->select('ingredis.title')
                        ->where('farinas.id', $meal_id->id)
                        ->get();

        $drinkTitle = DB::table('it_tables')
                        ->join('farinas', 'farinas_id', '=', 'farinas.id')
                        ->join('bevandas', 'bevandas_id', '=', 'bevandas.id')
                        ->select('bevandas.title')
                        ->where('farinas.id', $meal_id->id)
                        ->get();

        $categoryTitle = DB::table('it_tables')
                        ->join('farinas', 'farinas_id', '=', 'farinas.id')
                        ->join('categos', 'categos_id', '=', 'categos.id')
                        ->select('categos.title')
                        ->where('farinas.id', $meal_id->id)
                        ->limit(1)
                        ->get();

        return view('IT.it_details')->with(['mealTitle'=> $mealTitle,
         'id'=> $id,
          'inTitle' => $inTitle,
          'drinkTitle' => $drinkTitle,
          'categoryTitle' => $categoryTitle
          ]); 
    }

    public function showDrinks($id)
    {
        $drink_id = Bevanda::find($id);

        $drinkTitle = DB::table('bevandas')
                        ->join('it_tables', 'bevandas.id', '=', 'it_tables.bevandas_id')
                        ->select('bevandas.title', 'title')
                        ->where('bevandas.id', $drink_id->id)
                        ->limit(1)
                        ->get();

        $bonus = DB::table('it_tables')
                        ->join('bevandas', 'bevandas_id', '=', 'bevandas.id')
                        ->join('farinas', 'farinas_id', '=', 'farinas.id')
                        ->select('farinas.title')
                        ->where('bevandas.id', $drink_id->id)
                        ->get();

        return view('IT.it_drinksDetails')->with([
            'drinkTitle' => $drinkTitle,
            'bonus' => $bonus
        ]);

    }
}
