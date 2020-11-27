<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Meal;
use App\Category;
use App\Drink;
use App\Ingredient;
use\App\EnTable;

class DetailsController extends Controller
{
    public function show($id)
    {
        $meal_id = Meal::find($id);

        $mealTitle = DB::table('meals')
                        ->join('en_tables', 'meals.id', '=', 'en_tables.meals_id')
                        ->select('meals.title', 'title')
                        ->where('meals.id', $meal_id->id)
                        ->limit(1)
                        ->get();

        $inTitle = DB::table('en_tables')
                        ->join('meals', 'meals_id', '=', 'meals.id')
                        ->join('ingredients', 'ingredients_id', '=', 'ingredients.id')
                        ->select('ingredients.title')
                        ->where('meals.id', $meal_id->id)
                        ->get();

        $drinkTitle = DB::table('en_tables')
                        ->join('meals', 'meals_id', '=', 'meals.id')
                        ->join('drinks', 'drinks_id', '=', 'drinks.id')
                        ->select('drinks.title')
                        ->where('meals.id', $meal_id->id)
                        ->get();

        $categoryTitle = DB::table('en_tables')
                        ->join('meals', 'meals_id', '=', 'meals.id')
                        ->join('categories', 'categories_id', '=', 'categories.id')
                        ->select('categories.title')
                        ->where('meals.id', $meal_id->id)
                        ->limit(1)
                        ->get();

        return view('EN.details')->with(['mealTitle'=> $mealTitle,
         'id'=> $id,
          'inTitle' => $inTitle,
          'drinkTitle' => $drinkTitle,
          'categoryTitle' => $categoryTitle
          ]); 
    }

    public function showDrinks($id)
    {
        $drink_id = Drink::find($id);

        $drinkTitle = DB::table('drinks')
                        ->join('en_tables', 'drinks.id', '=', 'en_tables.drinks_id')
                        ->select('drinks.title', 'title')
                        ->where('drinks.id', $drink_id->id)
                        ->limit(1)
                        ->get();

        $bonus = DB::table('en_tables')
                        ->join('drinks', 'drinks_id', '=', 'drinks.id')
                        ->join('meals', 'meals_id', '=', 'meals.id')
                        ->select('meals.title')
                        ->where('drinks.id', $drink_id->id)
                        ->get();

        return view('EN.drinksDetails')->with([
            'drinkTitle' => $drinkTitle,
            'bonus' => $bonus
        ]);

    }
}
