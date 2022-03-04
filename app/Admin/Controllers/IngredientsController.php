<?php

namespace App\Admin\Controllers;

use App\Models\Ingredients;
use App\Models\Ingredients_Price;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use DB;

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
        $grid->column('last_price.price', __('最新報價'))->default(0);
        
        // $grid->column('price', '最新報價')->display(function () {
        //     return Ingredients::find(1)->last_price->price;
        // });


        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Ingredients());


        //$form->select('ing_id')->options('/api/users');


        $options = DB::table('ingredients_category')->select('id','name as text')->get();
        // 轉換成key value array
        // https://laravel.tw/docs/5.2/collections  集合function
        $options = $options->pluck('text','id');
        //dd($options); //你可以看一下轉換後的結構


        $form->select('category_id','食材種類')->options($options);


        $form->text('name', __('食材名稱'));

        $form->tools(function (Form\Tools $tools) {

            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();

        });



        return $form;
    }

}
