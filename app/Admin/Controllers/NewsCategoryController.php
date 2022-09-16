<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\NewsCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\NewsCategory as Category;

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
            $grid->column('name')->tree();
            $grid->column('order')->sortable();
            $grid->column('description');
            $grid->column('post_count');

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
        return Show::make($id, new NewsCategory(['parent']), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
            $show->field('post_count');
            $show->parent('父级分类')->as(function($parent){
                return $parent;
            });
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
            $form->textarea('description');
            $form->text('post_count')->default(0)->readOnly();
            $form->select('pid')->options(Category::orderBy('id')->pluck('name', 'id'));
        });
    }
}
