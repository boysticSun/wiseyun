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
            $pidopts = $this->catetree(0, '|-');
            $form->display('id');
            $form->text('name');
            $form->textarea('description');
            $form->text('post_count')->default(0)->readOnly();
            $form->select('pid')->options($pidopts);
            $form->text('order')->default(10);
        });
    }

    /**
     * 分类树形数据
     * 仅查询2级
     */
    protected function catetree($pid, $str)
    {
        if($pid == 0)
        {
            $pidopts[0] = '顶级分类';
        }
        $category = Category::where('pid', $pid)->orderBy('id')->pluck('name', 'id');
        if(!empty($category))
        {
            foreach($category as $key=>$val)
            {
                $pidopts[$key] = $val;

                $child = Category::where('pid', $key)->orderBy('id')->pluck('name', 'id');
                if(!empty($child))
                {
                    foreach($child as $k=>$v)
                    {
                        $pidopts[$k] = $str.$v;
                    }
                }
            }
        }

        return $pidopts;

    }
}
