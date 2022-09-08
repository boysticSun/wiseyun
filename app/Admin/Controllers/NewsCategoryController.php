<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\NewsCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NewsCategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new NewsCategory(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('description');
            $grid->column('post_count');
            $grid->column('pid');
        
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
        return Show::make($id, new NewsCategory(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
            $show->field('post_count');
            $show->field('pid');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new NewsCategory(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('description');
            $form->text('post_count');
            $form->text('pid');
        });
    }
}
