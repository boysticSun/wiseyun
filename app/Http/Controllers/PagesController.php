<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HelpClass;

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
        return view('pages.market');
    }
}
