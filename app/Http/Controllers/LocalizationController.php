<?php

namespace App\Http\Controllers;

use App\Helpers\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LocalizationController extends Controller
{
    public function set($name)
    {
        Cookie::queue('localization', $name, 2132131);

        return redirect()->back();
    }
}
