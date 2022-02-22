<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsPriceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredients_price')->delete();
        
        \DB::table('ingredients_price')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ing_id' => 1,
                'price' => 40.0,
                'createdate' => '2021-12-12 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'ing_id' => 1,
                'price' => 38.0,
                'createdate' => '2021-12-20 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'ing_id' => 1,
                'price' => 44.0,
                'createdate' => '2022-01-20 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'ing_id' => 1,
                'price' => 50.0,
                'createdate' => '2022-02-20 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'ing_id' => 2,
                'price' => 80.0,
                'createdate' => '2021-12-11 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'ing_id' => 2,
                'price' => 70.0,
                'createdate' => '2022-01-03 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'ing_id' => 2,
                'price' => 60.0,
                'createdate' => '2022-02-18 00:00:00',
            ),
        ));
        
        
    }
}