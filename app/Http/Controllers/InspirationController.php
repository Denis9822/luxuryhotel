<?php

namespace App\Http\Controllers;

use App\Helpers\Hotel;
use App\Models\Inspiration;
use Illuminate\Http\Request;

class InspirationController extends Controller
{
    public function index()
    {
        $inspirations = Inspiration::orderBy('order','asc')->get();
        return view('inspirations.index',compact('inspirations'));
    }
    public function show($name,$page = 0)
    {
        $inspiration = Inspiration::where('slug',$name)->first();
        $inspirations = Inspiration::where('slug','<>',$name)->inRandomOrder()->limit(6)->get();
        $hotels = Hotel::getHotels($inspiration->getApiObject()['dest_id'],1,2,0,null,null,$page,null,null);
        $pagination = Hotel::pagination($hotels['count'],$page,null);
        return view('inspirations.show',compact('inspiration','inspirations','hotels','pagination','page','name'));
    }
}
