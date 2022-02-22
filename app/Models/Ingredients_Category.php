<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredients_Category extends Model
{
    protected $table = 'ingredients_category';

    public function ingredients() 
    {
        return $this->hasMany(Ingredients::class,'category_id');
    }
}
