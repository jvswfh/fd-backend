<?php

namespace App\Admin\Controllers;

use App\Models\Ingredients_Price;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use DB;

class IngredientsPriceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ingredients_Price';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ingredients_Price());

        //$grid->column('id', __('Id'));
        //$grid->column('ing_id', __('Ing id'));
        
        $grid->column('ingredients_category.name', __('種類')); 
        $grid->column('ingredients.name', __('食材名稱')); 
        $grid->column('price', __('Price'));
        $grid->column('createdate', __('Createdate'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Ingredients_Price::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ing_id', __('Ing id'));
        $show->field('price', __('Price'));
        //$show->field('createdate', __('Createdate'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Ingredients_Price());

        //$options = DB::table('ingredients')->select('id','name as text')->get();


        $form->select('ing_id')->options('/api/users');

        //$form->select('ing_id','食材')->options([1 => 'foo', 2 => 'bar', 3 => 'Option name']);
        //$form->number('ing_id', __('Ing id'));
        $form->decimal('price', __('Price'));
        $form->datetime('createdate', __('Createdate'))->default(date('Y-m-d H:i:s'))->readonly();


        $form->tools(function (Form\Tools $tools) {

            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();

        });



        return $form;
    }
}
