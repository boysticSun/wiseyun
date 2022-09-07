<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Supply;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SupplyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Supply(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('body');
            $grid->column('user_id');
            $grid->column('goods_type_id');
            $grid->column('reply_count');
            $grid->column('view_count');
            $grid->column('last_reply_user_id');
            $grid->column('order');
            $grid->column('price');
            $grid->column('price_unit');
            $grid->column('is_negotiable');
            $grid->column('thumb');
            $grid->column('validity');
            $grid->column('is_indefinitely');
            $grid->column('excerpt');
            $grid->column('slug');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
        return Show::make($id, new Supply(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('body');
            $show->field('user_id');
            $show->field('goods_type_id');
            $show->field('reply_count');
            $show->field('view_count');
            $show->field('last_reply_user_id');
            $show->field('order');
            $show->field('price');
            $show->field('price_unit');
            $show->field('is_negotiable');
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
        return Form::make(new Supply(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('body');
            $form->text('user_id');
            $form->text('goods_type_id');
            $form->text('reply_count');
            $form->text('view_count');
            $form->text('last_reply_user_id');
            $form->text('order');
            $form->text('price');
            $form->text('price_unit');
            $form->text('is_negotiable');
            $form->text('thumb');
            $form->text('validity');
            $form->text('is_indefinitely');
            $form->text('excerpt');
            $form->text('slug');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
