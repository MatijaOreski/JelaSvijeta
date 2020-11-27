<?php

use Illuminate\Database\Seeder;
use App\Meal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MealsTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(DrinksTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        
        $this->call(ZutatsTableSeeder::class);
        $this->call(TrinkensTableSeeder::class);
        $this->call(MahlzeitsTableSeeder::class);
        $this->call(KategorisTableSeeder::class);

        $this->call(FarinasTableSeeder::class);
        $this->call(IngredisTableSeeder::class);
        $this->call(BevandasTableSeeder::class);
        $this->call(CategosTableSeeder::class);

        $this->call(LanguagesTableSeeder::class);
    }
}
