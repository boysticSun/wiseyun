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
        return Grid::make(new Supply(['goods_type']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->goods_type('分类')->display(function($goods_type){
                return $goods_type->name;
            });
            $grid->column('reply_count');
            $grid->column('view_count');
            $grid->column('order');
            $grid->column('thumb');
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
            $form->textarea('body');
            $form->select('user_id');
            $form->text('goods_type_id');
            $form->text('order');
            $form->text('price');
            $form->select('price_unit')
                 ->options(['年','月','日','次']);
            $form->radio('is_negotiable')
                 ->options([
                    1   =>  '是',
                    0   =>  '否'
                 ])
                 ->default(1);
            $form->image('thumb');
            $form->date('validity');
            $form->radio('is_indefinitely')
                 ->options([
                    1   =>  '是',
                    0   =>  '否'
                 ])
                 ->default(1);
            $form->textarea('excerpt');
            $form->text('slug');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
