<?php

use Illuminate\Support\Facades\Route;

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str()->limit($excerpt, $length);
}

function last_days($start, $end)
{
    $starttime = strtotime($start);

    if(empty($end))
    {
        // 截止日期为空，则为长期有效，返回100
        return 100;
    }
    else
    {
        $endtime = strtotime($end);
        if($endtime > $starttime)
        {
            // 总天数
            $totalDays = ($endtime-$starttime)/86400+1;
            // 剩余天数
            $lastDays = ($endtime-time())/86400+1;

            return round($lastDays/$totalDays*100);
        }
        else
        {
            // 截止日期早于开始日期，默认为0
            return 0;
        }
    }

}
