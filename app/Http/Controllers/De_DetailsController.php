<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Mahlzeit;
use App\Kategori;
use App\Trinken;
use App\Zutat;
use\App\DeTable;

class De_DetailsController extends Controller
{
    public function show($id)
    {
        $meal_id = Mahlzeit::find($id);

        $mealTitle = DB::table('mahlzeits')
                        ->join('de_tables', 'mahlzeits.id', '=', 'de_tables.mahlzeits_id')
                        ->select('mahlzeits.title', 'title')
                        ->where('mahlzeits.id', $meal_id->id)
                        ->limit(1)
                        ->get();

        $inTitle = DB::table('de_tables')
                        ->join('mahlzeits', 'mahlzeits_id', '=', 'mahlzeits.id')
                        ->join('zutats', 'zutats_id', '=', 'zutats.id')
                        ->select('zutats.title')
                        ->where('mahlzeits.id', $meal_id->id)
                        ->get();

        $drinkTitle = DB::table('de_tables')
                        ->join('mahlzeits', 'mahlzeits_id', '=', 'mahlzeits.id')
                        ->join('trinkens', 'trinkens_id', '=', 'trinkens.id')
                        ->select('trinkens.title')
                        ->where('mahlzeits.id', $meal_id->id)
                        ->get();

        $categoryTitle = DB::table('de_tables')
                        ->join('mahlzeits', 'mahlzeits_id', '=', 'mahlzeits.id')
                        ->join('kategoris', 'kategoris_id', '=', 'kategoris.id')
                        ->select('kategoris.title')
                        ->where('mahlzeits.id', $meal_id->id)
                        ->limit(1)
                        ->get();


        return view('DE.de_details')->with(['mealTitle'=> $mealTitle,
         'id'=> $id,
          'inTitle' => $inTitle,
          'drinkTitle' => $drinkTitle,
          'categoryTitle' => $categoryTitle
          ]); 
    }

    public function showDrinks($id)
    {
        $drink_id = Trinken::find($id);

        $drinkTitle = DB::table('trinkens')
                        ->join('de_tables', 'trinkens.id', '=', 'de_tables.trinkens_id')
                        ->select('trinkens.title', 'title')
                        ->where('trinkens.id', $drink_id->id)
                        ->limit(1)
                        ->get();

        $bonus = DB::table('de_tables')
                        ->join('trinkens', 'trinkens_id', '=', 'trinkens.id')
                        ->join('mahlzeits', 'mahlzeits_id', '=', 'mahlzeits.id')
                        ->select('mahlzeits.title')
                        ->where('trinkens.id', $drink_id->id)
                        ->get();

        return view('DE.de_drinksDetails')->with([
            'drinkTitle' => $drinkTitle,
            'bonus' => $bonus
        ]);

    }
}
