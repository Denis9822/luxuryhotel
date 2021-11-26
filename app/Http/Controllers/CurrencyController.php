<?php

namespace App\Http\Controllers;

use App\Helpers\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CurrencyController extends Controller
{
    public function set($name)
    {
        Cookie::queue('currency', $name, 2132131);

        return redirect()->route('hotel.show');
    }
}
