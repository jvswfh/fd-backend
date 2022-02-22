<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredients')->delete();
        
        \DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'name' => '洋蔥',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'name' => '櫛瓜',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 3,
                'name' => '雞腿肉',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 2,
                'name' => '巴薩米克醋',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 4,
                'name' => '北非米',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 4,
                'name' => '藜麥',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 4,
                'name' => '檸檬汁',
            ),
        ));
        
        
    }
}