<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('user_type_id');
            $grid->column('email');
            $grid->column('email_verified_at');
            $grid->column('mobile');
            $grid->column('mobile_verified_at');
            $grid->column('qq');
            $grid->column('avatar');
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
        return Show::make($id, new User(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('user_type_id');
            $show->field('email');
            $show->field('email_verified_at');
            $show->field('mobile');
            $show->field('mobile_verified_at');
            $show->field('qq');
            $show->field('avatar');
            $show->field('introduction');
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
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('user_type_id');
            $form->text('email');
            $form->text('mobile');
            $form->text('password');
            $form->text('qq');
            $form->image('avatar');
            $form->textarea('introduction');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
