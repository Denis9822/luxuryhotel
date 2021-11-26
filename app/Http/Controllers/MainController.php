<?php

namespace App\Http\Controllers;

use App\Helpers\Currency;
use App\Helpers\Localization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function index()
    {
//        dd(Localization::countryCode());

        return view('index');
    }
}
