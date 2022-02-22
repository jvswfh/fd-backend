<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredients_category')->delete();
        
        \DB::table('ingredients_category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'name' => '生鮮',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 2,
                'name' => '調味料',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 3,
                'name' => '肉品',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 4,
                'name' => '其他',
            ),
        ));
        
        
    }
}