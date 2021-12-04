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
use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use QrCode;
use PDF;
class PageController extends Controller
{

    public function edit(Request $rq,$id)
    {
        $page = Page::findOrFail($id);
        if ($rq->post())
        {
            $page->seo_title = $rq->seo_title;
            $page->seo_description = $rq->seo_description;
            if($rq->hasFile('img')) {
                $file = $rq->file('img');
                $name = $file->getClientOriginalName();
                $page->seo_img = $name;
                $file->move(public_path() . '/images/other/',$name);
            }


            $page->save();
        }
        return view('admin.page.edit',compact('page'));
    }

}
