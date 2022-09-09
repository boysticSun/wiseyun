<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Purchase;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PurchaseController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Purchase(['goods_type']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('user_id');
            $grid->goods_type('分类')->display(function($goods_type){
                return $goods_type->name;
            });
            $grid->column('reply_count');
            $grid->column('view_count');
            $grid->column('order');
            $grid->column('thumb');
            $grid->column('excerpt');
            $grid->column('created_at')->toDateString();
            $grid->column('updated_at')->toDateString()->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Purchase(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('body');
            $show->field('user_id');
            $show->field('goods_type_id');
            $show->field('reply_count');
            $show->field('view_count');
            $show->field('last_reply_user_id');
            $show->field('order');
            $show->field('thumb');
            $show->field('validity');
            $show->field('is_indefinitely');
            $show->field('excerpt');
            $show->field('slug');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Purchase(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->textarea('body');
            $form->text('user_id');
            $form->text('goods_type_id');
            $form->text('order');
            $form->image('thumb');
            $form->date('validity');
            $form->text('is_indefinitely');
            $form->textarea('excerpt');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
