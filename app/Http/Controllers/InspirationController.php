<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspirationController extends Controller
{
    public function index()
    {
        return view('inspirations.index');
    }
    public function show($id)
    {
        return view('inspirations.show');
    }
}
