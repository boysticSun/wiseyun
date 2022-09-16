<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\News;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\NewsCategory as Category;
use Illuminate\Support\Str;

class NewsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new News(['user', 'news_category']), function (Grid $grid) {
            $grid->column('id')->sortable()->width(50);
            $grid->column('title');
            // $grid->column('thumb')->image();
            $grid->user('作者')->display(function($user){
                return $user->name;
            })->width(80);
            $grid->news_category('新闻分类')->display(function($news_category){
                return $news_category->name;
            })->width(120);
            $grid->column('reply_count')->width(60);
            $grid->column('view_count')->width(60);
            // $grid->column('last_reply_user_id');
            $grid->column('order')->width(50);
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
        return Show::make($id, new News(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->thumb()->image();
            $show->field('excerpt');
            $show->field('user_id');
            $show->field('news_category_id');
            $show->field('reply_count');
            $show->field('view_count');
            $show->field('last_reply_user_id');
            $show->field('order');
            $show->field('body');
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
        return Form::make(new News(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->image('thumb')
                 ->disk('admin')
                 ->move('images/thumbs/'.date('Ym').'/'.date('d'))
                 ->name(function ($file) {
                    return $this->user_id . '_' . time() . '_' . Str::random(10) . '.' . $file->guessExtension();
                 })
                 ->accept('jpg,png,gif,jpeg', 'image/*');
            $form->textarea('excerpt');
            $form->select('user_id')->options(User::pluck('name', 'id'));
            $form->select('news_category_id')->options(Category::orderBy('id')->pluck('name', 'id'));
            $form->text('order')->default(0);
            $form->editor('body');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
