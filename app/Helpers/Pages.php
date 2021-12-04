<?php


namespace App\Helpers;


use App\Models\Page;
use Illuminate\Support\Facades\Route;

class Pages
{
    public static function getPages()
    {
        $pages = Page::get();
        return $pages;
    }
    public static function getSeo()
    {
        $routeName = Route::currentRouteName();
        $pages = Page::get();
        foreach ($pages as $page)
        {
            if ($page->slug == $routeName)
                return $page;
        }
    }

}
