<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredients_Price extends Model
{
    protected $table = 'ingredients_price';


    public function ingredients()
    {
        return $this->belongsTo(Ingredients::class,'ing_id');
    }

}
