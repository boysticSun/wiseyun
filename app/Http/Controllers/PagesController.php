<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HelpClass;
use App\Models\Supply;
use App\Models\Purchase;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\UserAuthentication;

class PagesController extends Controller
{
    //
    public function root()
    {
        $categories = NewsCategory::with('child')->where('pid',1)->get();
        if(!empty($categories))
        {
            foreach($categories as $key => $value)
            {
                $cateids[] = $value->id;
                $categories[$key]->children = News::where('news_category_id', $value->id)->orderBy('created_at', 'desc')->limit(5)->get();
            }
        }
        $lastnews = News::whereIn('news_category_id', $cateids)->orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.root', compact('lastnews', 'categories'));
    }

    // 帮助中心页
    public function help()
    {
        $classes = HelpClass::with('child')->where('pid', 0)->get();

        return view('pages.help', compact('classes'));
    }

    // 需求市场页
    public function market()
    {
        // 采购产品轮播数据
        $purchases = [
            0   =>  Purchase::where('id','>',0)->offset(0)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get(),
            1   =>  Purchase::where('id','>',0)->offset(10)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get(),
            2   =>  Purchase::where('id','>',0)->offset(20)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get()
        ];

        // 供应产品轮播数据
        $supplies = [
            0   =>  Supply::where('id','>',0)->offset(0)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get(),
            1   =>  Supply::where('id','>',0)->offset(10)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get(),
            2   =>  Supply::where('id','>',0)->offset(20)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get()
        ];

        return view('pages.market', compact('purchases','supplies'));
    }

    // 需求市场搜索
    public function market_search()
    {

    }

    // 资源库
    public function repository()
    {
        $company = UserAuthentication::where('examine_status', 1)->orderBy('created_at', 'desc')->paginate();

        return view('pages.repository', compact('company'));
    }
}
