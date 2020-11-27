<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Category;
use App\Drink;
use App\Ingredient;


class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function meals()
    {
        
        $meals = Meal::orderBy('title')->paginate(8);
        $counter = count($meals);
        return view('EN.meals')->with(['meals'=> $meals, 'counter' => $counter]);
    }

    public function drinks()
    {
        
        $drinks = Drink::orderBy('title')->paginate(8);
        $counter = count($drinks);
        return view('EN.drinks')->with(['drinks'=> $drinks, 'counter' => $counter]);
    }

    public function ingredients()
    {
        
        $ingredients = Ingredient::orderBy('title')->paginate(8);
        $counter = count($ingredients);
        return view('EN.ingredients')->with(['ingredients'=> $ingredients, 'counter' => $counter]);
    }

    public function categories()
    {
        
        $categories = Category::orderBy('title')->paginate(8);
        $counter = count($categories);
        return view('EN.categories')->with(['categories'=> $categories, 'counter' => $counter]);
    }


}
