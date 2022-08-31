<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsCategoriesController extends Controller
{
    //
    public function show(NewsCategory $category)
    {
        $children = [];
        $childcategories = NewsCategory::with('child')->where('pid',$category->pid)->get();
        if(!empty($childcategories))
        {
            foreach($childcategories as $value)
            {
                $children[] = $value;
            }
        }
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $news = News::with('user', 'category')->where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate();
        // 传参变量话题和分类到模板中
        return view('news.index', compact('news', 'category', 'children'));
    }
}
