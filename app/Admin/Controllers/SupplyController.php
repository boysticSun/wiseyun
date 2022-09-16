<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Supply;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\GoodsType as Type;

class SupplyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Supply(['goods_types']), function (Grid $grid) {
            $grid->column('id')->sortable()->width(50);
            $grid->column('title');
            $grid->goods_types('分类')->display(function($goods_types){
                $types = "";
                foreach($goods_types as $key => $val)
                {
                    $types .= $key == count($goods_types)-1 ? $val->name : $val->name . " | ";
                }
                return $types;
            })->width(200);
            $grid->column('reply_count')->width(60);
            $grid->column('view_count')->width(60);
            $grid->column('order')->width(50);
            $grid->column('thumb')->width(150);
            $grid->column('created_at')->toDateString()->width(120);
            $grid->column('updated_at')->toDateString()->sortable()->width(120);

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
            $form->textarea('excerpt');
            $form->select('user_id')->options(User::pluck('name', 'id'));
            $form->checkbox('goods_type_id')->options(Type::pluck('name', 'id'));
            $form->text('order');
            $form->text('price');
            $form->select('price_unit')
                 ->options(['年','月','日','次']);
            $form->switch('is_negotiable')
                 ->default(1);
            $form->image('thumb');
            $form->date('validity');
            $form->switch('is_indefinitely')
                 ->default(1);

            // $form->text('slug');
            $form->editor('body');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
