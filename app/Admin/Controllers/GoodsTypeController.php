<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\GoodsType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class GoodsTypeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new GoodsType(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('supply_count');
            $grid->column('purchase_count');
        
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
        return Show::make($id, new GoodsType(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('supply_count');
            $show->field('purchase_count');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new GoodsType(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('supply_count');
            $form->text('purchase_count');
        });
    }
}
