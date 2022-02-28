<?php

namespace App\Admin\Controllers;

use App\Models\Ingredients;
use App\Models\Ingredients_Price;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;

class IngredientsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '食材';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ingredients);
        $grid->column('ingredients_category.name', __('種類')); 
        $grid->column('name', __('食材'));


        //$last_price = Ingredients::find(1)->last_price->price;
        //var_dump($last_price);
        //exit();

        // 如果你已經在model(Ingredients.php)設定好一對一關聯就可直接這樣用
        $grid->column('last_price.price', __('最新報價'));
        
        // $grid->column('price', '最新報價')->display(function () {
        //     return Ingredients::find(1)->last_price->price;
        // });


        return $grid;
    }

}
