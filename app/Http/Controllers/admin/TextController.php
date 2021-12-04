<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Translit;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Book_keywords;
use App\Models\Keyword;
use App\Models\Localization;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use QrCode;
use PDF;
class TextController extends Controller
{

    public function text(Request $rq)
    {
        $localizations = Localization::get();
//        dd(\App\Helpers\Localization::Translate('title'));
        return view('admin.text.index',compact('localizations'));
    }

    public function text_edit(Request $rq,$id)
    {
        $localizations = Localization::findOrFail($id);
        if ($rq->post())
        {
            $localizations->text_ru = $rq->text_ru;
            $localizations->text_ua = $rq->text_ua;
            $localizations->text_en = $rq->text_en;
            $localizations->save();
        }
        return view('admin.text.edit',compact('localizations'));
    }

}
