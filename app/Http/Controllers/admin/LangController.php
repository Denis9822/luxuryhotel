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
class LangController extends Controller
{

    public function index(Request $rq)
    {
        $values = Localization::get();
        return view('admin.lang.index',compact('values'));
    }

    public function edit(Request $rq,$id)
    {
        $value = Localization::findOrFail($id);
        if ($rq->post())
        {

            $value->name = $rq->name;
            $value->active = ($rq->active == null) ? 0 : 1;
            $value->shortcut = $rq->shortcut;
            if($rq->shortcut == "en-gb" || "en-us")
                $value->flag = "gb";
            else if($rq->shortcut == "pt-pt")
                $value->flag = "pt";
            else if($rq->shortcut == "zh-cn")
                $value->flag = "cn";
            else
             $value->flag = $rq->shortcut;
            $value->save();

            return redirect()->refresh();
        }
        return view('admin.lang.edit',compact('value'));
    }
    public function add(Request $rq)
    {
        if ($rq->post())
        {
            $value = new Localization();
            $value->name = $rq->name;
            $value->active = ($rq->active == null) ? 0 : 1;
            $value->shortcut = $rq->shortcut;
            $value->flag = $rq->shortcut;
            $value->save();

            return redirect()->refresh()->with(['edit'=>'Данные добавленны']);
        }

        return view('admin.lang.add');
    }
    public function remove(Request $rq,$id)
    {
        $key = Localization::findOrFail($id);
        $key->delete();
        return redirect()->route('admin.lang.index');
    }
}
