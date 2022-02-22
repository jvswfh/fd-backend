<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $table = 'ingredients';

    public function ingredients_category()
    {
        return $this->belongsTo(Ingredients_Category::class,'category_id');
    }

    public function ingredients_price()
    {
        return $this->hasMany(Ingredients_Price::class,'ing_id');
    }

    public function last_price()
    {
        return $this->hasOne(Ingredients_Price::class,'ing_id')->orderBy('createdate', 'desc');
    }
   
}
