<?php

use App\Models\Component;
use Illuminate\Support\Str;

if (!function_exists('getCData')) {
    function getCData($key, $col)
{
        $k = Str::slug($key);
        return app('components')[$k][0][$col] ?? 'Coming Soon...';
    }
}

if (!function_exists('getPageTitle')) {
    function getPageTitle($array, $page)
    {
        $d = $array[Str::slug($page)][0]['meta_content'] ?? config('app.name');
        return strip_tags($d);
    }
}

if (!function_exists('getPageMetaTags')) {
    function getPageMetaTags($array, $page)
    {
        return $array[Str::slug($page)] ?? [];
    }
}

if (!function_exists('htmlReq')) {
    function htmlReq()
    {
        return '<span style="color: #d44950">*</span>';
    }
}
