<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HelpClass;
use App\Models\Supply;

class PagesController extends Controller
{
    //
    public function root()
    {
        return view('pages.root');
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

        // 供应产品轮播数据
        $supplies = [
            0   =>  Supply::where('id','>',0)->offset(0)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get(),
            1   =>  Supply::where('id','>',0)->offset(10)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get(),
            2   =>  Supply::where('id','>',0)->offset(20)->limit(10)->orderBy('view_count','desc')->orderBy('id', 'asc')->get()
        ];

        return view('pages.market', compact('supplies'));
    }

    // 需求市场搜索
    public function market_search()
    {

    }
}
