<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Purchase;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\GoodsType as Type;

class PurchaseController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Purchase(['user', 'goods_types']), function (Grid $grid) {
            $grid->column('id')->sortable()->width(50);
            $grid->column('title')->width(240);
            $grid->user('服务商')->display(function($user){
                return $user->user_authentication->company_name;
            })->width(80);
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
            $grid->column('thumb')->width(100);
            $grid->column('excerpt');
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
        return Form::make(new Purchase(['goods_types']), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->textarea('excerpt');
            $form->select('user_id')->options(User::pluck('name', 'id'));
            $form->checkbox('goods_type_id')->options(Type::pluck('name', 'id'));
            $form->text('order')->default(0);
            $form->image('thumb')
                 ->disk('admin')
                 ->move('images/thumbs/'.date('Ym').'/'.date('d'))
                 ->name(function ($file) {
                    return $this->user_id . '_' . time() . '_' . Str::random(10) . '.' . $file->guessExtension();
                 })
                 ->accept('jpg,png,gif,jpeg', 'image/*');
            $form->date('validity');
            $form->switch('is_indefinitely');
            $form->editor('body');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
