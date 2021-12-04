<?php

namespace App\Http\Controllers;

use App\Helpers\Currency;
use App\Helpers\Localization;
use App\Helpers\Pages;
use App\Models\Inspiration;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        dd(phpinfo());
        $inspirations = Inspiration::orderBy('order','asc')->limit(6)->get();
        return view('index',compact('inspirations'));
    }
    public function about_us()
    {
        return view('service.about-us');
    }
    public function contacts()
    {
        return view('service.contacts');
    }
    public function privacy()
    {
        return view('service.privacy');
    }
    public function login(Request $rq)
    {
        if (Auth::check()) {
            return redirect()->route('setting');
        }
        if ($rq->post())
        {
            if (Auth::attempt(['email' => $rq->email, 'password' => $rq->pass])) {

                return redirect()->route('setting');
            }
            return redirect()->back()->withInput()->with(['err' => 'login']);
        }

        return view('admin.login');
    }
}
