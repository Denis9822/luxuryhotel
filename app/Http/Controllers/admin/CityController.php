<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Translit;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Book_keywords;
use App\Models\Inspiration;
use App\Models\Keyword;
use App\Models\Localization;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use QrCode;
use PDF;
class CityController extends Controller
{

    public function index(Request $rq)
    {
        $inspirations = Inspiration::get();
        return view('admin.city.index',compact('inspirations'));
    }

    public function edit(Request $rq,$id)
    {
        $inspiration = Inspiration::findOrFail($id);
        if ($rq->post())
        {
            $inspiration->name = $rq->name;
            $inspiration->description = $rq->description;
            $inspiration->order = $rq->order;
            $inspiration->slug = $rq->slug;
            $inspiration->preview_image = $rq->preview_image;
            $inspiration->seo_title = $rq->seo_title;
            $inspiration->seo_description = $rq->seo_description;
            if($rq->hasFile('img')) {
                $file = $rq->file('img');
                $name = $file->getClientOriginalName();
                $inspiration->seo_img = $name;
                $file->move(public_path() . '/images/other/',$name);
            }


            $inspiration->save();
        }
        return view('admin.city.edit',compact('inspiration'));
    }
    public function add(Request $rq)
    {
        if ($rq->post())
        {

            $inspiration = new Inspiration();
            $inspiration->name = $rq->name;
            $inspiration->description = $rq->description;
            $inspiration->order = $rq->order;
            $inspiration->slug = $rq->slug;
            $inspiration->preview_image = $rq->preview_image;
            $inspiration->seo_title = $rq->seo_title;
            $inspiration->seo_description = $rq->seo_description;
            if($rq->hasFile('img')) {
                $file = $rq->file('img');
                $name = $file->getClientOriginalName();
                $inspiration->seo_img = $name;
                $file->move(public_path() . '/images/other/',$name);
            }

            $inspiration->save();

            return redirect()->back()->with(['edit'=>'Данные добавленны']);
        }

        return view('admin.city.add');
    }
    public function remove(Request $rq,$id)
    {
        $key = Inspiration::findOrFail($id);
        $key->delete();
        return redirect()->route('admin.city.index');
    }
}
